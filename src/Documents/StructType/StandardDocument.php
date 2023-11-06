<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StandardDocument StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class StandardDocument extends AbstractStructBase
{
    /**
     * The size
     * @var int|null
     */
    protected ?int $size = null;
    /**
     * The checksum
     * @var string|null
     */
    protected ?string $checksum = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The creationUserId
     * @var int|null
     */
    protected ?int $creationUserId = null;
    /**
     * The creationUserName
     * @var string|null
     */
    protected ?string $creationUserName = null;
    /**
     * The repository
     * @var string|null
     */
    protected ?string $repository = null;
    /**
     * The repositoryId
     * @var string|null
     */
    protected ?string $repositoryId = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The extension
     * @var string|null
     */
    protected ?string $extension = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The mimeType
     * @var string|null
     */
    protected ?string $mimeType = null;
    /**
     * The lastExportDate
     * @var string|null
     */
    protected ?string $lastExportDate = null;
    /**
     * The exportedFileName
     * @var string|null
     */
    protected ?string $exportedFileName = null;
    /**
     * The signed
     * @var bool|null
     */
    protected ?bool $signed = null;
    /**
     * The documentNatureId
     * @var string|null
     */
    protected ?string $documentNatureId = null;
    /**
     * The storeUntil
     * @var string|null
     */
    protected ?string $storeUntil = null;
    /**
     * The isManual
     * @var bool|null
     */
    protected ?bool $isManual = null;
    /**
     * The uploadDate
     * @var string|null
     */
    protected ?string $uploadDate = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The internalType
     * @var string|null
     */
    protected ?string $internalType = null;
    /**
     * Constructor method for StandardDocument
     * @uses StandardDocument::setSize()
     * @uses StandardDocument::setChecksum()
     * @uses StandardDocument::setCreationDate()
     * @uses StandardDocument::setCreationUserId()
     * @uses StandardDocument::setCreationUserName()
     * @uses StandardDocument::setRepository()
     * @uses StandardDocument::setRepositoryId()
     * @uses StandardDocument::setName()
     * @uses StandardDocument::setExtension()
     * @uses StandardDocument::setType()
     * @uses StandardDocument::setMimeType()
     * @uses StandardDocument::setLastExportDate()
     * @uses StandardDocument::setExportedFileName()
     * @uses StandardDocument::setSigned()
     * @uses StandardDocument::setDocumentNatureId()
     * @uses StandardDocument::setStoreUntil()
     * @uses StandardDocument::setIsManual()
     * @uses StandardDocument::setUploadDate()
     * @uses StandardDocument::setUnitName()
     * @uses StandardDocument::setDescription()
     * @uses StandardDocument::setInternalType()
     * @param int $size
     * @param string $checksum
     * @param string $creationDate
     * @param int $creationUserId
     * @param string $creationUserName
     * @param string $repository
     * @param string $repositoryId
     * @param string $name
     * @param string $extension
     * @param string $type
     * @param string $mimeType
     * @param string $lastExportDate
     * @param string $exportedFileName
     * @param bool $signed
     * @param string $documentNatureId
     * @param string $storeUntil
     * @param bool $isManual
     * @param string $uploadDate
     * @param string $unitName
     * @param string $description
     * @param string $internalType
     */
    public function __construct(?int $size = null, ?string $checksum = null, ?string $creationDate = null, ?int $creationUserId = null, ?string $creationUserName = null, ?string $repository = null, ?string $repositoryId = null, ?string $name = null, ?string $extension = null, ?string $type = null, ?string $mimeType = null, ?string $lastExportDate = null, ?string $exportedFileName = null, ?bool $signed = null, ?string $documentNatureId = null, ?string $storeUntil = null, ?bool $isManual = null, ?string $uploadDate = null, ?string $unitName = null, ?string $description = null, ?string $internalType = null)
    {
        $this
            ->setSize($size)
            ->setChecksum($checksum)
            ->setCreationDate($creationDate)
            ->setCreationUserId($creationUserId)
            ->setCreationUserName($creationUserName)
            ->setRepository($repository)
            ->setRepositoryId($repositoryId)
            ->setName($name)
            ->setExtension($extension)
            ->setType($type)
            ->setMimeType($mimeType)
            ->setLastExportDate($lastExportDate)
            ->setExportedFileName($exportedFileName)
            ->setSigned($signed)
            ->setDocumentNatureId($documentNatureId)
            ->setStoreUntil($storeUntil)
            ->setIsManual($isManual)
            ->setUploadDate($uploadDate)
            ->setUnitName($unitName)
            ->setDescription($description)
            ->setInternalType($internalType);
    }
    /**
     * Get size value
     * @return int|null
     */
    public function getSize(): ?int
    {
        return $this->size;
    }
    /**
     * Set size value
     * @param int $size
     * @return \Pggns\MidocoApi\Documents\StructType\StandardDocument
     */
    public function setSize(?int $size = null): self
    {
        // validation for constraint: int
        if (!is_null($size) && !(is_int($size) || ctype_digit($size))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($size, true), gettype($size)), __LINE__);
        }
        $this->size = $size;
        
        return $this;
    }
    /**
     * Get checksum value
     * @return string|null
     */
    public function getChecksum(): ?string
    {
        return $this->checksum;
    }
    /**
     * Set checksum value
     * @param string $checksum
     * @return \Pggns\MidocoApi\Documents\StructType\StandardDocument
     */
    public function setChecksum(?string $checksum = null): self
    {
        // validation for constraint: string
        if (!is_null($checksum) && !is_string($checksum)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($checksum, true), gettype($checksum)), __LINE__);
        }
        $this->checksum = $checksum;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Documents\StructType\StandardDocument
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
     * Get creationUserId value
     * @return int|null
     */
    public function getCreationUserId(): ?int
    {
        return $this->creationUserId;
    }
    /**
     * Set creationUserId value
     * @param int $creationUserId
     * @return \Pggns\MidocoApi\Documents\StructType\StandardDocument
     */
    public function setCreationUserId(?int $creationUserId = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUserId) && !(is_int($creationUserId) || ctype_digit($creationUserId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUserId, true), gettype($creationUserId)), __LINE__);
        }
        $this->creationUserId = $creationUserId;
        
        return $this;
    }
    /**
     * Get creationUserName value
     * @return string|null
     */
    public function getCreationUserName(): ?string
    {
        return $this->creationUserName;
    }
    /**
     * Set creationUserName value
     * @param string $creationUserName
     * @return \Pggns\MidocoApi\Documents\StructType\StandardDocument
     */
    public function setCreationUserName(?string $creationUserName = null): self
    {
        // validation for constraint: string
        if (!is_null($creationUserName) && !is_string($creationUserName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationUserName, true), gettype($creationUserName)), __LINE__);
        }
        $this->creationUserName = $creationUserName;
        
        return $this;
    }
    /**
     * Get repository value
     * @return string|null
     */
    public function getRepository(): ?string
    {
        return $this->repository;
    }
    /**
     * Set repository value
     * @param string $repository
     * @return \Pggns\MidocoApi\Documents\StructType\StandardDocument
     */
    public function setRepository(?string $repository = null): self
    {
        // validation for constraint: string
        if (!is_null($repository) && !is_string($repository)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($repository, true), gettype($repository)), __LINE__);
        }
        $this->repository = $repository;
        
        return $this;
    }
    /**
     * Get repositoryId value
     * @return string|null
     */
    public function getRepositoryId(): ?string
    {
        return $this->repositoryId;
    }
    /**
     * Set repositoryId value
     * @param string $repositoryId
     * @return \Pggns\MidocoApi\Documents\StructType\StandardDocument
     */
    public function setRepositoryId(?string $repositoryId = null): self
    {
        // validation for constraint: string
        if (!is_null($repositoryId) && !is_string($repositoryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($repositoryId, true), gettype($repositoryId)), __LINE__);
        }
        $this->repositoryId = $repositoryId;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Documents\StructType\StandardDocument
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get extension value
     * @return string|null
     */
    public function getExtension(): ?string
    {
        return $this->extension;
    }
    /**
     * Set extension value
     * @param string $extension
     * @return \Pggns\MidocoApi\Documents\StructType\StandardDocument
     */
    public function setExtension(?string $extension = null): self
    {
        // validation for constraint: string
        if (!is_null($extension) && !is_string($extension)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extension, true), gettype($extension)), __LINE__);
        }
        $this->extension = $extension;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Documents\StructType\StandardDocument
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get mimeType value
     * @return string|null
     */
    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }
    /**
     * Set mimeType value
     * @param string $mimeType
     * @return \Pggns\MidocoApi\Documents\StructType\StandardDocument
     */
    public function setMimeType(?string $mimeType = null): self
    {
        // validation for constraint: string
        if (!is_null($mimeType) && !is_string($mimeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mimeType, true), gettype($mimeType)), __LINE__);
        }
        $this->mimeType = $mimeType;
        
        return $this;
    }
    /**
     * Get lastExportDate value
     * @return string|null
     */
    public function getLastExportDate(): ?string
    {
        return $this->lastExportDate;
    }
    /**
     * Set lastExportDate value
     * @param string $lastExportDate
     * @return \Pggns\MidocoApi\Documents\StructType\StandardDocument
     */
    public function setLastExportDate(?string $lastExportDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastExportDate) && !is_string($lastExportDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastExportDate, true), gettype($lastExportDate)), __LINE__);
        }
        $this->lastExportDate = $lastExportDate;
        
        return $this;
    }
    /**
     * Get exportedFileName value
     * @return string|null
     */
    public function getExportedFileName(): ?string
    {
        return $this->exportedFileName;
    }
    /**
     * Set exportedFileName value
     * @param string $exportedFileName
     * @return \Pggns\MidocoApi\Documents\StructType\StandardDocument
     */
    public function setExportedFileName(?string $exportedFileName = null): self
    {
        // validation for constraint: string
        if (!is_null($exportedFileName) && !is_string($exportedFileName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportedFileName, true), gettype($exportedFileName)), __LINE__);
        }
        $this->exportedFileName = $exportedFileName;
        
        return $this;
    }
    /**
     * Get signed value
     * @return bool|null
     */
    public function getSigned(): ?bool
    {
        return $this->signed;
    }
    /**
     * Set signed value
     * @param bool $signed
     * @return \Pggns\MidocoApi\Documents\StructType\StandardDocument
     */
    public function setSigned(?bool $signed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($signed) && !is_bool($signed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($signed, true), gettype($signed)), __LINE__);
        }
        $this->signed = $signed;
        
        return $this;
    }
    /**
     * Get documentNatureId value
     * @return string|null
     */
    public function getDocumentNatureId(): ?string
    {
        return $this->documentNatureId;
    }
    /**
     * Set documentNatureId value
     * @param string $documentNatureId
     * @return \Pggns\MidocoApi\Documents\StructType\StandardDocument
     */
    public function setDocumentNatureId(?string $documentNatureId = null): self
    {
        // validation for constraint: string
        if (!is_null($documentNatureId) && !is_string($documentNatureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentNatureId, true), gettype($documentNatureId)), __LINE__);
        }
        $this->documentNatureId = $documentNatureId;
        
        return $this;
    }
    /**
     * Get storeUntil value
     * @return string|null
     */
    public function getStoreUntil(): ?string
    {
        return $this->storeUntil;
    }
    /**
     * Set storeUntil value
     * @param string $storeUntil
     * @return \Pggns\MidocoApi\Documents\StructType\StandardDocument
     */
    public function setStoreUntil(?string $storeUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($storeUntil) && !is_string($storeUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storeUntil, true), gettype($storeUntil)), __LINE__);
        }
        $this->storeUntil = $storeUntil;
        
        return $this;
    }
    /**
     * Get isManual value
     * @return bool|null
     */
    public function getIsManual(): ?bool
    {
        return $this->isManual;
    }
    /**
     * Set isManual value
     * @param bool $isManual
     * @return \Pggns\MidocoApi\Documents\StructType\StandardDocument
     */
    public function setIsManual(?bool $isManual = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isManual) && !is_bool($isManual)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isManual, true), gettype($isManual)), __LINE__);
        }
        $this->isManual = $isManual;
        
        return $this;
    }
    /**
     * Get uploadDate value
     * @return string|null
     */
    public function getUploadDate(): ?string
    {
        return $this->uploadDate;
    }
    /**
     * Set uploadDate value
     * @param string $uploadDate
     * @return \Pggns\MidocoApi\Documents\StructType\StandardDocument
     */
    public function setUploadDate(?string $uploadDate = null): self
    {
        // validation for constraint: string
        if (!is_null($uploadDate) && !is_string($uploadDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uploadDate, true), gettype($uploadDate)), __LINE__);
        }
        $this->uploadDate = $uploadDate;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\StandardDocument
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
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Documents\StructType\StandardDocument
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get internalType value
     * @return string|null
     */
    public function getInternalType(): ?string
    {
        return $this->internalType;
    }
    /**
     * Set internalType value
     * @param string $internalType
     * @return \Pggns\MidocoApi\Documents\StructType\StandardDocument
     */
    public function setInternalType(?string $internalType = null): self
    {
        // validation for constraint: string
        if (!is_null($internalType) && !is_string($internalType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internalType, true), gettype($internalType)), __LINE__);
        }
        $this->internalType = $internalType;
        
        return $this;
    }
}
