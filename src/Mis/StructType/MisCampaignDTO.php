<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MisCampaignDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MisCampaignDTO extends AbstractStructBase
{
    /**
     * The campaignId
     * @var int|null
     */
    protected ?int $campaignId = null;
    /**
     * The creatingUser
     * @var int|null
     */
    protected ?int $creatingUser = null;
    /**
     * The dateOfIssue
     * @var string|null
     */
    protected ?string $dateOfIssue = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The dueDate
     * @var string|null
     */
    protected ?string $dueDate = null;
    /**
     * The exportFilename
     * @var string|null
     */
    protected ?string $exportFilename = null;
    /**
     * The exportTime
     * @var string|null
     */
    protected ?string $exportTime = null;
    /**
     * The finishedBy
     * @var int|null
     */
    protected ?int $finishedBy = null;
    /**
     * The finishedTime
     * @var string|null
     */
    protected ?string $finishedTime = null;
    /**
     * The frequency
     * @var string|null
     */
    protected ?string $frequency = null;
    /**
     * The importSystem
     * @var string|null
     */
    protected ?string $importSystem = null;
    /**
     * The importedCampaignId
     * @var int|null
     */
    protected ?int $importedCampaignId = null;
    /**
     * The isDeleted
     * @var bool|null
     */
    protected ?bool $isDeleted = null;
    /**
     * The isExecuted
     * @var bool|null
     */
    protected ?bool $isExecuted = null;
    /**
     * The isFinished
     * @var bool|null
     */
    protected ?bool $isFinished = null;
    /**
     * The isImported
     * @var bool|null
     */
    protected ?bool $isImported = null;
    /**
     * The isLite
     * @var bool|null
     */
    protected ?bool $isLite = null;
    /**
     * The isReadonly
     * @var bool|null
     */
    protected ?bool $isReadonly = null;
    /**
     * The isSupercampaign
     * @var bool|null
     */
    protected ?bool $isSupercampaign = null;
    /**
     * The isTemplate
     * @var bool|null
     */
    protected ?bool $isTemplate = null;
    /**
     * The noOfCustomers
     * @var int|null
     */
    protected ?int $noOfCustomers = null;
    /**
     * The noOfResults
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * The onHold
     * @var bool|null
     */
    protected ?bool $onHold = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The orgunitslistInclude
     * @var bool|null
     */
    protected ?bool $orgunitslistInclude = null;
    /**
     * The pageSize
     * @var int|null
     */
    protected ?int $pageSize = null;
    /**
     * The parentTemplateId
     * @var int|null
     */
    protected ?int $parentTemplateId = null;
    /**
     * The parentTemplateOrgUnit
     * @var string|null
     */
    protected ?string $parentTemplateOrgUnit = null;
    /**
     * The rowMetadata
     * @var string|null
     */
    protected ?string $rowMetadata = null;
    /**
     * The startTime
     * @var string|null
     */
    protected ?string $startTime = null;
    /**
     * The templateId
     * @var int|null
     */
    protected ?int $templateId = null;
    /**
     * The templateOrgUnit
     * @var string|null
     */
    protected ?string $templateOrgUnit = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The visibility
     * @var int|null
     */
    protected ?int $visibility = null;
    /**
     * The waitingForExec
     * @var bool|null
     */
    protected ?bool $waitingForExec = null;
    /**
     * Constructor method for MisCampaignDTO
     * @uses MisCampaignDTO::setCampaignId()
     * @uses MisCampaignDTO::setCreatingUser()
     * @uses MisCampaignDTO::setDateOfIssue()
     * @uses MisCampaignDTO::setDescription()
     * @uses MisCampaignDTO::setDueDate()
     * @uses MisCampaignDTO::setExportFilename()
     * @uses MisCampaignDTO::setExportTime()
     * @uses MisCampaignDTO::setFinishedBy()
     * @uses MisCampaignDTO::setFinishedTime()
     * @uses MisCampaignDTO::setFrequency()
     * @uses MisCampaignDTO::setImportSystem()
     * @uses MisCampaignDTO::setImportedCampaignId()
     * @uses MisCampaignDTO::setIsDeleted()
     * @uses MisCampaignDTO::setIsExecuted()
     * @uses MisCampaignDTO::setIsFinished()
     * @uses MisCampaignDTO::setIsImported()
     * @uses MisCampaignDTO::setIsLite()
     * @uses MisCampaignDTO::setIsReadonly()
     * @uses MisCampaignDTO::setIsSupercampaign()
     * @uses MisCampaignDTO::setIsTemplate()
     * @uses MisCampaignDTO::setNoOfCustomers()
     * @uses MisCampaignDTO::setNoOfResults()
     * @uses MisCampaignDTO::setOnHold()
     * @uses MisCampaignDTO::setOrgUnit()
     * @uses MisCampaignDTO::setOrgunitslistInclude()
     * @uses MisCampaignDTO::setPageSize()
     * @uses MisCampaignDTO::setParentTemplateId()
     * @uses MisCampaignDTO::setParentTemplateOrgUnit()
     * @uses MisCampaignDTO::setRowMetadata()
     * @uses MisCampaignDTO::setStartTime()
     * @uses MisCampaignDTO::setTemplateId()
     * @uses MisCampaignDTO::setTemplateOrgUnit()
     * @uses MisCampaignDTO::setType()
     * @uses MisCampaignDTO::setVisibility()
     * @uses MisCampaignDTO::setWaitingForExec()
     * @param int $campaignId
     * @param int $creatingUser
     * @param string $dateOfIssue
     * @param string $description
     * @param string $dueDate
     * @param string $exportFilename
     * @param string $exportTime
     * @param int $finishedBy
     * @param string $finishedTime
     * @param string $frequency
     * @param string $importSystem
     * @param int $importedCampaignId
     * @param bool $isDeleted
     * @param bool $isExecuted
     * @param bool $isFinished
     * @param bool $isImported
     * @param bool $isLite
     * @param bool $isReadonly
     * @param bool $isSupercampaign
     * @param bool $isTemplate
     * @param int $noOfCustomers
     * @param int $noOfResults
     * @param bool $onHold
     * @param string $orgUnit
     * @param bool $orgunitslistInclude
     * @param int $pageSize
     * @param int $parentTemplateId
     * @param string $parentTemplateOrgUnit
     * @param string $rowMetadata
     * @param string $startTime
     * @param int $templateId
     * @param string $templateOrgUnit
     * @param string $type
     * @param int $visibility
     * @param bool $waitingForExec
     */
    public function __construct(?int $campaignId = null, ?int $creatingUser = null, ?string $dateOfIssue = null, ?string $description = null, ?string $dueDate = null, ?string $exportFilename = null, ?string $exportTime = null, ?int $finishedBy = null, ?string $finishedTime = null, ?string $frequency = null, ?string $importSystem = null, ?int $importedCampaignId = null, ?bool $isDeleted = null, ?bool $isExecuted = null, ?bool $isFinished = null, ?bool $isImported = null, ?bool $isLite = null, ?bool $isReadonly = null, ?bool $isSupercampaign = null, ?bool $isTemplate = null, ?int $noOfCustomers = null, ?int $noOfResults = null, ?bool $onHold = null, ?string $orgUnit = null, ?bool $orgunitslistInclude = null, ?int $pageSize = null, ?int $parentTemplateId = null, ?string $parentTemplateOrgUnit = null, ?string $rowMetadata = null, ?string $startTime = null, ?int $templateId = null, ?string $templateOrgUnit = null, ?string $type = null, ?int $visibility = null, ?bool $waitingForExec = null)
    {
        $this
            ->setCampaignId($campaignId)
            ->setCreatingUser($creatingUser)
            ->setDateOfIssue($dateOfIssue)
            ->setDescription($description)
            ->setDueDate($dueDate)
            ->setExportFilename($exportFilename)
            ->setExportTime($exportTime)
            ->setFinishedBy($finishedBy)
            ->setFinishedTime($finishedTime)
            ->setFrequency($frequency)
            ->setImportSystem($importSystem)
            ->setImportedCampaignId($importedCampaignId)
            ->setIsDeleted($isDeleted)
            ->setIsExecuted($isExecuted)
            ->setIsFinished($isFinished)
            ->setIsImported($isImported)
            ->setIsLite($isLite)
            ->setIsReadonly($isReadonly)
            ->setIsSupercampaign($isSupercampaign)
            ->setIsTemplate($isTemplate)
            ->setNoOfCustomers($noOfCustomers)
            ->setNoOfResults($noOfResults)
            ->setOnHold($onHold)
            ->setOrgUnit($orgUnit)
            ->setOrgunitslistInclude($orgunitslistInclude)
            ->setPageSize($pageSize)
            ->setParentTemplateId($parentTemplateId)
            ->setParentTemplateOrgUnit($parentTemplateOrgUnit)
            ->setRowMetadata($rowMetadata)
            ->setStartTime($startTime)
            ->setTemplateId($templateId)
            ->setTemplateOrgUnit($templateOrgUnit)
            ->setType($type)
            ->setVisibility($visibility)
            ->setWaitingForExec($waitingForExec);
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
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
     * Get creatingUser value
     * @return int|null
     */
    public function getCreatingUser(): ?int
    {
        return $this->creatingUser;
    }
    /**
     * Set creatingUser value
     * @param int $creatingUser
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setCreatingUser(?int $creatingUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creatingUser) && !(is_int($creatingUser) || ctype_digit($creatingUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creatingUser, true), gettype($creatingUser)), __LINE__);
        }
        $this->creatingUser = $creatingUser;
        
        return $this;
    }
    /**
     * Get dateOfIssue value
     * @return string|null
     */
    public function getDateOfIssue(): ?string
    {
        return $this->dateOfIssue;
    }
    /**
     * Set dateOfIssue value
     * @param string $dateOfIssue
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setDateOfIssue(?string $dateOfIssue = null): self
    {
        // validation for constraint: string
        if (!is_null($dateOfIssue) && !is_string($dateOfIssue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateOfIssue, true), gettype($dateOfIssue)), __LINE__);
        }
        $this->dateOfIssue = $dateOfIssue;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
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
     * Get dueDate value
     * @return string|null
     */
    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }
    /**
     * Set dueDate value
     * @param string $dueDate
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setDueDate(?string $dueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($dueDate) && !is_string($dueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDate, true), gettype($dueDate)), __LINE__);
        }
        $this->dueDate = $dueDate;
        
        return $this;
    }
    /**
     * Get exportFilename value
     * @return string|null
     */
    public function getExportFilename(): ?string
    {
        return $this->exportFilename;
    }
    /**
     * Set exportFilename value
     * @param string $exportFilename
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setExportFilename(?string $exportFilename = null): self
    {
        // validation for constraint: string
        if (!is_null($exportFilename) && !is_string($exportFilename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportFilename, true), gettype($exportFilename)), __LINE__);
        }
        $this->exportFilename = $exportFilename;
        
        return $this;
    }
    /**
     * Get exportTime value
     * @return string|null
     */
    public function getExportTime(): ?string
    {
        return $this->exportTime;
    }
    /**
     * Set exportTime value
     * @param string $exportTime
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setExportTime(?string $exportTime = null): self
    {
        // validation for constraint: string
        if (!is_null($exportTime) && !is_string($exportTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportTime, true), gettype($exportTime)), __LINE__);
        }
        $this->exportTime = $exportTime;
        
        return $this;
    }
    /**
     * Get finishedBy value
     * @return int|null
     */
    public function getFinishedBy(): ?int
    {
        return $this->finishedBy;
    }
    /**
     * Set finishedBy value
     * @param int $finishedBy
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setFinishedBy(?int $finishedBy = null): self
    {
        // validation for constraint: int
        if (!is_null($finishedBy) && !(is_int($finishedBy) || ctype_digit($finishedBy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($finishedBy, true), gettype($finishedBy)), __LINE__);
        }
        $this->finishedBy = $finishedBy;
        
        return $this;
    }
    /**
     * Get finishedTime value
     * @return string|null
     */
    public function getFinishedTime(): ?string
    {
        return $this->finishedTime;
    }
    /**
     * Set finishedTime value
     * @param string $finishedTime
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setFinishedTime(?string $finishedTime = null): self
    {
        // validation for constraint: string
        if (!is_null($finishedTime) && !is_string($finishedTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finishedTime, true), gettype($finishedTime)), __LINE__);
        }
        $this->finishedTime = $finishedTime;
        
        return $this;
    }
    /**
     * Get frequency value
     * @return string|null
     */
    public function getFrequency(): ?string
    {
        return $this->frequency;
    }
    /**
     * Set frequency value
     * @param string $frequency
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setFrequency(?string $frequency = null): self
    {
        // validation for constraint: string
        if (!is_null($frequency) && !is_string($frequency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($frequency, true), gettype($frequency)), __LINE__);
        }
        $this->frequency = $frequency;
        
        return $this;
    }
    /**
     * Get importSystem value
     * @return string|null
     */
    public function getImportSystem(): ?string
    {
        return $this->importSystem;
    }
    /**
     * Set importSystem value
     * @param string $importSystem
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setImportSystem(?string $importSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($importSystem) && !is_string($importSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importSystem, true), gettype($importSystem)), __LINE__);
        }
        $this->importSystem = $importSystem;
        
        return $this;
    }
    /**
     * Get importedCampaignId value
     * @return int|null
     */
    public function getImportedCampaignId(): ?int
    {
        return $this->importedCampaignId;
    }
    /**
     * Set importedCampaignId value
     * @param int $importedCampaignId
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setImportedCampaignId(?int $importedCampaignId = null): self
    {
        // validation for constraint: int
        if (!is_null($importedCampaignId) && !(is_int($importedCampaignId) || ctype_digit($importedCampaignId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($importedCampaignId, true), gettype($importedCampaignId)), __LINE__);
        }
        $this->importedCampaignId = $importedCampaignId;
        
        return $this;
    }
    /**
     * Get isDeleted value
     * @return bool|null
     */
    public function getIsDeleted(): ?bool
    {
        return $this->isDeleted;
    }
    /**
     * Set isDeleted value
     * @param bool $isDeleted
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setIsDeleted(?bool $isDeleted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDeleted) && !is_bool($isDeleted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeleted, true), gettype($isDeleted)), __LINE__);
        }
        $this->isDeleted = $isDeleted;
        
        return $this;
    }
    /**
     * Get isExecuted value
     * @return bool|null
     */
    public function getIsExecuted(): ?bool
    {
        return $this->isExecuted;
    }
    /**
     * Set isExecuted value
     * @param bool $isExecuted
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setIsExecuted(?bool $isExecuted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isExecuted) && !is_bool($isExecuted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExecuted, true), gettype($isExecuted)), __LINE__);
        }
        $this->isExecuted = $isExecuted;
        
        return $this;
    }
    /**
     * Get isFinished value
     * @return bool|null
     */
    public function getIsFinished(): ?bool
    {
        return $this->isFinished;
    }
    /**
     * Set isFinished value
     * @param bool $isFinished
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setIsFinished(?bool $isFinished = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isFinished) && !is_bool($isFinished)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFinished, true), gettype($isFinished)), __LINE__);
        }
        $this->isFinished = $isFinished;
        
        return $this;
    }
    /**
     * Get isImported value
     * @return bool|null
     */
    public function getIsImported(): ?bool
    {
        return $this->isImported;
    }
    /**
     * Set isImported value
     * @param bool $isImported
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setIsImported(?bool $isImported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isImported) && !is_bool($isImported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isImported, true), gettype($isImported)), __LINE__);
        }
        $this->isImported = $isImported;
        
        return $this;
    }
    /**
     * Get isLite value
     * @return bool|null
     */
    public function getIsLite(): ?bool
    {
        return $this->isLite;
    }
    /**
     * Set isLite value
     * @param bool $isLite
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setIsLite(?bool $isLite = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isLite) && !is_bool($isLite)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isLite, true), gettype($isLite)), __LINE__);
        }
        $this->isLite = $isLite;
        
        return $this;
    }
    /**
     * Get isReadonly value
     * @return bool|null
     */
    public function getIsReadonly(): ?bool
    {
        return $this->isReadonly;
    }
    /**
     * Set isReadonly value
     * @param bool $isReadonly
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setIsReadonly(?bool $isReadonly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isReadonly) && !is_bool($isReadonly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isReadonly, true), gettype($isReadonly)), __LINE__);
        }
        $this->isReadonly = $isReadonly;
        
        return $this;
    }
    /**
     * Get isSupercampaign value
     * @return bool|null
     */
    public function getIsSupercampaign(): ?bool
    {
        return $this->isSupercampaign;
    }
    /**
     * Set isSupercampaign value
     * @param bool $isSupercampaign
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setIsSupercampaign(?bool $isSupercampaign = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSupercampaign) && !is_bool($isSupercampaign)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSupercampaign, true), gettype($isSupercampaign)), __LINE__);
        }
        $this->isSupercampaign = $isSupercampaign;
        
        return $this;
    }
    /**
     * Get isTemplate value
     * @return bool|null
     */
    public function getIsTemplate(): ?bool
    {
        return $this->isTemplate;
    }
    /**
     * Set isTemplate value
     * @param bool $isTemplate
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setIsTemplate(?bool $isTemplate = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isTemplate) && !is_bool($isTemplate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isTemplate, true), gettype($isTemplate)), __LINE__);
        }
        $this->isTemplate = $isTemplate;
        
        return $this;
    }
    /**
     * Get noOfCustomers value
     * @return int|null
     */
    public function getNoOfCustomers(): ?int
    {
        return $this->noOfCustomers;
    }
    /**
     * Set noOfCustomers value
     * @param int $noOfCustomers
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setNoOfCustomers(?int $noOfCustomers = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfCustomers) && !(is_int($noOfCustomers) || ctype_digit($noOfCustomers))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfCustomers, true), gettype($noOfCustomers)), __LINE__);
        }
        $this->noOfCustomers = $noOfCustomers;
        
        return $this;
    }
    /**
     * Get noOfResults value
     * @return int|null
     */
    public function getNoOfResults(): ?int
    {
        return $this->noOfResults;
    }
    /**
     * Set noOfResults value
     * @param int $noOfResults
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setNoOfResults(?int $noOfResults = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfResults) && !(is_int($noOfResults) || ctype_digit($noOfResults))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfResults, true), gettype($noOfResults)), __LINE__);
        }
        $this->noOfResults = $noOfResults;
        
        return $this;
    }
    /**
     * Get onHold value
     * @return bool|null
     */
    public function getOnHold(): ?bool
    {
        return $this->onHold;
    }
    /**
     * Set onHold value
     * @param bool $onHold
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setOnHold(?bool $onHold = null): self
    {
        // validation for constraint: boolean
        if (!is_null($onHold) && !is_bool($onHold)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onHold, true), gettype($onHold)), __LINE__);
        }
        $this->onHold = $onHold;
        
        return $this;
    }
    /**
     * Get orgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
        return $this;
    }
    /**
     * Get orgunitslistInclude value
     * @return bool|null
     */
    public function getOrgunitslistInclude(): ?bool
    {
        return $this->orgunitslistInclude;
    }
    /**
     * Set orgunitslistInclude value
     * @param bool $orgunitslistInclude
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setOrgunitslistInclude(?bool $orgunitslistInclude = null): self
    {
        // validation for constraint: boolean
        if (!is_null($orgunitslistInclude) && !is_bool($orgunitslistInclude)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($orgunitslistInclude, true), gettype($orgunitslistInclude)), __LINE__);
        }
        $this->orgunitslistInclude = $orgunitslistInclude;
        
        return $this;
    }
    /**
     * Get pageSize value
     * @return int|null
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }
    /**
     * Set pageSize value
     * @param int $pageSize
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setPageSize(?int $pageSize = null): self
    {
        // validation for constraint: int
        if (!is_null($pageSize) && !(is_int($pageSize) || ctype_digit($pageSize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageSize, true), gettype($pageSize)), __LINE__);
        }
        $this->pageSize = $pageSize;
        
        return $this;
    }
    /**
     * Get parentTemplateId value
     * @return int|null
     */
    public function getParentTemplateId(): ?int
    {
        return $this->parentTemplateId;
    }
    /**
     * Set parentTemplateId value
     * @param int $parentTemplateId
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setParentTemplateId(?int $parentTemplateId = null): self
    {
        // validation for constraint: int
        if (!is_null($parentTemplateId) && !(is_int($parentTemplateId) || ctype_digit($parentTemplateId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parentTemplateId, true), gettype($parentTemplateId)), __LINE__);
        }
        $this->parentTemplateId = $parentTemplateId;
        
        return $this;
    }
    /**
     * Get parentTemplateOrgUnit value
     * @return string|null
     */
    public function getParentTemplateOrgUnit(): ?string
    {
        return $this->parentTemplateOrgUnit;
    }
    /**
     * Set parentTemplateOrgUnit value
     * @param string $parentTemplateOrgUnit
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setParentTemplateOrgUnit(?string $parentTemplateOrgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($parentTemplateOrgUnit) && !is_string($parentTemplateOrgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentTemplateOrgUnit, true), gettype($parentTemplateOrgUnit)), __LINE__);
        }
        $this->parentTemplateOrgUnit = $parentTemplateOrgUnit;
        
        return $this;
    }
    /**
     * Get rowMetadata value
     * @return string|null
     */
    public function getRowMetadata(): ?string
    {
        return $this->rowMetadata;
    }
    /**
     * Set rowMetadata value
     * @param string $rowMetadata
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setRowMetadata(?string $rowMetadata = null): self
    {
        // validation for constraint: string
        if (!is_null($rowMetadata) && !is_string($rowMetadata)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rowMetadata, true), gettype($rowMetadata)), __LINE__);
        }
        $this->rowMetadata = $rowMetadata;
        
        return $this;
    }
    /**
     * Get startTime value
     * @return string|null
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }
    /**
     * Set startTime value
     * @param string $startTime
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setStartTime(?string $startTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->startTime = $startTime;
        
        return $this;
    }
    /**
     * Get templateId value
     * @return int|null
     */
    public function getTemplateId(): ?int
    {
        return $this->templateId;
    }
    /**
     * Set templateId value
     * @param int $templateId
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setTemplateId(?int $templateId = null): self
    {
        // validation for constraint: int
        if (!is_null($templateId) && !(is_int($templateId) || ctype_digit($templateId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($templateId, true), gettype($templateId)), __LINE__);
        }
        $this->templateId = $templateId;
        
        return $this;
    }
    /**
     * Get templateOrgUnit value
     * @return string|null
     */
    public function getTemplateOrgUnit(): ?string
    {
        return $this->templateOrgUnit;
    }
    /**
     * Set templateOrgUnit value
     * @param string $templateOrgUnit
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setTemplateOrgUnit(?string $templateOrgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($templateOrgUnit) && !is_string($templateOrgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateOrgUnit, true), gettype($templateOrgUnit)), __LINE__);
        }
        $this->templateOrgUnit = $templateOrgUnit;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
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
     * Get visibility value
     * @return int|null
     */
    public function getVisibility(): ?int
    {
        return $this->visibility;
    }
    /**
     * Set visibility value
     * @param int $visibility
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setVisibility(?int $visibility = null): self
    {
        // validation for constraint: int
        if (!is_null($visibility) && !(is_int($visibility) || ctype_digit($visibility))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($visibility, true), gettype($visibility)), __LINE__);
        }
        $this->visibility = $visibility;
        
        return $this;
    }
    /**
     * Get waitingForExec value
     * @return bool|null
     */
    public function getWaitingForExec(): ?bool
    {
        return $this->waitingForExec;
    }
    /**
     * Set waitingForExec value
     * @param bool $waitingForExec
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDTO
     */
    public function setWaitingForExec(?bool $waitingForExec = null): self
    {
        // validation for constraint: boolean
        if (!is_null($waitingForExec) && !is_bool($waitingForExec)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($waitingForExec, true), gettype($waitingForExec)), __LINE__);
        }
        $this->waitingForExec = $waitingForExec;
        
        return $this;
    }
}
