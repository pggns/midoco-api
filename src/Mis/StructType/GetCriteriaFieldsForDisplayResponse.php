<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCriteriaFieldsForDisplayResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCriteriaFieldsForDisplay --- returns the list of field key, field to be displayed) for the criteria in campaigns
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCriteriaFieldsForDisplayResponse extends AbstractStructBase
{
    /**
     * The MidocoCriteriaField
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCriteriaField
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldType[]
     */
    protected ?array $MidocoCriteriaField = null;
    /**
     * Constructor method for GetCriteriaFieldsForDisplayResponse
     * @uses GetCriteriaFieldsForDisplayResponse::setMidocoCriteriaField()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldType[] $midocoCriteriaField
     */
    public function __construct(?array $midocoCriteriaField = null)
    {
        $this
            ->setMidocoCriteriaField($midocoCriteriaField);
    }
    /**
     * Get MidocoCriteriaField value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldType[]
     */
    public function getMidocoCriteriaField(): ?array
    {
        return $this->MidocoCriteriaField;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCriteriaField method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCriteriaField method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCriteriaFieldForArrayConstraintFromSetMidocoCriteriaField(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCriteriaFieldsForDisplayResponseMidocoCriteriaFieldItem) {
            // validation for constraint: itemType
            if (!$getCriteriaFieldsForDisplayResponseMidocoCriteriaFieldItem instanceof \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldType) {
                $invalidValues[] = is_object($getCriteriaFieldsForDisplayResponseMidocoCriteriaFieldItem) ? get_class($getCriteriaFieldsForDisplayResponseMidocoCriteriaFieldItem) : sprintf('%s(%s)', gettype($getCriteriaFieldsForDisplayResponseMidocoCriteriaFieldItem), var_export($getCriteriaFieldsForDisplayResponseMidocoCriteriaFieldItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCriteriaField property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCriteriaField value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldType[] $midocoCriteriaField
     * @return \Pggns\MidocoApi\Mis\StructType\GetCriteriaFieldsForDisplayResponse
     */
    public function setMidocoCriteriaField(?array $midocoCriteriaField = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCriteriaFieldArrayErrorMessage = self::validateMidocoCriteriaFieldForArrayConstraintFromSetMidocoCriteriaField($midocoCriteriaField))) {
            throw new InvalidArgumentException($midocoCriteriaFieldArrayErrorMessage, __LINE__);
        }
        $this->MidocoCriteriaField = $midocoCriteriaField;
        
        return $this;
    }
    /**
     * Add item to MidocoCriteriaField value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldType $item
     * @return \Pggns\MidocoApi\Mis\StructType\GetCriteriaFieldsForDisplayResponse
     */
    public function addToMidocoCriteriaField(\Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldType) {
            throw new InvalidArgumentException(sprintf('The MidocoCriteriaField property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCriteriaField[] = $item;
        
        return $this;
    }
}
