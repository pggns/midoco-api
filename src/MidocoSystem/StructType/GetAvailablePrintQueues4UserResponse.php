<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailablePrintQueues4UserResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAvailablePrintQueues4UserResponse extends AbstractStructBase
{
    /**
     * The MidocoPrintQueue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPrintQueue
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\PrintQueueDTO[]
     */
    protected ?array $MidocoPrintQueue = null;
    /**
     * Constructor method for GetAvailablePrintQueues4UserResponse
     * @uses GetAvailablePrintQueues4UserResponse::setMidocoPrintQueue()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\PrintQueueDTO[] $midocoPrintQueue
     */
    public function __construct(?array $midocoPrintQueue = null)
    {
        $this
            ->setMidocoPrintQueue($midocoPrintQueue);
    }
    /**
     * Get MidocoPrintQueue value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\PrintQueueDTO[]
     */
    public function getMidocoPrintQueue(): ?array
    {
        return $this->MidocoPrintQueue;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoPrintQueue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPrintQueue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPrintQueueForArrayConstraintFromSetMidocoPrintQueue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailablePrintQueues4UserResponseMidocoPrintQueueItem) {
            // validation for constraint: itemType
            if (!$getAvailablePrintQueues4UserResponseMidocoPrintQueueItem instanceof \Pggns\MidocoApi\MidocoSystem\StructType\PrintQueueDTO) {
                $invalidValues[] = is_object($getAvailablePrintQueues4UserResponseMidocoPrintQueueItem) ? get_class($getAvailablePrintQueues4UserResponseMidocoPrintQueueItem) : sprintf('%s(%s)', gettype($getAvailablePrintQueues4UserResponseMidocoPrintQueueItem), var_export($getAvailablePrintQueues4UserResponseMidocoPrintQueueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPrintQueue property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\PrintQueueDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPrintQueue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\PrintQueueDTO[] $midocoPrintQueue
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetAvailablePrintQueues4UserResponse
     */
    public function setMidocoPrintQueue(?array $midocoPrintQueue = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPrintQueueArrayErrorMessage = self::validateMidocoPrintQueueForArrayConstraintFromSetMidocoPrintQueue($midocoPrintQueue))) {
            throw new InvalidArgumentException($midocoPrintQueueArrayErrorMessage, __LINE__);
        }
        $this->MidocoPrintQueue = $midocoPrintQueue;
        
        return $this;
    }
    /**
     * Add item to MidocoPrintQueue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\PrintQueueDTO $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetAvailablePrintQueues4UserResponse
     */
    public function addToMidocoPrintQueue(\Pggns\MidocoApi\MidocoSystem\StructType\PrintQueueDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\MidocoSystem\StructType\PrintQueueDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoPrintQueue property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\PrintQueueDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPrintQueue[] = $item;
        
        return $this;
    }
}
