<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteQueryReqType StructType
 * @subpackage Structs
 */
class ExecuteQueryReqType extends AbstractStructBase
{
    /**
     * The MidocoMisCustomerQuery
     * Meta information extracted from the WSDL
     * - ref: MidocoMisCustomerQuery
     * @var \Pggns\MidocoApi\Mis\StructType\MisCustomerQueryDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MisCustomerQueryDTO $MidocoMisCustomerQuery = null;
    /**
     * The returnedPageSize
     * @var int|null
     */
    protected ?int $returnedPageSize = null;
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
     * The isReadOnly
     * @var bool|null
     */
    protected ?bool $isReadOnly = null;
    /**
     * The justForEstimateOnly
     * @var bool|null
     */
    protected ?bool $justForEstimateOnly = null;
    /**
     * The estimateForOrgUnit
     * @var string|null
     */
    protected ?string $estimateForOrgUnit = null;
    /**
     * The campaignType
     * @var string|null
     */
    protected ?string $campaignType = null;
    /**
     * The orgUnitToExecuteCentralCampaign
     * @var string|null
     */
    protected ?string $orgUnitToExecuteCentralCampaign = null;
    /**
     * The orgUnitToSave
     * @var string|null
     */
    protected ?string $orgUnitToSave = null;
    /**
     * The justSave
     * @var bool|null
     */
    protected ?bool $justSave = null;
    /**
     * Constructor method for ExecuteQueryReqType
     * @uses ExecuteQueryReqType::setMidocoMisCustomerQuery()
     * @uses ExecuteQueryReqType::setReturnedPageSize()
     * @uses ExecuteQueryReqType::setParentTemplateId()
     * @uses ExecuteQueryReqType::setParentTemplateOrgUnit()
     * @uses ExecuteQueryReqType::setIsReadOnly()
     * @uses ExecuteQueryReqType::setJustForEstimateOnly()
     * @uses ExecuteQueryReqType::setEstimateForOrgUnit()
     * @uses ExecuteQueryReqType::setCampaignType()
     * @uses ExecuteQueryReqType::setOrgUnitToExecuteCentralCampaign()
     * @uses ExecuteQueryReqType::setOrgUnitToSave()
     * @uses ExecuteQueryReqType::setJustSave()
     * @param \Pggns\MidocoApi\Mis\StructType\MisCustomerQueryDTO $midocoMisCustomerQuery
     * @param int $returnedPageSize
     * @param int $parentTemplateId
     * @param string $parentTemplateOrgUnit
     * @param bool $isReadOnly
     * @param bool $justForEstimateOnly
     * @param string $estimateForOrgUnit
     * @param string $campaignType
     * @param string $orgUnitToExecuteCentralCampaign
     * @param string $orgUnitToSave
     * @param bool $justSave
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\MisCustomerQueryDTO $midocoMisCustomerQuery = null, ?int $returnedPageSize = null, ?int $parentTemplateId = null, ?string $parentTemplateOrgUnit = null, ?bool $isReadOnly = null, ?bool $justForEstimateOnly = null, ?string $estimateForOrgUnit = null, ?string $campaignType = null, ?string $orgUnitToExecuteCentralCampaign = null, ?string $orgUnitToSave = null, ?bool $justSave = null)
    {
        $this
            ->setMidocoMisCustomerQuery($midocoMisCustomerQuery)
            ->setReturnedPageSize($returnedPageSize)
            ->setParentTemplateId($parentTemplateId)
            ->setParentTemplateOrgUnit($parentTemplateOrgUnit)
            ->setIsReadOnly($isReadOnly)
            ->setJustForEstimateOnly($justForEstimateOnly)
            ->setEstimateForOrgUnit($estimateForOrgUnit)
            ->setCampaignType($campaignType)
            ->setOrgUnitToExecuteCentralCampaign($orgUnitToExecuteCentralCampaign)
            ->setOrgUnitToSave($orgUnitToSave)
            ->setJustSave($justSave);
    }
    /**
     * Get MidocoMisCustomerQuery value
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerQueryDTO|null
     */
    public function getMidocoMisCustomerQuery(): ?\Pggns\MidocoApi\Mis\StructType\MisCustomerQueryDTO
    {
        return $this->MidocoMisCustomerQuery;
    }
    /**
     * Set MidocoMisCustomerQuery value
     * @param \Pggns\MidocoApi\Mis\StructType\MisCustomerQueryDTO $midocoMisCustomerQuery
     * @return \Pggns\MidocoApi\Mis\StructType\ExecuteQueryReqType
     */
    public function setMidocoMisCustomerQuery(?\Pggns\MidocoApi\Mis\StructType\MisCustomerQueryDTO $midocoMisCustomerQuery = null): self
    {
        $this->MidocoMisCustomerQuery = $midocoMisCustomerQuery;
        
        return $this;
    }
    /**
     * Get returnedPageSize value
     * @return int|null
     */
    public function getReturnedPageSize(): ?int
    {
        return $this->returnedPageSize;
    }
    /**
     * Set returnedPageSize value
     * @param int $returnedPageSize
     * @return \Pggns\MidocoApi\Mis\StructType\ExecuteQueryReqType
     */
    public function setReturnedPageSize(?int $returnedPageSize = null): self
    {
        // validation for constraint: int
        if (!is_null($returnedPageSize) && !(is_int($returnedPageSize) || ctype_digit($returnedPageSize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($returnedPageSize, true), gettype($returnedPageSize)), __LINE__);
        }
        $this->returnedPageSize = $returnedPageSize;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\ExecuteQueryReqType
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
     * @return \Pggns\MidocoApi\Mis\StructType\ExecuteQueryReqType
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
     * Get isReadOnly value
     * @return bool|null
     */
    public function getIsReadOnly(): ?bool
    {
        return $this->isReadOnly;
    }
    /**
     * Set isReadOnly value
     * @param bool $isReadOnly
     * @return \Pggns\MidocoApi\Mis\StructType\ExecuteQueryReqType
     */
    public function setIsReadOnly(?bool $isReadOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isReadOnly) && !is_bool($isReadOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isReadOnly, true), gettype($isReadOnly)), __LINE__);
        }
        $this->isReadOnly = $isReadOnly;
        
        return $this;
    }
    /**
     * Get justForEstimateOnly value
     * @return bool|null
     */
    public function getJustForEstimateOnly(): ?bool
    {
        return $this->justForEstimateOnly;
    }
    /**
     * Set justForEstimateOnly value
     * @param bool $justForEstimateOnly
     * @return \Pggns\MidocoApi\Mis\StructType\ExecuteQueryReqType
     */
    public function setJustForEstimateOnly(?bool $justForEstimateOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($justForEstimateOnly) && !is_bool($justForEstimateOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($justForEstimateOnly, true), gettype($justForEstimateOnly)), __LINE__);
        }
        $this->justForEstimateOnly = $justForEstimateOnly;
        
        return $this;
    }
    /**
     * Get estimateForOrgUnit value
     * @return string|null
     */
    public function getEstimateForOrgUnit(): ?string
    {
        return $this->estimateForOrgUnit;
    }
    /**
     * Set estimateForOrgUnit value
     * @param string $estimateForOrgUnit
     * @return \Pggns\MidocoApi\Mis\StructType\ExecuteQueryReqType
     */
    public function setEstimateForOrgUnit(?string $estimateForOrgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($estimateForOrgUnit) && !is_string($estimateForOrgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estimateForOrgUnit, true), gettype($estimateForOrgUnit)), __LINE__);
        }
        $this->estimateForOrgUnit = $estimateForOrgUnit;
        
        return $this;
    }
    /**
     * Get campaignType value
     * @return string|null
     */
    public function getCampaignType(): ?string
    {
        return $this->campaignType;
    }
    /**
     * Set campaignType value
     * @param string $campaignType
     * @return \Pggns\MidocoApi\Mis\StructType\ExecuteQueryReqType
     */
    public function setCampaignType(?string $campaignType = null): self
    {
        // validation for constraint: string
        if (!is_null($campaignType) && !is_string($campaignType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($campaignType, true), gettype($campaignType)), __LINE__);
        }
        $this->campaignType = $campaignType;
        
        return $this;
    }
    /**
     * Get orgUnitToExecuteCentralCampaign value
     * @return string|null
     */
    public function getOrgUnitToExecuteCentralCampaign(): ?string
    {
        return $this->orgUnitToExecuteCentralCampaign;
    }
    /**
     * Set orgUnitToExecuteCentralCampaign value
     * @param string $orgUnitToExecuteCentralCampaign
     * @return \Pggns\MidocoApi\Mis\StructType\ExecuteQueryReqType
     */
    public function setOrgUnitToExecuteCentralCampaign(?string $orgUnitToExecuteCentralCampaign = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnitToExecuteCentralCampaign) && !is_string($orgUnitToExecuteCentralCampaign)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnitToExecuteCentralCampaign, true), gettype($orgUnitToExecuteCentralCampaign)), __LINE__);
        }
        $this->orgUnitToExecuteCentralCampaign = $orgUnitToExecuteCentralCampaign;
        
        return $this;
    }
    /**
     * Get orgUnitToSave value
     * @return string|null
     */
    public function getOrgUnitToSave(): ?string
    {
        return $this->orgUnitToSave;
    }
    /**
     * Set orgUnitToSave value
     * @param string $orgUnitToSave
     * @return \Pggns\MidocoApi\Mis\StructType\ExecuteQueryReqType
     */
    public function setOrgUnitToSave(?string $orgUnitToSave = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnitToSave) && !is_string($orgUnitToSave)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnitToSave, true), gettype($orgUnitToSave)), __LINE__);
        }
        $this->orgUnitToSave = $orgUnitToSave;
        
        return $this;
    }
    /**
     * Get justSave value
     * @return bool|null
     */
    public function getJustSave(): ?bool
    {
        return $this->justSave;
    }
    /**
     * Set justSave value
     * @param bool $justSave
     * @return \Pggns\MidocoApi\Mis\StructType\ExecuteQueryReqType
     */
    public function setJustSave(?bool $justSave = null): self
    {
        // validation for constraint: boolean
        if (!is_null($justSave) && !is_bool($justSave)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($justSave, true), gettype($justSave)), __LINE__);
        }
        $this->justSave = $justSave;
        
        return $this;
    }
}
