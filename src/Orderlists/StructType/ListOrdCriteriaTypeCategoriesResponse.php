<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListOrdCriteriaTypeCategoriesResponse StructType
 * @subpackage Structs
 */
class ListOrdCriteriaTypeCategoriesResponse extends AbstractStructBase
{
    /**
     * The MidocoOrdCriteriaTypeCategoryInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrdCriteriaTypeCategoryInfo
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoOrdCriteriaTypeCategoryInfo[]
     */
    protected ?array $MidocoOrdCriteriaTypeCategoryInfo = null;
    /**
     * Constructor method for ListOrdCriteriaTypeCategoriesResponse
     * @uses ListOrdCriteriaTypeCategoriesResponse::setMidocoOrdCriteriaTypeCategoryInfo()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoOrdCriteriaTypeCategoryInfo[] $midocoOrdCriteriaTypeCategoryInfo
     */
    public function __construct(?array $midocoOrdCriteriaTypeCategoryInfo = null)
    {
        $this
            ->setMidocoOrdCriteriaTypeCategoryInfo($midocoOrdCriteriaTypeCategoryInfo);
    }
    /**
     * Get MidocoOrdCriteriaTypeCategoryInfo value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoOrdCriteriaTypeCategoryInfo[]
     */
    public function getMidocoOrdCriteriaTypeCategoryInfo(): ?array
    {
        return $this->MidocoOrdCriteriaTypeCategoryInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrdCriteriaTypeCategoryInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrdCriteriaTypeCategoryInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrdCriteriaTypeCategoryInfoForArrayConstraintsFromSetMidocoOrdCriteriaTypeCategoryInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listOrdCriteriaTypeCategoriesResponseMidocoOrdCriteriaTypeCategoryInfoItem) {
            // validation for constraint: itemType
            if (!$listOrdCriteriaTypeCategoriesResponseMidocoOrdCriteriaTypeCategoryInfoItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoOrdCriteriaTypeCategoryInfo) {
                $invalidValues[] = is_object($listOrdCriteriaTypeCategoriesResponseMidocoOrdCriteriaTypeCategoryInfoItem) ? get_class($listOrdCriteriaTypeCategoriesResponseMidocoOrdCriteriaTypeCategoryInfoItem) : sprintf('%s(%s)', gettype($listOrdCriteriaTypeCategoriesResponseMidocoOrdCriteriaTypeCategoryInfoItem), var_export($listOrdCriteriaTypeCategoriesResponseMidocoOrdCriteriaTypeCategoryInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrdCriteriaTypeCategoryInfo property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoOrdCriteriaTypeCategoryInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrdCriteriaTypeCategoryInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoOrdCriteriaTypeCategoryInfo[] $midocoOrdCriteriaTypeCategoryInfo
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\ListOrdCriteriaTypeCategoriesResponse
     */
    public function setMidocoOrdCriteriaTypeCategoryInfo(?array $midocoOrdCriteriaTypeCategoryInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrdCriteriaTypeCategoryInfoArrayErrorMessage = self::validateMidocoOrdCriteriaTypeCategoryInfoForArrayConstraintsFromSetMidocoOrdCriteriaTypeCategoryInfo($midocoOrdCriteriaTypeCategoryInfo))) {
            throw new InvalidArgumentException($midocoOrdCriteriaTypeCategoryInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrdCriteriaTypeCategoryInfo = $midocoOrdCriteriaTypeCategoryInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoOrdCriteriaTypeCategoryInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoOrdCriteriaTypeCategoryInfo $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\ListOrdCriteriaTypeCategoriesResponse
     */
    public function addToMidocoOrdCriteriaTypeCategoryInfo(\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoOrdCriteriaTypeCategoryInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoOrdCriteriaTypeCategoryInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoOrdCriteriaTypeCategoryInfo property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoOrdCriteriaTypeCategoryInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrdCriteriaTypeCategoryInfo[] = $item;
        
        return $this;
    }
}
