<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDeferralArErListCriteriaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoDeferralArErListCriteriaType extends AbstractStructBase
{
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The crsType
     * @var string|null
     */
    protected ?string $crsType = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The orgUnits
     * @var string|null
     */
    protected ?string $orgUnits = null;
    /**
     * The excludedOrgUnits
     * @var string|null
     */
    protected ?string $excludedOrgUnits = null;
    /**
     * Constructor method for MidocoDeferralArErListCriteriaType
     * @uses MidocoDeferralArErListCriteriaType::setStartTravel()
     * @uses MidocoDeferralArErListCriteriaType::setCreationDate()
     * @uses MidocoDeferralArErListCriteriaType::setOrderNo()
     * @uses MidocoDeferralArErListCriteriaType::setSupplierId()
     * @uses MidocoDeferralArErListCriteriaType::setCrsType()
     * @uses MidocoDeferralArErListCriteriaType::setType()
     * @uses MidocoDeferralArErListCriteriaType::setOrgUnits()
     * @uses MidocoDeferralArErListCriteriaType::setExcludedOrgUnits()
     * @param string $startTravel
     * @param string $creationDate
     * @param int $orderNo
     * @param string $supplierId
     * @param string $crsType
     * @param string $type
     * @param string $orgUnits
     * @param string $excludedOrgUnits
     */
    public function __construct(?string $startTravel = null, ?string $creationDate = null, ?int $orderNo = null, ?string $supplierId = null, ?string $crsType = null, ?string $type = null, ?string $orgUnits = null, ?string $excludedOrgUnits = null)
    {
        $this
            ->setStartTravel($startTravel)
            ->setCreationDate($creationDate)
            ->setOrderNo($orderNo)
            ->setSupplierId($supplierId)
            ->setCrsType($crsType)
            ->setType($type)
            ->setOrgUnits($orgUnits)
            ->setExcludedOrgUnits($excludedOrgUnits);
    }
    /**
     * Get startTravel value
     * @return string|null
     */
    public function getStartTravel(): ?string
    {
        return $this->startTravel;
    }
    /**
     * Set startTravel value
     * @param string $startTravel
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErListCriteriaType
     */
    public function setStartTravel(?string $startTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravel) && !is_string($startTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravel, true), gettype($startTravel)), __LINE__);
        }
        $this->startTravel = $startTravel;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErListCriteriaType
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
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErListCriteriaType
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErListCriteriaType
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get crsType value
     * @return string|null
     */
    public function getCrsType(): ?string
    {
        return $this->crsType;
    }
    /**
     * Set crsType value
     * @param string $crsType
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErListCriteriaType
     */
    public function setCrsType(?string $crsType = null): self
    {
        // validation for constraint: string
        if (!is_null($crsType) && !is_string($crsType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crsType, true), gettype($crsType)), __LINE__);
        }
        $this->crsType = $crsType;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErListCriteriaType
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
     * Get orgUnits value
     * @return string|null
     */
    public function getOrgUnits(): ?string
    {
        return $this->orgUnits;
    }
    /**
     * Set orgUnits value
     * @param string $orgUnits
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErListCriteriaType
     */
    public function setOrgUnits(?string $orgUnits = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnits) && !is_string($orgUnits)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnits, true), gettype($orgUnits)), __LINE__);
        }
        $this->orgUnits = $orgUnits;
        
        return $this;
    }
    /**
     * Get excludedOrgUnits value
     * @return string|null
     */
    public function getExcludedOrgUnits(): ?string
    {
        return $this->excludedOrgUnits;
    }
    /**
     * Set excludedOrgUnits value
     * @param string $excludedOrgUnits
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErListCriteriaType
     */
    public function setExcludedOrgUnits(?string $excludedOrgUnits = null): self
    {
        // validation for constraint: string
        if (!is_null($excludedOrgUnits) && !is_string($excludedOrgUnits)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($excludedOrgUnits, true), gettype($excludedOrgUnits)), __LINE__);
        }
        $this->excludedOrgUnits = $excludedOrgUnits;
        
        return $this;
    }
}
