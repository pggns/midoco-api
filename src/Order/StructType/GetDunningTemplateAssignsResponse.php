<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDunningTemplateAssignsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDunningTemplateAssignsResponse extends AbstractStructBase
{
    /**
     * The MidocoDunningTemplateAssign
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDunningTemplateAssign
     * @var \Pggns\MidocoApi\Order\StructType\DunningTemplateAssignDTO[]
     */
    protected ?array $MidocoDunningTemplateAssign = null;
    /**
     * Constructor method for GetDunningTemplateAssignsResponse
     * @uses GetDunningTemplateAssignsResponse::setMidocoDunningTemplateAssign()
     * @param \Pggns\MidocoApi\Order\StructType\DunningTemplateAssignDTO[] $midocoDunningTemplateAssign
     */
    public function __construct(?array $midocoDunningTemplateAssign = null)
    {
        $this
            ->setMidocoDunningTemplateAssign($midocoDunningTemplateAssign);
    }
    /**
     * Get MidocoDunningTemplateAssign value
     * @return \Pggns\MidocoApi\Order\StructType\DunningTemplateAssignDTO[]
     */
    public function getMidocoDunningTemplateAssign(): ?array
    {
        return $this->MidocoDunningTemplateAssign;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDunningTemplateAssign method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDunningTemplateAssign method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDunningTemplateAssignForArrayConstraintFromSetMidocoDunningTemplateAssign(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDunningTemplateAssignsResponseMidocoDunningTemplateAssignItem) {
            // validation for constraint: itemType
            if (!$getDunningTemplateAssignsResponseMidocoDunningTemplateAssignItem instanceof \Pggns\MidocoApi\Order\StructType\DunningTemplateAssignDTO) {
                $invalidValues[] = is_object($getDunningTemplateAssignsResponseMidocoDunningTemplateAssignItem) ? get_class($getDunningTemplateAssignsResponseMidocoDunningTemplateAssignItem) : sprintf('%s(%s)', gettype($getDunningTemplateAssignsResponseMidocoDunningTemplateAssignItem), var_export($getDunningTemplateAssignsResponseMidocoDunningTemplateAssignItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDunningTemplateAssign property can only contain items of type \Pggns\MidocoApi\Order\StructType\DunningTemplateAssignDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDunningTemplateAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\DunningTemplateAssignDTO[] $midocoDunningTemplateAssign
     * @return \Pggns\MidocoApi\Order\StructType\GetDunningTemplateAssignsResponse
     */
    public function setMidocoDunningTemplateAssign(?array $midocoDunningTemplateAssign = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDunningTemplateAssignArrayErrorMessage = self::validateMidocoDunningTemplateAssignForArrayConstraintFromSetMidocoDunningTemplateAssign($midocoDunningTemplateAssign))) {
            throw new InvalidArgumentException($midocoDunningTemplateAssignArrayErrorMessage, __LINE__);
        }
        $this->MidocoDunningTemplateAssign = $midocoDunningTemplateAssign;
        
        return $this;
    }
    /**
     * Add item to MidocoDunningTemplateAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\DunningTemplateAssignDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetDunningTemplateAssignsResponse
     */
    public function addToMidocoDunningTemplateAssign(\Pggns\MidocoApi\Order\StructType\DunningTemplateAssignDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\DunningTemplateAssignDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoDunningTemplateAssign property can only contain items of type \Pggns\MidocoApi\Order\StructType\DunningTemplateAssignDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDunningTemplateAssign[] = $item;
        
        return $this;
    }
}
