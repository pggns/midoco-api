<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDepositListType StructType
 * @subpackage Structs
 */
class MidocoDepositListType extends AbstractStructBase
{
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The receiptDate
     * @var string|null
     */
    protected ?string $receiptDate = null;
    /**
     * The paymentDate
     * @var string|null
     */
    protected ?string $paymentDate = null;
    /**
     * The receiptNo
     * @var int|null
     */
    protected ?int $receiptNo = null;
    /**
     * The inkassoPrice
     * @var float|null
     */
    protected ?float $inkassoPrice = null;
    /**
     * The invoicedAmount
     * @var float|null
     */
    protected ?float $invoicedAmount = null;
    /**
     * The payedAmount
     * @var float|null
     */
    protected ?float $payedAmount = null;
    /**
     * The diPayedAmount
     * @var float|null
     */
    protected ?float $diPayedAmount = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The contraAccountId
     * @var string|null
     */
    protected ?string $contraAccountId = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The paymentWay
     * @var string|null
     */
    protected ?string $paymentWay = null;
    /**
     * The cardType
     * @var string|null
     */
    protected ?string $cardType = null;
    /**
     * The transferText
     * @var string|null
     */
    protected ?string $transferText = null;
    /**
     * Constructor method for MidocoDepositListType
     * @uses MidocoDepositListType::setOrgUnit()
     * @uses MidocoDepositListType::setOrderNo()
     * @uses MidocoDepositListType::setStartTravel()
     * @uses MidocoDepositListType::setReceiptDate()
     * @uses MidocoDepositListType::setPaymentDate()
     * @uses MidocoDepositListType::setReceiptNo()
     * @uses MidocoDepositListType::setInkassoPrice()
     * @uses MidocoDepositListType::setInvoicedAmount()
     * @uses MidocoDepositListType::setPayedAmount()
     * @uses MidocoDepositListType::setDiPayedAmount()
     * @uses MidocoDepositListType::setCustomerId()
     * @uses MidocoDepositListType::setContraAccountId()
     * @uses MidocoDepositListType::setPaymentType()
     * @uses MidocoDepositListType::setPaymentWay()
     * @uses MidocoDepositListType::setCardType()
     * @uses MidocoDepositListType::setTransferText()
     * @param string $orgUnit
     * @param int $orderNo
     * @param string $startTravel
     * @param string $receiptDate
     * @param string $paymentDate
     * @param int $receiptNo
     * @param float $inkassoPrice
     * @param float $invoicedAmount
     * @param float $payedAmount
     * @param float $diPayedAmount
     * @param int $customerId
     * @param string $contraAccountId
     * @param string $paymentType
     * @param string $paymentWay
     * @param string $cardType
     * @param string $transferText
     */
    public function __construct(?string $orgUnit = null, ?int $orderNo = null, ?string $startTravel = null, ?string $receiptDate = null, ?string $paymentDate = null, ?int $receiptNo = null, ?float $inkassoPrice = null, ?float $invoicedAmount = null, ?float $payedAmount = null, ?float $diPayedAmount = null, ?int $customerId = null, ?string $contraAccountId = null, ?string $paymentType = null, ?string $paymentWay = null, ?string $cardType = null, ?string $transferText = null)
    {
        $this
            ->setOrgUnit($orgUnit)
            ->setOrderNo($orderNo)
            ->setStartTravel($startTravel)
            ->setReceiptDate($receiptDate)
            ->setPaymentDate($paymentDate)
            ->setReceiptNo($receiptNo)
            ->setInkassoPrice($inkassoPrice)
            ->setInvoicedAmount($invoicedAmount)
            ->setPayedAmount($payedAmount)
            ->setDiPayedAmount($diPayedAmount)
            ->setCustomerId($customerId)
            ->setContraAccountId($contraAccountId)
            ->setPaymentType($paymentType)
            ->setPaymentWay($paymentWay)
            ->setCardType($cardType)
            ->setTransferText($transferText);
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDepositListType
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDepositListType
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDepositListType
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDepositListType
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
     * Get paymentDate value
     * @return string|null
     */
    public function getPaymentDate(): ?string
    {
        return $this->paymentDate;
    }
    /**
     * Set paymentDate value
     * @param string $paymentDate
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDepositListType
     */
    public function setPaymentDate(?string $paymentDate = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentDate) && !is_string($paymentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentDate, true), gettype($paymentDate)), __LINE__);
        }
        $this->paymentDate = $paymentDate;
        
        return $this;
    }
    /**
     * Get receiptNo value
     * @return int|null
     */
    public function getReceiptNo(): ?int
    {
        return $this->receiptNo;
    }
    /**
     * Set receiptNo value
     * @param int $receiptNo
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDepositListType
     */
    public function setReceiptNo(?int $receiptNo = null): self
    {
        // validation for constraint: int
        if (!is_null($receiptNo) && !(is_int($receiptNo) || ctype_digit($receiptNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiptNo, true), gettype($receiptNo)), __LINE__);
        }
        $this->receiptNo = $receiptNo;
        
        return $this;
    }
    /**
     * Get inkassoPrice value
     * @return float|null
     */
    public function getInkassoPrice(): ?float
    {
        return $this->inkassoPrice;
    }
    /**
     * Set inkassoPrice value
     * @param float $inkassoPrice
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDepositListType
     */
    public function setInkassoPrice(?float $inkassoPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($inkassoPrice) && !(is_float($inkassoPrice) || is_numeric($inkassoPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($inkassoPrice, true), gettype($inkassoPrice)), __LINE__);
        }
        $this->inkassoPrice = $inkassoPrice;
        
        return $this;
    }
    /**
     * Get invoicedAmount value
     * @return float|null
     */
    public function getInvoicedAmount(): ?float
    {
        return $this->invoicedAmount;
    }
    /**
     * Set invoicedAmount value
     * @param float $invoicedAmount
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDepositListType
     */
    public function setInvoicedAmount(?float $invoicedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($invoicedAmount) && !(is_float($invoicedAmount) || is_numeric($invoicedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($invoicedAmount, true), gettype($invoicedAmount)), __LINE__);
        }
        $this->invoicedAmount = $invoicedAmount;
        
        return $this;
    }
    /**
     * Get payedAmount value
     * @return float|null
     */
    public function getPayedAmount(): ?float
    {
        return $this->payedAmount;
    }
    /**
     * Set payedAmount value
     * @param float $payedAmount
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDepositListType
     */
    public function setPayedAmount(?float $payedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($payedAmount) && !(is_float($payedAmount) || is_numeric($payedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($payedAmount, true), gettype($payedAmount)), __LINE__);
        }
        $this->payedAmount = $payedAmount;
        
        return $this;
    }
    /**
     * Get diPayedAmount value
     * @return float|null
     */
    public function getDiPayedAmount(): ?float
    {
        return $this->diPayedAmount;
    }
    /**
     * Set diPayedAmount value
     * @param float $diPayedAmount
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDepositListType
     */
    public function setDiPayedAmount(?float $diPayedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($diPayedAmount) && !(is_float($diPayedAmount) || is_numeric($diPayedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($diPayedAmount, true), gettype($diPayedAmount)), __LINE__);
        }
        $this->diPayedAmount = $diPayedAmount;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDepositListType
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get contraAccountId value
     * @return string|null
     */
    public function getContraAccountId(): ?string
    {
        return $this->contraAccountId;
    }
    /**
     * Set contraAccountId value
     * @param string $contraAccountId
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDepositListType
     */
    public function setContraAccountId(?string $contraAccountId = null): self
    {
        // validation for constraint: string
        if (!is_null($contraAccountId) && !is_string($contraAccountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contraAccountId, true), gettype($contraAccountId)), __LINE__);
        }
        $this->contraAccountId = $contraAccountId;
        
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDepositListType
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
     * Get paymentWay value
     * @return string|null
     */
    public function getPaymentWay(): ?string
    {
        return $this->paymentWay;
    }
    /**
     * Set paymentWay value
     * @param string $paymentWay
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDepositListType
     */
    public function setPaymentWay(?string $paymentWay = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentWay) && !is_string($paymentWay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentWay, true), gettype($paymentWay)), __LINE__);
        }
        $this->paymentWay = $paymentWay;
        
        return $this;
    }
    /**
     * Get cardType value
     * @return string|null
     */
    public function getCardType(): ?string
    {
        return $this->cardType;
    }
    /**
     * Set cardType value
     * @param string $cardType
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDepositListType
     */
    public function setCardType(?string $cardType = null): self
    {
        // validation for constraint: string
        if (!is_null($cardType) && !is_string($cardType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardType, true), gettype($cardType)), __LINE__);
        }
        $this->cardType = $cardType;
        
        return $this;
    }
    /**
     * Get transferText value
     * @return string|null
     */
    public function getTransferText(): ?string
    {
        return $this->transferText;
    }
    /**
     * Set transferText value
     * @param string $transferText
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDepositListType
     */
    public function setTransferText(?string $transferText = null): self
    {
        // validation for constraint: string
        if (!is_null($transferText) && !is_string($transferText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transferText, true), gettype($transferText)), __LINE__);
        }
        $this->transferText = $transferText;
        
        return $this;
    }
}
