<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMyTaskViewQueuesRequest StructType
 * @subpackage Structs
 */
class SaveMyTaskViewQueuesRequest extends AbstractStructBase
{
    /**
     * The MidocoMyTaskViewQueue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - ref: MidocoMyTaskViewQueue
     * @var \Pggns\MidocoApi\Api\Workflow\StructType\MidocoMyTaskViewQueue[]
     */
    protected array $MidocoMyTaskViewQueue;
    /**
     * Constructor method for SaveMyTaskViewQueuesRequest
     * @uses SaveMyTaskViewQueuesRequest::setMidocoMyTaskViewQueue()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoMyTaskViewQueue[] $midocoMyTaskViewQueue
     */
    public function __construct(array $midocoMyTaskViewQueue)
    {
        $this
            ->setMidocoMyTaskViewQueue($midocoMyTaskViewQueue);
    }
    /**
     * Get MidocoMyTaskViewQueue value
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\MidocoMyTaskViewQueue[]
     */
    public function getMidocoMyTaskViewQueue(): array
    {
        return $this->MidocoMyTaskViewQueue;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMyTaskViewQueue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMyTaskViewQueue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMyTaskViewQueueForArrayConstraintsFromSetMidocoMyTaskViewQueue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveMyTaskViewQueuesRequestMidocoMyTaskViewQueueItem) {
            // validation for constraint: itemType
            if (!$saveMyTaskViewQueuesRequestMidocoMyTaskViewQueueItem instanceof \Pggns\MidocoApi\Api\Workflow\StructType\MidocoMyTaskViewQueue) {
                $invalidValues[] = is_object($saveMyTaskViewQueuesRequestMidocoMyTaskViewQueueItem) ? get_class($saveMyTaskViewQueuesRequestMidocoMyTaskViewQueueItem) : sprintf('%s(%s)', gettype($saveMyTaskViewQueuesRequestMidocoMyTaskViewQueueItem), var_export($saveMyTaskViewQueuesRequestMidocoMyTaskViewQueueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMyTaskViewQueue property can only contain items of type \Pggns\MidocoApi\Api\Workflow\StructType\MidocoMyTaskViewQueue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMyTaskViewQueue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoMyTaskViewQueue[] $midocoMyTaskViewQueue
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\SaveMyTaskViewQueuesRequest
     */
    public function setMidocoMyTaskViewQueue(array $midocoMyTaskViewQueue): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMyTaskViewQueueArrayErrorMessage = self::validateMidocoMyTaskViewQueueForArrayConstraintsFromSetMidocoMyTaskViewQueue($midocoMyTaskViewQueue))) {
            throw new InvalidArgumentException($midocoMyTaskViewQueueArrayErrorMessage, __LINE__);
        }
        $this->MidocoMyTaskViewQueue = $midocoMyTaskViewQueue;
        
        return $this;
    }
    /**
     * Add item to MidocoMyTaskViewQueue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoMyTaskViewQueue $item
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\SaveMyTaskViewQueuesRequest
     */
    public function addToMidocoMyTaskViewQueue(\Pggns\MidocoApi\Api\Workflow\StructType\MidocoMyTaskViewQueue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Workflow\StructType\MidocoMyTaskViewQueue) {
            throw new InvalidArgumentException(sprintf('The MidocoMyTaskViewQueue property can only contain items of type \Pggns\MidocoApi\Api\Workflow\StructType\MidocoMyTaskViewQueue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMyTaskViewQueue[] = $item;
        
        return $this;
    }
}
