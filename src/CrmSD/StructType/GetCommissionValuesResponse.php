<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCommissionValuesResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCommissionValues --- returns the list of commission values corresponding to the commission given as parameter
 * @subpackage Structs
 */
class GetCommissionValuesResponse extends AbstractStructBase
{
    /**
     * The MidocoCommissionValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCommissionValue
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionValueDTO[]
     */
    protected ?array $MidocoCommissionValue = null;
    /**
     * Constructor method for GetCommissionValuesResponse
     * @uses GetCommissionValuesResponse::setMidocoCommissionValue()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionValueDTO[] $midocoCommissionValue
     */
    public function __construct(?array $midocoCommissionValue = null)
    {
        $this
            ->setMidocoCommissionValue($midocoCommissionValue);
    }
    /**
     * Get MidocoCommissionValue value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionValueDTO[]
     */
    public function getMidocoCommissionValue(): ?array
    {
        return $this->MidocoCommissionValue;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCommissionValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCommissionValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCommissionValueForArrayConstraintsFromSetMidocoCommissionValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCommissionValuesResponseMidocoCommissionValueItem) {
            // validation for constraint: itemType
            if (!$getCommissionValuesResponseMidocoCommissionValueItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionValueDTO) {
                $invalidValues[] = is_object($getCommissionValuesResponseMidocoCommissionValueItem) ? get_class($getCommissionValuesResponseMidocoCommissionValueItem) : sprintf('%s(%s)', gettype($getCommissionValuesResponseMidocoCommissionValueItem), var_export($getCommissionValuesResponseMidocoCommissionValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCommissionValue property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionValueDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCommissionValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionValueDTO[] $midocoCommissionValue
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetCommissionValuesResponse
     */
    public function setMidocoCommissionValue(?array $midocoCommissionValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCommissionValueArrayErrorMessage = self::validateMidocoCommissionValueForArrayConstraintsFromSetMidocoCommissionValue($midocoCommissionValue))) {
            throw new InvalidArgumentException($midocoCommissionValueArrayErrorMessage, __LINE__);
        }
        $this->MidocoCommissionValue = $midocoCommissionValue;
        
        return $this;
    }
    /**
     * Add item to MidocoCommissionValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionValueDTO $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetCommissionValuesResponse
     */
    public function addToMidocoCommissionValue(\Pggns\MidocoApi\Api\CrmSD\StructType\CommissionValueDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionValueDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCommissionValue property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionValueDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCommissionValue[] = $item;
        
        return $this;
    }
}
