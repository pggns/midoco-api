<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTaskViewbyTimeRestrictionResponse StructType
 * @subpackage Structs
 */
class GetTaskViewbyTimeRestrictionResponse extends AbstractStructBase
{
    /**
     * The MidocoTaskView
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTaskView
     * @var \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskView[]
     */
    protected ?array $MidocoTaskView = null;
    /**
     * Constructor method for GetTaskViewbyTimeRestrictionResponse
     * @uses GetTaskViewbyTimeRestrictionResponse::setMidocoTaskView()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskView[] $midocoTaskView
     */
    public function __construct(?array $midocoTaskView = null)
    {
        $this
            ->setMidocoTaskView($midocoTaskView);
    }
    /**
     * Get MidocoTaskView value
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskView[]
     */
    public function getMidocoTaskView(): ?array
    {
        return $this->MidocoTaskView;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTaskView method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTaskView method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTaskViewForArrayConstraintsFromSetMidocoTaskView(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTaskViewbyTimeRestrictionResponseMidocoTaskViewItem) {
            // validation for constraint: itemType
            if (!$getTaskViewbyTimeRestrictionResponseMidocoTaskViewItem instanceof \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskView) {
                $invalidValues[] = is_object($getTaskViewbyTimeRestrictionResponseMidocoTaskViewItem) ? get_class($getTaskViewbyTimeRestrictionResponseMidocoTaskViewItem) : sprintf('%s(%s)', gettype($getTaskViewbyTimeRestrictionResponseMidocoTaskViewItem), var_export($getTaskViewbyTimeRestrictionResponseMidocoTaskViewItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTaskView property can only contain items of type \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskView, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTaskView value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskView[] $midocoTaskView
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\GetTaskViewbyTimeRestrictionResponse
     */
    public function setMidocoTaskView(?array $midocoTaskView = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTaskViewArrayErrorMessage = self::validateMidocoTaskViewForArrayConstraintsFromSetMidocoTaskView($midocoTaskView))) {
            throw new InvalidArgumentException($midocoTaskViewArrayErrorMessage, __LINE__);
        }
        $this->MidocoTaskView = $midocoTaskView;
        
        return $this;
    }
    /**
     * Add item to MidocoTaskView value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskView $item
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\GetTaskViewbyTimeRestrictionResponse
     */
    public function addToMidocoTaskView(\Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskView $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskView) {
            throw new InvalidArgumentException(sprintf('The MidocoTaskView property can only contain items of type \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskView, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTaskView[] = $item;
        
        return $this;
    }
}
