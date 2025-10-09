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
            if (platformData.architectures && platformData.architectures[architecture]) {
                const archData = platformData.architectures[architecture];
                return {
                    url: archData.url,
                    platform: platform,
                    architecture: architecture,
                    md5: archData.md5,
                    filesize: archData.filesize || platformData.filesize
                };
            }
            
            // Fallback to first available architecture
            if (platformData.architectures && Object.keys(platformData.architectures).length > 0) {
                const firstArch = Object.keys(platformData.architectures)[0];
                const archData = platformData.architectures[firstArch];
                return {
                    url: archData.url,
                    platform: platform,
                    architecture: firstArch,
                    md5: archData.md5,
                    filesize: archData.filesize || platformData.filesize
                };
            }
        }

        // Fallback to first available platform
        const firstPlatform = Object.keys(versionData.platforms)[0];
        if (firstPlatform) {
            const platformData = versionData.platforms[firstPlatform];
            if (platformData.architectures && Object.keys(platformData.architectures).length > 0) {
                const firstArch = Object.keys(platformData.architectures)[0];
                const archData = platformData.architectures[firstArch];
                return {
                    url: archData.url,
                    platform: firstPlatform,
                    architecture: firstArch,
                    md5: archData.md5,
                    filesize: archData.filesize || platformData.filesize
                };
            }
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
            
            if (platformData.architectures && Object.keys(platformData.architectures).length > 1) {
                // Multiple architectures available
                Object.keys(platformData.architectures).forEach(arch => {
                    const archData = platformData.architectures[arch];
                    options.push({
                        value: `${platform}_${arch}`,
                        label: `${platformName} (${this.architectures[arch] || arch})`,
                        url: archData.url,
                        platform: platform,
                        architecture: arch,
                        md5: archData.md5,
                        filesize: archData.filesize || platformData.filesize
                    });
                });
            } else {
                // Single architecture
                const archKeys = platformData.architectures ? Object.keys(platformData.architectures) : ['x64'];
                const arch = archKeys[0];
                const archData = platformData.architectures ? platformData.architectures[arch] : { url: platformData.url, md5: platformData.md5 };
                options.push({
                    value: platform,
                    label: platformName,
                    url: archData.url,
                    platform: platform,
                    architecture: arch,
                    md5: archData.md5,
                    filesize: archData.filesize || platformData.filesize
                });
            }
        });

        return options;
    }

    /**
     * Update file size display elements
     */
    updateFileSizeDisplay(filesize) {
        if (!filesize) return;
        
        // Update desktop file size display
        const fileSizeElement = document.getElementById('fileSize');
        if (fileSizeElement) {
            fileSizeElement.textContent = filesize;
        }
        
        // Update mobile file size display
        const fileSizeMobileElement = document.getElementById('fileSizeMobile');
        if (fileSizeMobileElement) {
            fileSizeMobileElement.textContent = filesize;
        }
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
            
            // Update file size display
            this.updateFileSizeDisplay(bestDownload.filesize);
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
                    
                    // Update file size display
                    this.updateFileSizeDisplay(option.filesize);
                    
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
