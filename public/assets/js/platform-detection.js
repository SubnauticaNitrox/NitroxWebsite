/**
 * Platform Detection and Download Management
 */
class PlatformDetection {
    constructor() {
        this.platforms = {
            'windows': 'Windows',
            'linux': 'Linux', 
            'osx': 'macOS'
        };
        
        this.architectures = {
            'x64': 'x64',
            'arm64': 'ARM64'
        };
        
        this.detectedPlatform = this.detectPlatform();
        this.detectedArchitecture = this.detectArchitecture();
    }

    /**
     * Detect the user's operating system
     */
    detectPlatform() {
        const userAgent = navigator.userAgent.toLowerCase();
        const platform = navigator.platform.toLowerCase();
        
        if (userAgent.includes('win')) {
            return 'windows';
        } else if (userAgent.includes('mac') || userAgent.includes('darwin')) {
            return 'osx';
        } else if (userAgent.includes('linux') || userAgent.includes('x11')) {
            return 'linux';
        } else if (platform.includes('win')) {
            return 'windows';
        } else if (platform.includes('mac')) {
            return 'osx';
        } else if (platform.includes('linux')) {
            return 'linux';
        }
        
        // Default to windows if detection fails
        return 'windows';
    }

    /**
     * Detect the user's architecture
     */
    detectArchitecture() {
        // Check for ARM64 on macOS
        if (navigator.platform === 'MacIntel' && navigator.userAgent.includes('Intel')) {
            return 'x64';
        }
        
        // Check for Apple Silicon
        if (navigator.platform === 'MacIntel' && !navigator.userAgent.includes('Intel')) {
            return 'arm64';
        }
        
        // For other platforms, default to x64
        return 'x64';
    }

    /**
     * Get the start page URL with platform information
     */
    getStartPageUrl(downloadInfo) {
        const baseUrl = window.location.origin + '/download/start';
        return `${baseUrl}?platform=${downloadInfo.platform}&arch=${downloadInfo.architecture}`;
    }

    /**
     * Get the best download URL for the detected platform
     */
    getBestDownloadUrl(versionData) {
        if (!versionData.platforms) {
            return null;
        }

        const platform = this.detectedPlatform;
        const architecture = this.detectedArchitecture;

        // Check if the detected platform exists
        if (versionData.platforms[platform]) {
            const platformData = versionData.platforms[platform];
            
            // Check if the detected architecture is supported
            if (platformData.architectures && platformData.architectures.includes(architecture)) {
                return {
                    url: platformData.url,
                    platform: platform,
                    architecture: architecture,
                    md5: platformData.md5
                };
            }
            
            // Fallback to first available architecture
            if (platformData.architectures && platformData.architectures.length > 0) {
                return {
                    url: platformData.url,
                    platform: platform,
                    architecture: platformData.architectures[0],
                    md5: platformData.md5
                };
            }
        }

        // Fallback to first available platform
        const firstPlatform = Object.keys(versionData.platforms)[0];
        if (firstPlatform) {
            const platformData = versionData.platforms[firstPlatform];
            return {
                url: platformData.url,
                platform: firstPlatform,
                architecture: platformData.architectures ? platformData.architectures[0] : 'x64',
                md5: platformData.md5
            };
        }

        return null;
    }

    /**
     * Generate platform options for dropdown
     */
    generatePlatformOptions(versionData) {
        if (!versionData.platforms) {
            return [];
        }

        const options = [];
        
        Object.keys(versionData.platforms).forEach(platform => {
            const platformData = versionData.platforms[platform];
            const platformName = this.platforms[platform] || platform;
            
            if (platformData.architectures && platformData.architectures.length > 1) {
                // Multiple architectures available
                platformData.architectures.forEach(arch => {
                    options.push({
                        value: `${platform}_${arch}`,
                        label: `${platformName} (${this.architectures[arch] || arch})`,
                        url: platformData.url,
                        platform: platform,
                        architecture: arch,
                        md5: platformData.md5
                    });
                });
            } else {
                // Single architecture
                const arch = platformData.architectures ? platformData.architectures[0] : 'x64';
                options.push({
                    value: platform,
                    label: platformName,
                    url: platformData.url,
                    platform: platform,
                    architecture: arch,
                    md5: platformData.md5
                });
            }
        });

        return options;
    }

    /**
     * Initialize the download button with platform detection
     */
    initializeDownloadButton(versionData) {
        const downloadButton = document.getElementById('downloadButton');
        const platformDropdownMenu = document.getElementById('platformDropdownMenu');
        
        if (!downloadButton || !versionData) {
            return;
        }

        // Get the best download URL
        const bestDownload = this.getBestDownloadUrl(versionData);
        
        if (bestDownload) {
            // Set the default redirect URL to start page with platform info
            downloadButton.href = this.getStartPageUrl(bestDownload);
            
            // Update the button text to show detected platform
            const buttonText = downloadButton.querySelector('.download-text');
            if (buttonText) {
                buttonText.textContent = `Download for ${this.platforms[bestDownload.platform] || bestDownload.platform}`;
            }
        }

        // Generate platform options for dropdown
        const platformOptions = this.generatePlatformOptions(versionData);
        
        if (platformDropdownMenu && platformOptions.length > 1) {
            // Clear existing options
            platformDropdownMenu.innerHTML = '';
            
            // Add options
            platformOptions.forEach(option => {
                const optionElement = document.createElement('a');
                optionElement.className = 'dropdown-item';
                optionElement.href = '#';
                optionElement.textContent = option.label;
                optionElement.dataset.url = option.url;
                optionElement.dataset.platform = option.platform;
                optionElement.dataset.architecture = option.architecture;
                optionElement.dataset.md5 = option.md5;
                
                // Add click event listener
                optionElement.addEventListener('click', (e) => {
                    e.preventDefault();
                    
                    // Create download info object
                    const downloadInfo = {
                        platform: option.platform,
                        architecture: option.architecture,
                        url: option.url,
                        md5: option.md5
                    };
                    
                    // Set redirect URL to start page with platform info
                    downloadButton.href = this.getStartPageUrl(downloadInfo);
                    
                    // Update button text
                    const buttonText = downloadButton.querySelector('.download-text');
                    if (buttonText) {
                        buttonText.textContent = `Download for ${option.label}`;
                    }
                    
                    // Close dropdown
                    const dropdown = optionElement.closest('.dropdown');
                    if (dropdown) {
                        const toggle = dropdown.querySelector('[data-toggle="dropdown"]');
                        if (toggle) {
                            toggle.click();
                        }
                    }
                });
                
                platformDropdownMenu.appendChild(optionElement);
            });
        }
    }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    // Check if version data is available
    if (typeof window.versionData !== 'undefined') {
        const platformDetection = new PlatformDetection();
        platformDetection.initializeDownloadButton(window.versionData);
    }
});
