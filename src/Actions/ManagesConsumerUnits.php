<?php

namespace VmeRetail\FrtsLink\Actions;

use VmeRetail\FrtsLink\Resources\ConsumerUnit;

trait ManagesConsumerUnits
{
    public function consumerUnitFromEan($ean)
    {
        return new ConsumerUnit($this->get("consumer-units/ean/$ean")['data'], $this);
    }
}
