<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSDKLib\Models\Address;
use PaypalServerSDKLib\Models\Level3CardProcessingData;
use PaypalServerSDKLib\Models\Money;

/**
 * Builder for model Level3CardProcessingData
 *
 * @see Level3CardProcessingData
 */
class Level3CardProcessingDataBuilder
{
    /**
     * @var Level3CardProcessingData
     */
    private $instance;

    private function __construct(Level3CardProcessingData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new level 3 card processing data Builder object.
     */
    public static function init(): self
    {
        return new self(new Level3CardProcessingData());
    }

    /**
     * Sets shipping amount field.
     */
    public function shippingAmount(?Money $value): self
    {
        $this->instance->setShippingAmount($value);
        return $this;
    }

    /**
     * Sets duty amount field.
     */
    public function dutyAmount(?Money $value): self
    {
        $this->instance->setDutyAmount($value);
        return $this;
    }

    /**
     * Sets discount amount field.
     */
    public function discountAmount(?Money $value): self
    {
        $this->instance->setDiscountAmount($value);
        return $this;
    }

    /**
     * Sets shipping address field.
     */
    public function shippingAddress(?Address $value): self
    {
        $this->instance->setShippingAddress($value);
        return $this;
    }

    /**
     * Sets ships from postal code field.
     */
    public function shipsFromPostalCode(?string $value): self
    {
        $this->instance->setShipsFromPostalCode($value);
        return $this;
    }

    /**
     * Sets line items field.
     */
    public function lineItems(?array $value): self
    {
        $this->instance->setLineItems($value);
        return $this;
    }

    /**
     * Initializes a new level 3 card processing data object.
     */
    public function build(): Level3CardProcessingData
    {
        return CoreHelper::clone($this->instance);
    }
}
