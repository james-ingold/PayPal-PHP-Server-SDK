<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models;

use Core\Utils\CoreHelper;
use Exception;
use stdClass;

/**
 * DEPRECATED. Configures a <strong>Continue</strong> or <strong>Pay Now</strong> checkout flow.  The
 * fields in `application_context` are now available in the `experience_context` object under the
 * `payment_source` which supports them (eg. `payment_source.paypal.experience_context.user_action`).
 * Please specify this field in the `experience_context` object instead of the `application_context`
 * object.
 */
class OrderApplicationContextUserAction
{
    public const CONTINUE_ = 'CONTINUE';

    public const PAY_NOW = 'PAY_NOW';

    private const _ALL_VALUES = [self::CONTINUE_, self::PAY_NOW];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for OrderApplicationContextUserAction.");
    }
}