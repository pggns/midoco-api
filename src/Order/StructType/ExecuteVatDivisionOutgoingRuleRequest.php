<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteVatDivisionOutgoingRuleRequest StructType
 * @subpackage Structs
 */
class ExecuteVatDivisionOutgoingRuleRequest extends AbstractStructBase
{
    /**
     * The MidocoVatCode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: ordersd:MidocoVatCode
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoVatCode[]
     */
    protected ?array $MidocoVatCode = null;
    /**
     * The MidocoSellItem
     * Meta information extracted from the WSDL
     * - ref: MidocoSellItem
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemType|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemType $MidocoSellItem = null;
    /**
     * The MidocoOrder
     * Meta information extracted from the WSDL
     * - ref: MidocoOrder
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType $MidocoOrder = null;
    /**
     * Constructor method for ExecuteVatDivisionOutgoingRuleRequest
     * @uses ExecuteVatDivisionOutgoingRuleRequest::setMidocoVatCode()
     * @uses ExecuteVatDivisionOutgoingRuleRequest::setMidocoSellItem()
     * @uses ExecuteVatDivisionOutgoingRuleRequest::setMidocoOrder()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoVatCode[] $midocoVatCode
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemType $midocoSellItem
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType $midocoOrder
     */
    public function __construct(?array $midocoVatCode = null, ?\Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemType $midocoSellItem = null, ?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType $midocoOrder = null)
    {
        $this
            ->setMidocoVatCode($midocoVatCode)
            ->setMidocoSellItem($midocoSellItem)
            ->setMidocoOrder($midocoOrder);
    }
    /**
     * Get MidocoVatCode value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoVatCode[]
     */
    public function getMidocoVatCode(): ?array
    {
        return $this->MidocoVatCode;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoVatCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVatCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVatCodeForArrayConstraintsFromSetMidocoVatCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeVatDivisionOutgoingRuleRequestMidocoVatCodeItem) {
            // validation for constraint: itemType
            if (!$executeVatDivisionOutgoingRuleRequestMidocoVatCodeItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoVatCode) {
                $invalidValues[] = is_object($executeVatDivisionOutgoingRuleRequestMidocoVatCodeItem) ? get_class($executeVatDivisionOutgoingRuleRequestMidocoVatCodeItem) : sprintf('%s(%s)', gettype($executeVatDivisionOutgoingRuleRequestMidocoVatCodeItem), var_export($executeVatDivisionOutgoingRuleRequestMidocoVatCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVatCode property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoVatCode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVatCode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoVatCode[] $midocoVatCode
     * @return \Pggns\MidocoApi\Api\Order\StructType\ExecuteVatDivisionOutgoingRuleRequest
     */
    public function setMidocoVatCode(?array $midocoVatCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVatCodeArrayErrorMessage = self::validateMidocoVatCodeForArrayConstraintsFromSetMidocoVatCode($midocoVatCode))) {
            throw new InvalidArgumentException($midocoVatCodeArrayErrorMessage, __LINE__);
        }
        $this->MidocoVatCode = $midocoVatCode;
        
        return $this;
    }
    /**
     * Add item to MidocoVatCode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoVatCode $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\ExecuteVatDivisionOutgoingRuleRequest
     */
    public function addToMidocoVatCode(\Pggns\MidocoApi\Api\Order\StructType\MidocoVatCode $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoVatCode) {
            throw new InvalidArgumentException(sprintf('The MidocoVatCode property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoVatCode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVatCode[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoSellItem value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemType|null
     */
    public function getMidocoSellItem(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemType
    {
        return $this->MidocoSellItem;
    }
    /**
     * Set MidocoSellItem value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemType $midocoSellItem
     * @return \Pggns\MidocoApi\Api\Order\StructType\ExecuteVatDivisionOutgoingRuleRequest
     */
    public function setMidocoSellItem(?\Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemType $midocoSellItem = null): self
    {
        $this->MidocoSellItem = $midocoSellItem;
        
        return $this;
    }
    /**
     * Get MidocoOrder value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType|null
     */
    public function getMidocoOrder(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType
    {
        return $this->MidocoOrder;
    }
    /**
     * Set MidocoOrder value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType $midocoOrder
     * @return \Pggns\MidocoApi\Api\Order\StructType\ExecuteVatDivisionOutgoingRuleRequest
     */
    public function setMidocoOrder(?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType $midocoOrder = null): self
    {
        $this->MidocoOrder = $midocoOrder;
        
        return $this;
    }
}
