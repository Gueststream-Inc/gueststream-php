PHP Helper Library for Gueststream VRP
================================

### Installing via Composer

The recommended way to install the Guetsstream library is through [Composer](http://getcomposer.org).

```bash
# Install Composer
curl -sS https://getcomposer.org/installer | php

# Add Gueststream SDK as a dependency
php composer.phar require gueststream/sdk dev-master@dev
```

or alternatively, you can add it directly to your `composer.json` file.

```json
{
    "require": {
        "gueststream/sdk"
    }
}
```

Then install the libraries via Composer:

```bash
composer install
```

Finally, require Composer's autoloader in your PHP script:

```php
require __DIR__.'/vendor/autoload.php';
```

### Usage

To begin using this library, initialize the Gueststream VRP object with your API key:

```php
$vrp = new \Gueststream\Vrp($apikey);
```

You can then use the VRP object to search for all units.

```php
$vrp = new \Gueststream\Vrp($apikey);
$result = $vrp->search();
$results = $result['results'];
```

## Quickstart Guide

### Getting Started

This quickstart demonstrates a simple way to get started using the Gueststream VRP API. Following these steps, it should take you no more than 5-10 minutes to have a fully functional property search.

### Creating the object

You simply include the library and create a new \Gueststream\Vrp object using your API Key:

```php
require __DIR__.'/../vendor/autoload.php';

$vrp = new \Gueststream\Vrp('my-api-key');
```

### Loading a single Unit/Property

Once you've created the object, you can use the object to load a unit as shown.

```php
$result = $vrp->getUnit('unit_slug');
```

### Performing an Availability Search on all Properties

To search, you use the same \Gueststream\Vrp object and search using arrival and departure keys. This can be accomplished with 3 lines of code:

```php
$search['arrival'] = "03/21/2015";
$search['departure'] = "03/28/2015";
$result = $vrp->search($search);
```

Then you can process, interact and display the results however you wish. The code below simply shows the resulting unit slug and name for each available unit for the provided stay window.

```php
$units = $result['results'];

foreach ($units as $a_unit) {
    echo $a_unit['Name'] . "\n";
    echo $a_unit['Slug'] . "\n";
}
```

## Contributing

1. Fork it
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Added some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create new Pull Request from github
