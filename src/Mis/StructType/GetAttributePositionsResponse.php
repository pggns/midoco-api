<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAttributePositionsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getAttributePositions --- get all the attribut_position records
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAttributePositionsResponse extends AbstractStructBase
{
    /**
     * The MidocoAttributePosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAttributePosition
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoAttributePosition[]
     */
    protected ?array $MidocoAttributePosition = null;
    /**
     * Constructor method for GetAttributePositionsResponse
     * @uses GetAttributePositionsResponse::setMidocoAttributePosition()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoAttributePosition[] $midocoAttributePosition
     */
    public function __construct(?array $midocoAttributePosition = null)
    {
        $this
            ->setMidocoAttributePosition($midocoAttributePosition);
    }
    /**
     * Get MidocoAttributePosition value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoAttributePosition[]
     */
    public function getMidocoAttributePosition(): ?array
    {
        return $this->MidocoAttributePosition;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoAttributePosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAttributePosition method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAttributePositionForArrayConstraintFromSetMidocoAttributePosition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAttributePositionsResponseMidocoAttributePositionItem) {
            // validation for constraint: itemType
            if (!$getAttributePositionsResponseMidocoAttributePositionItem instanceof \Pggns\MidocoApi\Mis\StructType\MidocoAttributePosition) {
                $invalidValues[] = is_object($getAttributePositionsResponseMidocoAttributePositionItem) ? get_class($getAttributePositionsResponseMidocoAttributePositionItem) : sprintf('%s(%s)', gettype($getAttributePositionsResponseMidocoAttributePositionItem), var_export($getAttributePositionsResponseMidocoAttributePositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAttributePosition property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoAttributePosition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAttributePosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoAttributePosition[] $midocoAttributePosition
     * @return \Pggns\MidocoApi\Mis\StructType\GetAttributePositionsResponse
     */
    public function setMidocoAttributePosition(?array $midocoAttributePosition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAttributePositionArrayErrorMessage = self::validateMidocoAttributePositionForArrayConstraintFromSetMidocoAttributePosition($midocoAttributePosition))) {
            throw new InvalidArgumentException($midocoAttributePositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoAttributePosition = $midocoAttributePosition;
        
        return $this;
    }
    /**
     * Add item to MidocoAttributePosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoAttributePosition $item
     * @return \Pggns\MidocoApi\Mis\StructType\GetAttributePositionsResponse
     */
    public function addToMidocoAttributePosition(\Pggns\MidocoApi\Mis\StructType\MidocoAttributePosition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MidocoAttributePosition) {
            throw new InvalidArgumentException(sprintf('The MidocoAttributePosition property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoAttributePosition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAttributePosition[] = $item;
        
        return $this;
    }
}
