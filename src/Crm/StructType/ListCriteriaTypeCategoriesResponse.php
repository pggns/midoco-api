<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListCriteriaTypeCategoriesResponse StructType
 * @subpackage Structs
 */
class ListCriteriaTypeCategoriesResponse extends AbstractStructBase
{
    /**
     * The MidocoCriteriaTypeCategoryInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCriteriaTypeCategoryInfo
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoCriteriaTypeCategoryInfo[]
     */
    protected ?array $MidocoCriteriaTypeCategoryInfo = null;
    /**
     * Constructor method for ListCriteriaTypeCategoriesResponse
     * @uses ListCriteriaTypeCategoriesResponse::setMidocoCriteriaTypeCategoryInfo()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCriteriaTypeCategoryInfo[] $midocoCriteriaTypeCategoryInfo
     */
    public function __construct(?array $midocoCriteriaTypeCategoryInfo = null)
    {
        $this
            ->setMidocoCriteriaTypeCategoryInfo($midocoCriteriaTypeCategoryInfo);
    }
    /**
     * Get MidocoCriteriaTypeCategoryInfo value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoCriteriaTypeCategoryInfo[]
     */
    public function getMidocoCriteriaTypeCategoryInfo(): ?array
    {
        return $this->MidocoCriteriaTypeCategoryInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCriteriaTypeCategoryInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCriteriaTypeCategoryInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCriteriaTypeCategoryInfoForArrayConstraintsFromSetMidocoCriteriaTypeCategoryInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listCriteriaTypeCategoriesResponseMidocoCriteriaTypeCategoryInfoItem) {
            // validation for constraint: itemType
            if (!$listCriteriaTypeCategoriesResponseMidocoCriteriaTypeCategoryInfoItem instanceof \Pggns\MidocoApi\Api\Crm\StructType\MidocoCriteriaTypeCategoryInfo) {
                $invalidValues[] = is_object($listCriteriaTypeCategoriesResponseMidocoCriteriaTypeCategoryInfoItem) ? get_class($listCriteriaTypeCategoriesResponseMidocoCriteriaTypeCategoryInfoItem) : sprintf('%s(%s)', gettype($listCriteriaTypeCategoriesResponseMidocoCriteriaTypeCategoryInfoItem), var_export($listCriteriaTypeCategoriesResponseMidocoCriteriaTypeCategoryInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCriteriaTypeCategoryInfo property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\MidocoCriteriaTypeCategoryInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCriteriaTypeCategoryInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCriteriaTypeCategoryInfo[] $midocoCriteriaTypeCategoryInfo
     * @return \Pggns\MidocoApi\Api\Crm\StructType\ListCriteriaTypeCategoriesResponse
     */
    public function setMidocoCriteriaTypeCategoryInfo(?array $midocoCriteriaTypeCategoryInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCriteriaTypeCategoryInfoArrayErrorMessage = self::validateMidocoCriteriaTypeCategoryInfoForArrayConstraintsFromSetMidocoCriteriaTypeCategoryInfo($midocoCriteriaTypeCategoryInfo))) {
            throw new InvalidArgumentException($midocoCriteriaTypeCategoryInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoCriteriaTypeCategoryInfo = $midocoCriteriaTypeCategoryInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoCriteriaTypeCategoryInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCriteriaTypeCategoryInfo $item
     * @return \Pggns\MidocoApi\Api\Crm\StructType\ListCriteriaTypeCategoriesResponse
     */
    public function addToMidocoCriteriaTypeCategoryInfo(\Pggns\MidocoApi\Api\Crm\StructType\MidocoCriteriaTypeCategoryInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Crm\StructType\MidocoCriteriaTypeCategoryInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoCriteriaTypeCategoryInfo property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\MidocoCriteriaTypeCategoryInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCriteriaTypeCategoryInfo[] = $item;
        
        return $this;
    }
}
