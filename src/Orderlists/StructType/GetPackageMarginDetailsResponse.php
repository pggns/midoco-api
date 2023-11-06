<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPackageMarginDetailsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPackageMarginDetailsResponse extends AbstractStructBase
{
    /**
     * The MidocoMarginBuyItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: order:MidocoMarginBuyItem
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginBuyItem[]
     */
    protected ?array $MidocoMarginBuyItem = null;
    /**
     * The MidocoMarginSaleItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: order:MidocoMarginSaleItem
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginSaleItem[]
     */
    protected ?array $MidocoMarginSaleItem = null;
    /**
     * Constructor method for GetPackageMarginDetailsResponse
     * @uses GetPackageMarginDetailsResponse::setMidocoMarginBuyItem()
     * @uses GetPackageMarginDetailsResponse::setMidocoMarginSaleItem()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginBuyItem[] $midocoMarginBuyItem
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginSaleItem[] $midocoMarginSaleItem
     */
    public function __construct(?array $midocoMarginBuyItem = null, ?array $midocoMarginSaleItem = null)
    {
        $this
            ->setMidocoMarginBuyItem($midocoMarginBuyItem)
            ->setMidocoMarginSaleItem($midocoMarginSaleItem);
    }
    /**
     * Get MidocoMarginBuyItem value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginBuyItem[]
     */
    public function getMidocoMarginBuyItem(): ?array
    {
        return $this->MidocoMarginBuyItem;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMarginBuyItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMarginBuyItem method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMarginBuyItemForArrayConstraintFromSetMidocoMarginBuyItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPackageMarginDetailsResponseMidocoMarginBuyItemItem) {
            // validation for constraint: itemType
            if (!$getPackageMarginDetailsResponseMidocoMarginBuyItemItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginBuyItem) {
                $invalidValues[] = is_object($getPackageMarginDetailsResponseMidocoMarginBuyItemItem) ? get_class($getPackageMarginDetailsResponseMidocoMarginBuyItemItem) : sprintf('%s(%s)', gettype($getPackageMarginDetailsResponseMidocoMarginBuyItemItem), var_export($getPackageMarginDetailsResponseMidocoMarginBuyItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMarginBuyItem property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginBuyItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMarginBuyItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginBuyItem[] $midocoMarginBuyItem
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetPackageMarginDetailsResponse
     */
    public function setMidocoMarginBuyItem(?array $midocoMarginBuyItem = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMarginBuyItemArrayErrorMessage = self::validateMidocoMarginBuyItemForArrayConstraintFromSetMidocoMarginBuyItem($midocoMarginBuyItem))) {
            throw new InvalidArgumentException($midocoMarginBuyItemArrayErrorMessage, __LINE__);
        }
        $this->MidocoMarginBuyItem = $midocoMarginBuyItem;
        
        return $this;
    }
    /**
     * Add item to MidocoMarginBuyItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginBuyItem $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetPackageMarginDetailsResponse
     */
    public function addToMidocoMarginBuyItem(\Pggns\MidocoApi\Orderlists\StructType\MidocoMarginBuyItem $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginBuyItem) {
            throw new InvalidArgumentException(sprintf('The MidocoMarginBuyItem property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginBuyItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMarginBuyItem[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMarginSaleItem value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginSaleItem[]
     */
    public function getMidocoMarginSaleItem(): ?array
    {
        return $this->MidocoMarginSaleItem;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMarginSaleItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMarginSaleItem method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMarginSaleItemForArrayConstraintFromSetMidocoMarginSaleItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPackageMarginDetailsResponseMidocoMarginSaleItemItem) {
            // validation for constraint: itemType
            if (!$getPackageMarginDetailsResponseMidocoMarginSaleItemItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginSaleItem) {
                $invalidValues[] = is_object($getPackageMarginDetailsResponseMidocoMarginSaleItemItem) ? get_class($getPackageMarginDetailsResponseMidocoMarginSaleItemItem) : sprintf('%s(%s)', gettype($getPackageMarginDetailsResponseMidocoMarginSaleItemItem), var_export($getPackageMarginDetailsResponseMidocoMarginSaleItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMarginSaleItem property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginSaleItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMarginSaleItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginSaleItem[] $midocoMarginSaleItem
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetPackageMarginDetailsResponse
     */
    public function setMidocoMarginSaleItem(?array $midocoMarginSaleItem = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMarginSaleItemArrayErrorMessage = self::validateMidocoMarginSaleItemForArrayConstraintFromSetMidocoMarginSaleItem($midocoMarginSaleItem))) {
            throw new InvalidArgumentException($midocoMarginSaleItemArrayErrorMessage, __LINE__);
        }
        $this->MidocoMarginSaleItem = $midocoMarginSaleItem;
        
        return $this;
    }
    /**
     * Add item to MidocoMarginSaleItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginSaleItem $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetPackageMarginDetailsResponse
     */
    public function addToMidocoMarginSaleItem(\Pggns\MidocoApi\Orderlists\StructType\MidocoMarginSaleItem $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginSaleItem) {
            throw new InvalidArgumentException(sprintf('The MidocoMarginSaleItem property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginSaleItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMarginSaleItem[] = $item;
        
        return $this;
    }
}
