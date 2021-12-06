<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRemarkCategoryResponse StructType
 * @subpackage Structs
 */
class GetRemarkCategoryResponse extends AbstractStructBase
{
    /**
     * The MidocoRemarkCategory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoRemarkCategory
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoRemarkCategory[]
     */
    protected ?array $MidocoRemarkCategory = null;
    /**
     * Constructor method for GetRemarkCategoryResponse
     * @uses GetRemarkCategoryResponse::setMidocoRemarkCategory()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoRemarkCategory[] $midocoRemarkCategory
     */
    public function __construct(?array $midocoRemarkCategory = null)
    {
        $this
            ->setMidocoRemarkCategory($midocoRemarkCategory);
    }
    /**
     * Get MidocoRemarkCategory value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoRemarkCategory[]
     */
    public function getMidocoRemarkCategory(): ?array
    {
        return $this->MidocoRemarkCategory;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoRemarkCategory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoRemarkCategory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoRemarkCategoryForArrayConstraintsFromSetMidocoRemarkCategory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRemarkCategoryResponseMidocoRemarkCategoryItem) {
            // validation for constraint: itemType
            if (!$getRemarkCategoryResponseMidocoRemarkCategoryItem instanceof \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoRemarkCategory) {
                $invalidValues[] = is_object($getRemarkCategoryResponseMidocoRemarkCategoryItem) ? get_class($getRemarkCategoryResponseMidocoRemarkCategoryItem) : sprintf('%s(%s)', gettype($getRemarkCategoryResponseMidocoRemarkCategoryItem), var_export($getRemarkCategoryResponseMidocoRemarkCategoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoRemarkCategory property can only contain items of type \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoRemarkCategory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoRemarkCategory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoRemarkCategory[] $midocoRemarkCategory
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetRemarkCategoryResponse
     */
    public function setMidocoRemarkCategory(?array $midocoRemarkCategory = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoRemarkCategoryArrayErrorMessage = self::validateMidocoRemarkCategoryForArrayConstraintsFromSetMidocoRemarkCategory($midocoRemarkCategory))) {
            throw new InvalidArgumentException($midocoRemarkCategoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoRemarkCategory = $midocoRemarkCategory;
        
        return $this;
    }
    /**
     * Add item to MidocoRemarkCategory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoRemarkCategory $item
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetRemarkCategoryResponse
     */
    public function addToMidocoRemarkCategory(\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoRemarkCategory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoRemarkCategory) {
            throw new InvalidArgumentException(sprintf('The MidocoRemarkCategory property can only contain items of type \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoRemarkCategory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoRemarkCategory[] = $item;
        
        return $this;
    }
}
