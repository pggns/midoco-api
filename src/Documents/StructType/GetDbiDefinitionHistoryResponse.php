<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDbiDefinitionHistoryResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDbiDefinitionHistoryResponse extends AbstractStructBase
{
    /**
     * The MidocoDbiDefinitionHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDbiDefinitionHistory
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefinitionHistory[]
     */
    protected ?array $MidocoDbiDefinitionHistory = null;
    /**
     * Constructor method for GetDbiDefinitionHistoryResponse
     * @uses GetDbiDefinitionHistoryResponse::setMidocoDbiDefinitionHistory()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefinitionHistory[] $midocoDbiDefinitionHistory
     */
    public function __construct(?array $midocoDbiDefinitionHistory = null)
    {
        $this
            ->setMidocoDbiDefinitionHistory($midocoDbiDefinitionHistory);
    }
    /**
     * Get MidocoDbiDefinitionHistory value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefinitionHistory[]
     */
    public function getMidocoDbiDefinitionHistory(): ?array
    {
        return $this->MidocoDbiDefinitionHistory;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDbiDefinitionHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDbiDefinitionHistory method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDbiDefinitionHistoryForArrayConstraintFromSetMidocoDbiDefinitionHistory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDbiDefinitionHistoryResponseMidocoDbiDefinitionHistoryItem) {
            // validation for constraint: itemType
            if (!$getDbiDefinitionHistoryResponseMidocoDbiDefinitionHistoryItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefinitionHistory) {
                $invalidValues[] = is_object($getDbiDefinitionHistoryResponseMidocoDbiDefinitionHistoryItem) ? get_class($getDbiDefinitionHistoryResponseMidocoDbiDefinitionHistoryItem) : sprintf('%s(%s)', gettype($getDbiDefinitionHistoryResponseMidocoDbiDefinitionHistoryItem), var_export($getDbiDefinitionHistoryResponseMidocoDbiDefinitionHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDbiDefinitionHistory property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefinitionHistory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDbiDefinitionHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefinitionHistory[] $midocoDbiDefinitionHistory
     * @return \Pggns\MidocoApi\Documents\StructType\GetDbiDefinitionHistoryResponse
     */
    public function setMidocoDbiDefinitionHistory(?array $midocoDbiDefinitionHistory = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDbiDefinitionHistoryArrayErrorMessage = self::validateMidocoDbiDefinitionHistoryForArrayConstraintFromSetMidocoDbiDefinitionHistory($midocoDbiDefinitionHistory))) {
            throw new InvalidArgumentException($midocoDbiDefinitionHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoDbiDefinitionHistory = $midocoDbiDefinitionHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoDbiDefinitionHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefinitionHistory $item
     * @return \Pggns\MidocoApi\Documents\StructType\GetDbiDefinitionHistoryResponse
     */
    public function addToMidocoDbiDefinitionHistory(\Pggns\MidocoApi\Documents\StructType\MidocoDbiDefinitionHistory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefinitionHistory) {
            throw new InvalidArgumentException(sprintf('The MidocoDbiDefinitionHistory property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefinitionHistory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDbiDefinitionHistory[] = $item;
        
        return $this;
    }
}
