<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDocumentResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveDocument --- saves a document given as parameter
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveDocumentResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmDocumentId
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmDocumentId
     * @var \Pggns\MidocoApi\Crm\StructType\CrmDocumentIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CrmDocumentIdDTO $MidocoCrmDocumentId = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for SaveDocumentResponse
     * @uses SaveDocumentResponse::setMidocoCrmDocumentId()
     * @uses SaveDocumentResponse::setInternalVersion()
     * @param \Pggns\MidocoApi\Crm\StructType\CrmDocumentIdDTO $midocoCrmDocumentId
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CrmDocumentIdDTO $midocoCrmDocumentId = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoCrmDocumentId($midocoCrmDocumentId)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoCrmDocumentId value
     * @return \Pggns\MidocoApi\Crm\StructType\CrmDocumentIdDTO|null
     */
    public function getMidocoCrmDocumentId(): ?\Pggns\MidocoApi\Crm\StructType\CrmDocumentIdDTO
    {
        return $this->MidocoCrmDocumentId;
    }
    /**
     * Set MidocoCrmDocumentId value
     * @param \Pggns\MidocoApi\Crm\StructType\CrmDocumentIdDTO $midocoCrmDocumentId
     * @return \Pggns\MidocoApi\Crm\StructType\SaveDocumentResponse
     */
    public function setMidocoCrmDocumentId(?\Pggns\MidocoApi\Crm\StructType\CrmDocumentIdDTO $midocoCrmDocumentId = null): self
    {
        $this->MidocoCrmDocumentId = $midocoCrmDocumentId;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Crm\StructType\SaveDocumentResponse
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
}
