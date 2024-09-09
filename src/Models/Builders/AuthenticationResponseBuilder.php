<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSDKLib\Models\AuthenticationResponse;
use PaypalServerSDKLib\Models\ThreeDSecureAuthenticationResponse;

/**
 * Builder for model AuthenticationResponse
 *
 * @see AuthenticationResponse
 */
class AuthenticationResponseBuilder
{
    /**
     * @var AuthenticationResponse
     */
    private $instance;

    private function __construct(AuthenticationResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new authentication response Builder object.
     */
    public static function init(): self
    {
        return new self(new AuthenticationResponse());
    }

    /**
     * Sets liability shift field.
     */
    public function liabilityShift(?string $value): self
    {
        $this->instance->setLiabilityShift($value);
        return $this;
    }

    /**
     * Sets three d secure field.
     */
    public function threeDSecure(?ThreeDSecureAuthenticationResponse $value): self
    {
        $this->instance->setThreeDSecure($value);
        return $this;
    }

    /**
     * Initializes a new authentication response object.
     */
    public function build(): AuthenticationResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
