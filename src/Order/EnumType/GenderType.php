<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for GenderType EnumType
 * @subpackage Enumerations
 */
class GenderType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'MALE'
     * @return string 'MALE'
     */
    const VALUE_MALE = 'MALE';
    /**
     * Constant for value 'FEMALE'
     * @return string 'FEMALE'
     */
    const VALUE_FEMALE = 'FEMALE';
    /**
     * Return allowed values
     * @uses self::VALUE_MALE
     * @uses self::VALUE_FEMALE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MALE,
            self::VALUE_FEMALE,
        ];
    }
}
