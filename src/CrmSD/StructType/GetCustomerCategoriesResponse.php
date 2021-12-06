<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerCategoriesResponse StructType
 * @subpackage Structs
 */
class GetCustomerCategoriesResponse extends AbstractStructBase
{
    /**
     * The MidocoCustomerCategory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerCategory
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerCategory[]
     */
    protected ?array $MidocoCustomerCategory = null;
    /**
     * Constructor method for GetCustomerCategoriesResponse
     * @uses GetCustomerCategoriesResponse::setMidocoCustomerCategory()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerCategory[] $midocoCustomerCategory
     */
    public function __construct(?array $midocoCustomerCategory = null)
    {
        $this
            ->setMidocoCustomerCategory($midocoCustomerCategory);
    }
    /**
     * Get MidocoCustomerCategory value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerCategory[]
     */
    public function getMidocoCustomerCategory(): ?array
    {
        return $this->MidocoCustomerCategory;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCustomerCategory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerCategory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerCategoryForArrayConstraintsFromSetMidocoCustomerCategory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCustomerCategoriesResponseMidocoCustomerCategoryItem) {
            // validation for constraint: itemType
            if (!$getCustomerCategoriesResponseMidocoCustomerCategoryItem instanceof \Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerCategory) {
                $invalidValues[] = is_object($getCustomerCategoriesResponseMidocoCustomerCategoryItem) ? get_class($getCustomerCategoriesResponseMidocoCustomerCategoryItem) : sprintf('%s(%s)', gettype($getCustomerCategoriesResponseMidocoCustomerCategoryItem), var_export($getCustomerCategoriesResponseMidocoCustomerCategoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerCategory property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerCategory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerCategory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerCategory[] $midocoCustomerCategory
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetCustomerCategoriesResponse
     */
    public function setMidocoCustomerCategory(?array $midocoCustomerCategory = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerCategoryArrayErrorMessage = self::validateMidocoCustomerCategoryForArrayConstraintsFromSetMidocoCustomerCategory($midocoCustomerCategory))) {
            throw new InvalidArgumentException($midocoCustomerCategoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerCategory = $midocoCustomerCategory;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerCategory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerCategory $item
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetCustomerCategoriesResponse
     */
    public function addToMidocoCustomerCategory(\Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerCategory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerCategory) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerCategory property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerCategory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerCategory[] = $item;
        
        return $this;
    }
}
