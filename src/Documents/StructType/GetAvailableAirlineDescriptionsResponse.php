<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableAirlineDescriptionsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getAvailableAirlines--- returns a list of airlines
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAvailableAirlineDescriptionsResponse extends AbstractStructBase
{
    /**
     * The MidocoAirlineDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAirlineDescription
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoAirlineDescriptionDTO[]
     */
    protected ?array $MidocoAirlineDescription = null;
    /**
     * Constructor method for GetAvailableAirlineDescriptionsResponse
     * @uses GetAvailableAirlineDescriptionsResponse::setMidocoAirlineDescription()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoAirlineDescriptionDTO[] $midocoAirlineDescription
     */
    public function __construct(?array $midocoAirlineDescription = null)
    {
        $this
            ->setMidocoAirlineDescription($midocoAirlineDescription);
    }
    /**
     * Get MidocoAirlineDescription value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoAirlineDescriptionDTO[]
     */
    public function getMidocoAirlineDescription(): ?array
    {
        return $this->MidocoAirlineDescription;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoAirlineDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAirlineDescription method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAirlineDescriptionForArrayConstraintFromSetMidocoAirlineDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailableAirlineDescriptionsResponseMidocoAirlineDescriptionItem) {
            // validation for constraint: itemType
            if (!$getAvailableAirlineDescriptionsResponseMidocoAirlineDescriptionItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoAirlineDescriptionDTO) {
                $invalidValues[] = is_object($getAvailableAirlineDescriptionsResponseMidocoAirlineDescriptionItem) ? get_class($getAvailableAirlineDescriptionsResponseMidocoAirlineDescriptionItem) : sprintf('%s(%s)', gettype($getAvailableAirlineDescriptionsResponseMidocoAirlineDescriptionItem), var_export($getAvailableAirlineDescriptionsResponseMidocoAirlineDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAirlineDescription property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoAirlineDescriptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAirlineDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoAirlineDescriptionDTO[] $midocoAirlineDescription
     * @return \Pggns\MidocoApi\Documents\StructType\GetAvailableAirlineDescriptionsResponse
     */
    public function setMidocoAirlineDescription(?array $midocoAirlineDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAirlineDescriptionArrayErrorMessage = self::validateMidocoAirlineDescriptionForArrayConstraintFromSetMidocoAirlineDescription($midocoAirlineDescription))) {
            throw new InvalidArgumentException($midocoAirlineDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoAirlineDescription = $midocoAirlineDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoAirlineDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoAirlineDescriptionDTO $item
     * @return \Pggns\MidocoApi\Documents\StructType\GetAvailableAirlineDescriptionsResponse
     */
    public function addToMidocoAirlineDescription(\Pggns\MidocoApi\Documents\StructType\MidocoAirlineDescriptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoAirlineDescriptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAirlineDescription property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoAirlineDescriptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAirlineDescription[] = $item;
        
        return $this;
    }
}
