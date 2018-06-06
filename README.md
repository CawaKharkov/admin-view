## Laravel package implementing admin theme


Based on [https://github.com/modularcode/modular-admin-html](https://github.com/modularcode/modular-admin-html)

### Usage

- composer require cawakharkov/admin-view
- if using Laravel < 5.5, add ```\CawaKharkov\AdminView\AdminViewServiceProvider::class``` to your **app.php** providers
- publish assets ``` artisan vendor:publish --tag=public ```
- extends from view - ```admin-view::layout```
