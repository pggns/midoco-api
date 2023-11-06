<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentRepositoryExtensionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DocumentRepositoryExtensionDTO extends AbstractStructBase
{
    /**
     * The documentNatureId
     * @var string|null
     */
    protected ?string $documentNatureId = null;
    /**
     * The documentSize
     * @var int|null
     */
    protected ?int $documentSize = null;
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
     * Constructor method for DocumentRepositoryExtensionDTO
     * @uses DocumentRepositoryExtensionDTO::setDocumentNatureId()
     * @uses DocumentRepositoryExtensionDTO::setDocumentSize()
     * @uses DocumentRepositoryExtensionDTO::setHashAlgorithm()
     * @uses DocumentRepositoryExtensionDTO::setInitialHashValue()
     * @uses DocumentRepositoryExtensionDTO::setModifyDate()
     * @uses DocumentRepositoryExtensionDTO::setModifyUser()
     * @uses DocumentRepositoryExtensionDTO::setRepositoryId()
     * @uses DocumentRepositoryExtensionDTO::setStorageReferenceKeystoreName()
     * @uses DocumentRepositoryExtensionDTO::setStorageReferenceUuid()
     * @uses DocumentRepositoryExtensionDTO::setStoreUntil()
     * @param string $documentNatureId
     * @param int $documentSize
     * @param string $hashAlgorithm
     * @param string $initialHashValue
     * @param string $modifyDate
     * @param int $modifyUser
     * @param int $repositoryId
     * @param string $storageReferenceKeystoreName
     * @param string $storageReferenceUuid
     * @param string $storeUntil
     */
    public function __construct(?string $documentNatureId = null, ?int $documentSize = null, ?string $hashAlgorithm = null, ?string $initialHashValue = null, ?string $modifyDate = null, ?int $modifyUser = null, ?int $repositoryId = null, ?string $storageReferenceKeystoreName = null, ?string $storageReferenceUuid = null, ?string $storeUntil = null)
    {
        $this
            ->setDocumentNatureId($documentNatureId)
            ->setDocumentSize($documentSize)
            ->setHashAlgorithm($hashAlgorithm)
            ->setInitialHashValue($initialHashValue)
            ->setModifyDate($modifyDate)
            ->setModifyUser($modifyUser)
            ->setRepositoryId($repositoryId)
            ->setStorageReferenceKeystoreName($storageReferenceKeystoreName)
            ->setStorageReferenceUuid($storageReferenceUuid)
            ->setStoreUntil($storeUntil);
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
     * @return \Pggns\MidocoApi\Documents\StructType\DocumentRepositoryExtensionDTO
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
     * @return \Pggns\MidocoApi\Documents\StructType\DocumentRepositoryExtensionDTO
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
     * @return \Pggns\MidocoApi\Documents\StructType\DocumentRepositoryExtensionDTO
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
     * @return \Pggns\MidocoApi\Documents\StructType\DocumentRepositoryExtensionDTO
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
     * @return \Pggns\MidocoApi\Documents\StructType\DocumentRepositoryExtensionDTO
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
     * @return \Pggns\MidocoApi\Documents\StructType\DocumentRepositoryExtensionDTO
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
     * @return \Pggns\MidocoApi\Documents\StructType\DocumentRepositoryExtensionDTO
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
     * @return \Pggns\MidocoApi\Documents\StructType\DocumentRepositoryExtensionDTO
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
     * @return \Pggns\MidocoApi\Documents\StructType\DocumentRepositoryExtensionDTO
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
     * @return \Pggns\MidocoApi\Documents\StructType\DocumentRepositoryExtensionDTO
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
}
