<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllOrgunitsWithDiversDebitorResponse StructType
 * @subpackage Structs
 */
class GetAllOrgunitsWithDiversDebitorResponse extends AbstractStructBase
{
    /**
     * The MidocoOrgunit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: system:MidocoOrgunit
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\OrgunitDTO[]
     */
    protected ?array $MidocoOrgunit = null;
    /**
     * Constructor method for GetAllOrgunitsWithDiversDebitorResponse
     * @uses GetAllOrgunitsWithDiversDebitorResponse::setMidocoOrgunit()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\OrgunitDTO[] $midocoOrgunit
     */
    public function __construct(?array $midocoOrgunit = null)
    {
        $this
            ->setMidocoOrgunit($midocoOrgunit);
    }
    /**
     * Get MidocoOrgunit value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\OrgunitDTO[]
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
        foreach ($values as $getAllOrgunitsWithDiversDebitorResponseMidocoOrgunitItem) {
            // validation for constraint: itemType
            if (!$getAllOrgunitsWithDiversDebitorResponseMidocoOrgunitItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\OrgunitDTO) {
                $invalidValues[] = is_object($getAllOrgunitsWithDiversDebitorResponseMidocoOrgunitItem) ? get_class($getAllOrgunitsWithDiversDebitorResponseMidocoOrgunitItem) : sprintf('%s(%s)', gettype($getAllOrgunitsWithDiversDebitorResponseMidocoOrgunitItem), var_export($getAllOrgunitsWithDiversDebitorResponseMidocoOrgunitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrgunit property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\OrgunitDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrgunit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\OrgunitDTO[] $midocoOrgunit
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetAllOrgunitsWithDiversDebitorResponse
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
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\OrgunitDTO $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetAllOrgunitsWithDiversDebitorResponse
     */
    public function addToMidocoOrgunit(\Pggns\MidocoApi\Api\CrmSD\StructType\OrgunitDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\OrgunitDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrgunit property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\OrgunitDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrgunit[] = $item;
        
        return $this;
    }
}
