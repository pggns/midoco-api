<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierAgencyReservationResponse StructType
 * @subpackage Structs
 */
class GetSupplierAgencyReservationResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierAgencyReservation
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierAgencyReservation
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencyReservation[]
     */
    protected ?array $MidocoSupplierAgencyReservation = null;
    /**
     * Constructor method for GetSupplierAgencyReservationResponse
     * @uses GetSupplierAgencyReservationResponse::setMidocoSupplierAgencyReservation()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencyReservation[] $midocoSupplierAgencyReservation
     */
    public function __construct(?array $midocoSupplierAgencyReservation = null)
    {
        $this
            ->setMidocoSupplierAgencyReservation($midocoSupplierAgencyReservation);
    }
    /**
     * Get MidocoSupplierAgencyReservation value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencyReservation[]
     */
    public function getMidocoSupplierAgencyReservation(): ?array
    {
        return $this->MidocoSupplierAgencyReservation;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSupplierAgencyReservation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierAgencyReservation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierAgencyReservationForArrayConstraintsFromSetMidocoSupplierAgencyReservation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierAgencyReservationResponseMidocoSupplierAgencyReservationItem) {
            // validation for constraint: itemType
            if (!$getSupplierAgencyReservationResponseMidocoSupplierAgencyReservationItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencyReservation) {
                $invalidValues[] = is_object($getSupplierAgencyReservationResponseMidocoSupplierAgencyReservationItem) ? get_class($getSupplierAgencyReservationResponseMidocoSupplierAgencyReservationItem) : sprintf('%s(%s)', gettype($getSupplierAgencyReservationResponseMidocoSupplierAgencyReservationItem), var_export($getSupplierAgencyReservationResponseMidocoSupplierAgencyReservationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierAgencyReservation property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencyReservation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierAgencyReservation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencyReservation[] $midocoSupplierAgencyReservation
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierAgencyReservationResponse
     */
    public function setMidocoSupplierAgencyReservation(?array $midocoSupplierAgencyReservation = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierAgencyReservationArrayErrorMessage = self::validateMidocoSupplierAgencyReservationForArrayConstraintsFromSetMidocoSupplierAgencyReservation($midocoSupplierAgencyReservation))) {
            throw new InvalidArgumentException($midocoSupplierAgencyReservationArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierAgencyReservation = $midocoSupplierAgencyReservation;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierAgencyReservation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencyReservation $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierAgencyReservationResponse
     */
    public function addToMidocoSupplierAgencyReservation(\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencyReservation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencyReservation) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierAgencyReservation property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencyReservation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierAgencyReservation[] = $item;
        
        return $this;
    }
}
