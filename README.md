###### Description


`number_fromat values  for index view ,Detail view and Forms, especially on typing values`

## Installation

You can install the nova theme into a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require dpsoft/nova-number-format
```


## Usage
~~~~
<?php

namespace App\Nova;

use Dpsoft\NumberFormat\NumberFormat;

class Credit extends Resource
{

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            NumberFormat::make('Amount', 'amount')->required(),
        ];
    }
~~~~

## Screenshots


![nova-number-format](number_fromat.gif) 
