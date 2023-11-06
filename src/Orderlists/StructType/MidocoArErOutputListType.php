<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoArErOutputListType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoArErOutputListType extends AbstractStructBase
{
    /**
     * The outgoingIncoming
     * @var string|null
     */
    protected ?string $outgoingIncoming = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The year
     * @var string|null
     */
    protected ?string $year = null;
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
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
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
     * The receiptDate
     * @var string|null
     */
    protected ?string $receiptDate = null;
    /**
     * The receiptNo
     * @var string|null
     */
    protected ?string $receiptNo = null;
    /**
     * The beforeAfterTravel
     * @var string|null
     */
    protected ?string $beforeAfterTravel = null;
    /**
     * The creditAccount
     * @var string|null
     */
    protected ?string $creditAccount = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * Constructor method for MidocoArErOutputListType
     * @uses MidocoArErOutputListType::setOutgoingIncoming()
     * @uses MidocoArErOutputListType::setOrgUnit()
     * @uses MidocoArErOutputListType::setYear()
     * @uses MidocoArErOutputListType::setOrderNo()
     * @uses MidocoArErOutputListType::setSupplierId()
     * @uses MidocoArErOutputListType::setBookingId()
     * @uses MidocoArErOutputListType::setStartTravel()
     * @uses MidocoArErOutputListType::setEndTravel()
     * @uses MidocoArErOutputListType::setReceiptDate()
     * @uses MidocoArErOutputListType::setReceiptNo()
     * @uses MidocoArErOutputListType::setBeforeAfterTravel()
     * @uses MidocoArErOutputListType::setCreditAccount()
     * @uses MidocoArErOutputListType::setAmount()
     * @uses MidocoArErOutputListType::setName()
     * @uses MidocoArErOutputListType::setPaymentType()
     * @param string $outgoingIncoming
     * @param string $orgUnit
     * @param string $year
     * @param int $orderNo
     * @param string $supplierId
     * @param string $bookingId
     * @param string $startTravel
     * @param string $endTravel
     * @param string $receiptDate
     * @param string $receiptNo
     * @param string $beforeAfterTravel
     * @param string $creditAccount
     * @param float $amount
     * @param string $name
     * @param string $paymentType
     */
    public function __construct(?string $outgoingIncoming = null, ?string $orgUnit = null, ?string $year = null, ?int $orderNo = null, ?string $supplierId = null, ?string $bookingId = null, ?string $startTravel = null, ?string $endTravel = null, ?string $receiptDate = null, ?string $receiptNo = null, ?string $beforeAfterTravel = null, ?string $creditAccount = null, ?float $amount = null, ?string $name = null, ?string $paymentType = null)
    {
        $this
            ->setOutgoingIncoming($outgoingIncoming)
            ->setOrgUnit($orgUnit)
            ->setYear($year)
            ->setOrderNo($orderNo)
            ->setSupplierId($supplierId)
            ->setBookingId($bookingId)
            ->setStartTravel($startTravel)
            ->setEndTravel($endTravel)
            ->setReceiptDate($receiptDate)
            ->setReceiptNo($receiptNo)
            ->setBeforeAfterTravel($beforeAfterTravel)
            ->setCreditAccount($creditAccount)
            ->setAmount($amount)
            ->setName($name)
            ->setPaymentType($paymentType);
    }
    /**
     * Get outgoingIncoming value
     * @return string|null
     */
    public function getOutgoingIncoming(): ?string
    {
        return $this->outgoingIncoming;
    }
    /**
     * Set outgoingIncoming value
     * @param string $outgoingIncoming
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErOutputListType
     */
    public function setOutgoingIncoming(?string $outgoingIncoming = null): self
    {
        // validation for constraint: string
        if (!is_null($outgoingIncoming) && !is_string($outgoingIncoming)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outgoingIncoming, true), gettype($outgoingIncoming)), __LINE__);
        }
        $this->outgoingIncoming = $outgoingIncoming;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErOutputListType
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
     * Get year value
     * @return string|null
     */
    public function getYear(): ?string
    {
        return $this->year;
    }
    /**
     * Set year value
     * @param string $year
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErOutputListType
     */
    public function setYear(?string $year = null): self
    {
        // validation for constraint: string
        if (!is_null($year) && !is_string($year)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($year, true), gettype($year)), __LINE__);
        }
        $this->year = $year;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErOutputListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErOutputListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErOutputListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErOutputListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErOutputListType
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
     * Get receiptDate value
     * @return string|null
     */
    public function getReceiptDate(): ?string
    {
        return $this->receiptDate;
    }
    /**
     * Set receiptDate value
     * @param string $receiptDate
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErOutputListType
     */
    public function setReceiptDate(?string $receiptDate = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptDate) && !is_string($receiptDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptDate, true), gettype($receiptDate)), __LINE__);
        }
        $this->receiptDate = $receiptDate;
        
        return $this;
    }
    /**
     * Get receiptNo value
     * @return string|null
     */
    public function getReceiptNo(): ?string
    {
        return $this->receiptNo;
    }
    /**
     * Set receiptNo value
     * @param string $receiptNo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErOutputListType
     */
    public function setReceiptNo(?string $receiptNo = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptNo) && !is_string($receiptNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptNo, true), gettype($receiptNo)), __LINE__);
        }
        $this->receiptNo = $receiptNo;
        
        return $this;
    }
    /**
     * Get beforeAfterTravel value
     * @return string|null
     */
    public function getBeforeAfterTravel(): ?string
    {
        return $this->beforeAfterTravel;
    }
    /**
     * Set beforeAfterTravel value
     * @param string $beforeAfterTravel
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErOutputListType
     */
    public function setBeforeAfterTravel(?string $beforeAfterTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($beforeAfterTravel) && !is_string($beforeAfterTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beforeAfterTravel, true), gettype($beforeAfterTravel)), __LINE__);
        }
        $this->beforeAfterTravel = $beforeAfterTravel;
        
        return $this;
    }
    /**
     * Get creditAccount value
     * @return string|null
     */
    public function getCreditAccount(): ?string
    {
        return $this->creditAccount;
    }
    /**
     * Set creditAccount value
     * @param string $creditAccount
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErOutputListType
     */
    public function setCreditAccount(?string $creditAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($creditAccount) && !is_string($creditAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditAccount, true), gettype($creditAccount)), __LINE__);
        }
        $this->creditAccount = $creditAccount;
        
        return $this;
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErOutputListType
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErOutputListType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErOutputListType
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
}
