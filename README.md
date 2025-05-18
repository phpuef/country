<img align=right width="168" src="docs/gouef_logo.png">

# Country
This package provides functions to search for country information ([ISO 3166-1](https://www.iso.org/iso-3166-country-codes.html)) based on their country codes (Alpha-2, Alpha-3, Numeric) and names. It is designed for easy integration into applications that need to work with country codes or names.

[![Static Badge](https://img.shields.io/badge/Github-phpuef%2Fcountry-blue?style=for-the-badge&logo=github&link=github.com%2Fphpuef%2Fcountry)](https://github.com/phpuef/country)

[![Packagist Downloads](https://img.shields.io/packagist/dt/phpuef/country)](https://packagist.org/packages/phpuef/country)
[![GitHub stars](https://img.shields.io/github/stars/phpuef/country?style=social)](https://github.com/phpuef/country/stargazers)
![PHPStan](https://github.com/phpuef/country/actions/workflows/phpstan.yml/badge.svg)
[![Tests](https://github.com/phpuef/country/actions/workflows/tests.yml/badge.svg)](https://github.com/phpuef/country/actions/workflows/tests.yml)
[![codecov](https://codecov.io/github/phpuef/country/branch/main/graph/badge.svg?token=YUG8EMH6Q8)](https://codecov.io/github/phpuef/country)


## Versions
![Stable Version](https://img.shields.io/github/v/release/phpuef/country?label=Stable&labelColor=green)
![GitHub Release](https://img.shields.io/github/v/release/phpuef/country?label=RC&include_prereleases&filter=*rc*&logoSize=diago)
![GitHub Release](https://img.shields.io/github/v/release/phpuef/country?label=Beta&include_prereleases&filter=*beta*&logoSize=diago)

## Also available in other languages

[![Go Implementation](https://img.shields.io/badge/Go-country-00ADD8?logo=Go&logoColor=white)](https://github.com/gouef/country)
[![PHP Implementation](https://img.shields.io/badge/PHP-country-4F5D95?logo=php&logoColor=white)](https://github.com/phpuef/country)


## Installation

```shell
  composer require phpuef/github-lib-template
```

## Usage
`Country` **Class**
Each country is represented by the `Country` class, which contains the following fields:

- `name`: The country's name (in English).
- `alpha2`: The two-letter country code (ISO 3166-1 alpha-2).
- `alpha3`: The three-letter country code (ISO 3166-1 alpha-3).
- `numeric`: The numeric country code (ISO 3166-1 numeric).

## Functions

`FindByAlpha2(string $alpha2): ?Country`

This function searches for a country by its two-letter Alpha-2 code.

```php
<?php

use Phpuef\Country\Countries;

class Example {

    public function findCZ() {
        $country = Countries::FindByAlpha2("CZ")
        if ($country !== null) {
            echo "Country Name: " + $country?->name;
            echo "Alpha-2 Code:: " + $country?->alpha2;
        }
    }
}
```

`FindByAlpha3(string $alpha3): ?Country`

This function searches for a country by its three-letter Alpha-3 code.

```php
<?php

use Phpuef\Country\Countries;

class Example {

    public function findCZ() {
        $country = Countries::FindByAlpha3("CZE")
        if ($country !== null) {
            echo "Country Name: " + $country?->name;
            echo "Alpha-3 Code:: " + $country?->alpha3;
        }
    }
}
```

`FindByName *Country`

This function searches for a country by its name (english).

```php
<?php

use Phpuef\Country\Countries;

class Example {

    public function findCZ() {
        $country = Countries::FindByName("Czechia")
        if ($country !== null) {
            echo "Country Name: " + $country?->name;
            echo "Alpha-2 Code:: " + $country?->alpha2;
            echo "Alpha-3 Code:: " + $country?->alpha3;
        }
    }
}
```


## Contributing

Read [Contributing](CONTRIBUTING.md)

## Contributors

<div>
<span>
  <a href="https://github.com/JanGalek"><img src="https://raw.githubusercontent.com/phpuef/country/refs/heads/contributors-svg/.github/contributors/JanGalek.svg" alt="JanGalek" /></a>
</span>
<span>
  <a href="https://github.com/actions-user"><img src="https://raw.githubusercontent.com/phpuef/country/refs/heads/contributors-svg/.github/contributors/actions-user.svg" alt="actions-user" /></a>
</span>
</div>

## Join our Discord Community! 🎉

[![Discord](https://img.shields.io/discord/1334331501462163509?style=for-the-badge&logo=discord&logoColor=white&logoSize=auto&label=Community%20discord&labelColor=blue&link=https%3A%2F%2Fdiscord.gg%2FwjGqeWFnqK
)](https://discord.gg/wjGqeWFnqK)

Click above to join our community on Discord!
