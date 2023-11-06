<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoFlightTimeChangeEmailType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoFlightTimeChangeEmailType extends FlightTimeChangeEmailDTO
{
    /**
     * The MidocoFlightTimeChangeEmailDet
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoFlightTimeChangeEmailDet
     * @var \Pggns\MidocoApi\Documents\StructType\FlightTimeChangeEmailDetDTO[]
     */
    protected ?array $MidocoFlightTimeChangeEmailDet = null;
    /**
     * Constructor method for MidocoFlightTimeChangeEmailType
     * @uses MidocoFlightTimeChangeEmailType::setMidocoFlightTimeChangeEmailDet()
     * @param \Pggns\MidocoApi\Documents\StructType\FlightTimeChangeEmailDetDTO[] $midocoFlightTimeChangeEmailDet
     */
    public function __construct(?array $midocoFlightTimeChangeEmailDet = null)
    {
        $this
            ->setMidocoFlightTimeChangeEmailDet($midocoFlightTimeChangeEmailDet);
    }
    /**
     * Get MidocoFlightTimeChangeEmailDet value
     * @return \Pggns\MidocoApi\Documents\StructType\FlightTimeChangeEmailDetDTO[]
     */
    public function getMidocoFlightTimeChangeEmailDet(): ?array
    {
        return $this->MidocoFlightTimeChangeEmailDet;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoFlightTimeChangeEmailDet method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFlightTimeChangeEmailDet method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFlightTimeChangeEmailDetForArrayConstraintFromSetMidocoFlightTimeChangeEmailDet(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoFlightTimeChangeEmailTypeMidocoFlightTimeChangeEmailDetItem) {
            // validation for constraint: itemType
            if (!$midocoFlightTimeChangeEmailTypeMidocoFlightTimeChangeEmailDetItem instanceof \Pggns\MidocoApi\Documents\StructType\FlightTimeChangeEmailDetDTO) {
                $invalidValues[] = is_object($midocoFlightTimeChangeEmailTypeMidocoFlightTimeChangeEmailDetItem) ? get_class($midocoFlightTimeChangeEmailTypeMidocoFlightTimeChangeEmailDetItem) : sprintf('%s(%s)', gettype($midocoFlightTimeChangeEmailTypeMidocoFlightTimeChangeEmailDetItem), var_export($midocoFlightTimeChangeEmailTypeMidocoFlightTimeChangeEmailDetItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFlightTimeChangeEmailDet property can only contain items of type \Pggns\MidocoApi\Documents\StructType\FlightTimeChangeEmailDetDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFlightTimeChangeEmailDet value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\FlightTimeChangeEmailDetDTO[] $midocoFlightTimeChangeEmailDet
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoFlightTimeChangeEmailType
     */
    public function setMidocoFlightTimeChangeEmailDet(?array $midocoFlightTimeChangeEmailDet = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFlightTimeChangeEmailDetArrayErrorMessage = self::validateMidocoFlightTimeChangeEmailDetForArrayConstraintFromSetMidocoFlightTimeChangeEmailDet($midocoFlightTimeChangeEmailDet))) {
            throw new InvalidArgumentException($midocoFlightTimeChangeEmailDetArrayErrorMessage, __LINE__);
        }
        $this->MidocoFlightTimeChangeEmailDet = $midocoFlightTimeChangeEmailDet;
        
        return $this;
    }
    /**
     * Add item to MidocoFlightTimeChangeEmailDet value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\FlightTimeChangeEmailDetDTO $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoFlightTimeChangeEmailType
     */
    public function addToMidocoFlightTimeChangeEmailDet(\Pggns\MidocoApi\Documents\StructType\FlightTimeChangeEmailDetDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\FlightTimeChangeEmailDetDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoFlightTimeChangeEmailDet property can only contain items of type \Pggns\MidocoApi\Documents\StructType\FlightTimeChangeEmailDetDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFlightTimeChangeEmailDet[] = $item;
        
        return $this;
    }
}
