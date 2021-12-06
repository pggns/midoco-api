<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListCashBookItemTypesResponse StructType
 * @subpackage Structs
 */
class ListCashBookItemTypesResponse extends AbstractStructBase
{
    /**
     * The MidocoCashBookItemType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCashBookItemType
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCashBookItemType[]
     */
    protected ?array $MidocoCashBookItemType = null;
    /**
     * Constructor method for ListCashBookItemTypesResponse
     * @uses ListCashBookItemTypesResponse::setMidocoCashBookItemType()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCashBookItemType[] $midocoCashBookItemType
     */
    public function __construct(?array $midocoCashBookItemType = null)
    {
        $this
            ->setMidocoCashBookItemType($midocoCashBookItemType);
    }
    /**
     * Get MidocoCashBookItemType value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCashBookItemType[]
     */
    public function getMidocoCashBookItemType(): ?array
    {
        return $this->MidocoCashBookItemType;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCashBookItemType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCashBookItemType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCashBookItemTypeForArrayConstraintsFromSetMidocoCashBookItemType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listCashBookItemTypesResponseMidocoCashBookItemTypeItem) {
            // validation for constraint: itemType
            if (!$listCashBookItemTypesResponseMidocoCashBookItemTypeItem instanceof \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCashBookItemType) {
                $invalidValues[] = is_object($listCashBookItemTypesResponseMidocoCashBookItemTypeItem) ? get_class($listCashBookItemTypesResponseMidocoCashBookItemTypeItem) : sprintf('%s(%s)', gettype($listCashBookItemTypesResponseMidocoCashBookItemTypeItem), var_export($listCashBookItemTypesResponseMidocoCashBookItemTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCashBookItemType property can only contain items of type \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCashBookItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCashBookItemType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCashBookItemType[] $midocoCashBookItemType
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\ListCashBookItemTypesResponse
     */
    public function setMidocoCashBookItemType(?array $midocoCashBookItemType = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCashBookItemTypeArrayErrorMessage = self::validateMidocoCashBookItemTypeForArrayConstraintsFromSetMidocoCashBookItemType($midocoCashBookItemType))) {
            throw new InvalidArgumentException($midocoCashBookItemTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoCashBookItemType = $midocoCashBookItemType;
        
        return $this;
    }
    /**
     * Add item to MidocoCashBookItemType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCashBookItemType $item
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\ListCashBookItemTypesResponse
     */
    public function addToMidocoCashBookItemType(\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCashBookItemType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCashBookItemType) {
            throw new InvalidArgumentException(sprintf('The MidocoCashBookItemType property can only contain items of type \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCashBookItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCashBookItemType[] = $item;
        
        return $this;
    }
}
