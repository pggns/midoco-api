<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRolesFromProcessRoleAssignResponse StructType
 * @subpackage Structs
 */
class GetRolesFromProcessRoleAssignResponse extends AbstractStructBase
{
    /**
     * The MidocoProcessRoleAssign
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoProcessRoleAssign
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoProcessRoleAssign[]
     */
    protected ?array $MidocoProcessRoleAssign = null;
    /**
     * Constructor method for GetRolesFromProcessRoleAssignResponse
     * @uses GetRolesFromProcessRoleAssignResponse::setMidocoProcessRoleAssign()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoProcessRoleAssign[] $midocoProcessRoleAssign
     */
    public function __construct(?array $midocoProcessRoleAssign = null)
    {
        $this
            ->setMidocoProcessRoleAssign($midocoProcessRoleAssign);
    }
    /**
     * Get MidocoProcessRoleAssign value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoProcessRoleAssign[]
     */
    public function getMidocoProcessRoleAssign(): ?array
    {
        return $this->MidocoProcessRoleAssign;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoProcessRoleAssign method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoProcessRoleAssign method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoProcessRoleAssignForArrayConstraintsFromSetMidocoProcessRoleAssign(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRolesFromProcessRoleAssignResponseMidocoProcessRoleAssignItem) {
            // validation for constraint: itemType
            if (!$getRolesFromProcessRoleAssignResponseMidocoProcessRoleAssignItem instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoProcessRoleAssign) {
                $invalidValues[] = is_object($getRolesFromProcessRoleAssignResponseMidocoProcessRoleAssignItem) ? get_class($getRolesFromProcessRoleAssignResponseMidocoProcessRoleAssignItem) : sprintf('%s(%s)', gettype($getRolesFromProcessRoleAssignResponseMidocoProcessRoleAssignItem), var_export($getRolesFromProcessRoleAssignResponseMidocoProcessRoleAssignItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoProcessRoleAssign property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoProcessRoleAssign, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoProcessRoleAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoProcessRoleAssign[] $midocoProcessRoleAssign
     * @return \Pggns\MidocoApi\Workflow\StructType\GetRolesFromProcessRoleAssignResponse
     */
    public function setMidocoProcessRoleAssign(?array $midocoProcessRoleAssign = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoProcessRoleAssignArrayErrorMessage = self::validateMidocoProcessRoleAssignForArrayConstraintsFromSetMidocoProcessRoleAssign($midocoProcessRoleAssign))) {
            throw new InvalidArgumentException($midocoProcessRoleAssignArrayErrorMessage, __LINE__);
        }
        $this->MidocoProcessRoleAssign = $midocoProcessRoleAssign;
        
        return $this;
    }
    /**
     * Add item to MidocoProcessRoleAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoProcessRoleAssign $item
     * @return \Pggns\MidocoApi\Workflow\StructType\GetRolesFromProcessRoleAssignResponse
     */
    public function addToMidocoProcessRoleAssign(\Pggns\MidocoApi\Workflow\StructType\MidocoProcessRoleAssign $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoProcessRoleAssign) {
            throw new InvalidArgumentException(sprintf('The MidocoProcessRoleAssign property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoProcessRoleAssign, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoProcessRoleAssign[] = $item;
        
        return $this;
    }
}
