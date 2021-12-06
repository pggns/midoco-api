<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DocumentConsistency EnumType
 * @subpackage Enumerations
 */
class DocumentConsistency extends AbstractStructEnumBase
{
    /**
     * Constant for value 'DOCUMENT_CHANGED'
     * @return string 'DOCUMENT_CHANGED'
     */
    const VALUE_DOCUMENT_CHANGED = 'DOCUMENT_CHANGED';
    /**
     * Constant for value 'DOCUMENT_CONSISTENT'
     * @return string 'DOCUMENT_CONSISTENT'
     */
    const VALUE_DOCUMENT_CONSISTENT = 'DOCUMENT_CONSISTENT';
    /**
     * Constant for value 'DOCUMENT_NOTFOUND'
     * @return string 'DOCUMENT_NOTFOUND'
     */
    const VALUE_DOCUMENT_NOTFOUND = 'DOCUMENT_NOTFOUND';
    /**
     * Constant for value 'DOCUMENT_CONSISTENCYKEYINFONOTFOUND'
     * @return string 'DOCUMENT_CONSISTENCYKEYINFONOTFOUND'
     */
    const VALUE_DOCUMENT_CONSISTENCYKEYINFONOTFOUND = 'DOCUMENT_CONSISTENCYKEYINFONOTFOUND';
    /**
     * Return allowed values
     * @uses self::VALUE_DOCUMENT_CHANGED
     * @uses self::VALUE_DOCUMENT_CONSISTENT
     * @uses self::VALUE_DOCUMENT_NOTFOUND
     * @uses self::VALUE_DOCUMENT_CONSISTENCYKEYINFONOTFOUND
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DOCUMENT_CHANGED,
            self::VALUE_DOCUMENT_CONSISTENT,
            self::VALUE_DOCUMENT_NOTFOUND,
            self::VALUE_DOCUMENT_CONSISTENCYKEYINFONOTFOUND,
        ];
    }
}
