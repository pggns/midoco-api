<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRevenueBookingVatDivsResponse StructType
 * @subpackage Structs
 */
class GetRevenueBookingVatDivsResponse extends AbstractStructBase
{
    /**
     * The MidocoRevenueBookingVatDiv
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoRevenueBookingVatDiv
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoRevenueBookingVatDiv[]
     */
    protected ?array $MidocoRevenueBookingVatDiv = null;
    /**
     * Constructor method for GetRevenueBookingVatDivsResponse
     * @uses GetRevenueBookingVatDivsResponse::setMidocoRevenueBookingVatDiv()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoRevenueBookingVatDiv[] $midocoRevenueBookingVatDiv
     */
    public function __construct(?array $midocoRevenueBookingVatDiv = null)
    {
        $this
            ->setMidocoRevenueBookingVatDiv($midocoRevenueBookingVatDiv);
    }
    /**
     * Get MidocoRevenueBookingVatDiv value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoRevenueBookingVatDiv[]
     */
    public function getMidocoRevenueBookingVatDiv(): ?array
    {
        return $this->MidocoRevenueBookingVatDiv;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoRevenueBookingVatDiv method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoRevenueBookingVatDiv method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoRevenueBookingVatDivForArrayConstraintsFromSetMidocoRevenueBookingVatDiv(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRevenueBookingVatDivsResponseMidocoRevenueBookingVatDivItem) {
            // validation for constraint: itemType
            if (!$getRevenueBookingVatDivsResponseMidocoRevenueBookingVatDivItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoRevenueBookingVatDiv) {
                $invalidValues[] = is_object($getRevenueBookingVatDivsResponseMidocoRevenueBookingVatDivItem) ? get_class($getRevenueBookingVatDivsResponseMidocoRevenueBookingVatDivItem) : sprintf('%s(%s)', gettype($getRevenueBookingVatDivsResponseMidocoRevenueBookingVatDivItem), var_export($getRevenueBookingVatDivsResponseMidocoRevenueBookingVatDivItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoRevenueBookingVatDiv property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoRevenueBookingVatDiv, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoRevenueBookingVatDiv value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoRevenueBookingVatDiv[] $midocoRevenueBookingVatDiv
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetRevenueBookingVatDivsResponse
     */
    public function setMidocoRevenueBookingVatDiv(?array $midocoRevenueBookingVatDiv = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoRevenueBookingVatDivArrayErrorMessage = self::validateMidocoRevenueBookingVatDivForArrayConstraintsFromSetMidocoRevenueBookingVatDiv($midocoRevenueBookingVatDiv))) {
            throw new InvalidArgumentException($midocoRevenueBookingVatDivArrayErrorMessage, __LINE__);
        }
        $this->MidocoRevenueBookingVatDiv = $midocoRevenueBookingVatDiv;
        
        return $this;
    }
    /**
     * Add item to MidocoRevenueBookingVatDiv value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoRevenueBookingVatDiv $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetRevenueBookingVatDivsResponse
     */
    public function addToMidocoRevenueBookingVatDiv(\Pggns\MidocoApi\Api\Order\StructType\MidocoRevenueBookingVatDiv $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoRevenueBookingVatDiv) {
            throw new InvalidArgumentException(sprintf('The MidocoRevenueBookingVatDiv property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoRevenueBookingVatDiv, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoRevenueBookingVatDiv[] = $item;
        
        return $this;
    }
}
