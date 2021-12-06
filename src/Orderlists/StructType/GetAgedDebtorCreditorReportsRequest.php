<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAgedDebtorCreditorReportsRequest StructType
 * @subpackage Structs
 */
class GetAgedDebtorCreditorReportsRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The customerId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The dueDateFrom
     * @var string|null
     */
    protected ?string $dueDateFrom = null;
    /**
     * The dueDateTo
     * @var string|null
     */
    protected ?string $dueDateTo = null;
    /**
     * The receiptDateFrom
     * @var string|null
     */
    protected ?string $receiptDateFrom = null;
    /**
     * The receiptDateTo
     * @var string|null
     */
    protected ?string $receiptDateTo = null;
    /**
     * Constructor method for GetAgedDebtorCreditorReportsRequest
     * @uses GetAgedDebtorCreditorReportsRequest::setUnitName()
     * @uses GetAgedDebtorCreditorReportsRequest::setCustomerId()
     * @uses GetAgedDebtorCreditorReportsRequest::setDueDateFrom()
     * @uses GetAgedDebtorCreditorReportsRequest::setDueDateTo()
     * @uses GetAgedDebtorCreditorReportsRequest::setReceiptDateFrom()
     * @uses GetAgedDebtorCreditorReportsRequest::setReceiptDateTo()
     * @param string $unitName
     * @param int $customerId
     * @param string $dueDateFrom
     * @param string $dueDateTo
     * @param string $receiptDateFrom
     * @param string $receiptDateTo
     */
    public function __construct(?string $unitName = null, ?int $customerId = null, ?string $dueDateFrom = null, ?string $dueDateTo = null, ?string $receiptDateFrom = null, ?string $receiptDateTo = null)
    {
        $this
            ->setUnitName($unitName)
            ->setCustomerId($customerId)
            ->setDueDateFrom($dueDateFrom)
            ->setDueDateTo($dueDateTo)
            ->setReceiptDateFrom($receiptDateFrom)
            ->setReceiptDateTo($receiptDateTo);
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetAgedDebtorCreditorReportsRequest
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetAgedDebtorCreditorReportsRequest
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
     * Get dueDateFrom value
     * @return string|null
     */
    public function getDueDateFrom(): ?string
    {
        return $this->dueDateFrom;
    }
    /**
     * Set dueDateFrom value
     * @param string $dueDateFrom
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetAgedDebtorCreditorReportsRequest
     */
    public function setDueDateFrom(?string $dueDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($dueDateFrom) && !is_string($dueDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDateFrom, true), gettype($dueDateFrom)), __LINE__);
        }
        $this->dueDateFrom = $dueDateFrom;
        
        return $this;
    }
    /**
     * Get dueDateTo value
     * @return string|null
     */
    public function getDueDateTo(): ?string
    {
        return $this->dueDateTo;
    }
    /**
     * Set dueDateTo value
     * @param string $dueDateTo
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetAgedDebtorCreditorReportsRequest
     */
    public function setDueDateTo(?string $dueDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($dueDateTo) && !is_string($dueDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDateTo, true), gettype($dueDateTo)), __LINE__);
        }
        $this->dueDateTo = $dueDateTo;
        
        return $this;
    }
    /**
     * Get receiptDateFrom value
     * @return string|null
     */
    public function getReceiptDateFrom(): ?string
    {
        return $this->receiptDateFrom;
    }
    /**
     * Set receiptDateFrom value
     * @param string $receiptDateFrom
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetAgedDebtorCreditorReportsRequest
     */
    public function setReceiptDateFrom(?string $receiptDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptDateFrom) && !is_string($receiptDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptDateFrom, true), gettype($receiptDateFrom)), __LINE__);
        }
        $this->receiptDateFrom = $receiptDateFrom;
        
        return $this;
    }
    /**
     * Get receiptDateTo value
     * @return string|null
     */
    public function getReceiptDateTo(): ?string
    {
        return $this->receiptDateTo;
    }
    /**
     * Set receiptDateTo value
     * @param string $receiptDateTo
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetAgedDebtorCreditorReportsRequest
     */
    public function setReceiptDateTo(?string $receiptDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptDateTo) && !is_string($receiptDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptDateTo, true), gettype($receiptDateTo)), __LINE__);
        }
        $this->receiptDateTo = $receiptDateTo;
        
        return $this;
    }
}
