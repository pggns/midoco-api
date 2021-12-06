<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgUnitInfoResponse StructType
 * @subpackage Structs
 */
class GetOrgUnitInfoResponse extends AbstractStructBase
{
    /**
     * The MidocoOrgunit
     * Meta information extracted from the WSDL
     * - ref: MidocoOrgunit
     * @var \Pggns\MidocoApi\Api\System\StructType\OrgunitDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\System\StructType\OrgunitDTO $MidocoOrgunit = null;
    /**
     * The MidocoOrgUnitAttr
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrgUnitAttr
     * @var \Pggns\MidocoApi\Api\System\StructType\MidocoOrgUnitAttr[]
     */
    protected ?array $MidocoOrgUnitAttr = null;
    /**
     * Constructor method for GetOrgUnitInfoResponse
     * @uses GetOrgUnitInfoResponse::setMidocoOrgunit()
     * @uses GetOrgUnitInfoResponse::setMidocoOrgUnitAttr()
     * @param \Pggns\MidocoApi\Api\System\StructType\OrgunitDTO $midocoOrgunit
     * @param \Pggns\MidocoApi\Api\System\StructType\MidocoOrgUnitAttr[] $midocoOrgUnitAttr
     */
    public function __construct(?\Pggns\MidocoApi\Api\System\StructType\OrgunitDTO $midocoOrgunit = null, ?array $midocoOrgUnitAttr = null)
    {
        $this
            ->setMidocoOrgunit($midocoOrgunit)
            ->setMidocoOrgUnitAttr($midocoOrgUnitAttr);
    }
    /**
     * Get MidocoOrgunit value
     * @return \Pggns\MidocoApi\Api\System\StructType\OrgunitDTO|null
     */
    public function getMidocoOrgunit(): ?\Pggns\MidocoApi\Api\System\StructType\OrgunitDTO
    {
        return $this->MidocoOrgunit;
    }
    /**
     * Set MidocoOrgunit value
     * @param \Pggns\MidocoApi\Api\System\StructType\OrgunitDTO $midocoOrgunit
     * @return \Pggns\MidocoApi\Api\System\StructType\GetOrgUnitInfoResponse
     */
    public function setMidocoOrgunit(?\Pggns\MidocoApi\Api\System\StructType\OrgunitDTO $midocoOrgunit = null): self
    {
        $this->MidocoOrgunit = $midocoOrgunit;
        
        return $this;
    }
    /**
     * Get MidocoOrgUnitAttr value
     * @return \Pggns\MidocoApi\Api\System\StructType\MidocoOrgUnitAttr[]
     */
    public function getMidocoOrgUnitAttr(): ?array
    {
        return $this->MidocoOrgUnitAttr;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrgUnitAttr method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrgUnitAttr method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrgUnitAttrForArrayConstraintsFromSetMidocoOrgUnitAttr(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrgUnitInfoResponseMidocoOrgUnitAttrItem) {
            // validation for constraint: itemType
            if (!$getOrgUnitInfoResponseMidocoOrgUnitAttrItem instanceof \Pggns\MidocoApi\Api\System\StructType\MidocoOrgUnitAttr) {
                $invalidValues[] = is_object($getOrgUnitInfoResponseMidocoOrgUnitAttrItem) ? get_class($getOrgUnitInfoResponseMidocoOrgUnitAttrItem) : sprintf('%s(%s)', gettype($getOrgUnitInfoResponseMidocoOrgUnitAttrItem), var_export($getOrgUnitInfoResponseMidocoOrgUnitAttrItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrgUnitAttr property can only contain items of type \Pggns\MidocoApi\Api\System\StructType\MidocoOrgUnitAttr, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrgUnitAttr value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\System\StructType\MidocoOrgUnitAttr[] $midocoOrgUnitAttr
     * @return \Pggns\MidocoApi\Api\System\StructType\GetOrgUnitInfoResponse
     */
    public function setMidocoOrgUnitAttr(?array $midocoOrgUnitAttr = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrgUnitAttrArrayErrorMessage = self::validateMidocoOrgUnitAttrForArrayConstraintsFromSetMidocoOrgUnitAttr($midocoOrgUnitAttr))) {
            throw new InvalidArgumentException($midocoOrgUnitAttrArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrgUnitAttr = $midocoOrgUnitAttr;
        
        return $this;
    }
    /**
     * Add item to MidocoOrgUnitAttr value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\System\StructType\MidocoOrgUnitAttr $item
     * @return \Pggns\MidocoApi\Api\System\StructType\GetOrgUnitInfoResponse
     */
    public function addToMidocoOrgUnitAttr(\Pggns\MidocoApi\Api\System\StructType\MidocoOrgUnitAttr $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\System\StructType\MidocoOrgUnitAttr) {
            throw new InvalidArgumentException(sprintf('The MidocoOrgUnitAttr property can only contain items of type \Pggns\MidocoApi\Api\System\StructType\MidocoOrgUnitAttr, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrgUnitAttr[] = $item;
        
        return $this;
    }
}
