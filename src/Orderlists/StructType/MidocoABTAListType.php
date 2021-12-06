<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoABTAListType StructType
 * @subpackage Structs
 */
class MidocoABTAListType extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The salesInvTotal
     * @var float|null
     */
    protected ?float $salesInvTotal = null;
    /**
     * The section
     * @var string|null
     */
    protected ?string $section = null;
    /**
     * The field
     * @var string|null
     */
    protected ?string $field = null;
    /**
     * The pax
     * @var int|null
     */
    protected ?int $pax = null;
    /**
     * The vatAmount
     * @var float|null
     */
    protected ?float $vatAmount = null;
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * Constructor method for MidocoABTAListType
     * @uses MidocoABTAListType::setOrderId()
     * @uses MidocoABTAListType::setOrderNo()
     * @uses MidocoABTAListType::setSalesInvTotal()
     * @uses MidocoABTAListType::setSection()
     * @uses MidocoABTAListType::setField()
     * @uses MidocoABTAListType::setPax()
     * @uses MidocoABTAListType::setVatAmount()
     * @uses MidocoABTAListType::setAccountId()
     * @param int $orderId
     * @param int $orderNo
     * @param float $salesInvTotal
     * @param string $section
     * @param string $field
     * @param int $pax
     * @param float $vatAmount
     * @param string $accountId
     */
    public function __construct(?int $orderId = null, ?int $orderNo = null, ?float $salesInvTotal = null, ?string $section = null, ?string $field = null, ?int $pax = null, ?float $vatAmount = null, ?string $accountId = null)
    {
        $this
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setSalesInvTotal($salesInvTotal)
            ->setSection($section)
            ->setField($field)
            ->setPax($pax)
            ->setVatAmount($vatAmount)
            ->setAccountId($accountId);
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoABTAListType
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoABTAListType
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
     * Get salesInvTotal value
     * @return float|null
     */
    public function getSalesInvTotal(): ?float
    {
        return $this->salesInvTotal;
    }
    /**
     * Set salesInvTotal value
     * @param float $salesInvTotal
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoABTAListType
     */
    public function setSalesInvTotal(?float $salesInvTotal = null): self
    {
        // validation for constraint: float
        if (!is_null($salesInvTotal) && !(is_float($salesInvTotal) || is_numeric($salesInvTotal))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($salesInvTotal, true), gettype($salesInvTotal)), __LINE__);
        }
        $this->salesInvTotal = $salesInvTotal;
        
        return $this;
    }
    /**
     * Get section value
     * @return string|null
     */
    public function getSection(): ?string
    {
        return $this->section;
    }
    /**
     * Set section value
     * @param string $section
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoABTAListType
     */
    public function setSection(?string $section = null): self
    {
        // validation for constraint: string
        if (!is_null($section) && !is_string($section)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($section, true), gettype($section)), __LINE__);
        }
        $this->section = $section;
        
        return $this;
    }
    /**
     * Get field value
     * @return string|null
     */
    public function getField(): ?string
    {
        return $this->field;
    }
    /**
     * Set field value
     * @param string $field
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoABTAListType
     */
    public function setField(?string $field = null): self
    {
        // validation for constraint: string
        if (!is_null($field) && !is_string($field)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($field, true), gettype($field)), __LINE__);
        }
        $this->field = $field;
        
        return $this;
    }
    /**
     * Get pax value
     * @return int|null
     */
    public function getPax(): ?int
    {
        return $this->pax;
    }
    /**
     * Set pax value
     * @param int $pax
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoABTAListType
     */
    public function setPax(?int $pax = null): self
    {
        // validation for constraint: int
        if (!is_null($pax) && !(is_int($pax) || ctype_digit($pax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pax, true), gettype($pax)), __LINE__);
        }
        $this->pax = $pax;
        
        return $this;
    }
    /**
     * Get vatAmount value
     * @return float|null
     */
    public function getVatAmount(): ?float
    {
        return $this->vatAmount;
    }
    /**
     * Set vatAmount value
     * @param float $vatAmount
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoABTAListType
     */
    public function setVatAmount(?float $vatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($vatAmount) && !(is_float($vatAmount) || is_numeric($vatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatAmount, true), gettype($vatAmount)), __LINE__);
        }
        $this->vatAmount = $vatAmount;
        
        return $this;
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoABTAListType
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
}
