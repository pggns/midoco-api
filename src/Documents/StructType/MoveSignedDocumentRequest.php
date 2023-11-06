<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MoveSignedDocumentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MoveSignedDocumentRequest extends AbstractStructBase
{
    /**
     * The fromRefId
     * @var int|null
     */
    protected ?int $fromRefId = null;
    /**
     * The fromRefType
     * @var string|null
     */
    protected ?string $fromRefType = null;
    /**
     * The fromUnitName
     * @var string|null
     */
    protected ?string $fromUnitName = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * Constructor method for MoveSignedDocumentRequest
     * @uses MoveSignedDocumentRequest::setFromRefId()
     * @uses MoveSignedDocumentRequest::setFromRefType()
     * @uses MoveSignedDocumentRequest::setFromUnitName()
     * @uses MoveSignedDocumentRequest::setDocumentId()
     * @param int $fromRefId
     * @param string $fromRefType
     * @param string $fromUnitName
     * @param int $documentId
     */
    public function __construct(?int $fromRefId = null, ?string $fromRefType = null, ?string $fromUnitName = null, ?int $documentId = null)
    {
        $this
            ->setFromRefId($fromRefId)
            ->setFromRefType($fromRefType)
            ->setFromUnitName($fromUnitName)
            ->setDocumentId($documentId);
    }
    /**
     * Get fromRefId value
     * @return int|null
     */
    public function getFromRefId(): ?int
    {
        return $this->fromRefId;
    }
    /**
     * Set fromRefId value
     * @param int $fromRefId
     * @return \Pggns\MidocoApi\Documents\StructType\MoveSignedDocumentRequest
     */
    public function setFromRefId(?int $fromRefId = null): self
    {
        // validation for constraint: int
        if (!is_null($fromRefId) && !(is_int($fromRefId) || ctype_digit($fromRefId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fromRefId, true), gettype($fromRefId)), __LINE__);
        }
        $this->fromRefId = $fromRefId;
        
        return $this;
    }
    /**
     * Get fromRefType value
     * @return string|null
     */
    public function getFromRefType(): ?string
    {
        return $this->fromRefType;
    }
    /**
     * Set fromRefType value
     * @param string $fromRefType
     * @return \Pggns\MidocoApi\Documents\StructType\MoveSignedDocumentRequest
     */
    public function setFromRefType(?string $fromRefType = null): self
    {
        // validation for constraint: string
        if (!is_null($fromRefType) && !is_string($fromRefType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromRefType, true), gettype($fromRefType)), __LINE__);
        }
        $this->fromRefType = $fromRefType;
        
        return $this;
    }
    /**
     * Get fromUnitName value
     * @return string|null
     */
    public function getFromUnitName(): ?string
    {
        return $this->fromUnitName;
    }
    /**
     * Set fromUnitName value
     * @param string $fromUnitName
     * @return \Pggns\MidocoApi\Documents\StructType\MoveSignedDocumentRequest
     */
    public function setFromUnitName(?string $fromUnitName = null): self
    {
        // validation for constraint: string
        if (!is_null($fromUnitName) && !is_string($fromUnitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromUnitName, true), gettype($fromUnitName)), __LINE__);
        }
        $this->fromUnitName = $fromUnitName;
        
        return $this;
    }
    /**
     * Get documentId value
     * @return int|null
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Documents\StructType\MoveSignedDocumentRequest
     */
    public function setDocumentId(?int $documentId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
}
