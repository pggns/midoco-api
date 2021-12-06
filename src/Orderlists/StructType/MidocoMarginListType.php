<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMarginListType StructType
 * @subpackage Structs
 */
class MidocoMarginListType extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The customerName
     * @var string|null
     */
    protected ?string $customerName = null;
    /**
     * The feeSum
     * @var float|null
     */
    protected ?float $feeSum = null;
    /**
     * The commissionSum
     * @var float|null
     */
    protected ?float $commissionSum = null;
    /**
     * The supplierInvoiceSum
     * @var float|null
     */
    protected ?float $supplierInvoiceSum = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The dbAmount
     * @var float|null
     */
    protected ?float $dbAmount = null;
    /**
     * The dbPercent
     * @var float|null
     */
    protected ?float $dbPercent = null;
    /**
     * The category
     * @var string|null
     */
    protected ?string $category = null;
    /**
     * Constructor method for MidocoMarginListType
     * @uses MidocoMarginListType::setUnitName()
     * @uses MidocoMarginListType::setOrderNo()
     * @uses MidocoMarginListType::setAgencyId()
     * @uses MidocoMarginListType::setCustomerName()
     * @uses MidocoMarginListType::setFeeSum()
     * @uses MidocoMarginListType::setCommissionSum()
     * @uses MidocoMarginListType::setSupplierInvoiceSum()
     * @uses MidocoMarginListType::setPrice()
     * @uses MidocoMarginListType::setDbAmount()
     * @uses MidocoMarginListType::setDbPercent()
     * @uses MidocoMarginListType::setCategory()
     * @param string $unitName
     * @param int $orderNo
     * @param string $agencyId
     * @param string $customerName
     * @param float $feeSum
     * @param float $commissionSum
     * @param float $supplierInvoiceSum
     * @param float $price
     * @param float $dbAmount
     * @param float $dbPercent
     * @param string $category
     */
    public function __construct(?string $unitName = null, ?int $orderNo = null, ?string $agencyId = null, ?string $customerName = null, ?float $feeSum = null, ?float $commissionSum = null, ?float $supplierInvoiceSum = null, ?float $price = null, ?float $dbAmount = null, ?float $dbPercent = null, ?string $category = null)
    {
        $this
            ->setUnitName($unitName)
            ->setOrderNo($orderNo)
            ->setAgencyId($agencyId)
            ->setCustomerName($customerName)
            ->setFeeSum($feeSum)
            ->setCommissionSum($commissionSum)
            ->setSupplierInvoiceSum($supplierInvoiceSum)
            ->setPrice($price)
            ->setDbAmount($dbAmount)
            ->setDbPercent($dbPercent)
            ->setCategory($category);
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginListType
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
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginListType
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
     * Get agencyId value
     * @return string|null
     */
    public function getAgencyId(): ?string
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param string $agencyId
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginListType
     */
    public function setAgencyId(?string $agencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
    }
    /**
     * Get customerName value
     * @return string|null
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }
    /**
     * Set customerName value
     * @param string $customerName
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginListType
     */
    public function setCustomerName(?string $customerName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerName) && !is_string($customerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerName, true), gettype($customerName)), __LINE__);
        }
        $this->customerName = $customerName;
        
        return $this;
    }
    /**
     * Get feeSum value
     * @return float|null
     */
    public function getFeeSum(): ?float
    {
        return $this->feeSum;
    }
    /**
     * Set feeSum value
     * @param float $feeSum
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginListType
     */
    public function setFeeSum(?float $feeSum = null): self
    {
        // validation for constraint: float
        if (!is_null($feeSum) && !(is_float($feeSum) || is_numeric($feeSum))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feeSum, true), gettype($feeSum)), __LINE__);
        }
        $this->feeSum = $feeSum;
        
        return $this;
    }
    /**
     * Get commissionSum value
     * @return float|null
     */
    public function getCommissionSum(): ?float
    {
        return $this->commissionSum;
    }
    /**
     * Set commissionSum value
     * @param float $commissionSum
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginListType
     */
    public function setCommissionSum(?float $commissionSum = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionSum) && !(is_float($commissionSum) || is_numeric($commissionSum))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionSum, true), gettype($commissionSum)), __LINE__);
        }
        $this->commissionSum = $commissionSum;
        
        return $this;
    }
    /**
     * Get supplierInvoiceSum value
     * @return float|null
     */
    public function getSupplierInvoiceSum(): ?float
    {
        return $this->supplierInvoiceSum;
    }
    /**
     * Set supplierInvoiceSum value
     * @param float $supplierInvoiceSum
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginListType
     */
    public function setSupplierInvoiceSum(?float $supplierInvoiceSum = null): self
    {
        // validation for constraint: float
        if (!is_null($supplierInvoiceSum) && !(is_float($supplierInvoiceSum) || is_numeric($supplierInvoiceSum))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplierInvoiceSum, true), gettype($supplierInvoiceSum)), __LINE__);
        }
        $this->supplierInvoiceSum = $supplierInvoiceSum;
        
        return $this;
    }
    /**
     * Get price value
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $price
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginListType
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
        
        return $this;
    }
    /**
     * Get dbAmount value
     * @return float|null
     */
    public function getDbAmount(): ?float
    {
        return $this->dbAmount;
    }
    /**
     * Set dbAmount value
     * @param float $dbAmount
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginListType
     */
    public function setDbAmount(?float $dbAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($dbAmount) && !(is_float($dbAmount) || is_numeric($dbAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($dbAmount, true), gettype($dbAmount)), __LINE__);
        }
        $this->dbAmount = $dbAmount;
        
        return $this;
    }
    /**
     * Get dbPercent value
     * @return float|null
     */
    public function getDbPercent(): ?float
    {
        return $this->dbPercent;
    }
    /**
     * Set dbPercent value
     * @param float $dbPercent
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginListType
     */
    public function setDbPercent(?float $dbPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($dbPercent) && !(is_float($dbPercent) || is_numeric($dbPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($dbPercent, true), gettype($dbPercent)), __LINE__);
        }
        $this->dbPercent = $dbPercent;
        
        return $this;
    }
    /**
     * Get category value
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param string $category
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginListType
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->category = $category;
        
        return $this;
    }
}
