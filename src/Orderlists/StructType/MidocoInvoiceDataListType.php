<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoInvoiceDataListType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoInvoiceDataListType extends AbstractStructBase
{
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The invoiceNo
     * @var int|null
     */
    protected ?int $invoiceNo = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The receiptDate
     * @var string|null
     */
    protected ?string $receiptDate = null;
    /**
     * The exportDate
     * @var string|null
     */
    protected ?string $exportDate = null;
    /**
     * Constructor method for MidocoInvoiceDataListType
     * @uses MidocoInvoiceDataListType::setDebitorNo()
     * @uses MidocoInvoiceDataListType::setInvoiceNo()
     * @uses MidocoInvoiceDataListType::setAmount()
     * @uses MidocoInvoiceDataListType::setReceiptDate()
     * @uses MidocoInvoiceDataListType::setExportDate()
     * @param string $debitorNo
     * @param int $invoiceNo
     * @param float $amount
     * @param string $receiptDate
     * @param string $exportDate
     */
    public function __construct(?string $debitorNo = null, ?int $invoiceNo = null, ?float $amount = null, ?string $receiptDate = null, ?string $exportDate = null)
    {
        $this
            ->setDebitorNo($debitorNo)
            ->setInvoiceNo($invoiceNo)
            ->setAmount($amount)
            ->setReceiptDate($receiptDate)
            ->setExportDate($exportDate);
    }
    /**
     * Get debitorNo value
     * @return string|null
     */
    public function getDebitorNo(): ?string
    {
        return $this->debitorNo;
    }
    /**
     * Set debitorNo value
     * @param string $debitorNo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListType
     */
    public function setDebitorNo(?string $debitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorNo) && !is_string($debitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorNo, true), gettype($debitorNo)), __LINE__);
        }
        $this->debitorNo = $debitorNo;
        
        return $this;
    }
    /**
     * Get invoiceNo value
     * @return int|null
     */
    public function getInvoiceNo(): ?int
    {
        return $this->invoiceNo;
    }
    /**
     * Set invoiceNo value
     * @param int $invoiceNo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListType
     */
    public function setInvoiceNo(?int $invoiceNo = null): self
    {
        // validation for constraint: int
        if (!is_null($invoiceNo) && !(is_int($invoiceNo) || ctype_digit($invoiceNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoiceNo, true), gettype($invoiceNo)), __LINE__);
        }
        $this->invoiceNo = $invoiceNo;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListType
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
     * Get exportDate value
     * @return string|null
     */
    public function getExportDate(): ?string
    {
        return $this->exportDate;
    }
    /**
     * Set exportDate value
     * @param string $exportDate
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListType
     */
    public function setExportDate(?string $exportDate = null): self
    {
        // validation for constraint: string
        if (!is_null($exportDate) && !is_string($exportDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportDate, true), gettype($exportDate)), __LINE__);
        }
        $this->exportDate = $exportDate;
        
        return $this;
    }
}
