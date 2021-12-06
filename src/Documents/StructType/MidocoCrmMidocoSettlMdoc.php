<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCrmMidocoSettlMdoc StructType
 * @subpackage Structs
 */
class MidocoCrmMidocoSettlMdoc extends CrmMidocoSettlMdocDTO
{
    /**
     * The MidocoCrmMidocoSettlMdocLevel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmMidocoSettlMdocLevel
     * @var \Pggns\MidocoApi\Api\Documents\StructType\CrmMidocoSettlMdocLevelDTO[]
     */
    protected ?array $MidocoCrmMidocoSettlMdocLevel = null;
    /**
     * The MidocoAssignedMidocoMdocOUnit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAssignedMidocoMdocOUnit
     * @var \Pggns\MidocoApi\Api\Documents\StructType\AssignedMidocoMdocOUnitDTO[]
     */
    protected ?array $MidocoAssignedMidocoMdocOUnit = null;
    /**
     * Constructor method for MidocoCrmMidocoSettlMdoc
     * @uses MidocoCrmMidocoSettlMdoc::setMidocoCrmMidocoSettlMdocLevel()
     * @uses MidocoCrmMidocoSettlMdoc::setMidocoAssignedMidocoMdocOUnit()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\CrmMidocoSettlMdocLevelDTO[] $midocoCrmMidocoSettlMdocLevel
     * @param \Pggns\MidocoApi\Api\Documents\StructType\AssignedMidocoMdocOUnitDTO[] $midocoAssignedMidocoMdocOUnit
     */
    public function __construct(?array $midocoCrmMidocoSettlMdocLevel = null, ?array $midocoAssignedMidocoMdocOUnit = null)
    {
        $this
            ->setMidocoCrmMidocoSettlMdocLevel($midocoCrmMidocoSettlMdocLevel)
            ->setMidocoAssignedMidocoMdocOUnit($midocoAssignedMidocoMdocOUnit);
    }
    /**
     * Get MidocoCrmMidocoSettlMdocLevel value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\CrmMidocoSettlMdocLevelDTO[]
     */
    public function getMidocoCrmMidocoSettlMdocLevel(): ?array
    {
        return $this->MidocoCrmMidocoSettlMdocLevel;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmMidocoSettlMdocLevel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmMidocoSettlMdocLevel method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmMidocoSettlMdocLevelForArrayConstraintsFromSetMidocoCrmMidocoSettlMdocLevel(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCrmMidocoSettlMdocMidocoCrmMidocoSettlMdocLevelItem) {
            // validation for constraint: itemType
            if (!$midocoCrmMidocoSettlMdocMidocoCrmMidocoSettlMdocLevelItem instanceof \Pggns\MidocoApi\Api\Documents\StructType\CrmMidocoSettlMdocLevelDTO) {
                $invalidValues[] = is_object($midocoCrmMidocoSettlMdocMidocoCrmMidocoSettlMdocLevelItem) ? get_class($midocoCrmMidocoSettlMdocMidocoCrmMidocoSettlMdocLevelItem) : sprintf('%s(%s)', gettype($midocoCrmMidocoSettlMdocMidocoCrmMidocoSettlMdocLevelItem), var_export($midocoCrmMidocoSettlMdocMidocoCrmMidocoSettlMdocLevelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmMidocoSettlMdocLevel property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\CrmMidocoSettlMdocLevelDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmMidocoSettlMdocLevel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\CrmMidocoSettlMdocLevelDTO[] $midocoCrmMidocoSettlMdocLevel
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoCrmMidocoSettlMdoc
     */
    public function setMidocoCrmMidocoSettlMdocLevel(?array $midocoCrmMidocoSettlMdocLevel = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmMidocoSettlMdocLevelArrayErrorMessage = self::validateMidocoCrmMidocoSettlMdocLevelForArrayConstraintsFromSetMidocoCrmMidocoSettlMdocLevel($midocoCrmMidocoSettlMdocLevel))) {
            throw new InvalidArgumentException($midocoCrmMidocoSettlMdocLevelArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmMidocoSettlMdocLevel = $midocoCrmMidocoSettlMdocLevel;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmMidocoSettlMdocLevel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\CrmMidocoSettlMdocLevelDTO $item
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoCrmMidocoSettlMdoc
     */
    public function addToMidocoCrmMidocoSettlMdocLevel(\Pggns\MidocoApi\Api\Documents\StructType\CrmMidocoSettlMdocLevelDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Documents\StructType\CrmMidocoSettlMdocLevelDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmMidocoSettlMdocLevel property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\CrmMidocoSettlMdocLevelDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmMidocoSettlMdocLevel[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoAssignedMidocoMdocOUnit value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\AssignedMidocoMdocOUnitDTO[]
     */
    public function getMidocoAssignedMidocoMdocOUnit(): ?array
    {
        return $this->MidocoAssignedMidocoMdocOUnit;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAssignedMidocoMdocOUnit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAssignedMidocoMdocOUnit method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAssignedMidocoMdocOUnitForArrayConstraintsFromSetMidocoAssignedMidocoMdocOUnit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCrmMidocoSettlMdocMidocoAssignedMidocoMdocOUnitItem) {
            // validation for constraint: itemType
            if (!$midocoCrmMidocoSettlMdocMidocoAssignedMidocoMdocOUnitItem instanceof \Pggns\MidocoApi\Api\Documents\StructType\AssignedMidocoMdocOUnitDTO) {
                $invalidValues[] = is_object($midocoCrmMidocoSettlMdocMidocoAssignedMidocoMdocOUnitItem) ? get_class($midocoCrmMidocoSettlMdocMidocoAssignedMidocoMdocOUnitItem) : sprintf('%s(%s)', gettype($midocoCrmMidocoSettlMdocMidocoAssignedMidocoMdocOUnitItem), var_export($midocoCrmMidocoSettlMdocMidocoAssignedMidocoMdocOUnitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAssignedMidocoMdocOUnit property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\AssignedMidocoMdocOUnitDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAssignedMidocoMdocOUnit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\AssignedMidocoMdocOUnitDTO[] $midocoAssignedMidocoMdocOUnit
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoCrmMidocoSettlMdoc
     */
    public function setMidocoAssignedMidocoMdocOUnit(?array $midocoAssignedMidocoMdocOUnit = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAssignedMidocoMdocOUnitArrayErrorMessage = self::validateMidocoAssignedMidocoMdocOUnitForArrayConstraintsFromSetMidocoAssignedMidocoMdocOUnit($midocoAssignedMidocoMdocOUnit))) {
            throw new InvalidArgumentException($midocoAssignedMidocoMdocOUnitArrayErrorMessage, __LINE__);
        }
        $this->MidocoAssignedMidocoMdocOUnit = $midocoAssignedMidocoMdocOUnit;
        
        return $this;
    }
    /**
     * Add item to MidocoAssignedMidocoMdocOUnit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\AssignedMidocoMdocOUnitDTO $item
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoCrmMidocoSettlMdoc
     */
    public function addToMidocoAssignedMidocoMdocOUnit(\Pggns\MidocoApi\Api\Documents\StructType\AssignedMidocoMdocOUnitDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Documents\StructType\AssignedMidocoMdocOUnitDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAssignedMidocoMdocOUnit property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\AssignedMidocoMdocOUnitDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAssignedMidocoMdocOUnit[] = $item;
        
        return $this;
    }
}