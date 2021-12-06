<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderTasksResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getHistory --- returns the list of order notices (manual tasks) for a given customer id
 * @subpackage Structs
 */
class GetOrderTasksResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderTask
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderTask
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoOrderTask[]
     */
    protected ?array $MidocoOrderTask = null;
    /**
     * Constructor method for GetOrderTasksResponse
     * @uses GetOrderTasksResponse::setMidocoOrderTask()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoOrderTask[] $midocoOrderTask
     */
    public function __construct(?array $midocoOrderTask = null)
    {
        $this
            ->setMidocoOrderTask($midocoOrderTask);
    }
    /**
     * Get MidocoOrderTask value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoOrderTask[]
     */
    public function getMidocoOrderTask(): ?array
    {
        return $this->MidocoOrderTask;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrderTask method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderTask method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderTaskForArrayConstraintsFromSetMidocoOrderTask(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderTasksResponseMidocoOrderTaskItem) {
            // validation for constraint: itemType
            if (!$getOrderTasksResponseMidocoOrderTaskItem instanceof \Pggns\MidocoApi\Api\Crm\StructType\MidocoOrderTask) {
                $invalidValues[] = is_object($getOrderTasksResponseMidocoOrderTaskItem) ? get_class($getOrderTasksResponseMidocoOrderTaskItem) : sprintf('%s(%s)', gettype($getOrderTasksResponseMidocoOrderTaskItem), var_export($getOrderTasksResponseMidocoOrderTaskItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderTask property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\MidocoOrderTask, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderTask value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoOrderTask[] $midocoOrderTask
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetOrderTasksResponse
     */
    public function setMidocoOrderTask(?array $midocoOrderTask = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderTaskArrayErrorMessage = self::validateMidocoOrderTaskForArrayConstraintsFromSetMidocoOrderTask($midocoOrderTask))) {
            throw new InvalidArgumentException($midocoOrderTaskArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderTask = $midocoOrderTask;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderTask value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoOrderTask $item
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetOrderTasksResponse
     */
    public function addToMidocoOrderTask(\Pggns\MidocoApi\Api\Crm\StructType\MidocoOrderTask $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Crm\StructType\MidocoOrderTask) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderTask property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\MidocoOrderTask, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderTask[] = $item;
        
        return $this;
    }
}
