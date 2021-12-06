<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCriteriaTypesForCategoryResponse StructType
 * @subpackage Structs
 */
class GetCriteriaTypesForCategoryResponse extends AbstractStructBase
{
    /**
     * The MidocoCriteriaTypeInfoDescr
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCriteriaTypeInfoDescr
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoCriteriaTypeInfoDescr[]
     */
    protected ?array $MidocoCriteriaTypeInfoDescr = null;
    /**
     * Constructor method for GetCriteriaTypesForCategoryResponse
     * @uses GetCriteriaTypesForCategoryResponse::setMidocoCriteriaTypeInfoDescr()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCriteriaTypeInfoDescr[] $midocoCriteriaTypeInfoDescr
     */
    public function __construct(?array $midocoCriteriaTypeInfoDescr = null)
    {
        $this
            ->setMidocoCriteriaTypeInfoDescr($midocoCriteriaTypeInfoDescr);
    }
    /**
     * Get MidocoCriteriaTypeInfoDescr value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoCriteriaTypeInfoDescr[]
     */
    public function getMidocoCriteriaTypeInfoDescr(): ?array
    {
        return $this->MidocoCriteriaTypeInfoDescr;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCriteriaTypeInfoDescr method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCriteriaTypeInfoDescr method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCriteriaTypeInfoDescrForArrayConstraintsFromSetMidocoCriteriaTypeInfoDescr(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCriteriaTypesForCategoryResponseMidocoCriteriaTypeInfoDescrItem) {
            // validation for constraint: itemType
            if (!$getCriteriaTypesForCategoryResponseMidocoCriteriaTypeInfoDescrItem instanceof \Pggns\MidocoApi\CrmSD\StructType\MidocoCriteriaTypeInfoDescr) {
                $invalidValues[] = is_object($getCriteriaTypesForCategoryResponseMidocoCriteriaTypeInfoDescrItem) ? get_class($getCriteriaTypesForCategoryResponseMidocoCriteriaTypeInfoDescrItem) : sprintf('%s(%s)', gettype($getCriteriaTypesForCategoryResponseMidocoCriteriaTypeInfoDescrItem), var_export($getCriteriaTypesForCategoryResponseMidocoCriteriaTypeInfoDescrItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCriteriaTypeInfoDescr property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\MidocoCriteriaTypeInfoDescr, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCriteriaTypeInfoDescr value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCriteriaTypeInfoDescr[] $midocoCriteriaTypeInfoDescr
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetCriteriaTypesForCategoryResponse
     */
    public function setMidocoCriteriaTypeInfoDescr(?array $midocoCriteriaTypeInfoDescr = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCriteriaTypeInfoDescrArrayErrorMessage = self::validateMidocoCriteriaTypeInfoDescrForArrayConstraintsFromSetMidocoCriteriaTypeInfoDescr($midocoCriteriaTypeInfoDescr))) {
            throw new InvalidArgumentException($midocoCriteriaTypeInfoDescrArrayErrorMessage, __LINE__);
        }
        $this->MidocoCriteriaTypeInfoDescr = $midocoCriteriaTypeInfoDescr;
        
        return $this;
    }
    /**
     * Add item to MidocoCriteriaTypeInfoDescr value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCriteriaTypeInfoDescr $item
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetCriteriaTypesForCategoryResponse
     */
    public function addToMidocoCriteriaTypeInfoDescr(\Pggns\MidocoApi\CrmSD\StructType\MidocoCriteriaTypeInfoDescr $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\CrmSD\StructType\MidocoCriteriaTypeInfoDescr) {
            throw new InvalidArgumentException(sprintf('The MidocoCriteriaTypeInfoDescr property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\MidocoCriteriaTypeInfoDescr, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCriteriaTypeInfoDescr[] = $item;
        
        return $this;
    }
}
