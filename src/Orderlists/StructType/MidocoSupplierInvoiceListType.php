<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSupplierInvoiceListType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoSupplierInvoiceListType extends AbstractStructBase
{
    /**
     * The orgunit
     * @var string|null
     */
    protected ?string $orgunit = null;
    /**
     * The orderno
     * @var int|null
     */
    protected ?int $orderno = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The creationUser
     * @var string|null
     */
    protected ?string $creationUser = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The receiptNo
     * @var string|null
     */
    protected ?string $receiptNo = null;
    /**
     * The travelDate
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The soll
     * @var string|null
     */
    protected ?string $soll = null;
    /**
     * The haben
     * @var string|null
     */
    protected ?string $haben = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The vatAmount
     * @var float|null
     */
    protected ?float $vatAmount = null;
    /**
     * The vatCode
     * @var string|null
     */
    protected ?string $vatCode = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * Constructor method for MidocoSupplierInvoiceListType
     * @uses MidocoSupplierInvoiceListType::setOrgunit()
     * @uses MidocoSupplierInvoiceListType::setOrderno()
     * @uses MidocoSupplierInvoiceListType::setCreationDate()
     * @uses MidocoSupplierInvoiceListType::setCreationUser()
     * @uses MidocoSupplierInvoiceListType::setSupplierId()
     * @uses MidocoSupplierInvoiceListType::setReceiptNo()
     * @uses MidocoSupplierInvoiceListType::setTravelDate()
     * @uses MidocoSupplierInvoiceListType::setSoll()
     * @uses MidocoSupplierInvoiceListType::setHaben()
     * @uses MidocoSupplierInvoiceListType::setAmount()
     * @uses MidocoSupplierInvoiceListType::setVatAmount()
     * @uses MidocoSupplierInvoiceListType::setVatCode()
     * @uses MidocoSupplierInvoiceListType::setOrderId()
     * @param string $orgunit
     * @param int $orderno
     * @param string $creationDate
     * @param string $creationUser
     * @param string $supplierId
     * @param string $receiptNo
     * @param string $travelDate
     * @param string $soll
     * @param string $haben
     * @param float $amount
     * @param float $vatAmount
     * @param string $vatCode
     * @param int $orderId
     */
    public function __construct(?string $orgunit = null, ?int $orderno = null, ?string $creationDate = null, ?string $creationUser = null, ?string $supplierId = null, ?string $receiptNo = null, ?string $travelDate = null, ?string $soll = null, ?string $haben = null, ?float $amount = null, ?float $vatAmount = null, ?string $vatCode = null, ?int $orderId = null)
    {
        $this
            ->setOrgunit($orgunit)
            ->setOrderno($orderno)
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setSupplierId($supplierId)
            ->setReceiptNo($receiptNo)
            ->setTravelDate($travelDate)
            ->setSoll($soll)
            ->setHaben($haben)
            ->setAmount($amount)
            ->setVatAmount($vatAmount)
            ->setVatCode($vatCode)
            ->setOrderId($orderId);
    }
    /**
     * Get orgunit value
     * @return string|null
     */
    public function getOrgunit(): ?string
    {
        return $this->orgunit;
    }
    /**
     * Set orgunit value
     * @param string $orgunit
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierInvoiceListType
     */
    public function setOrgunit(?string $orgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgunit) && !is_string($orgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgunit, true), gettype($orgunit)), __LINE__);
        }
        $this->orgunit = $orgunit;
        
        return $this;
    }
    /**
     * Get orderno value
     * @return int|null
     */
    public function getOrderno(): ?int
    {
        return $this->orderno;
    }
    /**
     * Set orderno value
     * @param int $orderno
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierInvoiceListType
     */
    public function setOrderno(?int $orderno = null): self
    {
        // validation for constraint: int
        if (!is_null($orderno) && !(is_int($orderno) || ctype_digit($orderno))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderno, true), gettype($orderno)), __LINE__);
        }
        $this->orderno = $orderno;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierInvoiceListType
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
     * Get creationUser value
     * @return string|null
     */
    public function getCreationUser(): ?string
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param string $creationUser
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierInvoiceListType
     */
    public function setCreationUser(?string $creationUser = null): self
    {
        // validation for constraint: string
        if (!is_null($creationUser) && !is_string($creationUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierInvoiceListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierInvoiceListType
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
     * Get travelDate value
     * @return string|null
     */
    public function getTravelDate(): ?string
    {
        return $this->travelDate;
    }
    /**
     * Set travelDate value
     * @param string $travelDate
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierInvoiceListType
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
        $this->travelDate = $travelDate;
        
        return $this;
    }
    /**
     * Get soll value
     * @return string|null
     */
    public function getSoll(): ?string
    {
        return $this->soll;
    }
    /**
     * Set soll value
     * @param string $soll
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierInvoiceListType
     */
    public function setSoll(?string $soll = null): self
    {
        // validation for constraint: string
        if (!is_null($soll) && !is_string($soll)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($soll, true), gettype($soll)), __LINE__);
        }
        $this->soll = $soll;
        
        return $this;
    }
    /**
     * Get haben value
     * @return string|null
     */
    public function getHaben(): ?string
    {
        return $this->haben;
    }
    /**
     * Set haben value
     * @param string $haben
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierInvoiceListType
     */
    public function setHaben(?string $haben = null): self
    {
        // validation for constraint: string
        if (!is_null($haben) && !is_string($haben)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($haben, true), gettype($haben)), __LINE__);
        }
        $this->haben = $haben;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierInvoiceListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierInvoiceListType
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
     * Get vatCode value
     * @return string|null
     */
    public function getVatCode(): ?string
    {
        return $this->vatCode;
    }
    /**
     * Set vatCode value
     * @param string $vatCode
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierInvoiceListType
     */
    public function setVatCode(?string $vatCode = null): self
    {
        // validation for constraint: string
        if (!is_null($vatCode) && !is_string($vatCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatCode, true), gettype($vatCode)), __LINE__);
        }
        $this->vatCode = $vatCode;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierInvoiceListType
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
}
