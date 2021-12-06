<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerDefinedFieldResponse StructType
 * @subpackage Structs
 */
class GetCustomerDefinedFieldResponse extends AbstractStructBase
{
    /**
     * The MidocoCustomerDefinedField
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerDefinedField
     * @var \Pggns\MidocoApi\CrmSD\StructType\CustomerDefinedFieldDTO[]
     */
    protected ?array $MidocoCustomerDefinedField = null;
    /**
     * Constructor method for GetCustomerDefinedFieldResponse
     * @uses GetCustomerDefinedFieldResponse::setMidocoCustomerDefinedField()
     * @param \Pggns\MidocoApi\CrmSD\StructType\CustomerDefinedFieldDTO[] $midocoCustomerDefinedField
     */
    public function __construct(?array $midocoCustomerDefinedField = null)
    {
        $this
            ->setMidocoCustomerDefinedField($midocoCustomerDefinedField);
    }
    /**
     * Get MidocoCustomerDefinedField value
     * @return \Pggns\MidocoApi\CrmSD\StructType\CustomerDefinedFieldDTO[]
     */
    public function getMidocoCustomerDefinedField(): ?array
    {
        return $this->MidocoCustomerDefinedField;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCustomerDefinedField method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerDefinedField method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerDefinedFieldForArrayConstraintsFromSetMidocoCustomerDefinedField(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCustomerDefinedFieldResponseMidocoCustomerDefinedFieldItem) {
            // validation for constraint: itemType
            if (!$getCustomerDefinedFieldResponseMidocoCustomerDefinedFieldItem instanceof \Pggns\MidocoApi\CrmSD\StructType\CustomerDefinedFieldDTO) {
                $invalidValues[] = is_object($getCustomerDefinedFieldResponseMidocoCustomerDefinedFieldItem) ? get_class($getCustomerDefinedFieldResponseMidocoCustomerDefinedFieldItem) : sprintf('%s(%s)', gettype($getCustomerDefinedFieldResponseMidocoCustomerDefinedFieldItem), var_export($getCustomerDefinedFieldResponseMidocoCustomerDefinedFieldItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerDefinedField property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\CustomerDefinedFieldDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerDefinedField value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\CustomerDefinedFieldDTO[] $midocoCustomerDefinedField
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetCustomerDefinedFieldResponse
     */
    public function setMidocoCustomerDefinedField(?array $midocoCustomerDefinedField = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerDefinedFieldArrayErrorMessage = self::validateMidocoCustomerDefinedFieldForArrayConstraintsFromSetMidocoCustomerDefinedField($midocoCustomerDefinedField))) {
            throw new InvalidArgumentException($midocoCustomerDefinedFieldArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerDefinedField = $midocoCustomerDefinedField;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerDefinedField value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\CustomerDefinedFieldDTO $item
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetCustomerDefinedFieldResponse
     */
    public function addToMidocoCustomerDefinedField(\Pggns\MidocoApi\CrmSD\StructType\CustomerDefinedFieldDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\CrmSD\StructType\CustomerDefinedFieldDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerDefinedField property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\CustomerDefinedFieldDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerDefinedField[] = $item;
        
        return $this;
    }
}
