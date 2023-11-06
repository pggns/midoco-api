<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDocumentRepository StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoDocumentRepository extends AbstractStructBase
{
    /**
     * The contentType
     * @var string|null
     */
    protected ?string $contentType = null;
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
     * The documentContent
     * @var string|null
     */
    protected ?string $documentContent = null;
    /**
     * The documentNatureId
     * @var string|null
     */
    protected ?string $documentNatureId = null;
    /**
     * The documentRefId
     * @var int|null
     */
    protected ?int $documentRefId = null;
    /**
     * The documentSize
     * @var int|null
     */
    protected ?int $documentSize = null;
    /**
     * The documentType
     * @var string|null
     */
    protected ?string $documentType = null;
    /**
     * The hashAlgorithm
     * @var string|null
     */
    protected ?string $hashAlgorithm = null;
    /**
     * The initialHashValue
     * @var string|null
     */
    protected ?string $initialHashValue = null;
    /**
     * The modifyDate
     * @var string|null
     */
    protected ?string $modifyDate = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * The storageReferenceKeystoreName
     * @var string|null
     */
    protected ?string $storageReferenceKeystoreName = null;
    /**
     * The storageReferenceUuid
     * @var string|null
     */
    protected ?string $storageReferenceUuid = null;
    /**
     * The storeUntil
     * @var string|null
     */
    protected ?string $storeUntil = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The deliverHashValue
     * @var string|null
     */
    protected ?string $deliverHashValue = null;
    /**
     * Constructor method for MidocoDocumentRepository
     * @uses MidocoDocumentRepository::setContentType()
     * @uses MidocoDocumentRepository::setCreationDate()
     * @uses MidocoDocumentRepository::setCreationUser()
     * @uses MidocoDocumentRepository::setDocumentContent()
     * @uses MidocoDocumentRepository::setDocumentNatureId()
     * @uses MidocoDocumentRepository::setDocumentRefId()
     * @uses MidocoDocumentRepository::setDocumentSize()
     * @uses MidocoDocumentRepository::setDocumentType()
     * @uses MidocoDocumentRepository::setHashAlgorithm()
     * @uses MidocoDocumentRepository::setInitialHashValue()
     * @uses MidocoDocumentRepository::setModifyDate()
     * @uses MidocoDocumentRepository::setModifyUser()
     * @uses MidocoDocumentRepository::setRepositoryId()
     * @uses MidocoDocumentRepository::setStorageReferenceKeystoreName()
     * @uses MidocoDocumentRepository::setStorageReferenceUuid()
     * @uses MidocoDocumentRepository::setStoreUntil()
     * @uses MidocoDocumentRepository::setUnitName()
     * @uses MidocoDocumentRepository::setDeliverHashValue()
     * @param string $contentType
     * @param string $creationDate
     * @param int $creationUser
     * @param string $documentContent
     * @param string $documentNatureId
     * @param int $documentRefId
     * @param int $documentSize
     * @param string $documentType
     * @param string $hashAlgorithm
     * @param string $initialHashValue
     * @param string $modifyDate
     * @param int $modifyUser
     * @param int $repositoryId
     * @param string $storageReferenceKeystoreName
     * @param string $storageReferenceUuid
     * @param string $storeUntil
     * @param string $unitName
     * @param string $deliverHashValue
     */
    public function __construct(?string $contentType = null, ?string $creationDate = null, ?int $creationUser = null, ?string $documentContent = null, ?string $documentNatureId = null, ?int $documentRefId = null, ?int $documentSize = null, ?string $documentType = null, ?string $hashAlgorithm = null, ?string $initialHashValue = null, ?string $modifyDate = null, ?int $modifyUser = null, ?int $repositoryId = null, ?string $storageReferenceKeystoreName = null, ?string $storageReferenceUuid = null, ?string $storeUntil = null, ?string $unitName = null, ?string $deliverHashValue = null)
    {
        $this
            ->setContentType($contentType)
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setDocumentContent($documentContent)
            ->setDocumentNatureId($documentNatureId)
            ->setDocumentRefId($documentRefId)
            ->setDocumentSize($documentSize)
            ->setDocumentType($documentType)
            ->setHashAlgorithm($hashAlgorithm)
            ->setInitialHashValue($initialHashValue)
            ->setModifyDate($modifyDate)
            ->setModifyUser($modifyUser)
            ->setRepositoryId($repositoryId)
            ->setStorageReferenceKeystoreName($storageReferenceKeystoreName)
            ->setStorageReferenceUuid($storageReferenceUuid)
            ->setStoreUntil($storeUntil)
            ->setUnitName($unitName)
            ->setDeliverHashValue($deliverHashValue);
    }
    /**
     * Get contentType value
     * @return string|null
     */
    public function getContentType(): ?string
    {
        return $this->contentType;
    }
    /**
     * Set contentType value
     * @param string $contentType
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDocumentRepository
     */
    public function setContentType(?string $contentType = null): self
    {
        // validation for constraint: string
        if (!is_null($contentType) && !is_string($contentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentType, true), gettype($contentType)), __LINE__);
        }
        $this->contentType = $contentType;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDocumentRepository
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
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDocumentRepository
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
     * Get documentContent value
     * @return string|null
     */
    public function getDocumentContent(): ?string
    {
        return $this->documentContent;
    }
    /**
     * Set documentContent value
     * @param string $documentContent
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDocumentRepository
     */
    public function setDocumentContent(?string $documentContent = null): self
    {
        // validation for constraint: string
        if (!is_null($documentContent) && !is_string($documentContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentContent, true), gettype($documentContent)), __LINE__);
        }
        $this->documentContent = $documentContent;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDocumentRepository
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
     * Get documentRefId value
     * @return int|null
     */
    public function getDocumentRefId(): ?int
    {
        return $this->documentRefId;
    }
    /**
     * Set documentRefId value
     * @param int $documentRefId
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDocumentRepository
     */
    public function setDocumentRefId(?int $documentRefId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentRefId) && !(is_int($documentRefId) || ctype_digit($documentRefId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentRefId, true), gettype($documentRefId)), __LINE__);
        }
        $this->documentRefId = $documentRefId;
        
        return $this;
    }
    /**
     * Get documentSize value
     * @return int|null
     */
    public function getDocumentSize(): ?int
    {
        return $this->documentSize;
    }
    /**
     * Set documentSize value
     * @param int $documentSize
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDocumentRepository
     */
    public function setDocumentSize(?int $documentSize = null): self
    {
        // validation for constraint: int
        if (!is_null($documentSize) && !(is_int($documentSize) || ctype_digit($documentSize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentSize, true), gettype($documentSize)), __LINE__);
        }
        $this->documentSize = $documentSize;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDocumentRepository
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
     * Get hashAlgorithm value
     * @return string|null
     */
    public function getHashAlgorithm(): ?string
    {
        return $this->hashAlgorithm;
    }
    /**
     * Set hashAlgorithm value
     * @param string $hashAlgorithm
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDocumentRepository
     */
    public function setHashAlgorithm(?string $hashAlgorithm = null): self
    {
        // validation for constraint: string
        if (!is_null($hashAlgorithm) && !is_string($hashAlgorithm)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hashAlgorithm, true), gettype($hashAlgorithm)), __LINE__);
        }
        $this->hashAlgorithm = $hashAlgorithm;
        
        return $this;
    }
    /**
     * Get initialHashValue value
     * @return string|null
     */
    public function getInitialHashValue(): ?string
    {
        return $this->initialHashValue;
    }
    /**
     * Set initialHashValue value
     * @param string $initialHashValue
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDocumentRepository
     */
    public function setInitialHashValue(?string $initialHashValue = null): self
    {
        // validation for constraint: string
        if (!is_null($initialHashValue) && !is_string($initialHashValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($initialHashValue, true), gettype($initialHashValue)), __LINE__);
        }
        $this->initialHashValue = $initialHashValue;
        
        return $this;
    }
    /**
     * Get modifyDate value
     * @return string|null
     */
    public function getModifyDate(): ?string
    {
        return $this->modifyDate;
    }
    /**
     * Set modifyDate value
     * @param string $modifyDate
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDocumentRepository
     */
    public function setModifyDate(?string $modifyDate = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyDate) && !is_string($modifyDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyDate, true), gettype($modifyDate)), __LINE__);
        }
        $this->modifyDate = $modifyDate;
        
        return $this;
    }
    /**
     * Get modifyUser value
     * @return int|null
     */
    public function getModifyUser(): ?int
    {
        return $this->modifyUser;
    }
    /**
     * Set modifyUser value
     * @param int $modifyUser
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDocumentRepository
     */
    public function setModifyUser(?int $modifyUser = null): self
    {
        // validation for constraint: int
        if (!is_null($modifyUser) && !(is_int($modifyUser) || ctype_digit($modifyUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modifyUser, true), gettype($modifyUser)), __LINE__);
        }
        $this->modifyUser = $modifyUser;
        
        return $this;
    }
    /**
     * Get repositoryId value
     * @return int|null
     */
    public function getRepositoryId(): ?int
    {
        return $this->repositoryId;
    }
    /**
     * Set repositoryId value
     * @param int $repositoryId
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDocumentRepository
     */
    public function setRepositoryId(?int $repositoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($repositoryId) && !(is_int($repositoryId) || ctype_digit($repositoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repositoryId, true), gettype($repositoryId)), __LINE__);
        }
        $this->repositoryId = $repositoryId;
        
        return $this;
    }
    /**
     * Get storageReferenceKeystoreName value
     * @return string|null
     */
    public function getStorageReferenceKeystoreName(): ?string
    {
        return $this->storageReferenceKeystoreName;
    }
    /**
     * Set storageReferenceKeystoreName value
     * @param string $storageReferenceKeystoreName
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDocumentRepository
     */
    public function setStorageReferenceKeystoreName(?string $storageReferenceKeystoreName = null): self
    {
        // validation for constraint: string
        if (!is_null($storageReferenceKeystoreName) && !is_string($storageReferenceKeystoreName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storageReferenceKeystoreName, true), gettype($storageReferenceKeystoreName)), __LINE__);
        }
        $this->storageReferenceKeystoreName = $storageReferenceKeystoreName;
        
        return $this;
    }
    /**
     * Get storageReferenceUuid value
     * @return string|null
     */
    public function getStorageReferenceUuid(): ?string
    {
        return $this->storageReferenceUuid;
    }
    /**
     * Set storageReferenceUuid value
     * @param string $storageReferenceUuid
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDocumentRepository
     */
    public function setStorageReferenceUuid(?string $storageReferenceUuid = null): self
    {
        // validation for constraint: string
        if (!is_null($storageReferenceUuid) && !is_string($storageReferenceUuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storageReferenceUuid, true), gettype($storageReferenceUuid)), __LINE__);
        }
        $this->storageReferenceUuid = $storageReferenceUuid;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDocumentRepository
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
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDocumentRepository
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
     * Get deliverHashValue value
     * @return string|null
     */
    public function getDeliverHashValue(): ?string
    {
        return $this->deliverHashValue;
    }
    /**
     * Set deliverHashValue value
     * @param string $deliverHashValue
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDocumentRepository
     */
    public function setDeliverHashValue(?string $deliverHashValue = null): self
    {
        // validation for constraint: string
        if (!is_null($deliverHashValue) && !is_string($deliverHashValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliverHashValue, true), gettype($deliverHashValue)), __LINE__);
        }
        $this->deliverHashValue = $deliverHashValue;
        
        return $this;
    }
}
