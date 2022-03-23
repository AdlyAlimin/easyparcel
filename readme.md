# EasyParcel

This package is use to link with EasyParcel API Service. Please refer official API documentation for array body.

## Installation

Via Composer

```bash
$ composer require adly/easyparcel
```

## Usage

Add this variable to your .env

```bash
EASYPARCEL_API_KEY=
EASYPARCEL_URL=
```

Optional you can publish the configuration.

```bash
php artisan vendor:publish --provider="Adly\EasyParcel\EasyParcelServiceProvider"
```

Notes : All response will return in JSON

## Available commands

### Checking Price

Parameter:

- $array (required)
- $exclude (optional)

Example:

```bash
$array = [
    [
        'pick_code'    => '55100',
        'pick_state'    => 'kul',
        'pick_country'    => 'MY',
        'send_code'    => '22200',
        'send_state'    => 'trg',
        'send_country'    => 'MY',
        'weight'    => '5',
        'date_coll'    => '2017-11-08',
    ]
];

$exclude = '';

return EasyParcel::priceCheck($array, $exculde);
```

### Making Order

Parameter:

- $array (required)

```bash
$array = [
    [
        // refer EasyParcel API Documentation
    ]
];

return EasyParcel::makingOrder($array);
```

Reference = https://developers.easyparcel.com/?pg=DocAPI&c=Malaysia&type=Individual&t=cjDWWEAkvJID9Dtnonr6C8FMKqZbqWuY49J1bI0SGA0%3D#nav_Individual_EPSubmitOrderBulk

### Order Payment

Parameter:

- $array (required)

```bash
$array = [
    [
        // refer EasyParcel API Documentation
    ]
];

return EasyParcel::orderPayment($array);
```

Reference = https://developers.easyparcel.com/?pg=DocAPI&c=Malaysia&type=Individual&t=cjDWWEAkvJID9Dtnonr6C8FMKqZbqWuY49J1bI0SGA0%3D#nav_Individual_EPPayOrderBulk

### Order Status

Parameter:

- $array (required)

```bash
$array = [
    [
        // refer EasyParcel API Documentation
    ]
];

return EasyParcel::orderStatus($array);
```

Reference = https://developers.easyparcel.com/?pg=DocAPI&c=Malaysia&type=Individual&t=cjDWWEAkvJID9Dtnonr6C8FMKqZbqWuY49J1bI0SGA0%3D#nav_Individual_EPOrderStatusBulk

### Parcel Status

Parameter:

- $array (required)

```bash
$array = [
    [
        // refer EasyParcel API Documentation
    ]
];

return EasyParcel::parcelStatus($array);
```

Reference = https://developers.easyparcel.com/?pg=DocAPI&c=Malaysia&type=Individual&t=cjDWWEAkvJID9Dtnonr6C8FMKqZbqWuY49J1bI0SGA0%3D#nav_Individual_EPParcelStatusBulk

### Tracking Parcel

Parameter:

- $array (required)

```bash
$array = [
    [
        // refer EasyParcel API Documentation
    ]
];

return EasyParcel::trackingParcel($array);
```

Reference = https://developers.easyparcel.com/?pg=DocAPI&c=Malaysia&type=Individual&t=cjDWWEAkvJID9Dtnonr6C8FMKqZbqWuY49J1bI0SGA0%3D#nav_Individual_EPTrackingBulk

### Check Balance

```bash
return EasyParcel::creditBalance();
```

Reference = https://developers.easyparcel.com/?pg=DocAPI&c=Malaysia&type=Individual&t=cjDWWEAkvJID9Dtnonr6C8FMKqZbqWuY49J1bI0SGA0%3D#nav_Individual_EPCheckCreditBalance

### Domestic Express Order

Parameter:

- $array (required)
- $courier (required) (Available : ' 'Pgeon Prime', 'Pgeon Delivery', 'Poslaju', 'Skynet', 'ABX', 'DHL eCommerce', 'Aramex', 'CJ Century', 'UTS', 'ULTIMATE CONSOLIDATORS')
- dropoff (optional) (default = false)

```bash
$array = [
    [
        // refer EasyParcel API Documentation
    ]
];

$courier = 'DHL eCommerce, Poslaju'; // Must has one courier at least

$dropoff = false;

return EasyParcel::domesticOrder($array, $courier, $dropoff);
```

Reference = https://developers.easyparcel.com/?pg=DocAPI&c=Malaysia&type=Individual&t=cjDWWEAkvJID9Dtnonr6C8FMKqZbqWuY49J1bI0SGA0%3D#nav_Individual_EPSubmitOrderBulkV3

## Change log

v1.0-beta

- Create available function from EasyParcel API

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email adlyalimin@email.com instead of using the issue tracker.

## Credits

- [Adly Alimin][https://www.linkedin.com/in/adly-alimin-206a92195/]

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/adly/easyparcel.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/adly/easyparcel.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/adly/easyparcel/master.svg?style=flat-square
[link-packagist]: https://packagist.org/packages/adly/easyparcel
[link-downloads]: https://packagist.org/packages/adly/easyparcel
[link-travis]: https://travis-ci.org/adly/easyparcel
[link-author]: https://github.com/adly
