<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSDKLib\Models\LinkDescription;

/**
 * Builder for model LinkDescription
 *
 * @see LinkDescription
 */
class LinkDescriptionBuilder
{
    /**
     * @var LinkDescription
     */
    private $instance;

    private function __construct(LinkDescription $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new link description Builder object.
     */
    public static function init(string $href, string $rel): self
    {
        return new self(new LinkDescription($href, $rel));
    }

    /**
     * Sets method field.
     */
    public function method(?string $value): self
    {
        $this->instance->setMethod($value);
        return $this;
    }

    /**
     * Initializes a new link description object.
     */
    public function build(): LinkDescription
    {
        return CoreHelper::clone($this->instance);
    }
}
