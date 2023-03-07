# Helper file for `nesbot/carbon`
Helper for `nesbot/carbon`

## Installation
`composer require rizky92/carbon-helper`

## Usage
there are 2 functions, `carbon` and `carbon_immutable`. The difference is that `carbon` mutates the date, while `carbon_immutable` does not. Please refer to [carbon documentation](https://carbon.nesbot.com/docs/) for more info.

### Function `carbon`
```php
$christmas = carbon('December 25, 2022');
$christmas->addDays(6);

echo $christmas;  // 2022-12-31 00:00:00.0 Asia/Makassar (+08:00)
```

### Function `carbon_immutable`
```php
$christmas = carbon_immutable('December 25, 2022');
$christmas->addDays(6);

echo $christmas;  // 2022-12-25 00:00:00.0 Asia/Makassar (+08:00)
```
