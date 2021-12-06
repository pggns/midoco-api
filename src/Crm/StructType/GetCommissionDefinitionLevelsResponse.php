<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCommissionDefinitionLevelsResponse StructType
 * @subpackage Structs
 */
class GetCommissionDefinitionLevelsResponse extends AbstractStructBase
{
    /**
     * The MidocoCommissionDefinitionLevel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCommissionDefinitionLevel
     * @var \Pggns\MidocoApi\Crm\StructType\CommissionDefinitionLevelDTO[]
     */
    protected ?array $MidocoCommissionDefinitionLevel = null;
    /**
     * Constructor method for GetCommissionDefinitionLevelsResponse
     * @uses GetCommissionDefinitionLevelsResponse::setMidocoCommissionDefinitionLevel()
     * @param \Pggns\MidocoApi\Crm\StructType\CommissionDefinitionLevelDTO[] $midocoCommissionDefinitionLevel
     */
    public function __construct(?array $midocoCommissionDefinitionLevel = null)
    {
        $this
            ->setMidocoCommissionDefinitionLevel($midocoCommissionDefinitionLevel);
    }
    /**
     * Get MidocoCommissionDefinitionLevel value
     * @return \Pggns\MidocoApi\Crm\StructType\CommissionDefinitionLevelDTO[]
     */
    public function getMidocoCommissionDefinitionLevel(): ?array
    {
        return $this->MidocoCommissionDefinitionLevel;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCommissionDefinitionLevel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCommissionDefinitionLevel method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCommissionDefinitionLevelForArrayConstraintsFromSetMidocoCommissionDefinitionLevel(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCommissionDefinitionLevelsResponseMidocoCommissionDefinitionLevelItem) {
            // validation for constraint: itemType
            if (!$getCommissionDefinitionLevelsResponseMidocoCommissionDefinitionLevelItem instanceof \Pggns\MidocoApi\Crm\StructType\CommissionDefinitionLevelDTO) {
                $invalidValues[] = is_object($getCommissionDefinitionLevelsResponseMidocoCommissionDefinitionLevelItem) ? get_class($getCommissionDefinitionLevelsResponseMidocoCommissionDefinitionLevelItem) : sprintf('%s(%s)', gettype($getCommissionDefinitionLevelsResponseMidocoCommissionDefinitionLevelItem), var_export($getCommissionDefinitionLevelsResponseMidocoCommissionDefinitionLevelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCommissionDefinitionLevel property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CommissionDefinitionLevelDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCommissionDefinitionLevel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CommissionDefinitionLevelDTO[] $midocoCommissionDefinitionLevel
     * @return \Pggns\MidocoApi\Crm\StructType\GetCommissionDefinitionLevelsResponse
     */
    public function setMidocoCommissionDefinitionLevel(?array $midocoCommissionDefinitionLevel = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCommissionDefinitionLevelArrayErrorMessage = self::validateMidocoCommissionDefinitionLevelForArrayConstraintsFromSetMidocoCommissionDefinitionLevel($midocoCommissionDefinitionLevel))) {
            throw new InvalidArgumentException($midocoCommissionDefinitionLevelArrayErrorMessage, __LINE__);
        }
        $this->MidocoCommissionDefinitionLevel = $midocoCommissionDefinitionLevel;
        
        return $this;
    }
    /**
     * Add item to MidocoCommissionDefinitionLevel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CommissionDefinitionLevelDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetCommissionDefinitionLevelsResponse
     */
    public function addToMidocoCommissionDefinitionLevel(\Pggns\MidocoApi\Crm\StructType\CommissionDefinitionLevelDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\CommissionDefinitionLevelDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCommissionDefinitionLevel property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CommissionDefinitionLevelDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCommissionDefinitionLevel[] = $item;
        
        return $this;
    }
}
