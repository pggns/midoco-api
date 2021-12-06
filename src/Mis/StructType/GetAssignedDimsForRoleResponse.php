<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAssignedDimsForRoleResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getAssignedDimsForRole --- returns the dimensions that the given org unit and role id can see
 * @subpackage Structs
 */
class GetAssignedDimsForRoleResponse extends AbstractStructBase
{
    /**
     * The MidocoMisDimension
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMisDimension
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MisDimensionDTO[]
     */
    protected ?array $MidocoMisDimension = null;
    /**
     * Constructor method for GetAssignedDimsForRoleResponse
     * @uses GetAssignedDimsForRoleResponse::setMidocoMisDimension()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisDimensionDTO[] $midocoMisDimension
     */
    public function __construct(?array $midocoMisDimension = null)
    {
        $this
            ->setMidocoMisDimension($midocoMisDimension);
    }
    /**
     * Get MidocoMisDimension value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MisDimensionDTO[]
     */
    public function getMidocoMisDimension(): ?array
    {
        return $this->MidocoMisDimension;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMisDimension method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMisDimension method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMisDimensionForArrayConstraintsFromSetMidocoMisDimension(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAssignedDimsForRoleResponseMidocoMisDimensionItem) {
            // validation for constraint: itemType
            if (!$getAssignedDimsForRoleResponseMidocoMisDimensionItem instanceof \Pggns\MidocoApi\Api\Mis\StructType\MisDimensionDTO) {
                $invalidValues[] = is_object($getAssignedDimsForRoleResponseMidocoMisDimensionItem) ? get_class($getAssignedDimsForRoleResponseMidocoMisDimensionItem) : sprintf('%s(%s)', gettype($getAssignedDimsForRoleResponseMidocoMisDimensionItem), var_export($getAssignedDimsForRoleResponseMidocoMisDimensionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMisDimension property can only contain items of type \Pggns\MidocoApi\Api\Mis\StructType\MisDimensionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMisDimension value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisDimensionDTO[] $midocoMisDimension
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetAssignedDimsForRoleResponse
     */
    public function setMidocoMisDimension(?array $midocoMisDimension = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMisDimensionArrayErrorMessage = self::validateMidocoMisDimensionForArrayConstraintsFromSetMidocoMisDimension($midocoMisDimension))) {
            throw new InvalidArgumentException($midocoMisDimensionArrayErrorMessage, __LINE__);
        }
        $this->MidocoMisDimension = $midocoMisDimension;
        
        return $this;
    }
    /**
     * Add item to MidocoMisDimension value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisDimensionDTO $item
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetAssignedDimsForRoleResponse
     */
    public function addToMidocoMisDimension(\Pggns\MidocoApi\Api\Mis\StructType\MisDimensionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Mis\StructType\MisDimensionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMisDimension property can only contain items of type \Pggns\MidocoApi\Api\Mis\StructType\MisDimensionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMisDimension[] = $item;
        
        return $this;
    }
}
