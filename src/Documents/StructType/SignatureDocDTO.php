<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignatureDocDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SignatureDocDTO extends AbstractStructBase
{
    /**
     * The creationTimestamp
     * @var string|null
     */
    protected ?string $creationTimestamp = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The custName
     * @var string|null
     */
    protected ?string $custName = null;
    /**
     * The dispatchTimestamp
     * @var string|null
     */
    protected ?string $dispatchTimestamp = null;
    /**
     * The dispatchType
     * @var string|null
     */
    protected ?string $dispatchType = null;
    /**
     * The documentFilename
     * @var string|null
     */
    protected ?string $documentFilename = null;
    /**
     * The documentFolder
     * @var string|null
     */
    protected ?string $documentFolder = null;
    /**
     * The documentName
     * @var string|null
     */
    protected ?string $documentName = null;
    /**
     * The documentNatureId
     * @var string|null
     */
    protected ?string $documentNatureId = null;
    /**
     * The isMoved
     * @var bool|null
     */
    protected ?bool $isMoved = null;
    /**
     * The isSigned
     * @var bool|null
     */
    protected ?bool $isSigned = null;
    /**
     * The originalDocumentContent
     * @var string|null
     */
    protected ?string $originalDocumentContent = null;
    /**
     * The refId
     * @var int|null
     */
    protected ?int $refId = null;
    /**
     * The refType
     * @var string|null
     */
    protected ?string $refType = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * The signatureDocId
     * @var int|null
     */
    protected ?int $signatureDocId = null;
    /**
     * The signatureTime
     * @var string|null
     */
    protected ?string $signatureTime = null;
    /**
     * The signedBy
     * @var string|null
     */
    protected ?string $signedBy = null;
    /**
     * The signedDocumentContent
     * @var string|null
     */
    protected ?string $signedDocumentContent = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for SignatureDocDTO
     * @uses SignatureDocDTO::setCreationTimestamp()
     * @uses SignatureDocDTO::setCreationUser()
     * @uses SignatureDocDTO::setCustName()
     * @uses SignatureDocDTO::setDispatchTimestamp()
     * @uses SignatureDocDTO::setDispatchType()
     * @uses SignatureDocDTO::setDocumentFilename()
     * @uses SignatureDocDTO::setDocumentFolder()
     * @uses SignatureDocDTO::setDocumentName()
     * @uses SignatureDocDTO::setDocumentNatureId()
     * @uses SignatureDocDTO::setIsMoved()
     * @uses SignatureDocDTO::setIsSigned()
     * @uses SignatureDocDTO::setOriginalDocumentContent()
     * @uses SignatureDocDTO::setRefId()
     * @uses SignatureDocDTO::setRefType()
     * @uses SignatureDocDTO::setRepositoryId()
     * @uses SignatureDocDTO::setSignatureDocId()
     * @uses SignatureDocDTO::setSignatureTime()
     * @uses SignatureDocDTO::setSignedBy()
     * @uses SignatureDocDTO::setSignedDocumentContent()
     * @uses SignatureDocDTO::setUnitName()
     * @param string $creationTimestamp
     * @param int $creationUser
     * @param string $custName
     * @param string $dispatchTimestamp
     * @param string $dispatchType
     * @param string $documentFilename
     * @param string $documentFolder
     * @param string $documentName
     * @param string $documentNatureId
     * @param bool $isMoved
     * @param bool $isSigned
     * @param string $originalDocumentContent
     * @param int $refId
     * @param string $refType
     * @param int $repositoryId
     * @param int $signatureDocId
     * @param string $signatureTime
     * @param string $signedBy
     * @param string $signedDocumentContent
     * @param string $unitName
     */
    public function __construct(?string $creationTimestamp = null, ?int $creationUser = null, ?string $custName = null, ?string $dispatchTimestamp = null, ?string $dispatchType = null, ?string $documentFilename = null, ?string $documentFolder = null, ?string $documentName = null, ?string $documentNatureId = null, ?bool $isMoved = null, ?bool $isSigned = null, ?string $originalDocumentContent = null, ?int $refId = null, ?string $refType = null, ?int $repositoryId = null, ?int $signatureDocId = null, ?string $signatureTime = null, ?string $signedBy = null, ?string $signedDocumentContent = null, ?string $unitName = null)
    {
        $this
            ->setCreationTimestamp($creationTimestamp)
            ->setCreationUser($creationUser)
            ->setCustName($custName)
            ->setDispatchTimestamp($dispatchTimestamp)
            ->setDispatchType($dispatchType)
            ->setDocumentFilename($documentFilename)
            ->setDocumentFolder($documentFolder)
            ->setDocumentName($documentName)
            ->setDocumentNatureId($documentNatureId)
            ->setIsMoved($isMoved)
            ->setIsSigned($isSigned)
            ->setOriginalDocumentContent($originalDocumentContent)
            ->setRefId($refId)
            ->setRefType($refType)
            ->setRepositoryId($repositoryId)
            ->setSignatureDocId($signatureDocId)
            ->setSignatureTime($signatureTime)
            ->setSignedBy($signedBy)
            ->setSignedDocumentContent($signedDocumentContent)
            ->setUnitName($unitName);
    }
    /**
     * Get creationTimestamp value
     * @return string|null
     */
    public function getCreationTimestamp(): ?string
    {
        return $this->creationTimestamp;
    }
    /**
     * Set creationTimestamp value
     * @param string $creationTimestamp
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureDocDTO
     */
    public function setCreationTimestamp(?string $creationTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTimestamp) && !is_string($creationTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTimestamp, true), gettype($creationTimestamp)), __LINE__);
        }
        $this->creationTimestamp = $creationTimestamp;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureDocDTO
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
     * Get custName value
     * @return string|null
     */
    public function getCustName(): ?string
    {
        return $this->custName;
    }
    /**
     * Set custName value
     * @param string $custName
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureDocDTO
     */
    public function setCustName(?string $custName = null): self
    {
        // validation for constraint: string
        if (!is_null($custName) && !is_string($custName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($custName, true), gettype($custName)), __LINE__);
        }
        $this->custName = $custName;
        
        return $this;
    }
    /**
     * Get dispatchTimestamp value
     * @return string|null
     */
    public function getDispatchTimestamp(): ?string
    {
        return $this->dispatchTimestamp;
    }
    /**
     * Set dispatchTimestamp value
     * @param string $dispatchTimestamp
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureDocDTO
     */
    public function setDispatchTimestamp(?string $dispatchTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($dispatchTimestamp) && !is_string($dispatchTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dispatchTimestamp, true), gettype($dispatchTimestamp)), __LINE__);
        }
        $this->dispatchTimestamp = $dispatchTimestamp;
        
        return $this;
    }
    /**
     * Get dispatchType value
     * @return string|null
     */
    public function getDispatchType(): ?string
    {
        return $this->dispatchType;
    }
    /**
     * Set dispatchType value
     * @param string $dispatchType
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureDocDTO
     */
    public function setDispatchType(?string $dispatchType = null): self
    {
        // validation for constraint: string
        if (!is_null($dispatchType) && !is_string($dispatchType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dispatchType, true), gettype($dispatchType)), __LINE__);
        }
        $this->dispatchType = $dispatchType;
        
        return $this;
    }
    /**
     * Get documentFilename value
     * @return string|null
     */
    public function getDocumentFilename(): ?string
    {
        return $this->documentFilename;
    }
    /**
     * Set documentFilename value
     * @param string $documentFilename
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureDocDTO
     */
    public function setDocumentFilename(?string $documentFilename = null): self
    {
        // validation for constraint: string
        if (!is_null($documentFilename) && !is_string($documentFilename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentFilename, true), gettype($documentFilename)), __LINE__);
        }
        $this->documentFilename = $documentFilename;
        
        return $this;
    }
    /**
     * Get documentFolder value
     * @return string|null
     */
    public function getDocumentFolder(): ?string
    {
        return $this->documentFolder;
    }
    /**
     * Set documentFolder value
     * @param string $documentFolder
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureDocDTO
     */
    public function setDocumentFolder(?string $documentFolder = null): self
    {
        // validation for constraint: string
        if (!is_null($documentFolder) && !is_string($documentFolder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentFolder, true), gettype($documentFolder)), __LINE__);
        }
        $this->documentFolder = $documentFolder;
        
        return $this;
    }
    /**
     * Get documentName value
     * @return string|null
     */
    public function getDocumentName(): ?string
    {
        return $this->documentName;
    }
    /**
     * Set documentName value
     * @param string $documentName
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureDocDTO
     */
    public function setDocumentName(?string $documentName = null): self
    {
        // validation for constraint: string
        if (!is_null($documentName) && !is_string($documentName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentName, true), gettype($documentName)), __LINE__);
        }
        $this->documentName = $documentName;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureDocDTO
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
     * Get isMoved value
     * @return bool|null
     */
    public function getIsMoved(): ?bool
    {
        return $this->isMoved;
    }
    /**
     * Set isMoved value
     * @param bool $isMoved
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureDocDTO
     */
    public function setIsMoved(?bool $isMoved = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isMoved) && !is_bool($isMoved)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMoved, true), gettype($isMoved)), __LINE__);
        }
        $this->isMoved = $isMoved;
        
        return $this;
    }
    /**
     * Get isSigned value
     * @return bool|null
     */
    public function getIsSigned(): ?bool
    {
        return $this->isSigned;
    }
    /**
     * Set isSigned value
     * @param bool $isSigned
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureDocDTO
     */
    public function setIsSigned(?bool $isSigned = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSigned) && !is_bool($isSigned)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSigned, true), gettype($isSigned)), __LINE__);
        }
        $this->isSigned = $isSigned;
        
        return $this;
    }
    /**
     * Get originalDocumentContent value
     * @return string|null
     */
    public function getOriginalDocumentContent(): ?string
    {
        return $this->originalDocumentContent;
    }
    /**
     * Set originalDocumentContent value
     * @param string $originalDocumentContent
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureDocDTO
     */
    public function setOriginalDocumentContent(?string $originalDocumentContent = null): self
    {
        // validation for constraint: string
        if (!is_null($originalDocumentContent) && !is_string($originalDocumentContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalDocumentContent, true), gettype($originalDocumentContent)), __LINE__);
        }
        $this->originalDocumentContent = $originalDocumentContent;
        
        return $this;
    }
    /**
     * Get refId value
     * @return int|null
     */
    public function getRefId(): ?int
    {
        return $this->refId;
    }
    /**
     * Set refId value
     * @param int $refId
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureDocDTO
     */
    public function setRefId(?int $refId = null): self
    {
        // validation for constraint: int
        if (!is_null($refId) && !(is_int($refId) || ctype_digit($refId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($refId, true), gettype($refId)), __LINE__);
        }
        $this->refId = $refId;
        
        return $this;
    }
    /**
     * Get refType value
     * @return string|null
     */
    public function getRefType(): ?string
    {
        return $this->refType;
    }
    /**
     * Set refType value
     * @param string $refType
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureDocDTO
     */
    public function setRefType(?string $refType = null): self
    {
        // validation for constraint: string
        if (!is_null($refType) && !is_string($refType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refType, true), gettype($refType)), __LINE__);
        }
        $this->refType = $refType;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureDocDTO
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
     * Get signatureDocId value
     * @return int|null
     */
    public function getSignatureDocId(): ?int
    {
        return $this->signatureDocId;
    }
    /**
     * Set signatureDocId value
     * @param int $signatureDocId
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureDocDTO
     */
    public function setSignatureDocId(?int $signatureDocId = null): self
    {
        // validation for constraint: int
        if (!is_null($signatureDocId) && !(is_int($signatureDocId) || ctype_digit($signatureDocId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($signatureDocId, true), gettype($signatureDocId)), __LINE__);
        }
        $this->signatureDocId = $signatureDocId;
        
        return $this;
    }
    /**
     * Get signatureTime value
     * @return string|null
     */
    public function getSignatureTime(): ?string
    {
        return $this->signatureTime;
    }
    /**
     * Set signatureTime value
     * @param string $signatureTime
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureDocDTO
     */
    public function setSignatureTime(?string $signatureTime = null): self
    {
        // validation for constraint: string
        if (!is_null($signatureTime) && !is_string($signatureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatureTime, true), gettype($signatureTime)), __LINE__);
        }
        $this->signatureTime = $signatureTime;
        
        return $this;
    }
    /**
     * Get signedBy value
     * @return string|null
     */
    public function getSignedBy(): ?string
    {
        return $this->signedBy;
    }
    /**
     * Set signedBy value
     * @param string $signedBy
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureDocDTO
     */
    public function setSignedBy(?string $signedBy = null): self
    {
        // validation for constraint: string
        if (!is_null($signedBy) && !is_string($signedBy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signedBy, true), gettype($signedBy)), __LINE__);
        }
        $this->signedBy = $signedBy;
        
        return $this;
    }
    /**
     * Get signedDocumentContent value
     * @return string|null
     */
    public function getSignedDocumentContent(): ?string
    {
        return $this->signedDocumentContent;
    }
    /**
     * Set signedDocumentContent value
     * @param string $signedDocumentContent
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureDocDTO
     */
    public function setSignedDocumentContent(?string $signedDocumentContent = null): self
    {
        // validation for constraint: string
        if (!is_null($signedDocumentContent) && !is_string($signedDocumentContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signedDocumentContent, true), gettype($signedDocumentContent)), __LINE__);
        }
        $this->signedDocumentContent = $signedDocumentContent;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureDocDTO
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
