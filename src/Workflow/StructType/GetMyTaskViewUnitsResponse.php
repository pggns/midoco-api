<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMyTaskViewUnitsResponse StructType
 * @subpackage Structs
 */
class GetMyTaskViewUnitsResponse extends AbstractStructBase
{
    /**
     * The MidocoMyTaskViewUnit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMyTaskViewUnit
     * @var \Pggns\MidocoApi\Api\Workflow\StructType\MidocoMyTaskViewUnit[]
     */
    protected ?array $MidocoMyTaskViewUnit = null;
    /**
     * Constructor method for GetMyTaskViewUnitsResponse
     * @uses GetMyTaskViewUnitsResponse::setMidocoMyTaskViewUnit()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoMyTaskViewUnit[] $midocoMyTaskViewUnit
     */
    public function __construct(?array $midocoMyTaskViewUnit = null)
    {
        $this
            ->setMidocoMyTaskViewUnit($midocoMyTaskViewUnit);
    }
    /**
     * Get MidocoMyTaskViewUnit value
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\MidocoMyTaskViewUnit[]
     */
    public function getMidocoMyTaskViewUnit(): ?array
    {
        return $this->MidocoMyTaskViewUnit;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMyTaskViewUnit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMyTaskViewUnit method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMyTaskViewUnitForArrayConstraintsFromSetMidocoMyTaskViewUnit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMyTaskViewUnitsResponseMidocoMyTaskViewUnitItem) {
            // validation for constraint: itemType
            if (!$getMyTaskViewUnitsResponseMidocoMyTaskViewUnitItem instanceof \Pggns\MidocoApi\Api\Workflow\StructType\MidocoMyTaskViewUnit) {
                $invalidValues[] = is_object($getMyTaskViewUnitsResponseMidocoMyTaskViewUnitItem) ? get_class($getMyTaskViewUnitsResponseMidocoMyTaskViewUnitItem) : sprintf('%s(%s)', gettype($getMyTaskViewUnitsResponseMidocoMyTaskViewUnitItem), var_export($getMyTaskViewUnitsResponseMidocoMyTaskViewUnitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMyTaskViewUnit property can only contain items of type \Pggns\MidocoApi\Api\Workflow\StructType\MidocoMyTaskViewUnit, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMyTaskViewUnit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoMyTaskViewUnit[] $midocoMyTaskViewUnit
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\GetMyTaskViewUnitsResponse
     */
    public function setMidocoMyTaskViewUnit(?array $midocoMyTaskViewUnit = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMyTaskViewUnitArrayErrorMessage = self::validateMidocoMyTaskViewUnitForArrayConstraintsFromSetMidocoMyTaskViewUnit($midocoMyTaskViewUnit))) {
            throw new InvalidArgumentException($midocoMyTaskViewUnitArrayErrorMessage, __LINE__);
        }
        $this->MidocoMyTaskViewUnit = $midocoMyTaskViewUnit;
        
        return $this;
    }
    /**
     * Add item to MidocoMyTaskViewUnit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoMyTaskViewUnit $item
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\GetMyTaskViewUnitsResponse
     */
    public function addToMidocoMyTaskViewUnit(\Pggns\MidocoApi\Api\Workflow\StructType\MidocoMyTaskViewUnit $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Workflow\StructType\MidocoMyTaskViewUnit) {
            throw new InvalidArgumentException(sprintf('The MidocoMyTaskViewUnit property can only contain items of type \Pggns\MidocoApi\Api\Workflow\StructType\MidocoMyTaskViewUnit, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMyTaskViewUnit[] = $item;
        
        return $this;
    }
}
