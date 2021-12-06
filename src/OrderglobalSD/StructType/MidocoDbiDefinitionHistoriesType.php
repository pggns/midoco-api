<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDbiDefinitionHistoriesType StructType
 * @subpackage Structs
 */
class MidocoDbiDefinitionHistoriesType extends AbstractStructBase
{
    /**
     * The MidocoDbiUpdate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoDbiUpdate
     * @var \Pggns\MidocoApi\OrderglobalSD\StructType\DbiUpdateDTO
     */
    protected \Pggns\MidocoApi\OrderglobalSD\StructType\DbiUpdateDTO $MidocoDbiUpdate;
    /**
     * The MidocoDbiDefinitionHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDbiDefinitionHistory
     * @var \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoDbiDefinitionHistory[]
     */
    protected ?array $MidocoDbiDefinitionHistory = null;
    /**
     * Constructor method for MidocoDbiDefinitionHistoriesType
     * @uses MidocoDbiDefinitionHistoriesType::setMidocoDbiUpdate()
     * @uses MidocoDbiDefinitionHistoriesType::setMidocoDbiDefinitionHistory()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\DbiUpdateDTO $midocoDbiUpdate
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoDbiDefinitionHistory[] $midocoDbiDefinitionHistory
     */
    public function __construct(\Pggns\MidocoApi\OrderglobalSD\StructType\DbiUpdateDTO $midocoDbiUpdate, ?array $midocoDbiDefinitionHistory = null)
    {
        $this
            ->setMidocoDbiUpdate($midocoDbiUpdate)
            ->setMidocoDbiDefinitionHistory($midocoDbiDefinitionHistory);
    }
    /**
     * Get MidocoDbiUpdate value
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DbiUpdateDTO
     */
    public function getMidocoDbiUpdate(): \Pggns\MidocoApi\OrderglobalSD\StructType\DbiUpdateDTO
    {
        return $this->MidocoDbiUpdate;
    }
    /**
     * Set MidocoDbiUpdate value
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\DbiUpdateDTO $midocoDbiUpdate
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoDbiDefinitionHistoriesType
     */
    public function setMidocoDbiUpdate(\Pggns\MidocoApi\OrderglobalSD\StructType\DbiUpdateDTO $midocoDbiUpdate): self
    {
        $this->MidocoDbiUpdate = $midocoDbiUpdate;
        
        return $this;
    }
    /**
     * Get MidocoDbiDefinitionHistory value
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoDbiDefinitionHistory[]
     */
    public function getMidocoDbiDefinitionHistory(): ?array
    {
        return $this->MidocoDbiDefinitionHistory;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDbiDefinitionHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDbiDefinitionHistory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDbiDefinitionHistoryForArrayConstraintsFromSetMidocoDbiDefinitionHistory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoDbiDefinitionHistoriesTypeMidocoDbiDefinitionHistoryItem) {
            // validation for constraint: itemType
            if (!$midocoDbiDefinitionHistoriesTypeMidocoDbiDefinitionHistoryItem instanceof \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoDbiDefinitionHistory) {
                $invalidValues[] = is_object($midocoDbiDefinitionHistoriesTypeMidocoDbiDefinitionHistoryItem) ? get_class($midocoDbiDefinitionHistoriesTypeMidocoDbiDefinitionHistoryItem) : sprintf('%s(%s)', gettype($midocoDbiDefinitionHistoriesTypeMidocoDbiDefinitionHistoryItem), var_export($midocoDbiDefinitionHistoriesTypeMidocoDbiDefinitionHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDbiDefinitionHistory property can only contain items of type \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoDbiDefinitionHistory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDbiDefinitionHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoDbiDefinitionHistory[] $midocoDbiDefinitionHistory
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoDbiDefinitionHistoriesType
     */
    public function setMidocoDbiDefinitionHistory(?array $midocoDbiDefinitionHistory = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDbiDefinitionHistoryArrayErrorMessage = self::validateMidocoDbiDefinitionHistoryForArrayConstraintsFromSetMidocoDbiDefinitionHistory($midocoDbiDefinitionHistory))) {
            throw new InvalidArgumentException($midocoDbiDefinitionHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoDbiDefinitionHistory = $midocoDbiDefinitionHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoDbiDefinitionHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoDbiDefinitionHistory $item
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoDbiDefinitionHistoriesType
     */
    public function addToMidocoDbiDefinitionHistory(\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoDbiDefinitionHistory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoDbiDefinitionHistory) {
            throw new InvalidArgumentException(sprintf('The MidocoDbiDefinitionHistory property can only contain items of type \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoDbiDefinitionHistory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDbiDefinitionHistory[] = $item;
        
        return $this;
    }
}
