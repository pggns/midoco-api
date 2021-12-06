<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCommissionLevelsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCommissionLevels --- returns the list of commission levels
 * @subpackage Structs
 */
class GetCommissionLevelsResponse extends AbstractStructBase
{
    /**
     * The MidocoCommissionLevel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCommissionLevel
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionLevelDTO[]
     */
    protected ?array $MidocoCommissionLevel = null;
    /**
     * Constructor method for GetCommissionLevelsResponse
     * @uses GetCommissionLevelsResponse::setMidocoCommissionLevel()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionLevelDTO[] $midocoCommissionLevel
     */
    public function __construct(?array $midocoCommissionLevel = null)
    {
        $this
            ->setMidocoCommissionLevel($midocoCommissionLevel);
    }
    /**
     * Get MidocoCommissionLevel value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionLevelDTO[]
     */
    public function getMidocoCommissionLevel(): ?array
    {
        return $this->MidocoCommissionLevel;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCommissionLevel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCommissionLevel method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCommissionLevelForArrayConstraintsFromSetMidocoCommissionLevel(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCommissionLevelsResponseMidocoCommissionLevelItem) {
            // validation for constraint: itemType
            if (!$getCommissionLevelsResponseMidocoCommissionLevelItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionLevelDTO) {
                $invalidValues[] = is_object($getCommissionLevelsResponseMidocoCommissionLevelItem) ? get_class($getCommissionLevelsResponseMidocoCommissionLevelItem) : sprintf('%s(%s)', gettype($getCommissionLevelsResponseMidocoCommissionLevelItem), var_export($getCommissionLevelsResponseMidocoCommissionLevelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCommissionLevel property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionLevelDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCommissionLevel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionLevelDTO[] $midocoCommissionLevel
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetCommissionLevelsResponse
     */
    public function setMidocoCommissionLevel(?array $midocoCommissionLevel = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCommissionLevelArrayErrorMessage = self::validateMidocoCommissionLevelForArrayConstraintsFromSetMidocoCommissionLevel($midocoCommissionLevel))) {
            throw new InvalidArgumentException($midocoCommissionLevelArrayErrorMessage, __LINE__);
        }
        $this->MidocoCommissionLevel = $midocoCommissionLevel;
        
        return $this;
    }
    /**
     * Add item to MidocoCommissionLevel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionLevelDTO $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetCommissionLevelsResponse
     */
    public function addToMidocoCommissionLevel(\Pggns\MidocoApi\Api\CrmSD\StructType\CommissionLevelDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionLevelDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCommissionLevel property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionLevelDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCommissionLevel[] = $item;
        
        return $this;
    }
}
