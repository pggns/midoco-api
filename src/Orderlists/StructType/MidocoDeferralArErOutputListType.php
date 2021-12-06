<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDeferralArErOutputListType StructType
 * @subpackage Structs
 */
class MidocoDeferralArErOutputListType extends AbstractStructBase
{
    /**
     * The outgoingIncoming
     * @var string|null
     */
    protected ?string $outgoingIncoming = null;
    /**
     * The bruttoNettoIndicator
     * @var string|null
     */
    protected ?string $bruttoNettoIndicator = null;
    /**
     * The debitor
     * @var string|null
     */
    protected ?string $debitor = null;
    /**
     * The creditor
     * @var string|null
     */
    protected ?string $creditor = null;
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
     * The crsSystem
     * @var string|null
     */
    protected ?string $crsSystem = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
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
     * The debitAccount
     * @var string|null
     */
    protected ?string $debitAccount = null;
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
     * The originalAmount
     * @var float|null
     */
    protected ?float $originalAmount = null;
    /**
     * The originalCurrency
     * @var string|null
     */
    protected ?string $originalCurrency = null;
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
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The year
     * @var string|null
     */
    protected ?string $year = null;
    /**
     * The receiptNo
     * @var string|null
     */
    protected ?string $receiptNo = null;
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
     * Constructor method for MidocoDeferralArErOutputListType
     * @uses MidocoDeferralArErOutputListType::setOutgoingIncoming()
     * @uses MidocoDeferralArErOutputListType::setBruttoNettoIndicator()
     * @uses MidocoDeferralArErOutputListType::setDebitor()
     * @uses MidocoDeferralArErOutputListType::setCreditor()
     * @uses MidocoDeferralArErOutputListType::setSupplierId()
     * @uses MidocoDeferralArErOutputListType::setBookingId()
     * @uses MidocoDeferralArErOutputListType::setCrsSystem()
     * @uses MidocoDeferralArErOutputListType::setOrgUnit()
     * @uses MidocoDeferralArErOutputListType::setStartTravel()
     * @uses MidocoDeferralArErOutputListType::setEndTravel()
     * @uses MidocoDeferralArErOutputListType::setReceiptDate()
     * @uses MidocoDeferralArErOutputListType::setDebitAccount()
     * @uses MidocoDeferralArErOutputListType::setCreditAccount()
     * @uses MidocoDeferralArErOutputListType::setAmount()
     * @uses MidocoDeferralArErOutputListType::setOriginalAmount()
     * @uses MidocoDeferralArErOutputListType::setOriginalCurrency()
     * @uses MidocoDeferralArErOutputListType::setOrderId()
     * @uses MidocoDeferralArErOutputListType::setOrderNo()
     * @uses MidocoDeferralArErOutputListType::setItemId()
     * @uses MidocoDeferralArErOutputListType::setYear()
     * @uses MidocoDeferralArErOutputListType::setReceiptNo()
     * @uses MidocoDeferralArErOutputListType::setName()
     * @uses MidocoDeferralArErOutputListType::setPaymentType()
     * @param string $outgoingIncoming
     * @param string $bruttoNettoIndicator
     * @param string $debitor
     * @param string $creditor
     * @param string $supplierId
     * @param string $bookingId
     * @param string $crsSystem
     * @param string $orgUnit
     * @param string $startTravel
     * @param string $endTravel
     * @param string $receiptDate
     * @param string $debitAccount
     * @param string $creditAccount
     * @param float $amount
     * @param float $originalAmount
     * @param string $originalCurrency
     * @param int $orderId
     * @param int $orderNo
     * @param int $itemId
     * @param string $year
     * @param string $receiptNo
     * @param string $name
     * @param string $paymentType
     */
    public function __construct(?string $outgoingIncoming = null, ?string $bruttoNettoIndicator = null, ?string $debitor = null, ?string $creditor = null, ?string $supplierId = null, ?string $bookingId = null, ?string $crsSystem = null, ?string $orgUnit = null, ?string $startTravel = null, ?string $endTravel = null, ?string $receiptDate = null, ?string $debitAccount = null, ?string $creditAccount = null, ?float $amount = null, ?float $originalAmount = null, ?string $originalCurrency = null, ?int $orderId = null, ?int $orderNo = null, ?int $itemId = null, ?string $year = null, ?string $receiptNo = null, ?string $name = null, ?string $paymentType = null)
    {
        $this
            ->setOutgoingIncoming($outgoingIncoming)
            ->setBruttoNettoIndicator($bruttoNettoIndicator)
            ->setDebitor($debitor)
            ->setCreditor($creditor)
            ->setSupplierId($supplierId)
            ->setBookingId($bookingId)
            ->setCrsSystem($crsSystem)
            ->setOrgUnit($orgUnit)
            ->setStartTravel($startTravel)
            ->setEndTravel($endTravel)
            ->setReceiptDate($receiptDate)
            ->setDebitAccount($debitAccount)
            ->setCreditAccount($creditAccount)
            ->setAmount($amount)
            ->setOriginalAmount($originalAmount)
            ->setOriginalCurrency($originalCurrency)
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setItemId($itemId)
            ->setYear($year)
            ->setReceiptNo($receiptNo)
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType
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
     * Get bruttoNettoIndicator value
     * @return string|null
     */
    public function getBruttoNettoIndicator(): ?string
    {
        return $this->bruttoNettoIndicator;
    }
    /**
     * Set bruttoNettoIndicator value
     * @param string $bruttoNettoIndicator
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType
     */
    public function setBruttoNettoIndicator(?string $bruttoNettoIndicator = null): self
    {
        // validation for constraint: string
        if (!is_null($bruttoNettoIndicator) && !is_string($bruttoNettoIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bruttoNettoIndicator, true), gettype($bruttoNettoIndicator)), __LINE__);
        }
        $this->bruttoNettoIndicator = $bruttoNettoIndicator;
        
        return $this;
    }
    /**
     * Get debitor value
     * @return string|null
     */
    public function getDebitor(): ?string
    {
        return $this->debitor;
    }
    /**
     * Set debitor value
     * @param string $debitor
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType
     */
    public function setDebitor(?string $debitor = null): self
    {
        // validation for constraint: string
        if (!is_null($debitor) && !is_string($debitor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitor, true), gettype($debitor)), __LINE__);
        }
        $this->debitor = $debitor;
        
        return $this;
    }
    /**
     * Get creditor value
     * @return string|null
     */
    public function getCreditor(): ?string
    {
        return $this->creditor;
    }
    /**
     * Set creditor value
     * @param string $creditor
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType
     */
    public function setCreditor(?string $creditor = null): self
    {
        // validation for constraint: string
        if (!is_null($creditor) && !is_string($creditor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditor, true), gettype($creditor)), __LINE__);
        }
        $this->creditor = $creditor;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType
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
     * Get crsSystem value
     * @return string|null
     */
    public function getCrsSystem(): ?string
    {
        return $this->crsSystem;
    }
    /**
     * Set crsSystem value
     * @param string $crsSystem
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType
     */
    public function setCrsSystem(?string $crsSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($crsSystem) && !is_string($crsSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crsSystem, true), gettype($crsSystem)), __LINE__);
        }
        $this->crsSystem = $crsSystem;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType
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
     * Get debitAccount value
     * @return string|null
     */
    public function getDebitAccount(): ?string
    {
        return $this->debitAccount;
    }
    /**
     * Set debitAccount value
     * @param string $debitAccount
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType
     */
    public function setDebitAccount(?string $debitAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($debitAccount) && !is_string($debitAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitAccount, true), gettype($debitAccount)), __LINE__);
        }
        $this->debitAccount = $debitAccount;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType
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
     * Get originalAmount value
     * @return float|null
     */
    public function getOriginalAmount(): ?float
    {
        return $this->originalAmount;
    }
    /**
     * Set originalAmount value
     * @param float $originalAmount
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType
     */
    public function setOriginalAmount(?float $originalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($originalAmount) && !(is_float($originalAmount) || is_numeric($originalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalAmount, true), gettype($originalAmount)), __LINE__);
        }
        $this->originalAmount = $originalAmount;
        
        return $this;
    }
    /**
     * Get originalCurrency value
     * @return string|null
     */
    public function getOriginalCurrency(): ?string
    {
        return $this->originalCurrency;
    }
    /**
     * Set originalCurrency value
     * @param string $originalCurrency
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType
     */
    public function setOriginalCurrency(?string $originalCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($originalCurrency) && !is_string($originalCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalCurrency, true), gettype($originalCurrency)), __LINE__);
        }
        $this->originalCurrency = $originalCurrency;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType
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
