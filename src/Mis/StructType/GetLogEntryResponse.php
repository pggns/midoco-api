<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLogEntryResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getLogEntries --- returns a list of log entries having the search criteria given as parameter in the request
 * @subpackage Structs
 */
class GetLogEntryResponse extends AbstractStructBase
{
    /**
     * The MidocoLogEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoLogEntry
     * @var \Pggns\MidocoApi\Mis\StructType\LogentryDTO[]
     */
    protected ?array $MidocoLogEntry = null;
    /**
     * Constructor method for GetLogEntryResponse
     * @uses GetLogEntryResponse::setMidocoLogEntry()
     * @param \Pggns\MidocoApi\Mis\StructType\LogentryDTO[] $midocoLogEntry
     */
    public function __construct(?array $midocoLogEntry = null)
    {
        $this
            ->setMidocoLogEntry($midocoLogEntry);
    }
    /**
     * Get MidocoLogEntry value
     * @return \Pggns\MidocoApi\Mis\StructType\LogentryDTO[]
     */
    public function getMidocoLogEntry(): ?array
    {
        return $this->MidocoLogEntry;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoLogEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoLogEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoLogEntryForArrayConstraintsFromSetMidocoLogEntry(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getLogEntryResponseMidocoLogEntryItem) {
            // validation for constraint: itemType
            if (!$getLogEntryResponseMidocoLogEntryItem instanceof \Pggns\MidocoApi\Mis\StructType\LogentryDTO) {
                $invalidValues[] = is_object($getLogEntryResponseMidocoLogEntryItem) ? get_class($getLogEntryResponseMidocoLogEntryItem) : sprintf('%s(%s)', gettype($getLogEntryResponseMidocoLogEntryItem), var_export($getLogEntryResponseMidocoLogEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoLogEntry property can only contain items of type \Pggns\MidocoApi\Mis\StructType\LogentryDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoLogEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\LogentryDTO[] $midocoLogEntry
     * @return \Pggns\MidocoApi\Mis\StructType\GetLogEntryResponse
     */
    public function setMidocoLogEntry(?array $midocoLogEntry = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoLogEntryArrayErrorMessage = self::validateMidocoLogEntryForArrayConstraintsFromSetMidocoLogEntry($midocoLogEntry))) {
            throw new InvalidArgumentException($midocoLogEntryArrayErrorMessage, __LINE__);
        }
        $this->MidocoLogEntry = $midocoLogEntry;
        
        return $this;
    }
    /**
     * Add item to MidocoLogEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\LogentryDTO $item
     * @return \Pggns\MidocoApi\Mis\StructType\GetLogEntryResponse
     */
    public function addToMidocoLogEntry(\Pggns\MidocoApi\Mis\StructType\LogentryDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\LogentryDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoLogEntry property can only contain items of type \Pggns\MidocoApi\Mis\StructType\LogentryDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoLogEntry[] = $item;
        
        return $this;
    }
}
