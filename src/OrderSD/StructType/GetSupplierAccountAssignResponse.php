<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierAccountAssignResponse StructType
 * @subpackage Structs
 */
class GetSupplierAccountAssignResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierAccountAssign
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierAccountAssign
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierAccountAssign[]
     */
    protected ?array $MidocoSupplierAccountAssign = null;
    /**
     * Constructor method for GetSupplierAccountAssignResponse
     * @uses GetSupplierAccountAssignResponse::setMidocoSupplierAccountAssign()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierAccountAssign[] $midocoSupplierAccountAssign
     */
    public function __construct(?array $midocoSupplierAccountAssign = null)
    {
        $this
            ->setMidocoSupplierAccountAssign($midocoSupplierAccountAssign);
    }
    /**
     * Get MidocoSupplierAccountAssign value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierAccountAssign[]
     */
    public function getMidocoSupplierAccountAssign(): ?array
    {
        return $this->MidocoSupplierAccountAssign;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSupplierAccountAssign method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierAccountAssign method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierAccountAssignForArrayConstraintsFromSetMidocoSupplierAccountAssign(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierAccountAssignResponseMidocoSupplierAccountAssignItem) {
            // validation for constraint: itemType
            if (!$getSupplierAccountAssignResponseMidocoSupplierAccountAssignItem instanceof \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierAccountAssign) {
                $invalidValues[] = is_object($getSupplierAccountAssignResponseMidocoSupplierAccountAssignItem) ? get_class($getSupplierAccountAssignResponseMidocoSupplierAccountAssignItem) : sprintf('%s(%s)', gettype($getSupplierAccountAssignResponseMidocoSupplierAccountAssignItem), var_export($getSupplierAccountAssignResponseMidocoSupplierAccountAssignItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierAccountAssign property can only contain items of type \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierAccountAssign, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierAccountAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierAccountAssign[] $midocoSupplierAccountAssign
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSupplierAccountAssignResponse
     */
    public function setMidocoSupplierAccountAssign(?array $midocoSupplierAccountAssign = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierAccountAssignArrayErrorMessage = self::validateMidocoSupplierAccountAssignForArrayConstraintsFromSetMidocoSupplierAccountAssign($midocoSupplierAccountAssign))) {
            throw new InvalidArgumentException($midocoSupplierAccountAssignArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierAccountAssign = $midocoSupplierAccountAssign;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierAccountAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierAccountAssign $item
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSupplierAccountAssignResponse
     */
    public function addToMidocoSupplierAccountAssign(\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierAccountAssign $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierAccountAssign) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierAccountAssign property can only contain items of type \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierAccountAssign, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierAccountAssign[] = $item;
        
        return $this;
    }
}
