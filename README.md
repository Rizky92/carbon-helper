# Global helper functions for `nesbot/carbon`
[![Latest Stable Version](http://poser.pugx.org/rizky92/carbon-helper/v)](https://packagist.org/packages/rizky92/carbon-helper) [![Total Downloads](http://poser.pugx.org/rizky92/carbon-helper/downloads)](https://packagist.org/packages/rizky92/carbon-helper) [![License](http://poser.pugx.org/rizky92/carbon-helper/license)](https://packagist.org/packages/rizky92/carbon-helper)

A simple global helper methods for `nesbot/carbon`

## Installation
`composer require rizky92/carbon-helper`

## Usage
You may call `carbon` or `carbon_immutable` anywhere in your code base like so:
```php
$date = carbon('23-08-2023');

echo $date; // 2023-08-23 00:00:00.0 Asia/Makassar (+08:00)
```

### `carbon`
Calling `carbon` method will create a `Carbon` instance, in which it will change the underlying date value if you chain call methods on it.
```php
$christmas = carbon('December 25, 2022');
$christmas->addDays(6);

echo $christmas;  // 2022-12-31 00:00:00.0 Asia/Makassar (+08:00)
```

### `carbon_immutable`
Calling `carbon_immutable` will create a `CarbonImmutable` instance that does not change the underlying date value, but will return a new instance with modified value everytime you chain call methods on it.
```php
$christmas = carbon_immutable('December 25, 2022');
$christmas->addDays(6);

echo $christmas;  // 2022-12-25 00:00:00.0 Asia/Makassar (+08:00)
```

## License
MIT
