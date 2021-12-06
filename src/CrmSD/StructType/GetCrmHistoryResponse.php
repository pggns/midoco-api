<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCrmHistoryResponse StructType
 * @subpackage Structs
 */
class GetCrmHistoryResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmHistory
     * @var \Pggns\MidocoApi\CrmSD\StructType\CrmHistoryDTO[]
     */
    protected ?array $MidocoCrmHistory = null;
    /**
     * Constructor method for GetCrmHistoryResponse
     * @uses GetCrmHistoryResponse::setMidocoCrmHistory()
     * @param \Pggns\MidocoApi\CrmSD\StructType\CrmHistoryDTO[] $midocoCrmHistory
     */
    public function __construct(?array $midocoCrmHistory = null)
    {
        $this
            ->setMidocoCrmHistory($midocoCrmHistory);
    }
    /**
     * Get MidocoCrmHistory value
     * @return \Pggns\MidocoApi\CrmSD\StructType\CrmHistoryDTO[]
     */
    public function getMidocoCrmHistory(): ?array
    {
        return $this->MidocoCrmHistory;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmHistory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmHistoryForArrayConstraintsFromSetMidocoCrmHistory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCrmHistoryResponseMidocoCrmHistoryItem) {
            // validation for constraint: itemType
            if (!$getCrmHistoryResponseMidocoCrmHistoryItem instanceof \Pggns\MidocoApi\CrmSD\StructType\CrmHistoryDTO) {
                $invalidValues[] = is_object($getCrmHistoryResponseMidocoCrmHistoryItem) ? get_class($getCrmHistoryResponseMidocoCrmHistoryItem) : sprintf('%s(%s)', gettype($getCrmHistoryResponseMidocoCrmHistoryItem), var_export($getCrmHistoryResponseMidocoCrmHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmHistory property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\CrmHistoryDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\CrmHistoryDTO[] $midocoCrmHistory
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetCrmHistoryResponse
     */
    public function setMidocoCrmHistory(?array $midocoCrmHistory = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmHistoryArrayErrorMessage = self::validateMidocoCrmHistoryForArrayConstraintsFromSetMidocoCrmHistory($midocoCrmHistory))) {
            throw new InvalidArgumentException($midocoCrmHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmHistory = $midocoCrmHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\CrmHistoryDTO $item
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetCrmHistoryResponse
     */
    public function addToMidocoCrmHistory(\Pggns\MidocoApi\CrmSD\StructType\CrmHistoryDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\CrmSD\StructType\CrmHistoryDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmHistory property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\CrmHistoryDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmHistory[] = $item;
        
        return $this;
    }
}
