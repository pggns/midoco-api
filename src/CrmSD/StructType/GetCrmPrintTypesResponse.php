<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCrmPrintTypesResponse StructType
 * @subpackage Structs
 */
class GetCrmPrintTypesResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmPrintType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmPrintType
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmPrintType[]
     */
    protected ?array $MidocoCrmPrintType = null;
    /**
     * Constructor method for GetCrmPrintTypesResponse
     * @uses GetCrmPrintTypesResponse::setMidocoCrmPrintType()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmPrintType[] $midocoCrmPrintType
     */
    public function __construct(?array $midocoCrmPrintType = null)
    {
        $this
            ->setMidocoCrmPrintType($midocoCrmPrintType);
    }
    /**
     * Get MidocoCrmPrintType value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmPrintType[]
     */
    public function getMidocoCrmPrintType(): ?array
    {
        return $this->MidocoCrmPrintType;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmPrintType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmPrintType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmPrintTypeForArrayConstraintsFromSetMidocoCrmPrintType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCrmPrintTypesResponseMidocoCrmPrintTypeItem) {
            // validation for constraint: itemType
            if (!$getCrmPrintTypesResponseMidocoCrmPrintTypeItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmPrintType) {
                $invalidValues[] = is_object($getCrmPrintTypesResponseMidocoCrmPrintTypeItem) ? get_class($getCrmPrintTypesResponseMidocoCrmPrintTypeItem) : sprintf('%s(%s)', gettype($getCrmPrintTypesResponseMidocoCrmPrintTypeItem), var_export($getCrmPrintTypesResponseMidocoCrmPrintTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmPrintType property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmPrintType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmPrintType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmPrintType[] $midocoCrmPrintType
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetCrmPrintTypesResponse
     */
    public function setMidocoCrmPrintType(?array $midocoCrmPrintType = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmPrintTypeArrayErrorMessage = self::validateMidocoCrmPrintTypeForArrayConstraintsFromSetMidocoCrmPrintType($midocoCrmPrintType))) {
            throw new InvalidArgumentException($midocoCrmPrintTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmPrintType = $midocoCrmPrintType;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmPrintType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmPrintType $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetCrmPrintTypesResponse
     */
    public function addToMidocoCrmPrintType(\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmPrintType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmPrintType) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmPrintType property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmPrintType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmPrintType[] = $item;
        
        return $this;
    }
}
