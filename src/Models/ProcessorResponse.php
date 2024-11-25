<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models;

use stdClass;

/**
 * The processor response information for payment requests, such as direct credit card transactions.
 */
class ProcessorResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $avsCode;

    /**
     * @var string|null
     */
    private $cvvCode;

    /**
     * @var string|null
     */
    private $responseCode;

    /**
     * @var string|null
     */
    private $paymentAdviceCode;

    /**
     * Returns Avs Code.
     * The address verification code for Visa, Discover, Mastercard, or American Express transactions.
     */
    public function getAvsCode(): ?string
    {
        return $this->avsCode;
    }

    /**
     * Sets Avs Code.
     * The address verification code for Visa, Discover, Mastercard, or American Express transactions.
     *
     * @maps avs_code
     */
    public function setAvsCode(?string $avsCode): void
    {
        $this->avsCode = $avsCode;
    }

    /**
     * Returns Cvv Code.
     * The card verification value code for for Visa, Discover, Mastercard, or American Express.
     */
    public function getCvvCode(): ?string
    {
        return $this->cvvCode;
    }

    /**
     * Sets Cvv Code.
     * The card verification value code for for Visa, Discover, Mastercard, or American Express.
     *
     * @maps cvv_code
     */
    public function setCvvCode(?string $cvvCode): void
    {
        $this->cvvCode = $cvvCode;
    }

    /**
     * Returns Response Code.
     * Processor response code for the non-PayPal payment processor errors.
     */
    public function getResponseCode(): ?string
    {
        return $this->responseCode;
    }

    /**
     * Sets Response Code.
     * Processor response code for the non-PayPal payment processor errors.
     *
     * @maps response_code
     */
    public function setResponseCode(?string $responseCode): void
    {
        $this->responseCode = $responseCode;
    }

    /**
     * Returns Payment Advice Code.
     * The declined payment transactions might have payment advice codes. The card networks, like Visa and
     * Mastercard, return payment advice codes.
     */
    public function getPaymentAdviceCode(): ?string
    {
        return $this->paymentAdviceCode;
    }

    /**
     * Sets Payment Advice Code.
     * The declined payment transactions might have payment advice codes. The card networks, like Visa and
     * Mastercard, return payment advice codes.
     *
     * @maps payment_advice_code
     */
    public function setPaymentAdviceCode(?string $paymentAdviceCode): void
    {
        $this->paymentAdviceCode = $paymentAdviceCode;
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
        if (isset($this->avsCode)) {
            $json['avs_code']            = AvsCode::checkValue($this->avsCode);
        }
        if (isset($this->cvvCode)) {
            $json['cvv_code']            = CvvCode::checkValue($this->cvvCode);
        }
        if (isset($this->responseCode)) {
            $json['response_code']       = ProcessorResponseCode::checkValue($this->responseCode);
        }
        if (isset($this->paymentAdviceCode)) {
            try {
                $json['payment_advice_code'] = PaymentAdviceCode::checkValue($this->paymentAdviceCode);
            } catch (Exception $e) {
                // If the payment advice code is not recognized, just pass it through as-is
                $json['payment_advice_code'] = $this->paymentAdviceCode;
            }
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
