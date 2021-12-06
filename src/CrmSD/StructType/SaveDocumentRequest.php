<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDocumentRequest StructType
 * @subpackage Structs
 */
class SaveDocumentRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmDocument
     * @var \Pggns\MidocoApi\CrmSD\StructType\CrmDocumentDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\CrmDocumentDTO $MidocoCrmDocument = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for SaveDocumentRequest
     * @uses SaveDocumentRequest::setMidocoCrmDocument()
     * @uses SaveDocumentRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\CrmSD\StructType\CrmDocumentDTO $midocoCrmDocument
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\CrmDocumentDTO $midocoCrmDocument = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoCrmDocument($midocoCrmDocument)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoCrmDocument value
     * @return \Pggns\MidocoApi\CrmSD\StructType\CrmDocumentDTO|null
     */
    public function getMidocoCrmDocument(): ?\Pggns\MidocoApi\CrmSD\StructType\CrmDocumentDTO
    {
        return $this->MidocoCrmDocument;
    }
    /**
     * Set MidocoCrmDocument value
     * @param \Pggns\MidocoApi\CrmSD\StructType\CrmDocumentDTO $midocoCrmDocument
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveDocumentRequest
     */
    public function setMidocoCrmDocument(?\Pggns\MidocoApi\CrmSD\StructType\CrmDocumentDTO $midocoCrmDocument = null): self
    {
        $this->MidocoCrmDocument = $midocoCrmDocument;
        
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
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveDocumentRequest
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
