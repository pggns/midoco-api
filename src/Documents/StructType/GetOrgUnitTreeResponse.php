<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgUnitTreeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrgUnitTreeResponse extends AbstractStructBase
{
    /**
     * The MidocoOrgUnitElement
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrgUnitElement
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoOrgUnitElementType[]
     */
    protected ?array $MidocoOrgUnitElement = null;
    /**
     * Constructor method for GetOrgUnitTreeResponse
     * @uses GetOrgUnitTreeResponse::setMidocoOrgUnitElement()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoOrgUnitElementType[] $midocoOrgUnitElement
     */
    public function __construct(?array $midocoOrgUnitElement = null)
    {
        $this
            ->setMidocoOrgUnitElement($midocoOrgUnitElement);
    }
    /**
     * Get MidocoOrgUnitElement value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoOrgUnitElementType[]
     */
    public function getMidocoOrgUnitElement(): ?array
    {
        return $this->MidocoOrgUnitElement;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrgUnitElement method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrgUnitElement method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrgUnitElementForArrayConstraintFromSetMidocoOrgUnitElement(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrgUnitTreeResponseMidocoOrgUnitElementItem) {
            // validation for constraint: itemType
            if (!$getOrgUnitTreeResponseMidocoOrgUnitElementItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoOrgUnitElementType) {
                $invalidValues[] = is_object($getOrgUnitTreeResponseMidocoOrgUnitElementItem) ? get_class($getOrgUnitTreeResponseMidocoOrgUnitElementItem) : sprintf('%s(%s)', gettype($getOrgUnitTreeResponseMidocoOrgUnitElementItem), var_export($getOrgUnitTreeResponseMidocoOrgUnitElementItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrgUnitElement property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoOrgUnitElementType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrgUnitElement value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoOrgUnitElementType[] $midocoOrgUnitElement
     * @return \Pggns\MidocoApi\Documents\StructType\GetOrgUnitTreeResponse
     */
    public function setMidocoOrgUnitElement(?array $midocoOrgUnitElement = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrgUnitElementArrayErrorMessage = self::validateMidocoOrgUnitElementForArrayConstraintFromSetMidocoOrgUnitElement($midocoOrgUnitElement))) {
            throw new InvalidArgumentException($midocoOrgUnitElementArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrgUnitElement = $midocoOrgUnitElement;
        
        return $this;
    }
    /**
     * Add item to MidocoOrgUnitElement value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoOrgUnitElementType $item
     * @return \Pggns\MidocoApi\Documents\StructType\GetOrgUnitTreeResponse
     */
    public function addToMidocoOrgUnitElement(\Pggns\MidocoApi\Documents\StructType\MidocoOrgUnitElementType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoOrgUnitElementType) {
            throw new InvalidArgumentException(sprintf('The MidocoOrgUnitElement property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoOrgUnitElementType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrgUnitElement[] = $item;
        
        return $this;
    }
}
