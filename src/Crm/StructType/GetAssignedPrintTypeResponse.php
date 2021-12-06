<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAssignedPrintTypeResponse StructType
 * @subpackage Structs
 */
class GetAssignedPrintTypeResponse extends AbstractStructBase
{
    /**
     * The MidocoPrintTypeAssign
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoPrintTypeAssign
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoPrintTypeAssign[]
     */
    protected ?array $MidocoPrintTypeAssign = null;
    /**
     * Constructor method for GetAssignedPrintTypeResponse
     * @uses GetAssignedPrintTypeResponse::setMidocoPrintTypeAssign()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoPrintTypeAssign[] $midocoPrintTypeAssign
     */
    public function __construct(?array $midocoPrintTypeAssign = null)
    {
        $this
            ->setMidocoPrintTypeAssign($midocoPrintTypeAssign);
    }
    /**
     * Get MidocoPrintTypeAssign value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoPrintTypeAssign[]
     */
    public function getMidocoPrintTypeAssign(): ?array
    {
        return $this->MidocoPrintTypeAssign;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoPrintTypeAssign method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPrintTypeAssign method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPrintTypeAssignForArrayConstraintsFromSetMidocoPrintTypeAssign(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAssignedPrintTypeResponseMidocoPrintTypeAssignItem) {
            // validation for constraint: itemType
            if (!$getAssignedPrintTypeResponseMidocoPrintTypeAssignItem instanceof \Pggns\MidocoApi\Api\Crm\StructType\MidocoPrintTypeAssign) {
                $invalidValues[] = is_object($getAssignedPrintTypeResponseMidocoPrintTypeAssignItem) ? get_class($getAssignedPrintTypeResponseMidocoPrintTypeAssignItem) : sprintf('%s(%s)', gettype($getAssignedPrintTypeResponseMidocoPrintTypeAssignItem), var_export($getAssignedPrintTypeResponseMidocoPrintTypeAssignItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPrintTypeAssign property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\MidocoPrintTypeAssign, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPrintTypeAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoPrintTypeAssign[] $midocoPrintTypeAssign
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetAssignedPrintTypeResponse
     */
    public function setMidocoPrintTypeAssign(?array $midocoPrintTypeAssign = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPrintTypeAssignArrayErrorMessage = self::validateMidocoPrintTypeAssignForArrayConstraintsFromSetMidocoPrintTypeAssign($midocoPrintTypeAssign))) {
            throw new InvalidArgumentException($midocoPrintTypeAssignArrayErrorMessage, __LINE__);
        }
        $this->MidocoPrintTypeAssign = $midocoPrintTypeAssign;
        
        return $this;
    }
    /**
     * Add item to MidocoPrintTypeAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoPrintTypeAssign $item
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetAssignedPrintTypeResponse
     */
    public function addToMidocoPrintTypeAssign(\Pggns\MidocoApi\Api\Crm\StructType\MidocoPrintTypeAssign $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Crm\StructType\MidocoPrintTypeAssign) {
            throw new InvalidArgumentException(sprintf('The MidocoPrintTypeAssign property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\MidocoPrintTypeAssign, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPrintTypeAssign[] = $item;
        
        return $this;
    }
}
