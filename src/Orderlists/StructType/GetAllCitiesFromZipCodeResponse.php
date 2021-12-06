<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllCitiesFromZipCodeResponse StructType
 * @subpackage Structs
 */
class GetAllCitiesFromZipCodeResponse extends AbstractStructBase
{
    /**
     * The MidocoCity
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCity
     * @var \Pggns\MidocoApi\Orderlists\StructType\CityDTO[]
     */
    protected ?array $MidocoCity = null;
    /**
     * Constructor method for GetAllCitiesFromZipCodeResponse
     * @uses GetAllCitiesFromZipCodeResponse::setMidocoCity()
     * @param \Pggns\MidocoApi\Orderlists\StructType\CityDTO[] $midocoCity
     */
    public function __construct(?array $midocoCity = null)
    {
        $this
            ->setMidocoCity($midocoCity);
    }
    /**
     * Get MidocoCity value
     * @return \Pggns\MidocoApi\Orderlists\StructType\CityDTO[]
     */
    public function getMidocoCity(): ?array
    {
        return $this->MidocoCity;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCity method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCityForArrayConstraintsFromSetMidocoCity(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAllCitiesFromZipCodeResponseMidocoCityItem) {
            // validation for constraint: itemType
            if (!$getAllCitiesFromZipCodeResponseMidocoCityItem instanceof \Pggns\MidocoApi\Orderlists\StructType\CityDTO) {
                $invalidValues[] = is_object($getAllCitiesFromZipCodeResponseMidocoCityItem) ? get_class($getAllCitiesFromZipCodeResponseMidocoCityItem) : sprintf('%s(%s)', gettype($getAllCitiesFromZipCodeResponseMidocoCityItem), var_export($getAllCitiesFromZipCodeResponseMidocoCityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCity property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\CityDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCity value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\CityDTO[] $midocoCity
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetAllCitiesFromZipCodeResponse
     */
    public function setMidocoCity(?array $midocoCity = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCityArrayErrorMessage = self::validateMidocoCityForArrayConstraintsFromSetMidocoCity($midocoCity))) {
            throw new InvalidArgumentException($midocoCityArrayErrorMessage, __LINE__);
        }
        $this->MidocoCity = $midocoCity;
        
        return $this;
    }
    /**
     * Add item to MidocoCity value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\CityDTO $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetAllCitiesFromZipCodeResponse
     */
    public function addToMidocoCity(\Pggns\MidocoApi\Orderlists\StructType\CityDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\CityDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCity property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\CityDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCity[] = $item;
        
        return $this;
    }
}
