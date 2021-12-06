<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentTypeDimensionDTO StructType
 * @subpackage Structs
 */
class DocumentTypeDimensionDTO extends AbstractStructBase
{
    /**
     * The documentType
     * @var string|null
     */
    protected ?string $documentType = null;
    /**
     * The documentTypeDescription
     * @var string|null
     */
    protected ?string $documentTypeDescription = null;
    /**
     * The documentTypeId
     * @var int|null
     */
    protected ?int $documentTypeId = null;
    /**
     * Constructor method for DocumentTypeDimensionDTO
     * @uses DocumentTypeDimensionDTO::setDocumentType()
     * @uses DocumentTypeDimensionDTO::setDocumentTypeDescription()
     * @uses DocumentTypeDimensionDTO::setDocumentTypeId()
     * @param string $documentType
     * @param string $documentTypeDescription
     * @param int $documentTypeId
     */
    public function __construct(?string $documentType = null, ?string $documentTypeDescription = null, ?int $documentTypeId = null)
    {
        $this
            ->setDocumentType($documentType)
            ->setDocumentTypeDescription($documentTypeDescription)
            ->setDocumentTypeId($documentTypeId);
    }
    /**
     * Get documentType value
     * @return string|null
     */
    public function getDocumentType(): ?string
    {
        return $this->documentType;
    }
    /**
     * Set documentType value
     * @param string $documentType
     * @return \Pggns\MidocoApi\Mis\StructType\DocumentTypeDimensionDTO
     */
    public function setDocumentType(?string $documentType = null): self
    {
        // validation for constraint: string
        if (!is_null($documentType) && !is_string($documentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentType, true), gettype($documentType)), __LINE__);
        }
        $this->documentType = $documentType;
        
        return $this;
    }
    /**
     * Get documentTypeDescription value
     * @return string|null
     */
    public function getDocumentTypeDescription(): ?string
    {
        return $this->documentTypeDescription;
    }
    /**
     * Set documentTypeDescription value
     * @param string $documentTypeDescription
     * @return \Pggns\MidocoApi\Mis\StructType\DocumentTypeDimensionDTO
     */
    public function setDocumentTypeDescription(?string $documentTypeDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($documentTypeDescription) && !is_string($documentTypeDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentTypeDescription, true), gettype($documentTypeDescription)), __LINE__);
        }
        $this->documentTypeDescription = $documentTypeDescription;
        
        return $this;
    }
    /**
     * Get documentTypeId value
     * @return int|null
     */
    public function getDocumentTypeId(): ?int
    {
        return $this->documentTypeId;
    }
    /**
     * Set documentTypeId value
     * @param int $documentTypeId
     * @return \Pggns\MidocoApi\Mis\StructType\DocumentTypeDimensionDTO
     */
    public function setDocumentTypeId(?int $documentTypeId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentTypeId) && !(is_int($documentTypeId) || ctype_digit($documentTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentTypeId, true), gettype($documentTypeId)), __LINE__);
        }
        $this->documentTypeId = $documentTypeId;
        
        return $this;
    }
}
