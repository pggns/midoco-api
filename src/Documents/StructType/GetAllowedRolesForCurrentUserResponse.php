<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllowedRolesForCurrentUserResponse StructType
 * @subpackage Structs
 */
class GetAllowedRolesForCurrentUserResponse extends AbstractStructBase
{
    /**
     * The MidocoRole
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoRole
     * @var \Pggns\MidocoApi\Documents\StructType\RoleDTO[]
     */
    protected ?array $MidocoRole = null;
    /**
     * Constructor method for GetAllowedRolesForCurrentUserResponse
     * @uses GetAllowedRolesForCurrentUserResponse::setMidocoRole()
     * @param \Pggns\MidocoApi\Documents\StructType\RoleDTO[] $midocoRole
     */
    public function __construct(?array $midocoRole = null)
    {
        $this
            ->setMidocoRole($midocoRole);
    }
    /**
     * Get MidocoRole value
     * @return \Pggns\MidocoApi\Documents\StructType\RoleDTO[]
     */
    public function getMidocoRole(): ?array
    {
        return $this->MidocoRole;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoRole method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoRole method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoRoleForArrayConstraintsFromSetMidocoRole(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAllowedRolesForCurrentUserResponseMidocoRoleItem) {
            // validation for constraint: itemType
            if (!$getAllowedRolesForCurrentUserResponseMidocoRoleItem instanceof \Pggns\MidocoApi\Documents\StructType\RoleDTO) {
                $invalidValues[] = is_object($getAllowedRolesForCurrentUserResponseMidocoRoleItem) ? get_class($getAllowedRolesForCurrentUserResponseMidocoRoleItem) : sprintf('%s(%s)', gettype($getAllowedRolesForCurrentUserResponseMidocoRoleItem), var_export($getAllowedRolesForCurrentUserResponseMidocoRoleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoRole property can only contain items of type \Pggns\MidocoApi\Documents\StructType\RoleDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoRole value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\RoleDTO[] $midocoRole
     * @return \Pggns\MidocoApi\Documents\StructType\GetAllowedRolesForCurrentUserResponse
     */
    public function setMidocoRole(?array $midocoRole = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoRoleArrayErrorMessage = self::validateMidocoRoleForArrayConstraintsFromSetMidocoRole($midocoRole))) {
            throw new InvalidArgumentException($midocoRoleArrayErrorMessage, __LINE__);
        }
        $this->MidocoRole = $midocoRole;
        
        return $this;
    }
    /**
     * Add item to MidocoRole value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\RoleDTO $item
     * @return \Pggns\MidocoApi\Documents\StructType\GetAllowedRolesForCurrentUserResponse
     */
    public function addToMidocoRole(\Pggns\MidocoApi\Documents\StructType\RoleDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\RoleDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoRole property can only contain items of type \Pggns\MidocoApi\Documents\StructType\RoleDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoRole[] = $item;
        
        return $this;
    }
}
