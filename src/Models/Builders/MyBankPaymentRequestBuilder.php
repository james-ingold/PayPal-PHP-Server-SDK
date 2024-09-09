<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSDKLib\Models\ExperienceContext;
use PaypalServerSDKLib\Models\MyBankPaymentRequest;

/**
 * Builder for model MyBankPaymentRequest
 *
 * @see MyBankPaymentRequest
 */
class MyBankPaymentRequestBuilder
{
    /**
     * @var MyBankPaymentRequest
     */
    private $instance;

    private function __construct(MyBankPaymentRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new my bank payment request Builder object.
     */
    public static function init(string $name, string $countryCode): self
    {
        return new self(new MyBankPaymentRequest($name, $countryCode));
    }

    /**
     * Sets experience context field.
     */
    public function experienceContext(?ExperienceContext $value): self
    {
        $this->instance->setExperienceContext($value);
        return $this;
    }

    /**
     * Initializes a new my bank payment request object.
     */
    public function build(): MyBankPaymentRequest
    {
        return CoreHelper::clone($this->instance);
    }
}