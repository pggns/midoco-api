<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrdCriteriaTypesForCategoryResponse StructType
 * @subpackage Structs
 */
class GetOrdCriteriaTypesForCategoryResponse extends AbstractStructBase
{
    /**
     * The MidocoOrdCriteriaTypeInfoDescr
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrdCriteriaTypeInfoDescr
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoOrdCriteriaTypeInfoDescr[]
     */
    protected ?array $MidocoOrdCriteriaTypeInfoDescr = null;
    /**
     * Constructor method for GetOrdCriteriaTypesForCategoryResponse
     * @uses GetOrdCriteriaTypesForCategoryResponse::setMidocoOrdCriteriaTypeInfoDescr()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoOrdCriteriaTypeInfoDescr[] $midocoOrdCriteriaTypeInfoDescr
     */
    public function __construct(?array $midocoOrdCriteriaTypeInfoDescr = null)
    {
        $this
            ->setMidocoOrdCriteriaTypeInfoDescr($midocoOrdCriteriaTypeInfoDescr);
    }
    /**
     * Get MidocoOrdCriteriaTypeInfoDescr value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoOrdCriteriaTypeInfoDescr[]
     */
    public function getMidocoOrdCriteriaTypeInfoDescr(): ?array
    {
        return $this->MidocoOrdCriteriaTypeInfoDescr;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrdCriteriaTypeInfoDescr method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrdCriteriaTypeInfoDescr method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrdCriteriaTypeInfoDescrForArrayConstraintsFromSetMidocoOrdCriteriaTypeInfoDescr(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrdCriteriaTypesForCategoryResponseMidocoOrdCriteriaTypeInfoDescrItem) {
            // validation for constraint: itemType
            if (!$getOrdCriteriaTypesForCategoryResponseMidocoOrdCriteriaTypeInfoDescrItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoOrdCriteriaTypeInfoDescr) {
                $invalidValues[] = is_object($getOrdCriteriaTypesForCategoryResponseMidocoOrdCriteriaTypeInfoDescrItem) ? get_class($getOrdCriteriaTypesForCategoryResponseMidocoOrdCriteriaTypeInfoDescrItem) : sprintf('%s(%s)', gettype($getOrdCriteriaTypesForCategoryResponseMidocoOrdCriteriaTypeInfoDescrItem), var_export($getOrdCriteriaTypesForCategoryResponseMidocoOrdCriteriaTypeInfoDescrItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrdCriteriaTypeInfoDescr property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoOrdCriteriaTypeInfoDescr, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrdCriteriaTypeInfoDescr value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoOrdCriteriaTypeInfoDescr[] $midocoOrdCriteriaTypeInfoDescr
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetOrdCriteriaTypesForCategoryResponse
     */
    public function setMidocoOrdCriteriaTypeInfoDescr(?array $midocoOrdCriteriaTypeInfoDescr = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrdCriteriaTypeInfoDescrArrayErrorMessage = self::validateMidocoOrdCriteriaTypeInfoDescrForArrayConstraintsFromSetMidocoOrdCriteriaTypeInfoDescr($midocoOrdCriteriaTypeInfoDescr))) {
            throw new InvalidArgumentException($midocoOrdCriteriaTypeInfoDescrArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrdCriteriaTypeInfoDescr = $midocoOrdCriteriaTypeInfoDescr;
        
        return $this;
    }
    /**
     * Add item to MidocoOrdCriteriaTypeInfoDescr value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoOrdCriteriaTypeInfoDescr $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetOrdCriteriaTypesForCategoryResponse
     */
    public function addToMidocoOrdCriteriaTypeInfoDescr(\Pggns\MidocoApi\Orderlists\StructType\MidocoOrdCriteriaTypeInfoDescr $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoOrdCriteriaTypeInfoDescr) {
            throw new InvalidArgumentException(sprintf('The MidocoOrdCriteriaTypeInfoDescr property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoOrdCriteriaTypeInfoDescr, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrdCriteriaTypeInfoDescr[] = $item;
        
        return $this;
    }
}
