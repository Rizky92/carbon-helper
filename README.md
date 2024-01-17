# Global helper functions for `nesbot/carbon`
[![Latest Stable Version](http://poser.pugx.org/rizky92/carbon-helper/v)](https://packagist.org/packages/rizky92/carbon-helper) [![Total Downloads](http://poser.pugx.org/rizky92/carbon-helper/downloads)](https://packagist.org/packages/rizky92/carbon-helper) [![License](http://poser.pugx.org/rizky92/carbon-helper/license)](https://packagist.org/packages/rizky92/carbon-helper)

A simple global helper methods for `nesbot/carbon`

## Installation
`composer require rizky92/carbon-helper`

## Usage
there are 2 functions, `carbon` and `carbon_immutable`. The difference is that `carbon` create the `Carbon` instance, in which it'll mutates the underlying date value, while `carbon_immutable` creates `CarbonImmutable` instance that does not mutate the underlying date. Please refer to [carbon documentation](https://carbon.nesbot.com/docs/) for more info.

### `carbon`
```php
$christmas = carbon('December 25, 2022');
$christmas->addDays(6);

echo $christmas;  // 2022-12-31 00:00:00.0 Asia/Makassar (+08:00)
```

### `carbon_immutable`
```php
$christmas = carbon_immutable('December 25, 2022');
$christmas->addDays(6);

echo $christmas;  // 2022-12-25 00:00:00.0 Asia/Makassar (+08:00)
```
