<p align="center"><a href="https://nitrox.rux.gg" target="_blank"><img src="https://i.imgur.com/pFbAdnz.jpg"></a></p>

# Nitrox Website
The official website for the open-source, multiplayer <a href="https://unknownworlds.com/subnautica/">Subnautica</a> modification.

<p>
    <a href="https://discord.gg/E8B4X9s"><img src="https://img.shields.io/discord/525437013403631617" alt="License"></a>
    <a href="https://hosted.weblate.org/engage/subnauticanitrox/"><img src="https://hosted.weblate.org/widgets/subnauticanitrox/-/svg-badge.svg" alt="Translation status"></a>
    <a href="https://github.com/SubnauticaNitrox/NitroxWebsite/blob/master/LICENSE"><img src="https://img.shields.io/github/license/subnauticanitrox/nitroxwebsite" alt="License"></a>
</p>

## About

The website is written with the following frameworks

- [Laravel](https://laravel.com/)
- [Bootstrap](https://getbootstrap.com/)

## Installing

- Clone the project
- Copy the .env.example to .env with ``cp .env.example .env`` and configure the parameters
- Run ``composer install`` 
- and then run ``php artisan key:generate``

## Local development

To view the website you can either run
- php artisan serve

Or if you have a webserver such as <a href="https://laravel.com/docs/9.x/valet">Laravel Valet</a> you can visit the link you previously configured in the .env file.

## Requirements
- php ^8.0.2
- [Composer](https://getcomposer.org/)

## License

The project is open-sourced software licensed under the [GNU General Public License v3.0](https://github.com/SubnauticaNitrox/NitroxWebsite/blob/master/LICENSE).
