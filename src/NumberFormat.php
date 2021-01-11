<?php

namespace Dpsoft\NumberFormat;

use Laravel\Nova\Fields\Field;

class NumberFormat extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'number-format';
    /**
     * Create a new field.
     *
     * @param  string      $name
     * @param  string|null $attribute
     * @param  mixed|null  $resolveCallback
     * @return void
     */
    public function __construct($name, $attribute = null, $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);
        $this->displayUsing(function ($value) {
            return !is_null($value) ? number_format($value) : null;
        });
    }

}
