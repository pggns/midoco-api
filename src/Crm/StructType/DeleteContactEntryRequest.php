<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteContactEntryRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: deleteContactEntry --- all entries should be from the same customer!
 * @subpackage Structs
 */
class DeleteContactEntryRequest extends AbstractStructBase
{
    /**
     * The MidocoContactEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoContactEntry
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoContactEntryType[]
     */
    protected ?array $MidocoContactEntry = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for DeleteContactEntryRequest
     * @uses DeleteContactEntryRequest::setMidocoContactEntry()
     * @uses DeleteContactEntryRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoContactEntryType[] $midocoContactEntry
     * @param int $internalVersion
     */
    public function __construct(?array $midocoContactEntry = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoContactEntry($midocoContactEntry)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoContactEntry value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoContactEntryType[]
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
        foreach ($values as $deleteContactEntryRequestMidocoContactEntryItem) {
            // validation for constraint: itemType
            if (!$deleteContactEntryRequestMidocoContactEntryItem instanceof \Pggns\MidocoApi\Api\Crm\StructType\MidocoContactEntryType) {
                $invalidValues[] = is_object($deleteContactEntryRequestMidocoContactEntryItem) ? get_class($deleteContactEntryRequestMidocoContactEntryItem) : sprintf('%s(%s)', gettype($deleteContactEntryRequestMidocoContactEntryItem), var_export($deleteContactEntryRequestMidocoContactEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoContactEntry property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\MidocoContactEntryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoContactEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoContactEntryType[] $midocoContactEntry
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteContactEntryRequest
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
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoContactEntryType $item
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteContactEntryRequest
     */
    public function addToMidocoContactEntry(\Pggns\MidocoApi\Api\Crm\StructType\MidocoContactEntryType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Crm\StructType\MidocoContactEntryType) {
            throw new InvalidArgumentException(sprintf('The MidocoContactEntry property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\MidocoContactEntryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoContactEntry[] = $item;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteContactEntryRequest
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
}
