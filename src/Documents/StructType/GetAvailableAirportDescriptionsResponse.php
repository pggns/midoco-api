<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableAirportDescriptionsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getAvailableAirportDescriptions--- returns a list of airportdescriptions
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAvailableAirportDescriptionsResponse extends AbstractStructBase
{
    /**
     * The MidocoAirportDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAirportDescription
     * @var \Pggns\MidocoApi\Documents\StructType\AirportDescriptionDTO[]
     */
    protected ?array $MidocoAirportDescription = null;
    /**
     * Constructor method for GetAvailableAirportDescriptionsResponse
     * @uses GetAvailableAirportDescriptionsResponse::setMidocoAirportDescription()
     * @param \Pggns\MidocoApi\Documents\StructType\AirportDescriptionDTO[] $midocoAirportDescription
     */
    public function __construct(?array $midocoAirportDescription = null)
    {
        $this
            ->setMidocoAirportDescription($midocoAirportDescription);
    }
    /**
     * Get MidocoAirportDescription value
     * @return \Pggns\MidocoApi\Documents\StructType\AirportDescriptionDTO[]
     */
    public function getMidocoAirportDescription(): ?array
    {
        return $this->MidocoAirportDescription;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoAirportDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAirportDescription method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAirportDescriptionForArrayConstraintFromSetMidocoAirportDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailableAirportDescriptionsResponseMidocoAirportDescriptionItem) {
            // validation for constraint: itemType
            if (!$getAvailableAirportDescriptionsResponseMidocoAirportDescriptionItem instanceof \Pggns\MidocoApi\Documents\StructType\AirportDescriptionDTO) {
                $invalidValues[] = is_object($getAvailableAirportDescriptionsResponseMidocoAirportDescriptionItem) ? get_class($getAvailableAirportDescriptionsResponseMidocoAirportDescriptionItem) : sprintf('%s(%s)', gettype($getAvailableAirportDescriptionsResponseMidocoAirportDescriptionItem), var_export($getAvailableAirportDescriptionsResponseMidocoAirportDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAirportDescription property can only contain items of type \Pggns\MidocoApi\Documents\StructType\AirportDescriptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAirportDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\AirportDescriptionDTO[] $midocoAirportDescription
     * @return \Pggns\MidocoApi\Documents\StructType\GetAvailableAirportDescriptionsResponse
     */
    public function setMidocoAirportDescription(?array $midocoAirportDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAirportDescriptionArrayErrorMessage = self::validateMidocoAirportDescriptionForArrayConstraintFromSetMidocoAirportDescription($midocoAirportDescription))) {
            throw new InvalidArgumentException($midocoAirportDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoAirportDescription = $midocoAirportDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoAirportDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\AirportDescriptionDTO $item
     * @return \Pggns\MidocoApi\Documents\StructType\GetAvailableAirportDescriptionsResponse
     */
    public function addToMidocoAirportDescription(\Pggns\MidocoApi\Documents\StructType\AirportDescriptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\AirportDescriptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAirportDescription property can only contain items of type \Pggns\MidocoApi\Documents\StructType\AirportDescriptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAirportDescription[] = $item;
        
        return $this;
    }
}
