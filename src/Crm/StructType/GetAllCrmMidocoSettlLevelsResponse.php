<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllCrmMidocoSettlLevelsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: GetAllCrmMidocoSettlLevels --- returns the Midoco settlement levels defined for the given settl
 * @subpackage Structs
 */
class GetAllCrmMidocoSettlLevelsResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmMidocoSettlLevel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmMidocoSettlLevel
     * @var \Pggns\MidocoApi\Crm\StructType\CrmMidocoSettlLevelDTO[]
     */
    protected ?array $MidocoCrmMidocoSettlLevel = null;
    /**
     * Constructor method for GetAllCrmMidocoSettlLevelsResponse
     * @uses GetAllCrmMidocoSettlLevelsResponse::setMidocoCrmMidocoSettlLevel()
     * @param \Pggns\MidocoApi\Crm\StructType\CrmMidocoSettlLevelDTO[] $midocoCrmMidocoSettlLevel
     */
    public function __construct(?array $midocoCrmMidocoSettlLevel = null)
    {
        $this
            ->setMidocoCrmMidocoSettlLevel($midocoCrmMidocoSettlLevel);
    }
    /**
     * Get MidocoCrmMidocoSettlLevel value
     * @return \Pggns\MidocoApi\Crm\StructType\CrmMidocoSettlLevelDTO[]
     */
    public function getMidocoCrmMidocoSettlLevel(): ?array
    {
        return $this->MidocoCrmMidocoSettlLevel;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmMidocoSettlLevel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmMidocoSettlLevel method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmMidocoSettlLevelForArrayConstraintsFromSetMidocoCrmMidocoSettlLevel(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAllCrmMidocoSettlLevelsResponseMidocoCrmMidocoSettlLevelItem) {
            // validation for constraint: itemType
            if (!$getAllCrmMidocoSettlLevelsResponseMidocoCrmMidocoSettlLevelItem instanceof \Pggns\MidocoApi\Crm\StructType\CrmMidocoSettlLevelDTO) {
                $invalidValues[] = is_object($getAllCrmMidocoSettlLevelsResponseMidocoCrmMidocoSettlLevelItem) ? get_class($getAllCrmMidocoSettlLevelsResponseMidocoCrmMidocoSettlLevelItem) : sprintf('%s(%s)', gettype($getAllCrmMidocoSettlLevelsResponseMidocoCrmMidocoSettlLevelItem), var_export($getAllCrmMidocoSettlLevelsResponseMidocoCrmMidocoSettlLevelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmMidocoSettlLevel property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CrmMidocoSettlLevelDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmMidocoSettlLevel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CrmMidocoSettlLevelDTO[] $midocoCrmMidocoSettlLevel
     * @return \Pggns\MidocoApi\Crm\StructType\GetAllCrmMidocoSettlLevelsResponse
     */
    public function setMidocoCrmMidocoSettlLevel(?array $midocoCrmMidocoSettlLevel = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmMidocoSettlLevelArrayErrorMessage = self::validateMidocoCrmMidocoSettlLevelForArrayConstraintsFromSetMidocoCrmMidocoSettlLevel($midocoCrmMidocoSettlLevel))) {
            throw new InvalidArgumentException($midocoCrmMidocoSettlLevelArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmMidocoSettlLevel = $midocoCrmMidocoSettlLevel;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmMidocoSettlLevel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CrmMidocoSettlLevelDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetAllCrmMidocoSettlLevelsResponse
     */
    public function addToMidocoCrmMidocoSettlLevel(\Pggns\MidocoApi\Crm\StructType\CrmMidocoSettlLevelDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\CrmMidocoSettlLevelDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmMidocoSettlLevel property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CrmMidocoSettlLevelDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmMidocoSettlLevel[] = $item;
        
        return $this;
    }
}
