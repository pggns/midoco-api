<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDocumentResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveDocument --- saves a document given as parameter
 * @subpackage Structs
 */
class SaveDocumentResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmDocumentId
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmDocumentId
     * @var \Pggns\MidocoApi\CrmSD\StructType\CrmDocumentIdDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\CrmDocumentIdDTO $MidocoCrmDocumentId = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for SaveDocumentResponse
     * @uses SaveDocumentResponse::setMidocoCrmDocumentId()
     * @uses SaveDocumentResponse::setInternalVersion()
     * @param \Pggns\MidocoApi\CrmSD\StructType\CrmDocumentIdDTO $midocoCrmDocumentId
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\CrmDocumentIdDTO $midocoCrmDocumentId = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoCrmDocumentId($midocoCrmDocumentId)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoCrmDocumentId value
     * @return \Pggns\MidocoApi\CrmSD\StructType\CrmDocumentIdDTO|null
     */
    public function getMidocoCrmDocumentId(): ?\Pggns\MidocoApi\CrmSD\StructType\CrmDocumentIdDTO
    {
        return $this->MidocoCrmDocumentId;
    }
    /**
     * Set MidocoCrmDocumentId value
     * @param \Pggns\MidocoApi\CrmSD\StructType\CrmDocumentIdDTO $midocoCrmDocumentId
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveDocumentResponse
     */
    public function setMidocoCrmDocumentId(?\Pggns\MidocoApi\CrmSD\StructType\CrmDocumentIdDTO $midocoCrmDocumentId = null): self
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
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveDocumentResponse
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
