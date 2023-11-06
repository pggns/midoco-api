<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternDocumentDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExternDocumentDTO extends AbstractStructBase
{
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The debitor
     * @var string|null
     */
    protected ?string $debitor = null;
    /**
     * The document
     * @var string|null
     */
    protected ?string $document = null;
    /**
     * The documentDescription
     * @var string|null
     */
    protected ?string $documentDescription = null;
    /**
     * The documentType
     * @var string|null
     */
    protected ?string $documentType = null;
    /**
     * The exportTimestamp
     * @var string|null
     */
    protected ?string $exportTimestamp = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The isExported
     * @var bool|null
     */
    protected ?bool $isExported = null;
    /**
     * The media
     * @var string|null
     */
    protected ?string $media = null;
    /**
     * The midocoRepositoryId
     * @var int|null
     */
    protected ?int $midocoRepositoryId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for ExternDocumentDTO
     * @uses ExternDocumentDTO::setCreationDate()
     * @uses ExternDocumentDTO::setCreationUser()
     * @uses ExternDocumentDTO::setDebitor()
     * @uses ExternDocumentDTO::setDocument()
     * @uses ExternDocumentDTO::setDocumentDescription()
     * @uses ExternDocumentDTO::setDocumentType()
     * @uses ExternDocumentDTO::setExportTimestamp()
     * @uses ExternDocumentDTO::setId()
     * @uses ExternDocumentDTO::setIsExported()
     * @uses ExternDocumentDTO::setMedia()
     * @uses ExternDocumentDTO::setMidocoRepositoryId()
     * @uses ExternDocumentDTO::setUnitName()
     * @param string $creationDate
     * @param int $creationUser
     * @param string $debitor
     * @param string $document
     * @param string $documentDescription
     * @param string $documentType
     * @param string $exportTimestamp
     * @param int $id
     * @param bool $isExported
     * @param string $media
     * @param int $midocoRepositoryId
     * @param string $unitName
     */
    public function __construct(?string $creationDate = null, ?int $creationUser = null, ?string $debitor = null, ?string $document = null, ?string $documentDescription = null, ?string $documentType = null, ?string $exportTimestamp = null, ?int $id = null, ?bool $isExported = null, ?string $media = null, ?int $midocoRepositoryId = null, ?string $unitName = null)
    {
        $this
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setDebitor($debitor)
            ->setDocument($document)
            ->setDocumentDescription($documentDescription)
            ->setDocumentType($documentType)
            ->setExportTimestamp($exportTimestamp)
            ->setId($id)
            ->setIsExported($isExported)
            ->setMedia($media)
            ->setMidocoRepositoryId($midocoRepositoryId)
            ->setUnitName($unitName);
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Documents\StructType\ExternDocumentDTO
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Documents\StructType\ExternDocumentDTO
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Get debitor value
     * @return string|null
     */
    public function getDebitor(): ?string
    {
        return $this->debitor;
    }
    /**
     * Set debitor value
     * @param string $debitor
     * @return \Pggns\MidocoApi\Documents\StructType\ExternDocumentDTO
     */
    public function setDebitor(?string $debitor = null): self
    {
        // validation for constraint: string
        if (!is_null($debitor) && !is_string($debitor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitor, true), gettype($debitor)), __LINE__);
        }
        $this->debitor = $debitor;
        
        return $this;
    }
    /**
     * Get document value
     * @return string|null
     */
    public function getDocument(): ?string
    {
        return $this->document;
    }
    /**
     * Set document value
     * @param string $document
     * @return \Pggns\MidocoApi\Documents\StructType\ExternDocumentDTO
     */
    public function setDocument(?string $document = null): self
    {
        // validation for constraint: string
        if (!is_null($document) && !is_string($document)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($document, true), gettype($document)), __LINE__);
        }
        $this->document = $document;
        
        return $this;
    }
    /**
     * Get documentDescription value
     * @return string|null
     */
    public function getDocumentDescription(): ?string
    {
        return $this->documentDescription;
    }
    /**
     * Set documentDescription value
     * @param string $documentDescription
     * @return \Pggns\MidocoApi\Documents\StructType\ExternDocumentDTO
     */
    public function setDocumentDescription(?string $documentDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($documentDescription) && !is_string($documentDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentDescription, true), gettype($documentDescription)), __LINE__);
        }
        $this->documentDescription = $documentDescription;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Documents\StructType\ExternDocumentDTO
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
     * Get exportTimestamp value
     * @return string|null
     */
    public function getExportTimestamp(): ?string
    {
        return $this->exportTimestamp;
    }
    /**
     * Set exportTimestamp value
     * @param string $exportTimestamp
     * @return \Pggns\MidocoApi\Documents\StructType\ExternDocumentDTO
     */
    public function setExportTimestamp(?string $exportTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($exportTimestamp) && !is_string($exportTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportTimestamp, true), gettype($exportTimestamp)), __LINE__);
        }
        $this->exportTimestamp = $exportTimestamp;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Documents\StructType\ExternDocumentDTO
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get isExported value
     * @return bool|null
     */
    public function getIsExported(): ?bool
    {
        return $this->isExported;
    }
    /**
     * Set isExported value
     * @param bool $isExported
     * @return \Pggns\MidocoApi\Documents\StructType\ExternDocumentDTO
     */
    public function setIsExported(?bool $isExported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isExported) && !is_bool($isExported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExported, true), gettype($isExported)), __LINE__);
        }
        $this->isExported = $isExported;
        
        return $this;
    }
    /**
     * Get media value
     * @return string|null
     */
    public function getMedia(): ?string
    {
        return $this->media;
    }
    /**
     * Set media value
     * @param string $media
     * @return \Pggns\MidocoApi\Documents\StructType\ExternDocumentDTO
     */
    public function setMedia(?string $media = null): self
    {
        // validation for constraint: string
        if (!is_null($media) && !is_string($media)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($media, true), gettype($media)), __LINE__);
        }
        $this->media = $media;
        
        return $this;
    }
    /**
     * Get midocoRepositoryId value
     * @return int|null
     */
    public function getMidocoRepositoryId(): ?int
    {
        return $this->midocoRepositoryId;
    }
    /**
     * Set midocoRepositoryId value
     * @param int $midocoRepositoryId
     * @return \Pggns\MidocoApi\Documents\StructType\ExternDocumentDTO
     */
    public function setMidocoRepositoryId(?int $midocoRepositoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($midocoRepositoryId) && !(is_int($midocoRepositoryId) || ctype_digit($midocoRepositoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($midocoRepositoryId, true), gettype($midocoRepositoryId)), __LINE__);
        }
        $this->midocoRepositoryId = $midocoRepositoryId;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Documents\StructType\ExternDocumentDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
