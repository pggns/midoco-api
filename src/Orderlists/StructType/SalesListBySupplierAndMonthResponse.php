<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalesListBySupplierAndMonthResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SalesListBySupplierAndMonthResponse extends AbstractStructBase
{
    /**
     * The MidocoSalesListsBySupplierAndMonth
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSalesListsBySupplierAndMonth
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierAndMonthType[]
     */
    protected ?array $MidocoSalesListsBySupplierAndMonth = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * The SalesListsBySupplierAndMonthSums
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: SalesListsBySupplierAndMonthSums
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierAndMonthType[]
     */
    protected ?array $SalesListsBySupplierAndMonthSums = null;
    /**
     * The allUnitsWereEUR
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $allUnitsWereEUR = null;
    /**
     * The CurrencyRate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: CurrencyRate
     * @var \Pggns\MidocoApi\Orderlists\StructType\CurrencyRateType[]
     */
    protected ?array $CurrencyRate = null;
    /**
     * Constructor method for SalesListBySupplierAndMonthResponse
     * @uses SalesListBySupplierAndMonthResponse::setMidocoSalesListsBySupplierAndMonth()
     * @uses SalesListBySupplierAndMonthResponse::setNoOfResults()
     * @uses SalesListBySupplierAndMonthResponse::setSalesListsBySupplierAndMonthSums()
     * @uses SalesListBySupplierAndMonthResponse::setAllUnitsWereEUR()
     * @uses SalesListBySupplierAndMonthResponse::setCurrencyRate()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierAndMonthType[] $midocoSalesListsBySupplierAndMonth
     * @param int $noOfResults
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierAndMonthType[] $salesListsBySupplierAndMonthSums
     * @param bool $allUnitsWereEUR
     * @param \Pggns\MidocoApi\Orderlists\StructType\CurrencyRateType[] $currencyRate
     */
    public function __construct(?array $midocoSalesListsBySupplierAndMonth = null, ?int $noOfResults = null, ?array $salesListsBySupplierAndMonthSums = null, ?bool $allUnitsWereEUR = null, ?array $currencyRate = null)
    {
        $this
            ->setMidocoSalesListsBySupplierAndMonth($midocoSalesListsBySupplierAndMonth)
            ->setNoOfResults($noOfResults)
            ->setSalesListsBySupplierAndMonthSums($salesListsBySupplierAndMonthSums)
            ->setAllUnitsWereEUR($allUnitsWereEUR)
            ->setCurrencyRate($currencyRate);
    }
    /**
     * Get MidocoSalesListsBySupplierAndMonth value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierAndMonthType[]
     */
    public function getMidocoSalesListsBySupplierAndMonth(): ?array
    {
        return $this->MidocoSalesListsBySupplierAndMonth;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSalesListsBySupplierAndMonth method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSalesListsBySupplierAndMonth method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSalesListsBySupplierAndMonthForArrayConstraintFromSetMidocoSalesListsBySupplierAndMonth(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $salesListBySupplierAndMonthResponseMidocoSalesListsBySupplierAndMonthItem) {
            // validation for constraint: itemType
            if (!$salesListBySupplierAndMonthResponseMidocoSalesListsBySupplierAndMonthItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierAndMonthType) {
                $invalidValues[] = is_object($salesListBySupplierAndMonthResponseMidocoSalesListsBySupplierAndMonthItem) ? get_class($salesListBySupplierAndMonthResponseMidocoSalesListsBySupplierAndMonthItem) : sprintf('%s(%s)', gettype($salesListBySupplierAndMonthResponseMidocoSalesListsBySupplierAndMonthItem), var_export($salesListBySupplierAndMonthResponseMidocoSalesListsBySupplierAndMonthItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSalesListsBySupplierAndMonth property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierAndMonthType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSalesListsBySupplierAndMonth value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierAndMonthType[] $midocoSalesListsBySupplierAndMonth
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierAndMonthResponse
     */
    public function setMidocoSalesListsBySupplierAndMonth(?array $midocoSalesListsBySupplierAndMonth = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSalesListsBySupplierAndMonthArrayErrorMessage = self::validateMidocoSalesListsBySupplierAndMonthForArrayConstraintFromSetMidocoSalesListsBySupplierAndMonth($midocoSalesListsBySupplierAndMonth))) {
            throw new InvalidArgumentException($midocoSalesListsBySupplierAndMonthArrayErrorMessage, __LINE__);
        }
        $this->MidocoSalesListsBySupplierAndMonth = $midocoSalesListsBySupplierAndMonth;
        
        return $this;
    }
    /**
     * Add item to MidocoSalesListsBySupplierAndMonth value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierAndMonthType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierAndMonthResponse
     */
    public function addToMidocoSalesListsBySupplierAndMonth(\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierAndMonthType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierAndMonthType) {
            throw new InvalidArgumentException(sprintf('The MidocoSalesListsBySupplierAndMonth property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierAndMonthType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSalesListsBySupplierAndMonth[] = $item;
        
        return $this;
    }
    /**
     * Get noOfResults value
     * @return int|null
     */
    public function getNoOfResults(): ?int
    {
        return $this->noOfResults;
    }
    /**
     * Set noOfResults value
     * @param int $noOfResults
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierAndMonthResponse
     */
    public function setNoOfResults(?int $noOfResults = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfResults) && !(is_int($noOfResults) || ctype_digit($noOfResults))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfResults, true), gettype($noOfResults)), __LINE__);
        }
        $this->noOfResults = $noOfResults;
        
        return $this;
    }
    /**
     * Get SalesListsBySupplierAndMonthSums value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierAndMonthType[]
     */
    public function getSalesListsBySupplierAndMonthSums(): ?array
    {
        return $this->SalesListsBySupplierAndMonthSums;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSalesListsBySupplierAndMonthSums method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSalesListsBySupplierAndMonthSums method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSalesListsBySupplierAndMonthSumsForArrayConstraintFromSetSalesListsBySupplierAndMonthSums(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $salesListBySupplierAndMonthResponseSalesListsBySupplierAndMonthSumsItem) {
            // validation for constraint: itemType
            if (!$salesListBySupplierAndMonthResponseSalesListsBySupplierAndMonthSumsItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierAndMonthType) {
                $invalidValues[] = is_object($salesListBySupplierAndMonthResponseSalesListsBySupplierAndMonthSumsItem) ? get_class($salesListBySupplierAndMonthResponseSalesListsBySupplierAndMonthSumsItem) : sprintf('%s(%s)', gettype($salesListBySupplierAndMonthResponseSalesListsBySupplierAndMonthSumsItem), var_export($salesListBySupplierAndMonthResponseSalesListsBySupplierAndMonthSumsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SalesListsBySupplierAndMonthSums property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierAndMonthType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SalesListsBySupplierAndMonthSums value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierAndMonthType[] $salesListsBySupplierAndMonthSums
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierAndMonthResponse
     */
    public function setSalesListsBySupplierAndMonthSums(?array $salesListsBySupplierAndMonthSums = null): self
    {
        // validation for constraint: array
        if ('' !== ($salesListsBySupplierAndMonthSumsArrayErrorMessage = self::validateSalesListsBySupplierAndMonthSumsForArrayConstraintFromSetSalesListsBySupplierAndMonthSums($salesListsBySupplierAndMonthSums))) {
            throw new InvalidArgumentException($salesListsBySupplierAndMonthSumsArrayErrorMessage, __LINE__);
        }
        $this->SalesListsBySupplierAndMonthSums = $salesListsBySupplierAndMonthSums;
        
        return $this;
    }
    /**
     * Add item to SalesListsBySupplierAndMonthSums value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierAndMonthType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierAndMonthResponse
     */
    public function addToSalesListsBySupplierAndMonthSums(\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierAndMonthType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierAndMonthType) {
            throw new InvalidArgumentException(sprintf('The SalesListsBySupplierAndMonthSums property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierAndMonthType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SalesListsBySupplierAndMonthSums[] = $item;
        
        return $this;
    }
    /**
     * Get allUnitsWereEUR value
     * @return bool|null
     */
    public function getAllUnitsWereEUR(): ?bool
    {
        return $this->allUnitsWereEUR;
    }
    /**
     * Set allUnitsWereEUR value
     * @param bool $allUnitsWereEUR
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierAndMonthResponse
     */
    public function setAllUnitsWereEUR(?bool $allUnitsWereEUR = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allUnitsWereEUR) && !is_bool($allUnitsWereEUR)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allUnitsWereEUR, true), gettype($allUnitsWereEUR)), __LINE__);
        }
        $this->allUnitsWereEUR = $allUnitsWereEUR;
        
        return $this;
    }
    /**
     * Get CurrencyRate value
     * @return \Pggns\MidocoApi\Orderlists\StructType\CurrencyRateType[]
     */
    public function getCurrencyRate(): ?array
    {
        return $this->CurrencyRate;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCurrencyRate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCurrencyRate method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCurrencyRateForArrayConstraintFromSetCurrencyRate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $salesListBySupplierAndMonthResponseCurrencyRateItem) {
            // validation for constraint: itemType
            if (!$salesListBySupplierAndMonthResponseCurrencyRateItem instanceof \Pggns\MidocoApi\Orderlists\StructType\CurrencyRateType) {
                $invalidValues[] = is_object($salesListBySupplierAndMonthResponseCurrencyRateItem) ? get_class($salesListBySupplierAndMonthResponseCurrencyRateItem) : sprintf('%s(%s)', gettype($salesListBySupplierAndMonthResponseCurrencyRateItem), var_export($salesListBySupplierAndMonthResponseCurrencyRateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CurrencyRate property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\CurrencyRateType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CurrencyRate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\CurrencyRateType[] $currencyRate
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierAndMonthResponse
     */
    public function setCurrencyRate(?array $currencyRate = null): self
    {
        // validation for constraint: array
        if ('' !== ($currencyRateArrayErrorMessage = self::validateCurrencyRateForArrayConstraintFromSetCurrencyRate($currencyRate))) {
            throw new InvalidArgumentException($currencyRateArrayErrorMessage, __LINE__);
        }
        $this->CurrencyRate = $currencyRate;
        
        return $this;
    }
    /**
     * Add item to CurrencyRate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\CurrencyRateType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierAndMonthResponse
     */
    public function addToCurrencyRate(\Pggns\MidocoApi\Orderlists\StructType\CurrencyRateType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\CurrencyRateType) {
            throw new InvalidArgumentException(sprintf('The CurrencyRate property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\CurrencyRateType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CurrencyRate[] = $item;
        
        return $this;
    }
}
