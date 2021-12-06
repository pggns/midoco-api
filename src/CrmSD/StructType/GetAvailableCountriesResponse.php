<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableCountriesResponse StructType
 * @subpackage Structs
 */
class GetAvailableCountriesResponse extends AbstractStructBase
{
    /**
     * The MidocoCountry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCountry
     * @var \Pggns\MidocoApi\CrmSD\StructType\CountryDTO[]
     */
    protected ?array $MidocoCountry = null;
    /**
     * Constructor method for GetAvailableCountriesResponse
     * @uses GetAvailableCountriesResponse::setMidocoCountry()
     * @param \Pggns\MidocoApi\CrmSD\StructType\CountryDTO[] $midocoCountry
     */
    public function __construct(?array $midocoCountry = null)
    {
        $this
            ->setMidocoCountry($midocoCountry);
    }
    /**
     * Get MidocoCountry value
     * @return \Pggns\MidocoApi\CrmSD\StructType\CountryDTO[]
     */
    public function getMidocoCountry(): ?array
    {
        return $this->MidocoCountry;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCountry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCountry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCountryForArrayConstraintsFromSetMidocoCountry(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailableCountriesResponseMidocoCountryItem) {
            // validation for constraint: itemType
            if (!$getAvailableCountriesResponseMidocoCountryItem instanceof \Pggns\MidocoApi\CrmSD\StructType\CountryDTO) {
                $invalidValues[] = is_object($getAvailableCountriesResponseMidocoCountryItem) ? get_class($getAvailableCountriesResponseMidocoCountryItem) : sprintf('%s(%s)', gettype($getAvailableCountriesResponseMidocoCountryItem), var_export($getAvailableCountriesResponseMidocoCountryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCountry property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\CountryDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCountry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\CountryDTO[] $midocoCountry
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetAvailableCountriesResponse
     */
    public function setMidocoCountry(?array $midocoCountry = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCountryArrayErrorMessage = self::validateMidocoCountryForArrayConstraintsFromSetMidocoCountry($midocoCountry))) {
            throw new InvalidArgumentException($midocoCountryArrayErrorMessage, __LINE__);
        }
        $this->MidocoCountry = $midocoCountry;
        
        return $this;
    }
    /**
     * Add item to MidocoCountry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\CountryDTO $item
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetAvailableCountriesResponse
     */
    public function addToMidocoCountry(\Pggns\MidocoApi\CrmSD\StructType\CountryDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\CrmSD\StructType\CountryDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCountry property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\CountryDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCountry[] = $item;
        
        return $this;
    }
}
