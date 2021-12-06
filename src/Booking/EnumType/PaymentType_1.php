<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Booking\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for paymentType EnumType
 * Meta information extracted from the WSDL
 * - documentation: supplier is set when creditcard payment via airline is used | SUPPLIER: intended payment is via creditcard using an airline mechanism | optional info about payment way (supplier based or agency inkasso)
 * @subpackage Enumerations
 */
class PaymentType_1 extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AGENCY'
     * @return string 'AGENCY'
     */
    const VALUE_AGENCY = 'AGENCY';
    /**
     * Constant for value 'SUPPLIER'
     * @return string 'SUPPLIER'
     */
    const VALUE_SUPPLIER = 'SUPPLIER';
    /**
     * Return allowed values
     * @uses self::VALUE_AGENCY
     * @uses self::VALUE_SUPPLIER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AGENCY,
            self::VALUE_SUPPLIER,
        ];
    }
}
