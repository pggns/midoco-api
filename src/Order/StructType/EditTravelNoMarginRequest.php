<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EditTravelNoMarginRequest StructType
 * @subpackage Structs
 */
class EditTravelNoMarginRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelNoMargin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoTravelNoMargin
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelNoMargin|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoTravelNoMargin $MidocoTravelNoMargin = null;
    /**
     * The MidocoTravelNoMarginSettlType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTravelNoMarginSettlType
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelNoMarginSettlType[]
     */
    protected ?array $MidocoTravelNoMarginSettlType = null;
    /**
     * Constructor method for EditTravelNoMarginRequest
     * @uses EditTravelNoMarginRequest::setMidocoTravelNoMargin()
     * @uses EditTravelNoMarginRequest::setMidocoTravelNoMarginSettlType()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelNoMargin $midocoTravelNoMargin
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelNoMarginSettlType[] $midocoTravelNoMarginSettlType
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoTravelNoMargin $midocoTravelNoMargin = null, ?array $midocoTravelNoMarginSettlType = null)
    {
        $this
            ->setMidocoTravelNoMargin($midocoTravelNoMargin)
            ->setMidocoTravelNoMarginSettlType($midocoTravelNoMarginSettlType);
    }
    /**
     * Get MidocoTravelNoMargin value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelNoMargin|null
     */
    public function getMidocoTravelNoMargin(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoTravelNoMargin
    {
        return $this->MidocoTravelNoMargin;
    }
    /**
     * Set MidocoTravelNoMargin value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelNoMargin $midocoTravelNoMargin
     * @return \Pggns\MidocoApi\Api\Order\StructType\EditTravelNoMarginRequest
     */
    public function setMidocoTravelNoMargin(?\Pggns\MidocoApi\Api\Order\StructType\MidocoTravelNoMargin $midocoTravelNoMargin = null): self
    {
        $this->MidocoTravelNoMargin = $midocoTravelNoMargin;
        
        return $this;
    }
    /**
     * Get MidocoTravelNoMarginSettlType value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelNoMarginSettlType[]
     */
    public function getMidocoTravelNoMarginSettlType(): ?array
    {
        return $this->MidocoTravelNoMarginSettlType;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTravelNoMarginSettlType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTravelNoMarginSettlType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTravelNoMarginSettlTypeForArrayConstraintsFromSetMidocoTravelNoMarginSettlType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $editTravelNoMarginRequestMidocoTravelNoMarginSettlTypeItem) {
            // validation for constraint: itemType
            if (!$editTravelNoMarginRequestMidocoTravelNoMarginSettlTypeItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelNoMarginSettlType) {
                $invalidValues[] = is_object($editTravelNoMarginRequestMidocoTravelNoMarginSettlTypeItem) ? get_class($editTravelNoMarginRequestMidocoTravelNoMarginSettlTypeItem) : sprintf('%s(%s)', gettype($editTravelNoMarginRequestMidocoTravelNoMarginSettlTypeItem), var_export($editTravelNoMarginRequestMidocoTravelNoMarginSettlTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTravelNoMarginSettlType property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelNoMarginSettlType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTravelNoMarginSettlType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelNoMarginSettlType[] $midocoTravelNoMarginSettlType
     * @return \Pggns\MidocoApi\Api\Order\StructType\EditTravelNoMarginRequest
     */
    public function setMidocoTravelNoMarginSettlType(?array $midocoTravelNoMarginSettlType = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTravelNoMarginSettlTypeArrayErrorMessage = self::validateMidocoTravelNoMarginSettlTypeForArrayConstraintsFromSetMidocoTravelNoMarginSettlType($midocoTravelNoMarginSettlType))) {
            throw new InvalidArgumentException($midocoTravelNoMarginSettlTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoTravelNoMarginSettlType = $midocoTravelNoMarginSettlType;
        
        return $this;
    }
    /**
     * Add item to MidocoTravelNoMarginSettlType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelNoMarginSettlType $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\EditTravelNoMarginRequest
     */
    public function addToMidocoTravelNoMarginSettlType(\Pggns\MidocoApi\Api\Order\StructType\MidocoTravelNoMarginSettlType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelNoMarginSettlType) {
            throw new InvalidArgumentException(sprintf('The MidocoTravelNoMarginSettlType property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelNoMarginSettlType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTravelNoMarginSettlType[] = $item;
        
        return $this;
    }
}
