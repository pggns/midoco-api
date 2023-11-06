<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableCurrenciesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAvailableCurrenciesResponse extends AbstractStructBase
{
    /**
     * The MidocoCurrency
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCurrency
     * @var \Pggns\MidocoApi\Documents\StructType\CurrencyDTO[]
     */
    protected ?array $MidocoCurrency = null;
    /**
     * Constructor method for GetAvailableCurrenciesResponse
     * @uses GetAvailableCurrenciesResponse::setMidocoCurrency()
     * @param \Pggns\MidocoApi\Documents\StructType\CurrencyDTO[] $midocoCurrency
     */
    public function __construct(?array $midocoCurrency = null)
    {
        $this
            ->setMidocoCurrency($midocoCurrency);
    }
    /**
     * Get MidocoCurrency value
     * @return \Pggns\MidocoApi\Documents\StructType\CurrencyDTO[]
     */
    public function getMidocoCurrency(): ?array
    {
        return $this->MidocoCurrency;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCurrency method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCurrency method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCurrencyForArrayConstraintFromSetMidocoCurrency(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailableCurrenciesResponseMidocoCurrencyItem) {
            // validation for constraint: itemType
            if (!$getAvailableCurrenciesResponseMidocoCurrencyItem instanceof \Pggns\MidocoApi\Documents\StructType\CurrencyDTO) {
                $invalidValues[] = is_object($getAvailableCurrenciesResponseMidocoCurrencyItem) ? get_class($getAvailableCurrenciesResponseMidocoCurrencyItem) : sprintf('%s(%s)', gettype($getAvailableCurrenciesResponseMidocoCurrencyItem), var_export($getAvailableCurrenciesResponseMidocoCurrencyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCurrency property can only contain items of type \Pggns\MidocoApi\Documents\StructType\CurrencyDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCurrency value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\CurrencyDTO[] $midocoCurrency
     * @return \Pggns\MidocoApi\Documents\StructType\GetAvailableCurrenciesResponse
     */
    public function setMidocoCurrency(?array $midocoCurrency = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCurrencyArrayErrorMessage = self::validateMidocoCurrencyForArrayConstraintFromSetMidocoCurrency($midocoCurrency))) {
            throw new InvalidArgumentException($midocoCurrencyArrayErrorMessage, __LINE__);
        }
        $this->MidocoCurrency = $midocoCurrency;
        
        return $this;
    }
    /**
     * Add item to MidocoCurrency value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\CurrencyDTO $item
     * @return \Pggns\MidocoApi\Documents\StructType\GetAvailableCurrenciesResponse
     */
    public function addToMidocoCurrency(\Pggns\MidocoApi\Documents\StructType\CurrencyDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\CurrencyDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCurrency property can only contain items of type \Pggns\MidocoApi\Documents\StructType\CurrencyDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCurrency[] = $item;
        
        return $this;
    }
}
