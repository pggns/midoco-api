<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllAssignedMidocoSettlUnitsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: GetAllAssignedMidocoSettlUnits --- returns the assigned settlement org units defined for the given settl
 * @subpackage Structs
 */
class GetAllAssignedMidocoSettlUnitsResponse extends AbstractStructBase
{
    /**
     * The MidocoAssignedMidocoSettlOUnit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAssignedMidocoSettlOUnit
     * @var \Pggns\MidocoApi\CrmSD\StructType\AssignedMidocoSettlOUnitDTO[]
     */
    protected ?array $MidocoAssignedMidocoSettlOUnit = null;
    /**
     * Constructor method for GetAllAssignedMidocoSettlUnitsResponse
     * @uses GetAllAssignedMidocoSettlUnitsResponse::setMidocoAssignedMidocoSettlOUnit()
     * @param \Pggns\MidocoApi\CrmSD\StructType\AssignedMidocoSettlOUnitDTO[] $midocoAssignedMidocoSettlOUnit
     */
    public function __construct(?array $midocoAssignedMidocoSettlOUnit = null)
    {
        $this
            ->setMidocoAssignedMidocoSettlOUnit($midocoAssignedMidocoSettlOUnit);
    }
    /**
     * Get MidocoAssignedMidocoSettlOUnit value
     * @return \Pggns\MidocoApi\CrmSD\StructType\AssignedMidocoSettlOUnitDTO[]
     */
    public function getMidocoAssignedMidocoSettlOUnit(): ?array
    {
        return $this->MidocoAssignedMidocoSettlOUnit;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAssignedMidocoSettlOUnit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAssignedMidocoSettlOUnit method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAssignedMidocoSettlOUnitForArrayConstraintsFromSetMidocoAssignedMidocoSettlOUnit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAllAssignedMidocoSettlUnitsResponseMidocoAssignedMidocoSettlOUnitItem) {
            // validation for constraint: itemType
            if (!$getAllAssignedMidocoSettlUnitsResponseMidocoAssignedMidocoSettlOUnitItem instanceof \Pggns\MidocoApi\CrmSD\StructType\AssignedMidocoSettlOUnitDTO) {
                $invalidValues[] = is_object($getAllAssignedMidocoSettlUnitsResponseMidocoAssignedMidocoSettlOUnitItem) ? get_class($getAllAssignedMidocoSettlUnitsResponseMidocoAssignedMidocoSettlOUnitItem) : sprintf('%s(%s)', gettype($getAllAssignedMidocoSettlUnitsResponseMidocoAssignedMidocoSettlOUnitItem), var_export($getAllAssignedMidocoSettlUnitsResponseMidocoAssignedMidocoSettlOUnitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAssignedMidocoSettlOUnit property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\AssignedMidocoSettlOUnitDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAssignedMidocoSettlOUnit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\AssignedMidocoSettlOUnitDTO[] $midocoAssignedMidocoSettlOUnit
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetAllAssignedMidocoSettlUnitsResponse
     */
    public function setMidocoAssignedMidocoSettlOUnit(?array $midocoAssignedMidocoSettlOUnit = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAssignedMidocoSettlOUnitArrayErrorMessage = self::validateMidocoAssignedMidocoSettlOUnitForArrayConstraintsFromSetMidocoAssignedMidocoSettlOUnit($midocoAssignedMidocoSettlOUnit))) {
            throw new InvalidArgumentException($midocoAssignedMidocoSettlOUnitArrayErrorMessage, __LINE__);
        }
        $this->MidocoAssignedMidocoSettlOUnit = $midocoAssignedMidocoSettlOUnit;
        
        return $this;
    }
    /**
     * Add item to MidocoAssignedMidocoSettlOUnit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\AssignedMidocoSettlOUnitDTO $item
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetAllAssignedMidocoSettlUnitsResponse
     */
    public function addToMidocoAssignedMidocoSettlOUnit(\Pggns\MidocoApi\CrmSD\StructType\AssignedMidocoSettlOUnitDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\CrmSD\StructType\AssignedMidocoSettlOUnitDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAssignedMidocoSettlOUnit property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\AssignedMidocoSettlOUnitDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAssignedMidocoSettlOUnit[] = $item;
        
        return $this;
    }
}
