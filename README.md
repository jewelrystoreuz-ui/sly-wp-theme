# SLY WordPress Theme

This repository contains the initial skeleton for the SLY theme.

## Installation

1. Copy or clone the `sly` directory into your WordPress installation's `wp-content/themes/` folder.
2. In the WordPress admin panel, navigate to **Appearance → Themes** and activate **SLY**.

## Hero Video

The front page expects a hero video located at `assets/img/sly-main.mp4`. Place your MP4 file there.

## CI/CD

Deployment uses a manual GitHub Actions workflow to sync the theme to the production server.

Required repository secrets:

- `SSH_HOST`
- `SSH_USER`
- `SSH_KEY` (private key)
- `SSH_PORT` (22)
- `REMOTE_PATH_PROD` (e.g. /home/slyconcept.com/public_html/wp-content/themes/sly)
- `WP_PATH_PROD` (e.g. /home/slyconcept.com/public_html)
