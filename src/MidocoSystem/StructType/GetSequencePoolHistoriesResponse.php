<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSequencePoolHistoriesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSequencePoolHistoriesResponse extends AbstractStructBase
{
    /**
     * The MidocoSequencePoolHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSequencePoolHistory
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\SequencerangeDTO[]
     */
    protected ?array $MidocoSequencePoolHistory = null;
    /**
     * Constructor method for GetSequencePoolHistoriesResponse
     * @uses GetSequencePoolHistoriesResponse::setMidocoSequencePoolHistory()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\SequencerangeDTO[] $midocoSequencePoolHistory
     */
    public function __construct(?array $midocoSequencePoolHistory = null)
    {
        $this
            ->setMidocoSequencePoolHistory($midocoSequencePoolHistory);
    }
    /**
     * Get MidocoSequencePoolHistory value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SequencerangeDTO[]
     */
    public function getMidocoSequencePoolHistory(): ?array
    {
        return $this->MidocoSequencePoolHistory;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSequencePoolHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSequencePoolHistory method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSequencePoolHistoryForArrayConstraintFromSetMidocoSequencePoolHistory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSequencePoolHistoriesResponseMidocoSequencePoolHistoryItem) {
            // validation for constraint: itemType
            if (!$getSequencePoolHistoriesResponseMidocoSequencePoolHistoryItem instanceof \Pggns\MidocoApi\MidocoSystem\StructType\SequencerangeDTO) {
                $invalidValues[] = is_object($getSequencePoolHistoriesResponseMidocoSequencePoolHistoryItem) ? get_class($getSequencePoolHistoriesResponseMidocoSequencePoolHistoryItem) : sprintf('%s(%s)', gettype($getSequencePoolHistoriesResponseMidocoSequencePoolHistoryItem), var_export($getSequencePoolHistoriesResponseMidocoSequencePoolHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSequencePoolHistory property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\SequencerangeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSequencePoolHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\SequencerangeDTO[] $midocoSequencePoolHistory
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetSequencePoolHistoriesResponse
     */
    public function setMidocoSequencePoolHistory(?array $midocoSequencePoolHistory = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSequencePoolHistoryArrayErrorMessage = self::validateMidocoSequencePoolHistoryForArrayConstraintFromSetMidocoSequencePoolHistory($midocoSequencePoolHistory))) {
            throw new InvalidArgumentException($midocoSequencePoolHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoSequencePoolHistory = $midocoSequencePoolHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoSequencePoolHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\SequencerangeDTO $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetSequencePoolHistoriesResponse
     */
    public function addToMidocoSequencePoolHistory(\Pggns\MidocoApi\MidocoSystem\StructType\SequencerangeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\MidocoSystem\StructType\SequencerangeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSequencePoolHistory property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\SequencerangeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSequencePoolHistory[] = $item;
        
        return $this;
    }
}
