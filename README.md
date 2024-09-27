# DeviceDetect Plugin for October CMS

This plugin implements global variables: `isMobile`, `isTablet`, `isDesktop` for twig templates.
Plugin based on the Mobile-Detect php class: <https://github.com/serbanghita/Mobile-Detect>

## Installation

1. Go to the `Plugins` section in the October CMS backend.
2. Search for `DeviceDetect` and click the `Install` button.

or

```bash
php artisan plugin:install Settler.DeviceDetect
```

## Usage

You can use the following variables in your Twig templates:

* `isMobile`: `true` if the device is a mobile phone, `false` otherwise.
* `isTablet`: `true` if the device is a tablet, `false` otherwise.
* `isDesktop`: `true` if the device is a desktop computer, `false` otherwise.

Example:

```html
{% if isMobile %}
    <p>This is displayed on mobile devices.</p>
{% elseif isDesktop %}
    <p>This is displayed on desktop devices.</p>
{% endif %}
```
