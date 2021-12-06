<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgUnitsForUserResponse StructType
 * @subpackage Structs
 */
class GetOrgUnitsForUserResponse extends AbstractStructBase
{
    /**
     * The MidocoOrgunit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrgunit
     * @var \Pggns\MidocoApi\System\StructType\OrgunitDTO[]
     */
    protected ?array $MidocoOrgunit = null;
    /**
     * Constructor method for GetOrgUnitsForUserResponse
     * @uses GetOrgUnitsForUserResponse::setMidocoOrgunit()
     * @param \Pggns\MidocoApi\System\StructType\OrgunitDTO[] $midocoOrgunit
     */
    public function __construct(?array $midocoOrgunit = null)
    {
        $this
            ->setMidocoOrgunit($midocoOrgunit);
    }
    /**
     * Get MidocoOrgunit value
     * @return \Pggns\MidocoApi\System\StructType\OrgunitDTO[]
     */
    public function getMidocoOrgunit(): ?array
    {
        return $this->MidocoOrgunit;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrgunit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrgunit method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrgunitForArrayConstraintsFromSetMidocoOrgunit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrgUnitsForUserResponseMidocoOrgunitItem) {
            // validation for constraint: itemType
            if (!$getOrgUnitsForUserResponseMidocoOrgunitItem instanceof \Pggns\MidocoApi\System\StructType\OrgunitDTO) {
                $invalidValues[] = is_object($getOrgUnitsForUserResponseMidocoOrgunitItem) ? get_class($getOrgUnitsForUserResponseMidocoOrgunitItem) : sprintf('%s(%s)', gettype($getOrgUnitsForUserResponseMidocoOrgunitItem), var_export($getOrgUnitsForUserResponseMidocoOrgunitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrgunit property can only contain items of type \Pggns\MidocoApi\System\StructType\OrgunitDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrgunit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\System\StructType\OrgunitDTO[] $midocoOrgunit
     * @return \Pggns\MidocoApi\System\StructType\GetOrgUnitsForUserResponse
     */
    public function setMidocoOrgunit(?array $midocoOrgunit = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrgunitArrayErrorMessage = self::validateMidocoOrgunitForArrayConstraintsFromSetMidocoOrgunit($midocoOrgunit))) {
            throw new InvalidArgumentException($midocoOrgunitArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrgunit = $midocoOrgunit;
        
        return $this;
    }
    /**
     * Add item to MidocoOrgunit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\System\StructType\OrgunitDTO $item
     * @return \Pggns\MidocoApi\System\StructType\GetOrgUnitsForUserResponse
     */
    public function addToMidocoOrgunit(\Pggns\MidocoApi\System\StructType\OrgunitDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\System\StructType\OrgunitDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrgunit property can only contain items of type \Pggns\MidocoApi\System\StructType\OrgunitDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrgunit[] = $item;
        
        return $this;
    }
}
