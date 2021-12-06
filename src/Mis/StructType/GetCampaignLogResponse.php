<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCampaignLogResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCampaignLog --- return a protocol of a previously executed Email/SMS campaign
 * @subpackage Structs
 */
class GetCampaignLogResponse extends AbstractStructBase
{
    /**
     * The MidocoLogEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoLogEntry
     * @var \Pggns\MidocoApi\Api\Mis\StructType\LogentryDTO[]
     */
    protected ?array $MidocoLogEntry = null;
    /**
     * Constructor method for GetCampaignLogResponse
     * @uses GetCampaignLogResponse::setMidocoLogEntry()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\LogentryDTO[] $midocoLogEntry
     */
    public function __construct(?array $midocoLogEntry = null)
    {
        $this
            ->setMidocoLogEntry($midocoLogEntry);
    }
    /**
     * Get MidocoLogEntry value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\LogentryDTO[]
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
        foreach ($values as $getCampaignLogResponseMidocoLogEntryItem) {
            // validation for constraint: itemType
            if (!$getCampaignLogResponseMidocoLogEntryItem instanceof \Pggns\MidocoApi\Api\Mis\StructType\LogentryDTO) {
                $invalidValues[] = is_object($getCampaignLogResponseMidocoLogEntryItem) ? get_class($getCampaignLogResponseMidocoLogEntryItem) : sprintf('%s(%s)', gettype($getCampaignLogResponseMidocoLogEntryItem), var_export($getCampaignLogResponseMidocoLogEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoLogEntry property can only contain items of type \Pggns\MidocoApi\Api\Mis\StructType\LogentryDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoLogEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Mis\StructType\LogentryDTO[] $midocoLogEntry
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignLogResponse
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
     * @param \Pggns\MidocoApi\Api\Mis\StructType\LogentryDTO $item
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignLogResponse
     */
    public function addToMidocoLogEntry(\Pggns\MidocoApi\Api\Mis\StructType\LogentryDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Mis\StructType\LogentryDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoLogEntry property can only contain items of type \Pggns\MidocoApi\Api\Mis\StructType\LogentryDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoLogEntry[] = $item;
        
        return $this;
    }
}
