<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MisCampaignDocumentDTO StructType
 * @subpackage Structs
 */
class MisCampaignDocumentDTO extends AbstractStructBase
{
    /**
     * The campaignId
     * @var int|null
     */
    protected ?int $campaignId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The documentDate
     * @var string|null
     */
    protected ?string $documentDate = null;
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
     * The misDocumentId
     * @var int|null
     */
    protected ?int $misDocumentId = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * The storeUntil
     * @var string|null
     */
    protected ?string $storeUntil = null;
    /**
     * The uploadDate
     * @var string|null
     */
    protected ?string $uploadDate = null;
    /**
     * Constructor method for MisCampaignDocumentDTO
     * @uses MisCampaignDocumentDTO::setCampaignId()
     * @uses MisCampaignDocumentDTO::setDescription()
     * @uses MisCampaignDocumentDTO::setDocumentDate()
     * @uses MisCampaignDocumentDTO::setDocumentName()
     * @uses MisCampaignDocumentDTO::setDocumentNatureId()
     * @uses MisCampaignDocumentDTO::setDocumentSize()
     * @uses MisCampaignDocumentDTO::setDocumentType()
     * @uses MisCampaignDocumentDTO::setMisDocumentId()
     * @uses MisCampaignDocumentDTO::setRepositoryId()
     * @uses MisCampaignDocumentDTO::setStoreUntil()
     * @uses MisCampaignDocumentDTO::setUploadDate()
     * @param int $campaignId
     * @param string $description
     * @param string $documentDate
     * @param string $documentName
     * @param string $documentNatureId
     * @param int $documentSize
     * @param string $documentType
     * @param int $misDocumentId
     * @param int $repositoryId
     * @param string $storeUntil
     * @param string $uploadDate
     */
    public function __construct(?int $campaignId = null, ?string $description = null, ?string $documentDate = null, ?string $documentName = null, ?string $documentNatureId = null, ?int $documentSize = null, ?string $documentType = null, ?int $misDocumentId = null, ?int $repositoryId = null, ?string $storeUntil = null, ?string $uploadDate = null)
    {
        $this
            ->setCampaignId($campaignId)
            ->setDescription($description)
            ->setDocumentDate($documentDate)
            ->setDocumentName($documentName)
            ->setDocumentNatureId($documentNatureId)
            ->setDocumentSize($documentSize)
            ->setDocumentType($documentType)
            ->setMisDocumentId($misDocumentId)
            ->setRepositoryId($repositoryId)
            ->setStoreUntil($storeUntil)
            ->setUploadDate($uploadDate);
    }
    /**
     * Get campaignId value
     * @return int|null
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }
    /**
     * Set campaignId value
     * @param int $campaignId
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO
     */
    public function setCampaignId(?int $campaignId = null): self
    {
        // validation for constraint: int
        if (!is_null($campaignId) && !(is_int($campaignId) || ctype_digit($campaignId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($campaignId, true), gettype($campaignId)), __LINE__);
        }
        $this->campaignId = $campaignId;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO
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
     * Get documentDate value
     * @return string|null
     */
    public function getDocumentDate(): ?string
    {
        return $this->documentDate;
    }
    /**
     * Set documentDate value
     * @param string $documentDate
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO
     */
    public function setDocumentDate(?string $documentDate = null): self
    {
        // validation for constraint: string
        if (!is_null($documentDate) && !is_string($documentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentDate, true), gettype($documentDate)), __LINE__);
        }
        $this->documentDate = $documentDate;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO
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
     * Get misDocumentId value
     * @return int|null
     */
    public function getMisDocumentId(): ?int
    {
        return $this->misDocumentId;
    }
    /**
     * Set misDocumentId value
     * @param int $misDocumentId
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO
     */
    public function setMisDocumentId(?int $misDocumentId = null): self
    {
        // validation for constraint: int
        if (!is_null($misDocumentId) && !(is_int($misDocumentId) || ctype_digit($misDocumentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($misDocumentId, true), gettype($misDocumentId)), __LINE__);
        }
        $this->misDocumentId = $misDocumentId;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO
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
}
