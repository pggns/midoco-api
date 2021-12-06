<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FIBUInvRbBalanceLineType StructType
 * @subpackage Structs
 */
class FIBUInvRbBalanceLineType extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The opNo
     * @var string|null
     */
    protected ?string $opNo = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The invoiceDate
     * @var string|null
     */
    protected ?string $invoiceDate = null;
    /**
     * The exportDate
     * @var string|null
     */
    protected ?string $exportDate = null;
    /**
     * Constructor method for FIBUInvRbBalanceLineType
     * @uses FIBUInvRbBalanceLineType::setAccountId()
     * @uses FIBUInvRbBalanceLineType::setOpNo()
     * @uses FIBUInvRbBalanceLineType::setAmount()
     * @uses FIBUInvRbBalanceLineType::setInvoiceDate()
     * @uses FIBUInvRbBalanceLineType::setExportDate()
     * @param string $accountId
     * @param string $opNo
     * @param float $amount
     * @param string $invoiceDate
     * @param string $exportDate
     */
    public function __construct(?string $accountId = null, ?string $opNo = null, ?float $amount = null, ?string $invoiceDate = null, ?string $exportDate = null)
    {
        $this
            ->setAccountId($accountId)
            ->setOpNo($opNo)
            ->setAmount($amount)
            ->setInvoiceDate($invoiceDate)
            ->setExportDate($exportDate);
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\FIBUInvRbBalanceLineType
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
    /**
     * Get opNo value
     * @return string|null
     */
    public function getOpNo(): ?string
    {
        return $this->opNo;
    }
    /**
     * Set opNo value
     * @param string $opNo
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\FIBUInvRbBalanceLineType
     */
    public function setOpNo(?string $opNo = null): self
    {
        // validation for constraint: string
        if (!is_null($opNo) && !is_string($opNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($opNo, true), gettype($opNo)), __LINE__);
        }
        $this->opNo = $opNo;
        
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\FIBUInvRbBalanceLineType
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
     * Get invoiceDate value
     * @return string|null
     */
    public function getInvoiceDate(): ?string
    {
        return $this->invoiceDate;
    }
    /**
     * Set invoiceDate value
     * @param string $invoiceDate
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\FIBUInvRbBalanceLineType
     */
    public function setInvoiceDate(?string $invoiceDate = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceDate) && !is_string($invoiceDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceDate, true), gettype($invoiceDate)), __LINE__);
        }
        $this->invoiceDate = $invoiceDate;
        
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\FIBUInvRbBalanceLineType
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
