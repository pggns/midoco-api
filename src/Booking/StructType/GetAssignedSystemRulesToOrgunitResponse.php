<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Booking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAssignedSystemRulesToOrgunitResponse StructType
 * @subpackage Structs
 */
class GetAssignedSystemRulesToOrgunitResponse extends AbstractStructBase
{
    /**
     * The MidocoUnitRuleset
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoUnitRuleset
     * @var \Pggns\MidocoApi\Api\Booking\StructType\MidocoUnitRuleset[]
     */
    protected ?array $MidocoUnitRuleset = null;
    /**
     * Constructor method for GetAssignedSystemRulesToOrgunitResponse
     * @uses GetAssignedSystemRulesToOrgunitResponse::setMidocoUnitRuleset()
     * @param \Pggns\MidocoApi\Api\Booking\StructType\MidocoUnitRuleset[] $midocoUnitRuleset
     */
    public function __construct(?array $midocoUnitRuleset = null)
    {
        $this
            ->setMidocoUnitRuleset($midocoUnitRuleset);
    }
    /**
     * Get MidocoUnitRuleset value
     * @return \Pggns\MidocoApi\Api\Booking\StructType\MidocoUnitRuleset[]
     */
    public function getMidocoUnitRuleset(): ?array
    {
        return $this->MidocoUnitRuleset;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoUnitRuleset method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoUnitRuleset method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoUnitRulesetForArrayConstraintsFromSetMidocoUnitRuleset(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAssignedSystemRulesToOrgunitResponseMidocoUnitRulesetItem) {
            // validation for constraint: itemType
            if (!$getAssignedSystemRulesToOrgunitResponseMidocoUnitRulesetItem instanceof \Pggns\MidocoApi\Api\Booking\StructType\MidocoUnitRuleset) {
                $invalidValues[] = is_object($getAssignedSystemRulesToOrgunitResponseMidocoUnitRulesetItem) ? get_class($getAssignedSystemRulesToOrgunitResponseMidocoUnitRulesetItem) : sprintf('%s(%s)', gettype($getAssignedSystemRulesToOrgunitResponseMidocoUnitRulesetItem), var_export($getAssignedSystemRulesToOrgunitResponseMidocoUnitRulesetItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoUnitRuleset property can only contain items of type \Pggns\MidocoApi\Api\Booking\StructType\MidocoUnitRuleset, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoUnitRuleset value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Booking\StructType\MidocoUnitRuleset[] $midocoUnitRuleset
     * @return \Pggns\MidocoApi\Api\Booking\StructType\GetAssignedSystemRulesToOrgunitResponse
     */
    public function setMidocoUnitRuleset(?array $midocoUnitRuleset = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoUnitRulesetArrayErrorMessage = self::validateMidocoUnitRulesetForArrayConstraintsFromSetMidocoUnitRuleset($midocoUnitRuleset))) {
            throw new InvalidArgumentException($midocoUnitRulesetArrayErrorMessage, __LINE__);
        }
        $this->MidocoUnitRuleset = $midocoUnitRuleset;
        
        return $this;
    }
    /**
     * Add item to MidocoUnitRuleset value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Booking\StructType\MidocoUnitRuleset $item
     * @return \Pggns\MidocoApi\Api\Booking\StructType\GetAssignedSystemRulesToOrgunitResponse
     */
    public function addToMidocoUnitRuleset(\Pggns\MidocoApi\Api\Booking\StructType\MidocoUnitRuleset $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Booking\StructType\MidocoUnitRuleset) {
            throw new InvalidArgumentException(sprintf('The MidocoUnitRuleset property can only contain items of type \Pggns\MidocoApi\Api\Booking\StructType\MidocoUnitRuleset, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoUnitRuleset[] = $item;
        
        return $this;
    }
}