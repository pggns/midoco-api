<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ExtDocumentType EnumType
 * @subpackage Enumerations
 */
class ExtDocumentType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'BILLING'
     * @return string 'BILLING'
     */
    const VALUE_BILLING = 'BILLING';
    /**
     * Constant for value 'INVOICE'
     * @return string 'INVOICE'
     */
    const VALUE_INVOICE = 'INVOICE';
    /**
     * Constant for value 'MEDIATOR_SETTLEMENT'
     * @return string 'MEDIATOR_SETTLEMENT'
     */
    const VALUE_MEDIATOR_SETTLEMENT = 'MEDIATOR_SETTLEMENT';
    /**
     * Constant for value 'AGENCY_SETTLEMENT'
     * @return string 'AGENCY_SETTLEMENT'
     */
    const VALUE_AGENCY_SETTLEMENT = 'AGENCY_SETTLEMENT';
    /**
     * Constant for value 'RECEIPT'
     * @return string 'RECEIPT'
     */
    const VALUE_RECEIPT = 'RECEIPT';
    /**
     * Constant for value 'CASH_BOOK'
     * @return string 'CASH_BOOK'
     */
    const VALUE_CASH_BOOK = 'CASH_BOOK';
    /**
     * Return allowed values
     * @uses self::VALUE_BILLING
     * @uses self::VALUE_INVOICE
     * @uses self::VALUE_MEDIATOR_SETTLEMENT
     * @uses self::VALUE_AGENCY_SETTLEMENT
     * @uses self::VALUE_RECEIPT
     * @uses self::VALUE_CASH_BOOK
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_BILLING,
            self::VALUE_INVOICE,
            self::VALUE_MEDIATOR_SETTLEMENT,
            self::VALUE_AGENCY_SETTLEMENT,
            self::VALUE_RECEIPT,
            self::VALUE_CASH_BOOK,
        ];
    }
}
