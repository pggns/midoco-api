<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAirportFullDescriptionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoAirportFullDescriptionRequest extends AbstractStructBase
{
    /**
     * The AirportCode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $AirportCode = null;
    /**
     * The travelDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * Constructor method for MidocoAirportFullDescriptionRequest
     * @uses MidocoAirportFullDescriptionRequest::setAirportCode()
     * @uses MidocoAirportFullDescriptionRequest::setTravelDate()
     * @param string[] $airportCode
     * @param string $travelDate
     */
    public function __construct(?array $airportCode = null, ?string $travelDate = null)
    {
        $this
            ->setAirportCode($airportCode)
            ->setTravelDate($travelDate);
    }
    /**
     * Get AirportCode value
     * @return string[]
     */
    public function getAirportCode(): ?array
    {
        return $this->AirportCode;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAirportCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirportCode method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirportCodeForArrayConstraintFromSetAirportCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoAirportFullDescriptionRequestAirportCodeItem) {
            // validation for constraint: itemType
            if (!is_string($midocoAirportFullDescriptionRequestAirportCodeItem)) {
                $invalidValues[] = is_object($midocoAirportFullDescriptionRequestAirportCodeItem) ? get_class($midocoAirportFullDescriptionRequestAirportCodeItem) : sprintf('%s(%s)', gettype($midocoAirportFullDescriptionRequestAirportCodeItem), var_export($midocoAirportFullDescriptionRequestAirportCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirportCode property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirportCode value
     * @throws InvalidArgumentException
     * @param string[] $airportCode
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoAirportFullDescriptionRequest
     */
    public function setAirportCode(?array $airportCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($airportCodeArrayErrorMessage = self::validateAirportCodeForArrayConstraintFromSetAirportCode($airportCode))) {
            throw new InvalidArgumentException($airportCodeArrayErrorMessage, __LINE__);
        }
        $this->AirportCode = $airportCode;
        
        return $this;
    }
    /**
     * Add item to AirportCode value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoAirportFullDescriptionRequest
     */
    public function addToAirportCode(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The AirportCode property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AirportCode[] = $item;
        
        return $this;
    }
    /**
     * Get travelDate value
     * @return string|null
     */
    public function getTravelDate(): ?string
    {
        return $this->travelDate;
    }
    /**
     * Set travelDate value
     * @param string $travelDate
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoAirportFullDescriptionRequest
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
        $this->travelDate = $travelDate;
        
        return $this;
    }
}
