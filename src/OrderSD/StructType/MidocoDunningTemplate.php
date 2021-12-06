<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDunningTemplate StructType
 * @subpackage Structs
 */
class MidocoDunningTemplate extends DunningTemplateDTO
{
    /**
     * The MidocoDunningTemplateAssign
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDunningTemplateAssign
     * @var \Pggns\MidocoApi\OrderSD\StructType\DunningTemplateAssignDTO[]
     */
    protected ?array $MidocoDunningTemplateAssign = null;
    /**
     * Constructor method for MidocoDunningTemplate
     * @uses MidocoDunningTemplate::setMidocoDunningTemplateAssign()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DunningTemplateAssignDTO[] $midocoDunningTemplateAssign
     */
    public function __construct(?array $midocoDunningTemplateAssign = null)
    {
        $this
            ->setMidocoDunningTemplateAssign($midocoDunningTemplateAssign);
    }
    /**
     * Get MidocoDunningTemplateAssign value
     * @return \Pggns\MidocoApi\OrderSD\StructType\DunningTemplateAssignDTO[]
     */
    public function getMidocoDunningTemplateAssign(): ?array
    {
        return $this->MidocoDunningTemplateAssign;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDunningTemplateAssign method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDunningTemplateAssign method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDunningTemplateAssignForArrayConstraintsFromSetMidocoDunningTemplateAssign(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoDunningTemplateMidocoDunningTemplateAssignItem) {
            // validation for constraint: itemType
            if (!$midocoDunningTemplateMidocoDunningTemplateAssignItem instanceof \Pggns\MidocoApi\OrderSD\StructType\DunningTemplateAssignDTO) {
                $invalidValues[] = is_object($midocoDunningTemplateMidocoDunningTemplateAssignItem) ? get_class($midocoDunningTemplateMidocoDunningTemplateAssignItem) : sprintf('%s(%s)', gettype($midocoDunningTemplateMidocoDunningTemplateAssignItem), var_export($midocoDunningTemplateMidocoDunningTemplateAssignItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDunningTemplateAssign property can only contain items of type \Pggns\MidocoApi\OrderSD\StructType\DunningTemplateAssignDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDunningTemplateAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderSD\StructType\DunningTemplateAssignDTO[] $midocoDunningTemplateAssign
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoDunningTemplate
     */
    public function setMidocoDunningTemplateAssign(?array $midocoDunningTemplateAssign = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDunningTemplateAssignArrayErrorMessage = self::validateMidocoDunningTemplateAssignForArrayConstraintsFromSetMidocoDunningTemplateAssign($midocoDunningTemplateAssign))) {
            throw new InvalidArgumentException($midocoDunningTemplateAssignArrayErrorMessage, __LINE__);
        }
        $this->MidocoDunningTemplateAssign = $midocoDunningTemplateAssign;
        
        return $this;
    }
    /**
     * Add item to MidocoDunningTemplateAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderSD\StructType\DunningTemplateAssignDTO $item
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoDunningTemplate
     */
    public function addToMidocoDunningTemplateAssign(\Pggns\MidocoApi\OrderSD\StructType\DunningTemplateAssignDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\OrderSD\StructType\DunningTemplateAssignDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoDunningTemplateAssign property can only contain items of type \Pggns\MidocoApi\OrderSD\StructType\DunningTemplateAssignDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDunningTemplateAssign[] = $item;
        
        return $this;
    }
}
