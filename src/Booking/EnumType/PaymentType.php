<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Booking\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PaymentType EnumType
 * @subpackage Enumerations
 */
class PaymentType extends AbstractStructEnumBase
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
     * Constant for value 'CC'
     * @return string 'CC'
     */
    const VALUE_CC_1 = 'CC';
    /**
     * Constant for value 'DEBIT'
     * @return string 'DEBIT'
     */
    const VALUE_DEBIT_2 = 'DEBIT';
    /**
     * Constant for value 'CASH'
     * @return string 'CASH'
     */
    const VALUE_CASH_2 = 'CASH';
    /**
     * Constant for value 'PP'
     * @return string 'PP'
     */
    const VALUE_PP_1 = 'PP';
    /**
     * Return allowed values
     * @uses self::VALUE_AGENCY
     * @uses self::VALUE_SUPPLIER
     * @uses self::VALUE_CC_1
     * @uses self::VALUE_DEBIT_2
     * @uses self::VALUE_CASH_2
     * @uses self::VALUE_PP_1
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AGENCY,
            self::VALUE_SUPPLIER,
            self::VALUE_CC_1,
            self::VALUE_DEBIT_2,
            self::VALUE_CASH_2,
            self::VALUE_PP_1,
        ];
    }
}
