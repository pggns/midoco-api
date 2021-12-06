<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierByAccountResponse StructType
 * @subpackage Structs
 */
class GetSupplierByAccountResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplier
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplier
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierType[]
     */
    protected ?array $MidocoSupplier = null;
    /**
     * Constructor method for GetSupplierByAccountResponse
     * @uses GetSupplierByAccountResponse::setMidocoSupplier()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierType[] $midocoSupplier
     */
    public function __construct(?array $midocoSupplier = null)
    {
        $this
            ->setMidocoSupplier($midocoSupplier);
    }
    /**
     * Get MidocoSupplier value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierType[]
     */
    public function getMidocoSupplier(): ?array
    {
        return $this->MidocoSupplier;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSupplier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplier method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierForArrayConstraintsFromSetMidocoSupplier(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierByAccountResponseMidocoSupplierItem) {
            // validation for constraint: itemType
            if (!$getSupplierByAccountResponseMidocoSupplierItem instanceof \Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierType) {
                $invalidValues[] = is_object($getSupplierByAccountResponseMidocoSupplierItem) ? get_class($getSupplierByAccountResponseMidocoSupplierItem) : sprintf('%s(%s)', gettype($getSupplierByAccountResponseMidocoSupplierItem), var_export($getSupplierByAccountResponseMidocoSupplierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplier property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplier value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierType[] $midocoSupplier
     * @return \Pggns\MidocoApi\Api\Documents\StructType\GetSupplierByAccountResponse
     */
    public function setMidocoSupplier(?array $midocoSupplier = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierArrayErrorMessage = self::validateMidocoSupplierForArrayConstraintsFromSetMidocoSupplier($midocoSupplier))) {
            throw new InvalidArgumentException($midocoSupplierArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplier = $midocoSupplier;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplier value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierType $item
     * @return \Pggns\MidocoApi\Api\Documents\StructType\GetSupplierByAccountResponse
     */
    public function addToMidocoSupplier(\Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierType) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplier property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplier[] = $item;
        
        return $this;
    }
}
