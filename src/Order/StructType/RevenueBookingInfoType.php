<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RevenueBookingInfoType StructType
 * @subpackage Structs
 */
class RevenueBookingInfoType extends RevenueBookingDTO
{
    /**
     * The MidocoRevenueBookingVatDiv
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoRevenueBookingVatDiv
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoRevenueBookingVatDiv[]
     */
    protected ?array $MidocoRevenueBookingVatDiv = null;
    /**
     * The newTotalAmount
     * @var float|null
     */
    protected ?float $newTotalAmount = null;
    /**
     * The costCentre
     * @var string|null
     */
    protected ?string $costCentre = null;
    /**
     * The entryRestAsProv
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $entryRestAsProv = null;
    /**
     * The foreignCurrencyExchangeRate
     * @var float|null
     */
    protected ?float $foreignCurrencyExchangeRate = null;
    /**
     * The preventPaymentForEntry
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $preventPaymentForEntry = null;
    /**
     * Constructor method for RevenueBookingInfoType
     * @uses RevenueBookingInfoType::setMidocoRevenueBookingVatDiv()
     * @uses RevenueBookingInfoType::setNewTotalAmount()
     * @uses RevenueBookingInfoType::setCostCentre()
     * @uses RevenueBookingInfoType::setEntryRestAsProv()
     * @uses RevenueBookingInfoType::setForeignCurrencyExchangeRate()
     * @uses RevenueBookingInfoType::setPreventPaymentForEntry()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoRevenueBookingVatDiv[] $midocoRevenueBookingVatDiv
     * @param float $newTotalAmount
     * @param string $costCentre
     * @param bool $entryRestAsProv
     * @param float $foreignCurrencyExchangeRate
     * @param bool $preventPaymentForEntry
     */
    public function __construct(?array $midocoRevenueBookingVatDiv = null, ?float $newTotalAmount = null, ?string $costCentre = null, ?bool $entryRestAsProv = false, ?float $foreignCurrencyExchangeRate = null, ?bool $preventPaymentForEntry = false)
    {
        $this
            ->setMidocoRevenueBookingVatDiv($midocoRevenueBookingVatDiv)
            ->setNewTotalAmount($newTotalAmount)
            ->setCostCentre($costCentre)
            ->setEntryRestAsProv($entryRestAsProv)
            ->setForeignCurrencyExchangeRate($foreignCurrencyExchangeRate)
            ->setPreventPaymentForEntry($preventPaymentForEntry);
    }
    /**
     * Get MidocoRevenueBookingVatDiv value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoRevenueBookingVatDiv[]
     */
    public function getMidocoRevenueBookingVatDiv(): ?array
    {
        return $this->MidocoRevenueBookingVatDiv;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoRevenueBookingVatDiv method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoRevenueBookingVatDiv method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoRevenueBookingVatDivForArrayConstraintsFromSetMidocoRevenueBookingVatDiv(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $revenueBookingInfoTypeMidocoRevenueBookingVatDivItem) {
            // validation for constraint: itemType
            if (!$revenueBookingInfoTypeMidocoRevenueBookingVatDivItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoRevenueBookingVatDiv) {
                $invalidValues[] = is_object($revenueBookingInfoTypeMidocoRevenueBookingVatDivItem) ? get_class($revenueBookingInfoTypeMidocoRevenueBookingVatDivItem) : sprintf('%s(%s)', gettype($revenueBookingInfoTypeMidocoRevenueBookingVatDivItem), var_export($revenueBookingInfoTypeMidocoRevenueBookingVatDivItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoRevenueBookingVatDiv property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoRevenueBookingVatDiv, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoRevenueBookingVatDiv value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoRevenueBookingVatDiv[] $midocoRevenueBookingVatDiv
     * @return \Pggns\MidocoApi\Api\Order\StructType\RevenueBookingInfoType
     */
    public function setMidocoRevenueBookingVatDiv(?array $midocoRevenueBookingVatDiv = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoRevenueBookingVatDivArrayErrorMessage = self::validateMidocoRevenueBookingVatDivForArrayConstraintsFromSetMidocoRevenueBookingVatDiv($midocoRevenueBookingVatDiv))) {
            throw new InvalidArgumentException($midocoRevenueBookingVatDivArrayErrorMessage, __LINE__);
        }
        $this->MidocoRevenueBookingVatDiv = $midocoRevenueBookingVatDiv;
        
        return $this;
    }
    /**
     * Add item to MidocoRevenueBookingVatDiv value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoRevenueBookingVatDiv $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\RevenueBookingInfoType
     */
    public function addToMidocoRevenueBookingVatDiv(\Pggns\MidocoApi\Api\Order\StructType\MidocoRevenueBookingVatDiv $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoRevenueBookingVatDiv) {
            throw new InvalidArgumentException(sprintf('The MidocoRevenueBookingVatDiv property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoRevenueBookingVatDiv, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoRevenueBookingVatDiv[] = $item;
        
        return $this;
    }
    /**
     * Get newTotalAmount value
     * @return float|null
     */
    public function getNewTotalAmount(): ?float
    {
        return $this->newTotalAmount;
    }
    /**
     * Set newTotalAmount value
     * @param float $newTotalAmount
     * @return \Pggns\MidocoApi\Api\Order\StructType\RevenueBookingInfoType
     */
    public function setNewTotalAmount(?float $newTotalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($newTotalAmount) && !(is_float($newTotalAmount) || is_numeric($newTotalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($newTotalAmount, true), gettype($newTotalAmount)), __LINE__);
        }
        $this->newTotalAmount = $newTotalAmount;
        
        return $this;
    }
    /**
     * Get costCentre value
     * @return string|null
     */
    public function getCostCentre(): ?string
    {
        return $this->costCentre;
    }
    /**
     * Set costCentre value
     * @param string $costCentre
     * @return \Pggns\MidocoApi\Api\Order\StructType\RevenueBookingInfoType
     */
    public function setCostCentre(?string $costCentre = null): self
    {
        // validation for constraint: string
        if (!is_null($costCentre) && !is_string($costCentre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costCentre, true), gettype($costCentre)), __LINE__);
        }
        $this->costCentre = $costCentre;
        
        return $this;
    }
    /**
     * Get entryRestAsProv value
     * @return bool|null
     */
    public function getEntryRestAsProv(): ?bool
    {
        return $this->entryRestAsProv;
    }
    /**
     * Set entryRestAsProv value
     * @param bool $entryRestAsProv
     * @return \Pggns\MidocoApi\Api\Order\StructType\RevenueBookingInfoType
     */
    public function setEntryRestAsProv(?bool $entryRestAsProv = false): self
    {
        // validation for constraint: boolean
        if (!is_null($entryRestAsProv) && !is_bool($entryRestAsProv)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($entryRestAsProv, true), gettype($entryRestAsProv)), __LINE__);
        }
        $this->entryRestAsProv = $entryRestAsProv;
        
        return $this;
    }
    /**
     * Get foreignCurrencyExchangeRate value
     * @return float|null
     */
    public function getForeignCurrencyExchangeRate(): ?float
    {
        return $this->foreignCurrencyExchangeRate;
    }
    /**
     * Set foreignCurrencyExchangeRate value
     * @param float $foreignCurrencyExchangeRate
     * @return \Pggns\MidocoApi\Api\Order\StructType\RevenueBookingInfoType
     */
    public function setForeignCurrencyExchangeRate(?float $foreignCurrencyExchangeRate = null): self
    {
        // validation for constraint: float
        if (!is_null($foreignCurrencyExchangeRate) && !(is_float($foreignCurrencyExchangeRate) || is_numeric($foreignCurrencyExchangeRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($foreignCurrencyExchangeRate, true), gettype($foreignCurrencyExchangeRate)), __LINE__);
        }
        $this->foreignCurrencyExchangeRate = $foreignCurrencyExchangeRate;
        
        return $this;
    }
    /**
     * Get preventPaymentForEntry value
     * @return bool|null
     */
    public function getPreventPaymentForEntry(): ?bool
    {
        return $this->preventPaymentForEntry;
    }
    /**
     * Set preventPaymentForEntry value
     * @param bool $preventPaymentForEntry
     * @return \Pggns\MidocoApi\Api\Order\StructType\RevenueBookingInfoType
     */
    public function setPreventPaymentForEntry(?bool $preventPaymentForEntry = false): self
    {
        // validation for constraint: boolean
        if (!is_null($preventPaymentForEntry) && !is_bool($preventPaymentForEntry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preventPaymentForEntry, true), gettype($preventPaymentForEntry)), __LINE__);
        }
        $this->preventPaymentForEntry = $preventPaymentForEntry;
        
        return $this;
    }
}
