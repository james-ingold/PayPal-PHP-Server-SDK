<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSDKLib\Models\ApplePayPaymentObject;
use PaypalServerSDKLib\Models\BancontactPaymentObject;
use PaypalServerSDKLib\Models\BLIKPaymentObject;
use PaypalServerSDKLib\Models\CardResponse;
use PaypalServerSDKLib\Models\EPSPaymentObject;
use PaypalServerSDKLib\Models\GiropayPaymentObject;
use PaypalServerSDKLib\Models\GooglePayWalletResponse;
use PaypalServerSDKLib\Models\IDEALPaymentObject;
use PaypalServerSDKLib\Models\MyBankPaymentObject;
use PaypalServerSDKLib\Models\P24PaymentObject;
use PaypalServerSDKLib\Models\PaymentSourceResponse;
use PaypalServerSDKLib\Models\PayPalWalletResponse;
use PaypalServerSDKLib\Models\SofortPaymentObject;
use PaypalServerSDKLib\Models\TrustlyPaymentObject;
use PaypalServerSDKLib\Models\VenmoWalletResponse;

/**
 * Builder for model PaymentSourceResponse
 *
 * @see PaymentSourceResponse
 */
class PaymentSourceResponseBuilder
{
    /**
     * @var PaymentSourceResponse
     */
    private $instance;

    private function __construct(PaymentSourceResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new payment source response Builder object.
     */
    public static function init(): self
    {
        return new self(new PaymentSourceResponse());
    }

    /**
     * Sets card field.
     */
    public function card(?CardResponse $value): self
    {
        $this->instance->setCard($value);
        return $this;
    }

    /**
     * Sets paypal field.
     */
    public function paypal(?PayPalWalletResponse $value): self
    {
        $this->instance->setPaypal($value);
        return $this;
    }

    /**
     * Sets bancontact field.
     */
    public function bancontact(?BancontactPaymentObject $value): self
    {
        $this->instance->setBancontact($value);
        return $this;
    }

    /**
     * Sets blik field.
     */
    public function blik(?BLIKPaymentObject $value): self
    {
        $this->instance->setBlik($value);
        return $this;
    }

    /**
     * Sets eps field.
     */
    public function eps(?EPSPaymentObject $value): self
    {
        $this->instance->setEps($value);
        return $this;
    }

    /**
     * Sets giropay field.
     */
    public function giropay(?GiropayPaymentObject $value): self
    {
        $this->instance->setGiropay($value);
        return $this;
    }

    /**
     * Sets ideal field.
     */
    public function ideal(?IDEALPaymentObject $value): self
    {
        $this->instance->setIdeal($value);
        return $this;
    }

    /**
     * Sets mybank field.
     */
    public function mybank(?MyBankPaymentObject $value): self
    {
        $this->instance->setMybank($value);
        return $this;
    }

    /**
     * Sets p 24 field.
     */
    public function p24(?P24PaymentObject $value): self
    {
        $this->instance->setP24($value);
        return $this;
    }

    /**
     * Sets sofort field.
     */
    public function sofort(?SofortPaymentObject $value): self
    {
        $this->instance->setSofort($value);
        return $this;
    }

    /**
     * Sets trustly field.
     */
    public function trustly(?TrustlyPaymentObject $value): self
    {
        $this->instance->setTrustly($value);
        return $this;
    }

    /**
     * Sets apple pay field.
     */
    public function applePay(?ApplePayPaymentObject $value): self
    {
        $this->instance->setApplePay($value);
        return $this;
    }

    /**
     * Sets google pay field.
     */
    public function googlePay(?GooglePayWalletResponse $value): self
    {
        $this->instance->setGooglePay($value);
        return $this;
    }

    /**
     * Sets venmo field.
     */
    public function venmo(?VenmoWalletResponse $value): self
    {
        $this->instance->setVenmo($value);
        return $this;
    }

    /**
     * Initializes a new payment source response object.
     */
    public function build(): PaymentSourceResponse
    {
        return CoreHelper::clone($this->instance);
    }
}