<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSequencePoolHistoriesResponse StructType
 * @subpackage Structs
 */
class GetSequencePoolHistoriesResponse extends AbstractStructBase
{
    /**
     * The MidocoSequencePoolHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSequencePoolHistory
     * @var \Pggns\MidocoApi\Api\Documents\StructType\SequencerangeDTO[]
     */
    protected ?array $MidocoSequencePoolHistory = null;
    /**
     * Constructor method for GetSequencePoolHistoriesResponse
     * @uses GetSequencePoolHistoriesResponse::setMidocoSequencePoolHistory()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\SequencerangeDTO[] $midocoSequencePoolHistory
     */
    public function __construct(?array $midocoSequencePoolHistory = null)
    {
        $this
            ->setMidocoSequencePoolHistory($midocoSequencePoolHistory);
    }
    /**
     * Get MidocoSequencePoolHistory value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\SequencerangeDTO[]
     */
    public function getMidocoSequencePoolHistory(): ?array
    {
        return $this->MidocoSequencePoolHistory;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSequencePoolHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSequencePoolHistory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSequencePoolHistoryForArrayConstraintsFromSetMidocoSequencePoolHistory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSequencePoolHistoriesResponseMidocoSequencePoolHistoryItem) {
            // validation for constraint: itemType
            if (!$getSequencePoolHistoriesResponseMidocoSequencePoolHistoryItem instanceof \Pggns\MidocoApi\Api\Documents\StructType\SequencerangeDTO) {
                $invalidValues[] = is_object($getSequencePoolHistoriesResponseMidocoSequencePoolHistoryItem) ? get_class($getSequencePoolHistoriesResponseMidocoSequencePoolHistoryItem) : sprintf('%s(%s)', gettype($getSequencePoolHistoriesResponseMidocoSequencePoolHistoryItem), var_export($getSequencePoolHistoriesResponseMidocoSequencePoolHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSequencePoolHistory property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\SequencerangeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSequencePoolHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\SequencerangeDTO[] $midocoSequencePoolHistory
     * @return \Pggns\MidocoApi\Api\Documents\StructType\GetSequencePoolHistoriesResponse
     */
    public function setMidocoSequencePoolHistory(?array $midocoSequencePoolHistory = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSequencePoolHistoryArrayErrorMessage = self::validateMidocoSequencePoolHistoryForArrayConstraintsFromSetMidocoSequencePoolHistory($midocoSequencePoolHistory))) {
            throw new InvalidArgumentException($midocoSequencePoolHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoSequencePoolHistory = $midocoSequencePoolHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoSequencePoolHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\SequencerangeDTO $item
     * @return \Pggns\MidocoApi\Api\Documents\StructType\GetSequencePoolHistoriesResponse
     */
    public function addToMidocoSequencePoolHistory(\Pggns\MidocoApi\Api\Documents\StructType\SequencerangeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Documents\StructType\SequencerangeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSequencePoolHistory property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\SequencerangeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSequencePoolHistory[] = $item;
        
        return $this;
    }
}
