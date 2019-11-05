<?php

namespace VmeRetail\FrtsLink\Resources;

use VmeRetail\FrtsLink\FrtsLink;

class Resource
{
    /**
     * The resource attributes.
     *
     * @var array
     */
    public $attributes;

    /**
     * The FRTS Link SDK instance.
     *
     * @var FrtsLink
     */
    protected $frts;

    /**
     * Create a new resource instance.
     *
     * @param  array $attributes
     * @param  FrtsLink $frts
     * @return void
     */
    public function __construct(array $attributes, $frts = null)
    {
        $this->attributes = collect($attributes);
        $this->frts = $frts;
    }

    /**
     * Dynamically retrieve attributes on the model.
     *
     * @param  string  $key
     * @return mixed
     */
    public function __get($key)
    {
        return $this->attributes->get($key);
    }
}
