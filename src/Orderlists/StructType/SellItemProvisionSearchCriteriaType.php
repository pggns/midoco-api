<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellItemProvisionSearchCriteriaType StructType
 * @subpackage Structs
 */
class SellItemProvisionSearchCriteriaType extends AbstractStructBase
{
    /**
     * The supplier
     * @var string|null
     */
    protected ?string $supplier = null;
    /**
     * The supplierSettlementGroup
     * @var string|null
     */
    protected ?string $supplierSettlementGroup = null;
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The endTravel
     * @var string|null
     */
    protected ?string $endTravel = null;
    /**
     * The creationStartDate
     * @var string|null
     */
    protected ?string $creationStartDate = null;
    /**
     * The creationEndDate
     * @var string|null
     */
    protected ?string $creationEndDate = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The surname
     * @var string|null
     */
    protected ?string $surname = null;
    /**
     * The showGrantedRevenues
     * @var bool|null
     */
    protected ?bool $showGrantedRevenues = null;
    /**
     * The suppressZeroRevenue
     * @var bool|null
     */
    protected ?bool $suppressZeroRevenue = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The orderNo
     * @var string|null
     */
    protected ?string $orderNo = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * Constructor method for SellItemProvisionSearchCriteriaType
     * @uses SellItemProvisionSearchCriteriaType::setSupplier()
     * @uses SellItemProvisionSearchCriteriaType::setSupplierSettlementGroup()
     * @uses SellItemProvisionSearchCriteriaType::setStartTravel()
     * @uses SellItemProvisionSearchCriteriaType::setEndTravel()
     * @uses SellItemProvisionSearchCriteriaType::setCreationStartDate()
     * @uses SellItemProvisionSearchCriteriaType::setCreationEndDate()
     * @uses SellItemProvisionSearchCriteriaType::setBookingId()
     * @uses SellItemProvisionSearchCriteriaType::setForename()
     * @uses SellItemProvisionSearchCriteriaType::setSurname()
     * @uses SellItemProvisionSearchCriteriaType::setShowGrantedRevenues()
     * @uses SellItemProvisionSearchCriteriaType::setSuppressZeroRevenue()
     * @uses SellItemProvisionSearchCriteriaType::setUnitName()
     * @uses SellItemProvisionSearchCriteriaType::setOrderNo()
     * @uses SellItemProvisionSearchCriteriaType::setPaymentType()
     * @uses SellItemProvisionSearchCriteriaType::setItemId()
     * @param string $supplier
     * @param string $supplierSettlementGroup
     * @param string $startTravel
     * @param string $endTravel
     * @param string $creationStartDate
     * @param string $creationEndDate
     * @param string $bookingId
     * @param string $forename
     * @param string $surname
     * @param bool $showGrantedRevenues
     * @param bool $suppressZeroRevenue
     * @param string $unitName
     * @param string $orderNo
     * @param string $paymentType
     * @param int $itemId
     */
    public function __construct(?string $supplier = null, ?string $supplierSettlementGroup = null, ?string $startTravel = null, ?string $endTravel = null, ?string $creationStartDate = null, ?string $creationEndDate = null, ?string $bookingId = null, ?string $forename = null, ?string $surname = null, ?bool $showGrantedRevenues = null, ?bool $suppressZeroRevenue = null, ?string $unitName = null, ?string $orderNo = null, ?string $paymentType = null, ?int $itemId = null)
    {
        $this
            ->setSupplier($supplier)
            ->setSupplierSettlementGroup($supplierSettlementGroup)
            ->setStartTravel($startTravel)
            ->setEndTravel($endTravel)
            ->setCreationStartDate($creationStartDate)
            ->setCreationEndDate($creationEndDate)
            ->setBookingId($bookingId)
            ->setForename($forename)
            ->setSurname($surname)
            ->setShowGrantedRevenues($showGrantedRevenues)
            ->setSuppressZeroRevenue($suppressZeroRevenue)
            ->setUnitName($unitName)
            ->setOrderNo($orderNo)
            ->setPaymentType($paymentType)
            ->setItemId($itemId);
    }
    /**
     * Get supplier value
     * @return string|null
     */
    public function getSupplier(): ?string
    {
        return $this->supplier;
    }
    /**
     * Set supplier value
     * @param string $supplier
     * @return \Pggns\MidocoApi\Orderlists\StructType\SellItemProvisionSearchCriteriaType
     */
    public function setSupplier(?string $supplier = null): self
    {
        // validation for constraint: string
        if (!is_null($supplier) && !is_string($supplier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier, true), gettype($supplier)), __LINE__);
        }
        $this->supplier = $supplier;
        
        return $this;
    }
    /**
     * Get supplierSettlementGroup value
     * @return string|null
     */
    public function getSupplierSettlementGroup(): ?string
    {
        return $this->supplierSettlementGroup;
    }
    /**
     * Set supplierSettlementGroup value
     * @param string $supplierSettlementGroup
     * @return \Pggns\MidocoApi\Orderlists\StructType\SellItemProvisionSearchCriteriaType
     */
    public function setSupplierSettlementGroup(?string $supplierSettlementGroup = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierSettlementGroup) && !is_string($supplierSettlementGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierSettlementGroup, true), gettype($supplierSettlementGroup)), __LINE__);
        }
        $this->supplierSettlementGroup = $supplierSettlementGroup;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\SellItemProvisionSearchCriteriaType
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
     * Get endTravel value
     * @return string|null
     */
    public function getEndTravel(): ?string
    {
        return $this->endTravel;
    }
    /**
     * Set endTravel value
     * @param string $endTravel
     * @return \Pggns\MidocoApi\Orderlists\StructType\SellItemProvisionSearchCriteriaType
     */
    public function setEndTravel(?string $endTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($endTravel) && !is_string($endTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTravel, true), gettype($endTravel)), __LINE__);
        }
        $this->endTravel = $endTravel;
        
        return $this;
    }
    /**
     * Get creationStartDate value
     * @return string|null
     */
    public function getCreationStartDate(): ?string
    {
        return $this->creationStartDate;
    }
    /**
     * Set creationStartDate value
     * @param string $creationStartDate
     * @return \Pggns\MidocoApi\Orderlists\StructType\SellItemProvisionSearchCriteriaType
     */
    public function setCreationStartDate(?string $creationStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationStartDate) && !is_string($creationStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationStartDate, true), gettype($creationStartDate)), __LINE__);
        }
        $this->creationStartDate = $creationStartDate;
        
        return $this;
    }
    /**
     * Get creationEndDate value
     * @return string|null
     */
    public function getCreationEndDate(): ?string
    {
        return $this->creationEndDate;
    }
    /**
     * Set creationEndDate value
     * @param string $creationEndDate
     * @return \Pggns\MidocoApi\Orderlists\StructType\SellItemProvisionSearchCriteriaType
     */
    public function setCreationEndDate(?string $creationEndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationEndDate) && !is_string($creationEndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationEndDate, true), gettype($creationEndDate)), __LINE__);
        }
        $this->creationEndDate = $creationEndDate;
        
        return $this;
    }
    /**
     * Get bookingId value
     * @return string|null
     */
    public function getBookingId(): ?string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Orderlists\StructType\SellItemProvisionSearchCriteriaType
     */
    public function setBookingId(?string $bookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
    /**
     * Get forename value
     * @return string|null
     */
    public function getForename(): ?string
    {
        return $this->forename;
    }
    /**
     * Set forename value
     * @param string $forename
     * @return \Pggns\MidocoApi\Orderlists\StructType\SellItemProvisionSearchCriteriaType
     */
    public function setForename(?string $forename = null): self
    {
        // validation for constraint: string
        if (!is_null($forename) && !is_string($forename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forename, true), gettype($forename)), __LINE__);
        }
        $this->forename = $forename;
        
        return $this;
    }
    /**
     * Get surname value
     * @return string|null
     */
    public function getSurname(): ?string
    {
        return $this->surname;
    }
    /**
     * Set surname value
     * @param string $surname
     * @return \Pggns\MidocoApi\Orderlists\StructType\SellItemProvisionSearchCriteriaType
     */
    public function setSurname(?string $surname = null): self
    {
        // validation for constraint: string
        if (!is_null($surname) && !is_string($surname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($surname, true), gettype($surname)), __LINE__);
        }
        $this->surname = $surname;
        
        return $this;
    }
    /**
     * Get showGrantedRevenues value
     * @return bool|null
     */
    public function getShowGrantedRevenues(): ?bool
    {
        return $this->showGrantedRevenues;
    }
    /**
     * Set showGrantedRevenues value
     * @param bool $showGrantedRevenues
     * @return \Pggns\MidocoApi\Orderlists\StructType\SellItemProvisionSearchCriteriaType
     */
    public function setShowGrantedRevenues(?bool $showGrantedRevenues = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showGrantedRevenues) && !is_bool($showGrantedRevenues)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showGrantedRevenues, true), gettype($showGrantedRevenues)), __LINE__);
        }
        $this->showGrantedRevenues = $showGrantedRevenues;
        
        return $this;
    }
    /**
     * Get suppressZeroRevenue value
     * @return bool|null
     */
    public function getSuppressZeroRevenue(): ?bool
    {
        return $this->suppressZeroRevenue;
    }
    /**
     * Set suppressZeroRevenue value
     * @param bool $suppressZeroRevenue
     * @return \Pggns\MidocoApi\Orderlists\StructType\SellItemProvisionSearchCriteriaType
     */
    public function setSuppressZeroRevenue(?bool $suppressZeroRevenue = null): self
    {
        // validation for constraint: boolean
        if (!is_null($suppressZeroRevenue) && !is_bool($suppressZeroRevenue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($suppressZeroRevenue, true), gettype($suppressZeroRevenue)), __LINE__);
        }
        $this->suppressZeroRevenue = $suppressZeroRevenue;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\SellItemProvisionSearchCriteriaType
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
     * Get orderNo value
     * @return string|null
     */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param string $orderNo
     * @return \Pggns\MidocoApi\Orderlists\StructType\SellItemProvisionSearchCriteriaType
     */
    public function setOrderNo(?string $orderNo = null): self
    {
        // validation for constraint: string
        if (!is_null($orderNo) && !is_string($orderNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get paymentType value
     * @return string|null
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }
    /**
     * Set paymentType value
     * @param string $paymentType
     * @return \Pggns\MidocoApi\Orderlists\StructType\SellItemProvisionSearchCriteriaType
     */
    public function setPaymentType(?string $paymentType = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentType) && !is_string($paymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentType, true), gettype($paymentType)), __LINE__);
        }
        $this->paymentType = $paymentType;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Orderlists\StructType\SellItemProvisionSearchCriteriaType
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
}
