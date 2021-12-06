<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchSupplierDocumentShippingResponse StructType
 * @subpackage Structs
 */
class SearchSupplierDocumentShippingResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierDocumentShipping
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierDocumentShipping
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierDocumentShipping[]
     */
    protected ?array $MidocoSupplierDocumentShipping = null;
    /**
     * Constructor method for SearchSupplierDocumentShippingResponse
     * @uses SearchSupplierDocumentShippingResponse::setMidocoSupplierDocumentShipping()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierDocumentShipping[] $midocoSupplierDocumentShipping
     */
    public function __construct(?array $midocoSupplierDocumentShipping = null)
    {
        $this
            ->setMidocoSupplierDocumentShipping($midocoSupplierDocumentShipping);
    }
    /**
     * Get MidocoSupplierDocumentShipping value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierDocumentShipping[]
     */
    public function getMidocoSupplierDocumentShipping(): ?array
    {
        return $this->MidocoSupplierDocumentShipping;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSupplierDocumentShipping method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierDocumentShipping method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierDocumentShippingForArrayConstraintsFromSetMidocoSupplierDocumentShipping(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchSupplierDocumentShippingResponseMidocoSupplierDocumentShippingItem) {
            // validation for constraint: itemType
            if (!$searchSupplierDocumentShippingResponseMidocoSupplierDocumentShippingItem instanceof \Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierDocumentShipping) {
                $invalidValues[] = is_object($searchSupplierDocumentShippingResponseMidocoSupplierDocumentShippingItem) ? get_class($searchSupplierDocumentShippingResponseMidocoSupplierDocumentShippingItem) : sprintf('%s(%s)', gettype($searchSupplierDocumentShippingResponseMidocoSupplierDocumentShippingItem), var_export($searchSupplierDocumentShippingResponseMidocoSupplierDocumentShippingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierDocumentShipping property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierDocumentShipping, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierDocumentShipping value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierDocumentShipping[] $midocoSupplierDocumentShipping
     * @return \Pggns\MidocoApi\Api\Documents\StructType\SearchSupplierDocumentShippingResponse
     */
    public function setMidocoSupplierDocumentShipping(?array $midocoSupplierDocumentShipping = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierDocumentShippingArrayErrorMessage = self::validateMidocoSupplierDocumentShippingForArrayConstraintsFromSetMidocoSupplierDocumentShipping($midocoSupplierDocumentShipping))) {
            throw new InvalidArgumentException($midocoSupplierDocumentShippingArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierDocumentShipping = $midocoSupplierDocumentShipping;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierDocumentShipping value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierDocumentShipping $item
     * @return \Pggns\MidocoApi\Api\Documents\StructType\SearchSupplierDocumentShippingResponse
     */
    public function addToMidocoSupplierDocumentShipping(\Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierDocumentShipping $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierDocumentShipping) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierDocumentShipping property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\MidocoSupplierDocumentShipping, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierDocumentShipping[] = $item;
        
        return $this;
    }
}
