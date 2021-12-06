<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoFlightSegmentDetails4Printing StructType
 * @subpackage Structs
 */
class MidocoFlightSegmentDetails4Printing extends FlightSegmentDetailDTO
{
    /**
     * The MidocoSellPassenger
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellPassenger
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoSellPassenger[]
     */
    protected ?array $MidocoSellPassenger = null;
    /**
     * Constructor method for MidocoFlightSegmentDetails4Printing
     * @uses MidocoFlightSegmentDetails4Printing::setMidocoSellPassenger()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoSellPassenger[] $midocoSellPassenger
     */
    public function __construct(?array $midocoSellPassenger = null)
    {
        $this
            ->setMidocoSellPassenger($midocoSellPassenger);
    }
    /**
     * Get MidocoSellPassenger value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoSellPassenger[]
     */
    public function getMidocoSellPassenger(): ?array
    {
        return $this->MidocoSellPassenger;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSellPassenger method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellPassenger method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellPassengerForArrayConstraintsFromSetMidocoSellPassenger(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoFlightSegmentDetails4PrintingMidocoSellPassengerItem) {
            // validation for constraint: itemType
            if (!$midocoFlightSegmentDetails4PrintingMidocoSellPassengerItem instanceof \Pggns\MidocoApi\Api\Documents\StructType\MidocoSellPassenger) {
                $invalidValues[] = is_object($midocoFlightSegmentDetails4PrintingMidocoSellPassengerItem) ? get_class($midocoFlightSegmentDetails4PrintingMidocoSellPassengerItem) : sprintf('%s(%s)', gettype($midocoFlightSegmentDetails4PrintingMidocoSellPassengerItem), var_export($midocoFlightSegmentDetails4PrintingMidocoSellPassengerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellPassenger property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\MidocoSellPassenger, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellPassenger value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoSellPassenger[] $midocoSellPassenger
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoFlightSegmentDetails4Printing
     */
    public function setMidocoSellPassenger(?array $midocoSellPassenger = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellPassengerArrayErrorMessage = self::validateMidocoSellPassengerForArrayConstraintsFromSetMidocoSellPassenger($midocoSellPassenger))) {
            throw new InvalidArgumentException($midocoSellPassengerArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellPassenger = $midocoSellPassenger;
        
        return $this;
    }
    /**
     * Add item to MidocoSellPassenger value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoSellPassenger $item
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoFlightSegmentDetails4Printing
     */
    public function addToMidocoSellPassenger(\Pggns\MidocoApi\Api\Documents\StructType\MidocoSellPassenger $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Documents\StructType\MidocoSellPassenger) {
            throw new InvalidArgumentException(sprintf('The MidocoSellPassenger property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\MidocoSellPassenger, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellPassenger[] = $item;
        
        return $this;
    }
}
