<p align="center"><a href="https://nitrox.rux.gg" target="_blank"><img src="https://i.imgur.com/pFbAdnz.jpg"></a></p>

# Nitrox Website
The official website for the open-source, multiplayer <a href="https://unknownworlds.com/subnautica/">Subnautica</a> modification.

[![Discord](https://img.shields.io/discord/525437013403631617?logo=discord&logoColor=white)](https://discord.gg/E8B4X9s)
[![Translation status](https://hosted.weblate.org/widgets/subnauticanitrox/-/website/svg-badge.svg)](https://hosted.weblate.org/engage/subnauticanitrox/)
[![License: GPL v3](https://img.shields.io/badge/License-GPLv3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)

## About

The website is written with the following frameworks

- [Laravel](https://laravel.com/)
- [Bootstrap](https://getbootstrap.com/)

## API Documentation

The website provides a REST API for accessing Nitrox version information, changelogs, and blog posts.

### Base URL
```
https://nitrox.rux.gg/api
```

### Endpoints

#### Version Information
- `GET /version/latest` - Get the latest version information
- `GET /version/releases` - Get all available versions
- `GET /version/{version}` - Get specific version information

**Response Example:**
```json
{
  "url": "https://github.com/SubnauticaNitrox/Nitrox/releases/download/1.7.1.0/Nitrox_1.7.1.0.zip",
  "version": "1.7.1.0",
  "filesize": "8.2",
  "md5": "f7d25be0395feec244bc865acfa07043"
}
```

#### Changelog Information
- `GET /changelog/latest` - Get the latest changelog
- `GET /changelog/releases` - Get all changelogs
- `GET /changelog/{version}` - Get specific version changelog

**Response Example:**
```json
{
  "version": "1.7.1.0",
  "released": "2023-01-03T23:48:00Z",
  "permalink": "https://nitrox.rux.gg/pages/changelog#nitrox%C2%A01-7-1-0",
  "patchnotes": [
    "Minor fix and Adjustement for the Subnautica 2.0 incompatibility",
    "Fixed a bug where Windows 7 users would not be able to open the launcher."
  ]
}
```

#### Blog Information
- `GET /blog/latest` - Get the latest blog post from the Nitrox Dev Blog

**Features:**
- **Automatic updates**: The latest blog post is fetched from the WordPress API
- **Caching**: Blog posts are cached for 1 hour

**Cache Management:**
```bash
# Clear the blog cache
php artisan blog:clear-cache
```

## Translations
To make the website more accessible we have added a translation feature. If you would like to contribute by translating the Nitrox website into another language, please add your translations to the Weblate project.
- [Weblate translations](https://hosted.weblate.org/engage/subnauticanitrox/)

## Installing

- Clone the project
- Copy the .env.example to .env with ``cp .env.example .env`` and configure the parameters
- Run ``composer install`` 
- and then run ``php artisan key:generate``

## Local development

To view the website you can either run
- php artisan serve

Or if you have a webserver such as <a href="https://laravel.com/docs/9.x/valet">Laravel Valet</a> you can visit the page according to your Valet configuration. 

## Requirements
- php ^8.0.2
- [Composer](https://getcomposer.org/)

## Encountered a bug?
Please open a [new issue](https://github.com/SubnauticaNitrox/NitroxWebsite/issues/new) with a detailed description of the bug you encountered and provide the url, browser and steps to reproduce the issue. If you have a screenshot that is also helpful.

## Need help?
If you need any help please contact the Nitrox team using the following method:
- [Discord](https://discord.gg/E8B4X9s)

## Supported by
- [JetBrains software](https://jb.gg/OpenSourceSupport)

## License

The project is open-sourced software licensed under the [GNU General Public License v3.0](https://github.com/SubnauticaNitrox/NitroxWebsite/blob/master/LICENSE).
