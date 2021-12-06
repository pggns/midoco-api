<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoVatDivisionTemplatesForSupplierResponse
 * StructType
 * @subpackage Structs
 */
class GetMidocoVatDivisionTemplatesForSupplierResponse extends AbstractStructBase
{
    /**
     * The MidocoVatDivisionTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoVatDivisionTemplate
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoVatDivisionTemplate[]
     */
    protected ?array $MidocoVatDivisionTemplate = null;
    /**
     * Constructor method for GetMidocoVatDivisionTemplatesForSupplierResponse
     * @uses GetMidocoVatDivisionTemplatesForSupplierResponse::setMidocoVatDivisionTemplate()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoVatDivisionTemplate[] $midocoVatDivisionTemplate
     */
    public function __construct(?array $midocoVatDivisionTemplate = null)
    {
        $this
            ->setMidocoVatDivisionTemplate($midocoVatDivisionTemplate);
    }
    /**
     * Get MidocoVatDivisionTemplate value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoVatDivisionTemplate[]
     */
    public function getMidocoVatDivisionTemplate(): ?array
    {
        return $this->MidocoVatDivisionTemplate;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoVatDivisionTemplate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVatDivisionTemplate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVatDivisionTemplateForArrayConstraintsFromSetMidocoVatDivisionTemplate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoVatDivisionTemplatesForSupplierResponseMidocoVatDivisionTemplateItem) {
            // validation for constraint: itemType
            if (!$getMidocoVatDivisionTemplatesForSupplierResponseMidocoVatDivisionTemplateItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoVatDivisionTemplate) {
                $invalidValues[] = is_object($getMidocoVatDivisionTemplatesForSupplierResponseMidocoVatDivisionTemplateItem) ? get_class($getMidocoVatDivisionTemplatesForSupplierResponseMidocoVatDivisionTemplateItem) : sprintf('%s(%s)', gettype($getMidocoVatDivisionTemplatesForSupplierResponseMidocoVatDivisionTemplateItem), var_export($getMidocoVatDivisionTemplatesForSupplierResponseMidocoVatDivisionTemplateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVatDivisionTemplate property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoVatDivisionTemplate, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVatDivisionTemplate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoVatDivisionTemplate[] $midocoVatDivisionTemplate
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetMidocoVatDivisionTemplatesForSupplierResponse
     */
    public function setMidocoVatDivisionTemplate(?array $midocoVatDivisionTemplate = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVatDivisionTemplateArrayErrorMessage = self::validateMidocoVatDivisionTemplateForArrayConstraintsFromSetMidocoVatDivisionTemplate($midocoVatDivisionTemplate))) {
            throw new InvalidArgumentException($midocoVatDivisionTemplateArrayErrorMessage, __LINE__);
        }
        $this->MidocoVatDivisionTemplate = $midocoVatDivisionTemplate;
        
        return $this;
    }
    /**
     * Add item to MidocoVatDivisionTemplate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoVatDivisionTemplate $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetMidocoVatDivisionTemplatesForSupplierResponse
     */
    public function addToMidocoVatDivisionTemplate(\Pggns\MidocoApi\Api\Order\StructType\MidocoVatDivisionTemplate $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoVatDivisionTemplate) {
            throw new InvalidArgumentException(sprintf('The MidocoVatDivisionTemplate property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoVatDivisionTemplate, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVatDivisionTemplate[] = $item;
        
        return $this;
    }
}
