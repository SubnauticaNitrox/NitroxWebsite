// Nitrox.JS
// by Rux
// https://github.com/keyboardfox

// Navbar stuff
$(function() {
    $(document).scroll(function() {
        var $header = $(".home-cover");
        var $nav = $(".navbar");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
});

$(".navbar-toggler").on("click", function() {
    $(".navbar").toggleClass('bg-dark-2 open');
});

// Show helpFeedback
function helpFeedbackYes() {
    jQuery('.helpFeedback-answer-yes').addClass('active');
    jQuery('.helpFeedback-initial').addClass('hide');
}

function helpFeedbackNo() {
    jQuery('.helpFeedback-answer-no').addClass('active');
    jQuery('.helpFeedback-initial').addClass('hide');
}


// iniialise tooltip
$(function() {
    $('[data-toggle="tooltip"]').tooltip()
})


// Loading button plugin (removed from BS4)
$(function($) {
    $.fn.button = function(action) {
        if (action === 'loading' && this.data('loading-text')) {
            this.data('original-text', this.html()).html(this.data('loading-text')).prop('disabled', true);
        }
        if (action === 'reset' && this.data('original-text')) {
            this.html(this.data('original-text')).prop('disabled', false);
        }
    };
}(jQuery));

// button loading state
$('.btn-load').on('click', function() {
    var $this = $(this);
    $this.button('loading');
    $this.addClass("disabled");
    setTimeout(function() {
        $this.button('reset');
        $this.removeClass("disabled");
    }, 3000);
});

$('#restartDownload').on('click', function() {
    var $this = $(this);
    document.getElementById("restartDownload").innerHTML = "download restarted";
    setTimeout(function() {
        document.getElementById("restartDownload").innerHTML = "restart the download";
    }, 3000);
});

// Download page read more
$('#changelogExpand').on('click', function() {
    var $this = $(this);
    var changelogFrame = document.getElementById("changelogFrame");
    $this.button('expanded');
    $("#changelogFrame").toggleClass('notExpanded');
    changelogFrame.style.height = changelogFrame.contentWindow.document.body.scrollHeight + 'px';
    $(this).text($(this).text() == 'Show more' ? 'Show less' : 'Show more');
});

// Search bar

function searchAutocomplete() {
    // Declare variables
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById('searchBar');
    filter = input.value.toUpperCase();
    ul = document.getElementById("autocompleteList");
    li = ul.getElementsByTagName('li');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }

}

$(function() {
    input = document.getElementById('searchBar');
    $('input').on('focus blur', toggleFocus);

    function toggleFocus(e) {
        if (e.type == 'focus') {
            jQuery('.dimmer').removeClass('hide');
        } else {
            jQuery('.dimmer').addClass('hide');
        }
    }
}(jQuery));


function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function showBottomMessage() {
    $('.nitrox-message').addClass('open');
}

window.onload = function() {
    let cookie = getCookie("bottomMessage");
    if (!cookie.length) {
        window.setTimeout(showBottomMessage, 2000); // 2 seconds
    }
}

function dismissBottomMessage() {
    $('.nitrox-message').removeClass('open');
    $('.nitrox-message').addClass('dismissed');
    setCookie("bottomMessage", "Nitrox twitter at modnitrox", 10);
}
