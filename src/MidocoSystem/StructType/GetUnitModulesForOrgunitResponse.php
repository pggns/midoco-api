<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnitModulesForOrgunitResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUnitModulesForOrgunitResponse extends AbstractStructBase
{
    /**
     * The MidocoUnitModule
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoUnitModule
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\MidocoUnitModule[]
     */
    protected ?array $MidocoUnitModule = null;
    /**
     * Constructor method for GetUnitModulesForOrgunitResponse
     * @uses GetUnitModulesForOrgunitResponse::setMidocoUnitModule()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoUnitModule[] $midocoUnitModule
     */
    public function __construct(?array $midocoUnitModule = null)
    {
        $this
            ->setMidocoUnitModule($midocoUnitModule);
    }
    /**
     * Get MidocoUnitModule value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\MidocoUnitModule[]
     */
    public function getMidocoUnitModule(): ?array
    {
        return $this->MidocoUnitModule;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoUnitModule method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoUnitModule method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoUnitModuleForArrayConstraintFromSetMidocoUnitModule(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUnitModulesForOrgunitResponseMidocoUnitModuleItem) {
            // validation for constraint: itemType
            if (!$getUnitModulesForOrgunitResponseMidocoUnitModuleItem instanceof \Pggns\MidocoApi\MidocoSystem\StructType\MidocoUnitModule) {
                $invalidValues[] = is_object($getUnitModulesForOrgunitResponseMidocoUnitModuleItem) ? get_class($getUnitModulesForOrgunitResponseMidocoUnitModuleItem) : sprintf('%s(%s)', gettype($getUnitModulesForOrgunitResponseMidocoUnitModuleItem), var_export($getUnitModulesForOrgunitResponseMidocoUnitModuleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoUnitModule property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\MidocoUnitModule, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoUnitModule value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoUnitModule[] $midocoUnitModule
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetUnitModulesForOrgunitResponse
     */
    public function setMidocoUnitModule(?array $midocoUnitModule = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoUnitModuleArrayErrorMessage = self::validateMidocoUnitModuleForArrayConstraintFromSetMidocoUnitModule($midocoUnitModule))) {
            throw new InvalidArgumentException($midocoUnitModuleArrayErrorMessage, __LINE__);
        }
        $this->MidocoUnitModule = $midocoUnitModule;
        
        return $this;
    }
    /**
     * Add item to MidocoUnitModule value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoUnitModule $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetUnitModulesForOrgunitResponse
     */
    public function addToMidocoUnitModule(\Pggns\MidocoApi\MidocoSystem\StructType\MidocoUnitModule $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\MidocoSystem\StructType\MidocoUnitModule) {
            throw new InvalidArgumentException(sprintf('The MidocoUnitModule property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\MidocoUnitModule, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoUnitModule[] = $item;
        
        return $this;
    }
}
