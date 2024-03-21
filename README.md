# Moox Server Monorepo

The development app for Moox Backup Server UI, needs a License from Spatie for Laravel Backup Server.

<p align="center">
    <br>
  	<img src="https://github.com/mooxphp/moox/raw/main/art/moox-logo.png" width="200" alt="Moox Logo">
    <br>
</p><br>


<p align="center">
    <a href="https://github.com/mooxphp/moox-server/actions/workflows/pest.yml"><img alt="PEST Tests" src="https://github.com/mooxphp/moox-server/actions/workflows/pest.yml/badge.svg"></a>
    <a href="https://github.com/mooxphp/moox-server/actions/workflows/pint.yml"><img alt="Laravel PINT PHP Code Style" src="https://github.com/mooxphp/moox-server/actions/workflows/pint.yml/badge.svg"></a>
    <a href="https://github.com/mooxphp/moox-server/actions/workflows/phpstan.yml"><img alt="PHPStan Level 5" src="https://github.com/mooxphp/moox-server/actions/workflows/phpstan.yml/badge.svg"></a>
</p>
<p align="center">
    <a href="https://www.tailwindcss.com"><img alt="TailwindCSS 3" src="https://img.shields.io/badge/TailwindCSS-v3-orange?logo=tailwindcss&color=06B6D4"></a>
    <a href="https://www.alpinejs.dev"><img alt="AlpineJS 3" src="https://img.shields.io/badge/AlpineJS-v3-orange?logo=alpine.js&color=8BC0D0"></a>
    <a href="https://www.laravel.com"><img alt="Laravel 11" src="https://img.shields.io/badge/Laravel-v11-orange?logo=Laravel&color=FF2D20"></a>
    <a href="https://www.laravel-livewire.com"><img alt="Laravel Livewire 2" src="https://img.shields.io/badge/Livewire-v3-orange?logo=livewire&color=4E56A6"></a>
</p>
<p align="center">
    <a href="https://app.codacy.com/gh/mooxphp/moox-server/dashboard"><img src="https://app.codacy.com/project/badge/Grade/640e9fd6b75f43b8b0e23d4b3489cc09" alt="Codacy Code Quality"></a>
    <a href="https://app.codacy.com/gh/mooxphp/moox-server/dashboard"><img src="https://app.codacy.com/project/badge/Coverage/640e9fd6b75f43b8b0e23d4b3489cc09" alt="Codacy Coverage"></a>
    <a href="https://codeclimate.com/github/mooxphp/moox-server/maintainability"><img src="https://api.codeclimate.com/v1/badges/9b26aec3d8c73e8e1d4a/maintainability" alt="Code Climate Maintainability"></a>
    <a href="https://snyk.io/test/github/mooxphp/moox-server"><img alt="Snyk Security" src="https://snyk.io/test/github/mooxphp/moox-server/badge.svg"></a>
</p>
<p align="center">
    <a href="https://github.com/mooxphp/moox/issues/94"><img src="https://img.shields.io/badge/renovate-enabled-brightgreen.svg" alt="Renovate" /></a>
    <a href="https://hosted.weblate.org/engage/moox/"><img src="https://hosted.weblate.org/widgets/moox/-/svg-badge.svg" alt="Translation status" /></a>
    <a href="https://github.com/mooxphp/moox-server/blob/main/LICENSE.md"><img alt="License" src="https://img.shields.io/github/license/mooxphp/moox?color=blue&label=license"></a>
    <a href="https://mooxphp.slack.com/"><img alt="Slack" src="https://img.shields.io/badge/Slack-Moox-blue?logo=slack"></a>
    <br>
    <br>
</p>


# Moox Server Monorepo

The development app for Moox Backup Server UI, needs a License from Spatie for Laravel Backup Server. Currently not ready for production!

## Packages

- Moox Backup Server

## Installation

The Laravel dev app in the root-folder of the Moox Monorepo is made for instant development with Laravel Valet, Laravel Sail or Laragon.

```bash
# Create a .env file and adjust to your needs
cp .env.example .env

# Install via Composer
composer install

# Migrate and seed
php artisan migrate:fresh --seed

# Use Vite (for Laravel Sail on Windows: do it in Ubuntu, not inside the Sail container)
npm install
npm run dev
```

## 

