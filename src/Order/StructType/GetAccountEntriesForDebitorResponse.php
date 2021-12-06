<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccountEntriesForDebitorResponse StructType
 * @subpackage Structs
 */
class GetAccountEntriesForDebitorResponse extends AbstractStructBase
{
    /**
     * The MidocoDebitorAccountEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType[]
     */
    protected ?array $MidocoDebitorAccountEntry = null;
    /**
     * The totalNoOfRecords
     * @var int|null
     */
    protected ?int $totalNoOfRecords = null;
    /**
     * The totalInvoicedAmount
     * @var float|null
     */
    protected ?float $totalInvoicedAmount = null;
    /**
     * The totalPaidAmount
     * @var float|null
     */
    protected ?float $totalPaidAmount = null;
    /**
     * The totalDueAmount
     * @var float|null
     */
    protected ?float $totalDueAmount = null;
    /**
     * The cacheId
     * @var int|null
     */
    protected ?int $cacheId = null;
    /**
     * Constructor method for GetAccountEntriesForDebitorResponse
     * @uses GetAccountEntriesForDebitorResponse::setMidocoDebitorAccountEntry()
     * @uses GetAccountEntriesForDebitorResponse::setTotalNoOfRecords()
     * @uses GetAccountEntriesForDebitorResponse::setTotalInvoicedAmount()
     * @uses GetAccountEntriesForDebitorResponse::setTotalPaidAmount()
     * @uses GetAccountEntriesForDebitorResponse::setTotalDueAmount()
     * @uses GetAccountEntriesForDebitorResponse::setCacheId()
     * @param \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType[] $midocoDebitorAccountEntry
     * @param int $totalNoOfRecords
     * @param float $totalInvoicedAmount
     * @param float $totalPaidAmount
     * @param float $totalDueAmount
     * @param int $cacheId
     */
    public function __construct(?array $midocoDebitorAccountEntry = null, ?int $totalNoOfRecords = null, ?float $totalInvoicedAmount = null, ?float $totalPaidAmount = null, ?float $totalDueAmount = null, ?int $cacheId = null)
    {
        $this
            ->setMidocoDebitorAccountEntry($midocoDebitorAccountEntry)
            ->setTotalNoOfRecords($totalNoOfRecords)
            ->setTotalInvoicedAmount($totalInvoicedAmount)
            ->setTotalPaidAmount($totalPaidAmount)
            ->setTotalDueAmount($totalDueAmount)
            ->setCacheId($cacheId);
    }
    /**
     * Get MidocoDebitorAccountEntry value
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType[]
     */
    public function getMidocoDebitorAccountEntry(): ?array
    {
        return $this->MidocoDebitorAccountEntry;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDebitorAccountEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDebitorAccountEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDebitorAccountEntryForArrayConstraintsFromSetMidocoDebitorAccountEntry(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAccountEntriesForDebitorResponseMidocoDebitorAccountEntryItem) {
            // validation for constraint: itemType
            if (!$getAccountEntriesForDebitorResponseMidocoDebitorAccountEntryItem instanceof \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType) {
                $invalidValues[] = is_object($getAccountEntriesForDebitorResponseMidocoDebitorAccountEntryItem) ? get_class($getAccountEntriesForDebitorResponseMidocoDebitorAccountEntryItem) : sprintf('%s(%s)', gettype($getAccountEntriesForDebitorResponseMidocoDebitorAccountEntryItem), var_export($getAccountEntriesForDebitorResponseMidocoDebitorAccountEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDebitorAccountEntry property can only contain items of type \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDebitorAccountEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType[] $midocoDebitorAccountEntry
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorResponse
     */
    public function setMidocoDebitorAccountEntry(?array $midocoDebitorAccountEntry = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDebitorAccountEntryArrayErrorMessage = self::validateMidocoDebitorAccountEntryForArrayConstraintsFromSetMidocoDebitorAccountEntry($midocoDebitorAccountEntry))) {
            throw new InvalidArgumentException($midocoDebitorAccountEntryArrayErrorMessage, __LINE__);
        }
        $this->MidocoDebitorAccountEntry = $midocoDebitorAccountEntry;
        
        return $this;
    }
    /**
     * Add item to MidocoDebitorAccountEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType $item
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorResponse
     */
    public function addToMidocoDebitorAccountEntry(\Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType) {
            throw new InvalidArgumentException(sprintf('The MidocoDebitorAccountEntry property can only contain items of type \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDebitorAccountEntry[] = $item;
        
        return $this;
    }
    /**
     * Get totalNoOfRecords value
     * @return int|null
     */
    public function getTotalNoOfRecords(): ?int
    {
        return $this->totalNoOfRecords;
    }
    /**
     * Set totalNoOfRecords value
     * @param int $totalNoOfRecords
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorResponse
     */
    public function setTotalNoOfRecords(?int $totalNoOfRecords = null): self
    {
        // validation for constraint: int
        if (!is_null($totalNoOfRecords) && !(is_int($totalNoOfRecords) || ctype_digit($totalNoOfRecords))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalNoOfRecords, true), gettype($totalNoOfRecords)), __LINE__);
        }
        $this->totalNoOfRecords = $totalNoOfRecords;
        
        return $this;
    }
    /**
     * Get totalInvoicedAmount value
     * @return float|null
     */
    public function getTotalInvoicedAmount(): ?float
    {
        return $this->totalInvoicedAmount;
    }
    /**
     * Set totalInvoicedAmount value
     * @param float $totalInvoicedAmount
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorResponse
     */
    public function setTotalInvoicedAmount(?float $totalInvoicedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalInvoicedAmount) && !(is_float($totalInvoicedAmount) || is_numeric($totalInvoicedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalInvoicedAmount, true), gettype($totalInvoicedAmount)), __LINE__);
        }
        $this->totalInvoicedAmount = $totalInvoicedAmount;
        
        return $this;
    }
    /**
     * Get totalPaidAmount value
     * @return float|null
     */
    public function getTotalPaidAmount(): ?float
    {
        return $this->totalPaidAmount;
    }
    /**
     * Set totalPaidAmount value
     * @param float $totalPaidAmount
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorResponse
     */
    public function setTotalPaidAmount(?float $totalPaidAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPaidAmount) && !(is_float($totalPaidAmount) || is_numeric($totalPaidAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPaidAmount, true), gettype($totalPaidAmount)), __LINE__);
        }
        $this->totalPaidAmount = $totalPaidAmount;
        
        return $this;
    }
    /**
     * Get totalDueAmount value
     * @return float|null
     */
    public function getTotalDueAmount(): ?float
    {
        return $this->totalDueAmount;
    }
    /**
     * Set totalDueAmount value
     * @param float $totalDueAmount
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorResponse
     */
    public function setTotalDueAmount(?float $totalDueAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalDueAmount) && !(is_float($totalDueAmount) || is_numeric($totalDueAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalDueAmount, true), gettype($totalDueAmount)), __LINE__);
        }
        $this->totalDueAmount = $totalDueAmount;
        
        return $this;
    }
    /**
     * Get cacheId value
     * @return int|null
     */
    public function getCacheId(): ?int
    {
        return $this->cacheId;
    }
    /**
     * Set cacheId value
     * @param int $cacheId
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorResponse
     */
    public function setCacheId(?int $cacheId = null): self
    {
        // validation for constraint: int
        if (!is_null($cacheId) && !(is_int($cacheId) || ctype_digit($cacheId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cacheId, true), gettype($cacheId)), __LINE__);
        }
        $this->cacheId = $cacheId;
        
        return $this;
    }
}
