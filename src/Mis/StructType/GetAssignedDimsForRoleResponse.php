<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAssignedDimsForRoleResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getAssignedDimsForRole --- returns the dimensions that the given org unit and role id can see
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAssignedDimsForRoleResponse extends AbstractStructBase
{
    /**
     * The MidocoMisDimension
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMisDimension
     * @var \Pggns\MidocoApi\Mis\StructType\MisDimensionDTO[]
     */
    protected ?array $MidocoMisDimension = null;
    /**
     * Constructor method for GetAssignedDimsForRoleResponse
     * @uses GetAssignedDimsForRoleResponse::setMidocoMisDimension()
     * @param \Pggns\MidocoApi\Mis\StructType\MisDimensionDTO[] $midocoMisDimension
     */
    public function __construct(?array $midocoMisDimension = null)
    {
        $this
            ->setMidocoMisDimension($midocoMisDimension);
    }
    /**
     * Get MidocoMisDimension value
     * @return \Pggns\MidocoApi\Mis\StructType\MisDimensionDTO[]
     */
    public function getMidocoMisDimension(): ?array
    {
        return $this->MidocoMisDimension;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMisDimension method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMisDimension method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMisDimensionForArrayConstraintFromSetMidocoMisDimension(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAssignedDimsForRoleResponseMidocoMisDimensionItem) {
            // validation for constraint: itemType
            if (!$getAssignedDimsForRoleResponseMidocoMisDimensionItem instanceof \Pggns\MidocoApi\Mis\StructType\MisDimensionDTO) {
                $invalidValues[] = is_object($getAssignedDimsForRoleResponseMidocoMisDimensionItem) ? get_class($getAssignedDimsForRoleResponseMidocoMisDimensionItem) : sprintf('%s(%s)', gettype($getAssignedDimsForRoleResponseMidocoMisDimensionItem), var_export($getAssignedDimsForRoleResponseMidocoMisDimensionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMisDimension property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisDimensionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMisDimension value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisDimensionDTO[] $midocoMisDimension
     * @return \Pggns\MidocoApi\Mis\StructType\GetAssignedDimsForRoleResponse
     */
    public function setMidocoMisDimension(?array $midocoMisDimension = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMisDimensionArrayErrorMessage = self::validateMidocoMisDimensionForArrayConstraintFromSetMidocoMisDimension($midocoMisDimension))) {
            throw new InvalidArgumentException($midocoMisDimensionArrayErrorMessage, __LINE__);
        }
        $this->MidocoMisDimension = $midocoMisDimension;
        
        return $this;
    }
    /**
     * Add item to MidocoMisDimension value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisDimensionDTO $item
     * @return \Pggns\MidocoApi\Mis\StructType\GetAssignedDimsForRoleResponse
     */
    public function addToMidocoMisDimension(\Pggns\MidocoApi\Mis\StructType\MisDimensionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MisDimensionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMisDimension property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisDimensionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMisDimension[] = $item;
        
        return $this;
    }
}
