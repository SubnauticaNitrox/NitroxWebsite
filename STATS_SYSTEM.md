# Community Statistics System

This document describes the centralized community statistics system implemented for the Nitrox website.

## Overview

The stats system consolidates all community statistics (downloads, Discord online members, Nexus views) into a single service that fetches real-time data from GitHub releases and combines it with legacy data.

## Components

### StatsService (`app/Services/StatsService.php`)

Central service that manages all community statistics:

- **GitHub Downloads**: Fetches real download counts from GitHub releases API
- **Legacy Downloads**: Configurable count for downloads before GitHub releases
- **Community Stats**: Discord online members, Nexus views (all with consistent number formatting)
- **Caching**: 1-hour cache to avoid excessive API calls
- **Fallback**: Graceful degradation if GitHub API is unavailable

### Configuration (`config/nitrox.php`)

```php
'stats' => [
    'discord_members' => env('NITROX_STATS_DISCORD_MEMBERS', 44000),
    'nexus_views' => env('NITROX_STATS_NEXUS_VIEWS', 1267200),
    'legacy_downloads' => env('NITROX_STATS_LEGACY_DOWNLOADS', 500000),
],
```

### View Integration

- **View Composer**: `StatsViewServiceProvider` automatically provides stats to `footer-extended` component
- **Controller Integration**: Controllers pass stats to views for home and about pages
- **Fallback**: Views fall back to translation keys if stats are unavailable

## Usage

### In Controllers

```php
public function index(StatsService $statsService)
{
    $stats = $statsService->getCommunityStats();
    return view('page', compact('stats'));
}
```

### In Views

```blade
<h1>{{ $stats['downloads'] ?? __('fallback.download_count') }}</h1>
```

### API Endpoints

- `GET /api/stats/community` - All community statistics
- `GET /api/stats/downloads` - Detailed download statistics
- `GET /api/stats/discord` - Discord online member statistics
- `GET /api/stats/nexus` - Nexus views statistics

### Console Commands

```bash
php artisan stats:refresh
```

## Environment Variables

Add these to your `.env` file to customize stats:

```env
NITROX_STATS_DISCORD_MEMBERS=44000
NITROX_STATS_NEXUS_VIEWS=1267200
NITROX_STATS_LEGACY_DOWNLOADS=500000
```

## Caching

- Stats are cached for 1 hour to reduce GitHub API calls
- Use `php artisan stats:refresh` to manually refresh
- Cache is automatically cleared when stats are updated

## Error Handling

- GitHub API failures are logged and gracefully handled
- Fallback values are used if API is unavailable
- No impact on website functionality if stats service fails

## Future Enhancements

- Discord API integration for real-time online member count
- Nexus Mods API integration for real view count
- More sophisticated caching strategies
- Statistics dashboard for admins
