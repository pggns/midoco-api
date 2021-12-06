<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoSupplierTemplatesResponse StructType
 * @subpackage Structs
 */
class GetMidocoSupplierTemplatesResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierTemplate
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierTemplateDTO[]
     */
    protected ?array $MidocoSupplierTemplate = null;
    /**
     * Constructor method for GetMidocoSupplierTemplatesResponse
     * @uses GetMidocoSupplierTemplatesResponse::setMidocoSupplierTemplate()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierTemplateDTO[] $midocoSupplierTemplate
     */
    public function __construct(?array $midocoSupplierTemplate = null)
    {
        $this
            ->setMidocoSupplierTemplate($midocoSupplierTemplate);
    }
    /**
     * Get MidocoSupplierTemplate value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierTemplateDTO[]
     */
    public function getMidocoSupplierTemplate(): ?array
    {
        return $this->MidocoSupplierTemplate;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSupplierTemplate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierTemplate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierTemplateForArrayConstraintsFromSetMidocoSupplierTemplate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoSupplierTemplatesResponseMidocoSupplierTemplateItem) {
            // validation for constraint: itemType
            if (!$getMidocoSupplierTemplatesResponseMidocoSupplierTemplateItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierTemplateDTO) {
                $invalidValues[] = is_object($getMidocoSupplierTemplatesResponseMidocoSupplierTemplateItem) ? get_class($getMidocoSupplierTemplatesResponseMidocoSupplierTemplateItem) : sprintf('%s(%s)', gettype($getMidocoSupplierTemplatesResponseMidocoSupplierTemplateItem), var_export($getMidocoSupplierTemplatesResponseMidocoSupplierTemplateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierTemplate property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierTemplateDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierTemplate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierTemplateDTO[] $midocoSupplierTemplate
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetMidocoSupplierTemplatesResponse
     */
    public function setMidocoSupplierTemplate(?array $midocoSupplierTemplate = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierTemplateArrayErrorMessage = self::validateMidocoSupplierTemplateForArrayConstraintsFromSetMidocoSupplierTemplate($midocoSupplierTemplate))) {
            throw new InvalidArgumentException($midocoSupplierTemplateArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierTemplate = $midocoSupplierTemplate;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierTemplate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierTemplateDTO $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetMidocoSupplierTemplatesResponse
     */
    public function addToMidocoSupplierTemplate(\Pggns\MidocoApi\Api\Orderlists\StructType\SupplierTemplateDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierTemplateDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierTemplate property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierTemplateDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierTemplate[] = $item;
        
        return $this;
    }
}
