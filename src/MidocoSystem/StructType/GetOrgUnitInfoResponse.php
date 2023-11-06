<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgUnitInfoResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrgUnitInfoResponse extends AbstractStructBase
{
    /**
     * The MidocoOrgunit
     * Meta information extracted from the WSDL
     * - ref: MidocoOrgunit
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\OrgunitDTO|null
     */
    protected ?\Pggns\MidocoApi\MidocoSystem\StructType\OrgunitDTO $MidocoOrgunit = null;
    /**
     * The MidocoOrgUnitAttr
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrgUnitAttr
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrgUnitAttr[]
     */
    protected ?array $MidocoOrgUnitAttr = null;
    /**
     * Constructor method for GetOrgUnitInfoResponse
     * @uses GetOrgUnitInfoResponse::setMidocoOrgunit()
     * @uses GetOrgUnitInfoResponse::setMidocoOrgUnitAttr()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\OrgunitDTO $midocoOrgunit
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrgUnitAttr[] $midocoOrgUnitAttr
     */
    public function __construct(?\Pggns\MidocoApi\MidocoSystem\StructType\OrgunitDTO $midocoOrgunit = null, ?array $midocoOrgUnitAttr = null)
    {
        $this
            ->setMidocoOrgunit($midocoOrgunit)
            ->setMidocoOrgUnitAttr($midocoOrgUnitAttr);
    }
    /**
     * Get MidocoOrgunit value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\OrgunitDTO|null
     */
    public function getMidocoOrgunit(): ?\Pggns\MidocoApi\MidocoSystem\StructType\OrgunitDTO
    {
        return $this->MidocoOrgunit;
    }
    /**
     * Set MidocoOrgunit value
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\OrgunitDTO $midocoOrgunit
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgUnitInfoResponse
     */
    public function setMidocoOrgunit(?\Pggns\MidocoApi\MidocoSystem\StructType\OrgunitDTO $midocoOrgunit = null): self
    {
        $this->MidocoOrgunit = $midocoOrgunit;
        
        return $this;
    }
    /**
     * Get MidocoOrgUnitAttr value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrgUnitAttr[]
     */
    public function getMidocoOrgUnitAttr(): ?array
    {
        return $this->MidocoOrgUnitAttr;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrgUnitAttr method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrgUnitAttr method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrgUnitAttrForArrayConstraintFromSetMidocoOrgUnitAttr(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrgUnitInfoResponseMidocoOrgUnitAttrItem) {
            // validation for constraint: itemType
            if (!$getOrgUnitInfoResponseMidocoOrgUnitAttrItem instanceof \Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrgUnitAttr) {
                $invalidValues[] = is_object($getOrgUnitInfoResponseMidocoOrgUnitAttrItem) ? get_class($getOrgUnitInfoResponseMidocoOrgUnitAttrItem) : sprintf('%s(%s)', gettype($getOrgUnitInfoResponseMidocoOrgUnitAttrItem), var_export($getOrgUnitInfoResponseMidocoOrgUnitAttrItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrgUnitAttr property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrgUnitAttr, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrgUnitAttr value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrgUnitAttr[] $midocoOrgUnitAttr
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgUnitInfoResponse
     */
    public function setMidocoOrgUnitAttr(?array $midocoOrgUnitAttr = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrgUnitAttrArrayErrorMessage = self::validateMidocoOrgUnitAttrForArrayConstraintFromSetMidocoOrgUnitAttr($midocoOrgUnitAttr))) {
            throw new InvalidArgumentException($midocoOrgUnitAttrArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrgUnitAttr = $midocoOrgUnitAttr;
        
        return $this;
    }
    /**
     * Add item to MidocoOrgUnitAttr value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrgUnitAttr $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgUnitInfoResponse
     */
    public function addToMidocoOrgUnitAttr(\Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrgUnitAttr $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrgUnitAttr) {
            throw new InvalidArgumentException(sprintf('The MidocoOrgUnitAttr property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrgUnitAttr, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrgUnitAttr[] = $item;
        
        return $this;
    }
}
