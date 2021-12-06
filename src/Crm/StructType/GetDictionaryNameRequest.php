<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

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
     * @var \Pggns\MidocoApi\Api\Crm\StructType\DictionaryNameDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\DictionaryNameDTO $MidocoDictionaryName = null;
    /**
     * Constructor method for GetDictionaryNameRequest
     * @uses GetDictionaryNameRequest::setMidocoDictionaryName()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DictionaryNameDTO $midocoDictionaryName
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\DictionaryNameDTO $midocoDictionaryName = null)
    {
        $this
            ->setMidocoDictionaryName($midocoDictionaryName);
    }
    /**
     * Get MidocoDictionaryName value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DictionaryNameDTO|null
     */
    public function getMidocoDictionaryName(): ?\Pggns\MidocoApi\Api\Crm\StructType\DictionaryNameDTO
    {
        return $this->MidocoDictionaryName;
    }
    /**
     * Set MidocoDictionaryName value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DictionaryNameDTO $midocoDictionaryName
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetDictionaryNameRequest
     */
    public function setMidocoDictionaryName(?\Pggns\MidocoApi\Api\Crm\StructType\DictionaryNameDTO $midocoDictionaryName = null): self
    {
        $this->MidocoDictionaryName = $midocoDictionaryName;
        
        return $this;
    }
}
