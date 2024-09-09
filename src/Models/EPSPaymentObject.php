<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models;

use stdClass;

/**
 * Information used to pay using eps.
 */
class EPSPaymentObject implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $countryCode;

    /**
     * @var string|null
     */
    private $bic;

    /**
     * Returns Name.
     * The full name representation like Mr J Smith.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The full name representation like Mr J Smith.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Country Code.
     * The [two-character ISO 3166-1 code](/api/rest/reference/country-codes/) that identifies the country
     * or region.<blockquote><strong>Note:</strong> The country code for Great Britain is <code>GB</code>
     * and not <code>UK</code> as used in the top-level domain names for that country. Use the `C2` country
     * code for China worldwide for comparable uncontrolled price (CUP) method, bank card, and cross-border
     * transactions.</blockquote>
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * Sets Country Code.
     * The [two-character ISO 3166-1 code](/api/rest/reference/country-codes/) that identifies the country
     * or region.<blockquote><strong>Note:</strong> The country code for Great Britain is <code>GB</code>
     * and not <code>UK</code> as used in the top-level domain names for that country. Use the `C2` country
     * code for China worldwide for comparable uncontrolled price (CUP) method, bank card, and cross-border
     * transactions.</blockquote>
     *
     * @maps country_code
     */
    public function setCountryCode(?string $countryCode): void
    {
        $this->countryCode = $countryCode;
    }

    /**
     * Returns Bic.
     * The business identification code (BIC). In payments systems, a BIC is used to identify a specific
     * business, most commonly a bank.
     */
    public function getBic(): ?string
    {
        return $this->bic;
    }

    /**
     * Sets Bic.
     * The business identification code (BIC). In payments systems, a BIC is used to identify a specific
     * business, most commonly a bank.
     *
     * @maps bic
     */
    public function setBic(?string $bic): void
    {
        $this->bic = $bic;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->name)) {
            $json['name']         = $this->name;
        }
        if (isset($this->countryCode)) {
            $json['country_code'] = $this->countryCode;
        }
        if (isset($this->bic)) {
            $json['bic']          = $this->bic;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}