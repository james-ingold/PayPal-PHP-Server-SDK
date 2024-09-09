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
 * The Universal Product Code type.
 */
class UPCType
{
    public const UPCA = 'UPC-A';

    public const UPCB = 'UPC-B';

    public const UPCC = 'UPC-C';

    public const UPCD = 'UPC-D';

    public const UPCE = 'UPC-E';

    public const UPC2 = 'UPC-2';

    public const UPC5 = 'UPC-5';

    private const _ALL_VALUES = [self::UPCA, self::UPCB, self::UPCC, self::UPCD, self::UPCE, self::UPC2, self::UPC5];

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
        throw new Exception("$value is invalid for UPCType.");
    }
}
