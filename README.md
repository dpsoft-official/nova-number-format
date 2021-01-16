###### Description


`number_fromat values  for index view ,Detail view and Forms, especially on typing values`


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
