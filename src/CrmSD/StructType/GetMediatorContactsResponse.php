<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMediatorContactsResponse StructType
 * @subpackage Structs
 */
class GetMediatorContactsResponse extends AbstractStructBase
{
    /**
     * The MidocoContactEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoContactEntry
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoContactEntryType[]
     */
    protected ?array $MidocoContactEntry = null;
    /**
     * Constructor method for GetMediatorContactsResponse
     * @uses GetMediatorContactsResponse::setMidocoContactEntry()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoContactEntryType[] $midocoContactEntry
     */
    public function __construct(?array $midocoContactEntry = null)
    {
        $this
            ->setMidocoContactEntry($midocoContactEntry);
    }
    /**
     * Get MidocoContactEntry value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoContactEntryType[]
     */
    public function getMidocoContactEntry(): ?array
    {
        return $this->MidocoContactEntry;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoContactEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoContactEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoContactEntryForArrayConstraintsFromSetMidocoContactEntry(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMediatorContactsResponseMidocoContactEntryItem) {
            // validation for constraint: itemType
            if (!$getMediatorContactsResponseMidocoContactEntryItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoContactEntryType) {
                $invalidValues[] = is_object($getMediatorContactsResponseMidocoContactEntryItem) ? get_class($getMediatorContactsResponseMidocoContactEntryItem) : sprintf('%s(%s)', gettype($getMediatorContactsResponseMidocoContactEntryItem), var_export($getMediatorContactsResponseMidocoContactEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoContactEntry property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoContactEntryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoContactEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoContactEntryType[] $midocoContactEntry
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetMediatorContactsResponse
     */
    public function setMidocoContactEntry(?array $midocoContactEntry = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoContactEntryArrayErrorMessage = self::validateMidocoContactEntryForArrayConstraintsFromSetMidocoContactEntry($midocoContactEntry))) {
            throw new InvalidArgumentException($midocoContactEntryArrayErrorMessage, __LINE__);
        }
        $this->MidocoContactEntry = $midocoContactEntry;
        
        return $this;
    }
    /**
     * Add item to MidocoContactEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoContactEntryType $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetMediatorContactsResponse
     */
    public function addToMidocoContactEntry(\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoContactEntryType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoContactEntryType) {
            throw new InvalidArgumentException(sprintf('The MidocoContactEntry property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoContactEntryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoContactEntry[] = $item;
        
        return $this;
    }
}
