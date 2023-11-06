<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CampaignSearchDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CampaignSearchDTO extends AbstractStructBase
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The issueDate
     * @var string|null
     */
    protected ?string $issueDate = null;
    /**
     * The visibility
     * @var int|null
     */
    protected ?int $visibility = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The creatingUser
     * @var string|null
     */
    protected ?string $creatingUser = null;
    /**
     * The searchType
     * @var string|null
     */
    protected ?string $searchType = null;
    /**
     * Constructor method for CampaignSearchDTO
     * @uses CampaignSearchDTO::setDescription()
     * @uses CampaignSearchDTO::setIssueDate()
     * @uses CampaignSearchDTO::setVisibility()
     * @uses CampaignSearchDTO::setOrgUnit()
     * @uses CampaignSearchDTO::setCreatingUser()
     * @uses CampaignSearchDTO::setSearchType()
     * @param string $description
     * @param string $issueDate
     * @param int $visibility
     * @param string $orgUnit
     * @param string $creatingUser
     * @param string $searchType
     */
    public function __construct(?string $description = null, ?string $issueDate = null, ?int $visibility = null, ?string $orgUnit = null, ?string $creatingUser = null, ?string $searchType = null)
    {
        $this
            ->setDescription($description)
            ->setIssueDate($issueDate)
            ->setVisibility($visibility)
            ->setOrgUnit($orgUnit)
            ->setCreatingUser($creatingUser)
            ->setSearchType($searchType);
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
     * @return \Pggns\MidocoApi\Mis\StructType\CampaignSearchDTO
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
     * Get issueDate value
     * @return string|null
     */
    public function getIssueDate(): ?string
    {
        return $this->issueDate;
    }
    /**
     * Set issueDate value
     * @param string $issueDate
     * @return \Pggns\MidocoApi\Mis\StructType\CampaignSearchDTO
     */
    public function setIssueDate(?string $issueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($issueDate) && !is_string($issueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issueDate, true), gettype($issueDate)), __LINE__);
        }
        $this->issueDate = $issueDate;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\CampaignSearchDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CampaignSearchDTO
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
     * Get creatingUser value
     * @return string|null
     */
    public function getCreatingUser(): ?string
    {
        return $this->creatingUser;
    }
    /**
     * Set creatingUser value
     * @param string $creatingUser
     * @return \Pggns\MidocoApi\Mis\StructType\CampaignSearchDTO
     */
    public function setCreatingUser(?string $creatingUser = null): self
    {
        // validation for constraint: string
        if (!is_null($creatingUser) && !is_string($creatingUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creatingUser, true), gettype($creatingUser)), __LINE__);
        }
        $this->creatingUser = $creatingUser;
        
        return $this;
    }
    /**
     * Get searchType value
     * @return string|null
     */
    public function getSearchType(): ?string
    {
        return $this->searchType;
    }
    /**
     * Set searchType value
     * @param string $searchType
     * @return \Pggns\MidocoApi\Mis\StructType\CampaignSearchDTO
     */
    public function setSearchType(?string $searchType = null): self
    {
        // validation for constraint: string
        if (!is_null($searchType) && !is_string($searchType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchType, true), gettype($searchType)), __LINE__);
        }
        $this->searchType = $searchType;
        
        return $this;
    }
}
