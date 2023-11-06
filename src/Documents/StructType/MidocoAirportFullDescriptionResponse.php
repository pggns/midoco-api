<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAirportFullDescriptionResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoAirportFullDescriptionResponse extends AbstractStructBase
{
    /**
     * The MidocoAirportFullDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAirportFullDescription
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoAirportFullDescription[]
     */
    protected ?array $MidocoAirportFullDescription = null;
    /**
     * Constructor method for MidocoAirportFullDescriptionResponse
     * @uses MidocoAirportFullDescriptionResponse::setMidocoAirportFullDescription()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoAirportFullDescription[] $midocoAirportFullDescription
     */
    public function __construct(?array $midocoAirportFullDescription = null)
    {
        $this
            ->setMidocoAirportFullDescription($midocoAirportFullDescription);
    }
    /**
     * Get MidocoAirportFullDescription value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoAirportFullDescription[]
     */
    public function getMidocoAirportFullDescription(): ?array
    {
        return $this->MidocoAirportFullDescription;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoAirportFullDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAirportFullDescription method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAirportFullDescriptionForArrayConstraintFromSetMidocoAirportFullDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoAirportFullDescriptionResponseMidocoAirportFullDescriptionItem) {
            // validation for constraint: itemType
            if (!$midocoAirportFullDescriptionResponseMidocoAirportFullDescriptionItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoAirportFullDescription) {
                $invalidValues[] = is_object($midocoAirportFullDescriptionResponseMidocoAirportFullDescriptionItem) ? get_class($midocoAirportFullDescriptionResponseMidocoAirportFullDescriptionItem) : sprintf('%s(%s)', gettype($midocoAirportFullDescriptionResponseMidocoAirportFullDescriptionItem), var_export($midocoAirportFullDescriptionResponseMidocoAirportFullDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAirportFullDescription property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoAirportFullDescription, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAirportFullDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoAirportFullDescription[] $midocoAirportFullDescription
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoAirportFullDescriptionResponse
     */
    public function setMidocoAirportFullDescription(?array $midocoAirportFullDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAirportFullDescriptionArrayErrorMessage = self::validateMidocoAirportFullDescriptionForArrayConstraintFromSetMidocoAirportFullDescription($midocoAirportFullDescription))) {
            throw new InvalidArgumentException($midocoAirportFullDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoAirportFullDescription = $midocoAirportFullDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoAirportFullDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoAirportFullDescription $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoAirportFullDescriptionResponse
     */
    public function addToMidocoAirportFullDescription(\Pggns\MidocoApi\Documents\StructType\MidocoAirportFullDescription $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoAirportFullDescription) {
            throw new InvalidArgumentException(sprintf('The MidocoAirportFullDescription property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoAirportFullDescription, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAirportFullDescription[] = $item;
        
        return $this;
    }
}
