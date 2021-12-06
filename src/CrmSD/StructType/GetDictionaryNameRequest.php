<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDictionaryNameRequest StructType
 * @subpackage Structs
 */
class GetDictionaryNameRequest extends AbstractStructBase
{
    /**
     * The MidocoDictionaryName
     * Meta information extracted from the WSDL
     * - ref: MidocoDictionaryName
     * @var \Pggns\MidocoApi\CrmSD\StructType\DictionaryNameDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\DictionaryNameDTO $MidocoDictionaryName = null;
    /**
     * Constructor method for GetDictionaryNameRequest
     * @uses GetDictionaryNameRequest::setMidocoDictionaryName()
     * @param \Pggns\MidocoApi\CrmSD\StructType\DictionaryNameDTO $midocoDictionaryName
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\DictionaryNameDTO $midocoDictionaryName = null)
    {
        $this
            ->setMidocoDictionaryName($midocoDictionaryName);
    }
    /**
     * Get MidocoDictionaryName value
     * @return \Pggns\MidocoApi\CrmSD\StructType\DictionaryNameDTO|null
     */
    public function getMidocoDictionaryName(): ?\Pggns\MidocoApi\CrmSD\StructType\DictionaryNameDTO
    {
        return $this->MidocoDictionaryName;
    }
    /**
     * Set MidocoDictionaryName value
     * @param \Pggns\MidocoApi\CrmSD\StructType\DictionaryNameDTO $midocoDictionaryName
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetDictionaryNameRequest
     */
    public function setMidocoDictionaryName(?\Pggns\MidocoApi\CrmSD\StructType\DictionaryNameDTO $midocoDictionaryName = null): self
    {
        $this->MidocoDictionaryName = $midocoDictionaryName;
        
        return $this;
    }
}
