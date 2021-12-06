<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportSupplierSettlementDataRequest StructType
 * @subpackage Structs
 */
class ImportSupplierSettlementDataRequest extends AbstractStructBase
{
    /**
     * The Data
     * @var string|null
     */
    protected ?string $Data = null;
    /**
     * The sourceSystem
     * @var string|null
     */
    protected ?string $sourceSystem = null;
    /**
     * The delimiter
     * @var string|null
     */
    protected ?string $delimiter = null;
    /**
     * The dateFormat
     * @var string|null
     */
    protected ?string $dateFormat = null;
    /**
     * The decimalDelimiter
     * @var string|null
     */
    protected ?string $decimalDelimiter = null;
    /**
     * The supplierDataFormat
     * @var string|null
     */
    protected ?string $supplierDataFormat = null;
    /**
     * The textInQuotes
     * @var bool|null
     */
    protected ?bool $textInQuotes = null;
    /**
     * The settlementDate
     * @var string|null
     */
    protected ?string $settlementDate = null;
    /**
     * Constructor method for ImportSupplierSettlementDataRequest
     * @uses ImportSupplierSettlementDataRequest::setData()
     * @uses ImportSupplierSettlementDataRequest::setSourceSystem()
     * @uses ImportSupplierSettlementDataRequest::setDelimiter()
     * @uses ImportSupplierSettlementDataRequest::setDateFormat()
     * @uses ImportSupplierSettlementDataRequest::setDecimalDelimiter()
     * @uses ImportSupplierSettlementDataRequest::setSupplierDataFormat()
     * @uses ImportSupplierSettlementDataRequest::setTextInQuotes()
     * @uses ImportSupplierSettlementDataRequest::setSettlementDate()
     * @param string $data
     * @param string $sourceSystem
     * @param string $delimiter
     * @param string $dateFormat
     * @param string $decimalDelimiter
     * @param string $supplierDataFormat
     * @param bool $textInQuotes
     * @param string $settlementDate
     */
    public function __construct(?string $data = null, ?string $sourceSystem = null, ?string $delimiter = null, ?string $dateFormat = null, ?string $decimalDelimiter = null, ?string $supplierDataFormat = null, ?bool $textInQuotes = null, ?string $settlementDate = null)
    {
        $this
            ->setData($data)
            ->setSourceSystem($sourceSystem)
            ->setDelimiter($delimiter)
            ->setDateFormat($dateFormat)
            ->setDecimalDelimiter($decimalDelimiter)
            ->setSupplierDataFormat($supplierDataFormat)
            ->setTextInQuotes($textInQuotes)
            ->setSettlementDate($settlementDate);
    }
    /**
     * Get Data value
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->Data;
    }
    /**
     * Set Data value
     * @param string $data
     * @return \Pggns\MidocoApi\Order\StructType\ImportSupplierSettlementDataRequest
     */
    public function setData(?string $data = null): self
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        $this->Data = $data;
        
        return $this;
    }
    /**
     * Get sourceSystem value
     * @return string|null
     */
    public function getSourceSystem(): ?string
    {
        return $this->sourceSystem;
    }
    /**
     * Set sourceSystem value
     * @param string $sourceSystem
     * @return \Pggns\MidocoApi\Order\StructType\ImportSupplierSettlementDataRequest
     */
    public function setSourceSystem(?string $sourceSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceSystem) && !is_string($sourceSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceSystem, true), gettype($sourceSystem)), __LINE__);
        }
        $this->sourceSystem = $sourceSystem;
        
        return $this;
    }
    /**
     * Get delimiter value
     * @return string|null
     */
    public function getDelimiter(): ?string
    {
        return $this->delimiter;
    }
    /**
     * Set delimiter value
     * @param string $delimiter
     * @return \Pggns\MidocoApi\Order\StructType\ImportSupplierSettlementDataRequest
     */
    public function setDelimiter(?string $delimiter = null): self
    {
        // validation for constraint: string
        if (!is_null($delimiter) && !is_string($delimiter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delimiter, true), gettype($delimiter)), __LINE__);
        }
        $this->delimiter = $delimiter;
        
        return $this;
    }
    /**
     * Get dateFormat value
     * @return string|null
     */
    public function getDateFormat(): ?string
    {
        return $this->dateFormat;
    }
    /**
     * Set dateFormat value
     * @param string $dateFormat
     * @return \Pggns\MidocoApi\Order\StructType\ImportSupplierSettlementDataRequest
     */
    public function setDateFormat(?string $dateFormat = null): self
    {
        // validation for constraint: string
        if (!is_null($dateFormat) && !is_string($dateFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateFormat, true), gettype($dateFormat)), __LINE__);
        }
        $this->dateFormat = $dateFormat;
        
        return $this;
    }
    /**
     * Get decimalDelimiter value
     * @return string|null
     */
    public function getDecimalDelimiter(): ?string
    {
        return $this->decimalDelimiter;
    }
    /**
     * Set decimalDelimiter value
     * @param string $decimalDelimiter
     * @return \Pggns\MidocoApi\Order\StructType\ImportSupplierSettlementDataRequest
     */
    public function setDecimalDelimiter(?string $decimalDelimiter = null): self
    {
        // validation for constraint: string
        if (!is_null($decimalDelimiter) && !is_string($decimalDelimiter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($decimalDelimiter, true), gettype($decimalDelimiter)), __LINE__);
        }
        $this->decimalDelimiter = $decimalDelimiter;
        
        return $this;
    }
    /**
     * Get supplierDataFormat value
     * @return string|null
     */
    public function getSupplierDataFormat(): ?string
    {
        return $this->supplierDataFormat;
    }
    /**
     * Set supplierDataFormat value
     * @param string $supplierDataFormat
     * @return \Pggns\MidocoApi\Order\StructType\ImportSupplierSettlementDataRequest
     */
    public function setSupplierDataFormat(?string $supplierDataFormat = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierDataFormat) && !is_string($supplierDataFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierDataFormat, true), gettype($supplierDataFormat)), __LINE__);
        }
        $this->supplierDataFormat = $supplierDataFormat;
        
        return $this;
    }
    /**
     * Get textInQuotes value
     * @return bool|null
     */
    public function getTextInQuotes(): ?bool
    {
        return $this->textInQuotes;
    }
    /**
     * Set textInQuotes value
     * @param bool $textInQuotes
     * @return \Pggns\MidocoApi\Order\StructType\ImportSupplierSettlementDataRequest
     */
    public function setTextInQuotes(?bool $textInQuotes = null): self
    {
        // validation for constraint: boolean
        if (!is_null($textInQuotes) && !is_bool($textInQuotes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($textInQuotes, true), gettype($textInQuotes)), __LINE__);
        }
        $this->textInQuotes = $textInQuotes;
        
        return $this;
    }
    /**
     * Get settlementDate value
     * @return string|null
     */
    public function getSettlementDate(): ?string
    {
        return $this->settlementDate;
    }
    /**
     * Set settlementDate value
     * @param string $settlementDate
     * @return \Pggns\MidocoApi\Order\StructType\ImportSupplierSettlementDataRequest
     */
    public function setSettlementDate(?string $settlementDate = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementDate) && !is_string($settlementDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementDate, true), gettype($settlementDate)), __LINE__);
        }
        $this->settlementDate = $settlementDate;
        
        return $this;
    }
}
