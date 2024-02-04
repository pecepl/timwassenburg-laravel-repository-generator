## Original

Looking for more ways to speed up your workflow? Make sure to check out these packages.

- [Laravel Action Generator](https://github.com/timwassenburg/laravel-action-generator)
- [Laravel Pivot Table Generator](https://github.com/timwassenburg/laravel-pivot-table-generator)
- [Laravel Repository Generator](https://github.com/timwassenburg/laravel-repository-generator)
- [Laravel Service Generator](https://github.com/timwassenburg/laravel-service-generator)
- [Laravel Trait Generator](https://github.com/timwassenburg/laravel-trait-generator)

The packages mentioned above are part of [Laravel Artisan Extender](https://github.com/timwassenburg/laravel-artisan-extender).

<hr>

### installation of a modified version
```bash
composer require pecepl/timwassenburg-laravel-repository-generator --dev
```

<hr>

### Generating repositories
Run the following command.
```bash
php artisan make:repository UserRepository
```
This example will generate the following files:
```bash
app\Repositories\Eloquent\UserRepository
```

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
