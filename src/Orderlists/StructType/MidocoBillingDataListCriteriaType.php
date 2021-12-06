<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBillingDataListCriteriaType StructType
 * @subpackage Structs
 */
class MidocoBillingDataListCriteriaType extends AbstractStructBase
{
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The receiptDateStart
     * @var string|null
     */
    protected ?string $receiptDateStart = null;
    /**
     * The receiptDateEnd
     * @var string|null
     */
    protected ?string $receiptDateEnd = null;
    /**
     * The unprintedInvoices
     * @var bool|null
     */
    protected ?bool $unprintedInvoices = null;
    /**
     * The completelyPaid
     * @var bool|null
     */
    protected ?bool $completelyPaid = null;
    /**
     * The excludeVoidedInvoices
     * @var bool|null
     */
    protected ?bool $excludeVoidedInvoices = null;
    /**
     * The isCustomerInvoiceDetailReport
     * @var bool|null
     */
    protected ?bool $isCustomerInvoiceDetailReport = null;
    /**
     * Constructor method for MidocoBillingDataListCriteriaType
     * @uses MidocoBillingDataListCriteriaType::setDebitorNo()
     * @uses MidocoBillingDataListCriteriaType::setCustomerId()
     * @uses MidocoBillingDataListCriteriaType::setReceiptDateStart()
     * @uses MidocoBillingDataListCriteriaType::setReceiptDateEnd()
     * @uses MidocoBillingDataListCriteriaType::setUnprintedInvoices()
     * @uses MidocoBillingDataListCriteriaType::setCompletelyPaid()
     * @uses MidocoBillingDataListCriteriaType::setExcludeVoidedInvoices()
     * @uses MidocoBillingDataListCriteriaType::setIsCustomerInvoiceDetailReport()
     * @param string $debitorNo
     * @param int $customerId
     * @param string $receiptDateStart
     * @param string $receiptDateEnd
     * @param bool $unprintedInvoices
     * @param bool $completelyPaid
     * @param bool $excludeVoidedInvoices
     * @param bool $isCustomerInvoiceDetailReport
     */
    public function __construct(?string $debitorNo = null, ?int $customerId = null, ?string $receiptDateStart = null, ?string $receiptDateEnd = null, ?bool $unprintedInvoices = null, ?bool $completelyPaid = null, ?bool $excludeVoidedInvoices = null, ?bool $isCustomerInvoiceDetailReport = null)
    {
        $this
            ->setDebitorNo($debitorNo)
            ->setCustomerId($customerId)
            ->setReceiptDateStart($receiptDateStart)
            ->setReceiptDateEnd($receiptDateEnd)
            ->setUnprintedInvoices($unprintedInvoices)
            ->setCompletelyPaid($completelyPaid)
            ->setExcludeVoidedInvoices($excludeVoidedInvoices)
            ->setIsCustomerInvoiceDetailReport($isCustomerInvoiceDetailReport);
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingDataListCriteriaType
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingDataListCriteriaType
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
     * Get receiptDateStart value
     * @return string|null
     */
    public function getReceiptDateStart(): ?string
    {
        return $this->receiptDateStart;
    }
    /**
     * Set receiptDateStart value
     * @param string $receiptDateStart
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingDataListCriteriaType
     */
    public function setReceiptDateStart(?string $receiptDateStart = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptDateStart) && !is_string($receiptDateStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptDateStart, true), gettype($receiptDateStart)), __LINE__);
        }
        $this->receiptDateStart = $receiptDateStart;
        
        return $this;
    }
    /**
     * Get receiptDateEnd value
     * @return string|null
     */
    public function getReceiptDateEnd(): ?string
    {
        return $this->receiptDateEnd;
    }
    /**
     * Set receiptDateEnd value
     * @param string $receiptDateEnd
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingDataListCriteriaType
     */
    public function setReceiptDateEnd(?string $receiptDateEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptDateEnd) && !is_string($receiptDateEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptDateEnd, true), gettype($receiptDateEnd)), __LINE__);
        }
        $this->receiptDateEnd = $receiptDateEnd;
        
        return $this;
    }
    /**
     * Get unprintedInvoices value
     * @return bool|null
     */
    public function getUnprintedInvoices(): ?bool
    {
        return $this->unprintedInvoices;
    }
    /**
     * Set unprintedInvoices value
     * @param bool $unprintedInvoices
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingDataListCriteriaType
     */
    public function setUnprintedInvoices(?bool $unprintedInvoices = null): self
    {
        // validation for constraint: boolean
        if (!is_null($unprintedInvoices) && !is_bool($unprintedInvoices)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($unprintedInvoices, true), gettype($unprintedInvoices)), __LINE__);
        }
        $this->unprintedInvoices = $unprintedInvoices;
        
        return $this;
    }
    /**
     * Get completelyPaid value
     * @return bool|null
     */
    public function getCompletelyPaid(): ?bool
    {
        return $this->completelyPaid;
    }
    /**
     * Set completelyPaid value
     * @param bool $completelyPaid
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingDataListCriteriaType
     */
    public function setCompletelyPaid(?bool $completelyPaid = null): self
    {
        // validation for constraint: boolean
        if (!is_null($completelyPaid) && !is_bool($completelyPaid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($completelyPaid, true), gettype($completelyPaid)), __LINE__);
        }
        $this->completelyPaid = $completelyPaid;
        
        return $this;
    }
    /**
     * Get excludeVoidedInvoices value
     * @return bool|null
     */
    public function getExcludeVoidedInvoices(): ?bool
    {
        return $this->excludeVoidedInvoices;
    }
    /**
     * Set excludeVoidedInvoices value
     * @param bool $excludeVoidedInvoices
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingDataListCriteriaType
     */
    public function setExcludeVoidedInvoices(?bool $excludeVoidedInvoices = null): self
    {
        // validation for constraint: boolean
        if (!is_null($excludeVoidedInvoices) && !is_bool($excludeVoidedInvoices)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($excludeVoidedInvoices, true), gettype($excludeVoidedInvoices)), __LINE__);
        }
        $this->excludeVoidedInvoices = $excludeVoidedInvoices;
        
        return $this;
    }
    /**
     * Get isCustomerInvoiceDetailReport value
     * @return bool|null
     */
    public function getIsCustomerInvoiceDetailReport(): ?bool
    {
        return $this->isCustomerInvoiceDetailReport;
    }
    /**
     * Set isCustomerInvoiceDetailReport value
     * @param bool $isCustomerInvoiceDetailReport
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingDataListCriteriaType
     */
    public function setIsCustomerInvoiceDetailReport(?bool $isCustomerInvoiceDetailReport = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCustomerInvoiceDetailReport) && !is_bool($isCustomerInvoiceDetailReport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCustomerInvoiceDetailReport, true), gettype($isCustomerInvoiceDetailReport)), __LINE__);
        }
        $this->isCustomerInvoiceDetailReport = $isCustomerInvoiceDetailReport;
        
        return $this;
    }
}
