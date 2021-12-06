<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgUnitsInSameDBResponse StructType
 * @subpackage Structs
 */
class GetOrgUnitsInSameDBResponse extends AbstractStructBase
{
    /**
     * The MidocoSearchUnit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSearchUnit
     * @var \Pggns\MidocoApi\System\StructType\MidocoSearchUnit[]
     */
    protected ?array $MidocoSearchUnit = null;
    /**
     * Constructor method for GetOrgUnitsInSameDBResponse
     * @uses GetOrgUnitsInSameDBResponse::setMidocoSearchUnit()
     * @param \Pggns\MidocoApi\System\StructType\MidocoSearchUnit[] $midocoSearchUnit
     */
    public function __construct(?array $midocoSearchUnit = null)
    {
        $this
            ->setMidocoSearchUnit($midocoSearchUnit);
    }
    /**
     * Get MidocoSearchUnit value
     * @return \Pggns\MidocoApi\System\StructType\MidocoSearchUnit[]
     */
    public function getMidocoSearchUnit(): ?array
    {
        return $this->MidocoSearchUnit;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSearchUnit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSearchUnit method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSearchUnitForArrayConstraintsFromSetMidocoSearchUnit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrgUnitsInSameDBResponseMidocoSearchUnitItem) {
            // validation for constraint: itemType
            if (!$getOrgUnitsInSameDBResponseMidocoSearchUnitItem instanceof \Pggns\MidocoApi\System\StructType\MidocoSearchUnit) {
                $invalidValues[] = is_object($getOrgUnitsInSameDBResponseMidocoSearchUnitItem) ? get_class($getOrgUnitsInSameDBResponseMidocoSearchUnitItem) : sprintf('%s(%s)', gettype($getOrgUnitsInSameDBResponseMidocoSearchUnitItem), var_export($getOrgUnitsInSameDBResponseMidocoSearchUnitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSearchUnit property can only contain items of type \Pggns\MidocoApi\System\StructType\MidocoSearchUnit, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSearchUnit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\System\StructType\MidocoSearchUnit[] $midocoSearchUnit
     * @return \Pggns\MidocoApi\System\StructType\GetOrgUnitsInSameDBResponse
     */
    public function setMidocoSearchUnit(?array $midocoSearchUnit = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSearchUnitArrayErrorMessage = self::validateMidocoSearchUnitForArrayConstraintsFromSetMidocoSearchUnit($midocoSearchUnit))) {
            throw new InvalidArgumentException($midocoSearchUnitArrayErrorMessage, __LINE__);
        }
        $this->MidocoSearchUnit = $midocoSearchUnit;
        
        return $this;
    }
    /**
     * Add item to MidocoSearchUnit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\System\StructType\MidocoSearchUnit $item
     * @return \Pggns\MidocoApi\System\StructType\GetOrgUnitsInSameDBResponse
     */
    public function addToMidocoSearchUnit(\Pggns\MidocoApi\System\StructType\MidocoSearchUnit $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\System\StructType\MidocoSearchUnit) {
            throw new InvalidArgumentException(sprintf('The MidocoSearchUnit property can only contain items of type \Pggns\MidocoApi\System\StructType\MidocoSearchUnit, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSearchUnit[] = $item;
        
        return $this;
    }
}
