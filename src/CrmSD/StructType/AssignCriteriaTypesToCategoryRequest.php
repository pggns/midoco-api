<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssignCriteriaTypesToCategoryRequest StructType
 * @subpackage Structs
 */
class AssignCriteriaTypesToCategoryRequest extends AbstractStructBase
{
    /**
     * The categoryId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $categoryId;
    /**
     * The MidocoCriteriaTypeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCriteriaTypeInfo
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoCriteriaTypeInfo[]
     */
    protected ?array $MidocoCriteriaTypeInfo = null;
    /**
     * Constructor method for AssignCriteriaTypesToCategoryRequest
     * @uses AssignCriteriaTypesToCategoryRequest::setCategoryId()
     * @uses AssignCriteriaTypesToCategoryRequest::setMidocoCriteriaTypeInfo()
     * @param int $categoryId
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCriteriaTypeInfo[] $midocoCriteriaTypeInfo
     */
    public function __construct(int $categoryId, ?array $midocoCriteriaTypeInfo = null)
    {
        $this
            ->setCategoryId($categoryId)
            ->setMidocoCriteriaTypeInfo($midocoCriteriaTypeInfo);
    }
    /**
     * Get categoryId value
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->categoryId;
    }
    /**
     * Set categoryId value
     * @param int $categoryId
     * @return \Pggns\MidocoApi\CrmSD\StructType\AssignCriteriaTypesToCategoryRequest
     */
    public function setCategoryId(int $categoryId): self
    {
        // validation for constraint: int
        if (!is_null($categoryId) && !(is_int($categoryId) || ctype_digit($categoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($categoryId, true), gettype($categoryId)), __LINE__);
        }
        $this->categoryId = $categoryId;
        
        return $this;
    }
    /**
     * Get MidocoCriteriaTypeInfo value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoCriteriaTypeInfo[]
     */
    public function getMidocoCriteriaTypeInfo(): ?array
    {
        return $this->MidocoCriteriaTypeInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCriteriaTypeInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCriteriaTypeInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCriteriaTypeInfoForArrayConstraintsFromSetMidocoCriteriaTypeInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $assignCriteriaTypesToCategoryRequestMidocoCriteriaTypeInfoItem) {
            // validation for constraint: itemType
            if (!$assignCriteriaTypesToCategoryRequestMidocoCriteriaTypeInfoItem instanceof \Pggns\MidocoApi\CrmSD\StructType\MidocoCriteriaTypeInfo) {
                $invalidValues[] = is_object($assignCriteriaTypesToCategoryRequestMidocoCriteriaTypeInfoItem) ? get_class($assignCriteriaTypesToCategoryRequestMidocoCriteriaTypeInfoItem) : sprintf('%s(%s)', gettype($assignCriteriaTypesToCategoryRequestMidocoCriteriaTypeInfoItem), var_export($assignCriteriaTypesToCategoryRequestMidocoCriteriaTypeInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCriteriaTypeInfo property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\MidocoCriteriaTypeInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCriteriaTypeInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCriteriaTypeInfo[] $midocoCriteriaTypeInfo
     * @return \Pggns\MidocoApi\CrmSD\StructType\AssignCriteriaTypesToCategoryRequest
     */
    public function setMidocoCriteriaTypeInfo(?array $midocoCriteriaTypeInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCriteriaTypeInfoArrayErrorMessage = self::validateMidocoCriteriaTypeInfoForArrayConstraintsFromSetMidocoCriteriaTypeInfo($midocoCriteriaTypeInfo))) {
            throw new InvalidArgumentException($midocoCriteriaTypeInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoCriteriaTypeInfo = $midocoCriteriaTypeInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoCriteriaTypeInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCriteriaTypeInfo $item
     * @return \Pggns\MidocoApi\CrmSD\StructType\AssignCriteriaTypesToCategoryRequest
     */
    public function addToMidocoCriteriaTypeInfo(\Pggns\MidocoApi\CrmSD\StructType\MidocoCriteriaTypeInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\CrmSD\StructType\MidocoCriteriaTypeInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoCriteriaTypeInfo property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\MidocoCriteriaTypeInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCriteriaTypeInfo[] = $item;
        
        return $this;
    }
}
