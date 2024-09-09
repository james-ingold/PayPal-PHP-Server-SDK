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
 * NACHA (the regulatory body governing the ACH network) requires that API callers (merchants,
 * partners) obtain the consumer’s explicit authorization before initiating a transaction. To stay
 * compliant, you’ll need to make sure that you retain a compliant authorization for each transaction
 * that you originate to the ACH Network using this API. ACH transactions are categorized (using SEC
 * codes) by how you capture authorization from the Receiver (the person whose bank account is being
 * debited or credited). PayPal supports the following SEC codes.
 */
class StandardEntryClassCode
{
    public const TEL = 'TEL';

    public const WEB = 'WEB';

    public const CCD = 'CCD';

    public const PPD = 'PPD';

    private const _ALL_VALUES = [self::TEL, self::WEB, self::CCD, self::PPD];

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
        throw new Exception("$value is invalid for StandardEntryClassCode.");
    }
}
