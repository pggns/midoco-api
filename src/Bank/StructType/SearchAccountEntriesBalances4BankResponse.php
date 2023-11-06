<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchAccountEntriesBalances4BankResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchAccountEntriesBalances4BankResponse extends AbstractStructBase
{
    /**
     * The MidocoBankOrderType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBankOrderType
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankOrderType[]
     */
    protected ?array $MidocoBankOrderType = null;
    /**
     * Constructor method for SearchAccountEntriesBalances4BankResponse
     * @uses SearchAccountEntriesBalances4BankResponse::setMidocoBankOrderType()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankOrderType[] $midocoBankOrderType
     */
    public function __construct(?array $midocoBankOrderType = null)
    {
        $this
            ->setMidocoBankOrderType($midocoBankOrderType);
    }
    /**
     * Get MidocoBankOrderType value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankOrderType[]
     */
    public function getMidocoBankOrderType(): ?array
    {
        return $this->MidocoBankOrderType;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBankOrderType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBankOrderType method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBankOrderTypeForArrayConstraintFromSetMidocoBankOrderType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchAccountEntriesBalances4BankResponseMidocoBankOrderTypeItem) {
            // validation for constraint: itemType
            if (!$searchAccountEntriesBalances4BankResponseMidocoBankOrderTypeItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankOrderType) {
                $invalidValues[] = is_object($searchAccountEntriesBalances4BankResponseMidocoBankOrderTypeItem) ? get_class($searchAccountEntriesBalances4BankResponseMidocoBankOrderTypeItem) : sprintf('%s(%s)', gettype($searchAccountEntriesBalances4BankResponseMidocoBankOrderTypeItem), var_export($searchAccountEntriesBalances4BankResponseMidocoBankOrderTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBankOrderType property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankOrderType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBankOrderType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankOrderType[] $midocoBankOrderType
     * @return \Pggns\MidocoApi\Bank\StructType\SearchAccountEntriesBalances4BankResponse
     */
    public function setMidocoBankOrderType(?array $midocoBankOrderType = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBankOrderTypeArrayErrorMessage = self::validateMidocoBankOrderTypeForArrayConstraintFromSetMidocoBankOrderType($midocoBankOrderType))) {
            throw new InvalidArgumentException($midocoBankOrderTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoBankOrderType = $midocoBankOrderType;
        
        return $this;
    }
    /**
     * Add item to MidocoBankOrderType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankOrderType $item
     * @return \Pggns\MidocoApi\Bank\StructType\SearchAccountEntriesBalances4BankResponse
     */
    public function addToMidocoBankOrderType(\Pggns\MidocoApi\Bank\StructType\MidocoBankOrderType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankOrderType) {
            throw new InvalidArgumentException(sprintf('The MidocoBankOrderType property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankOrderType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBankOrderType[] = $item;
        
        return $this;
    }
}
