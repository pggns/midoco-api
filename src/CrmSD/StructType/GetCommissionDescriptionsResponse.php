<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCommissionDescriptionsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCommissionDescriptions --- returns the list of commission descriptions of a given commission
 * @subpackage Structs
 */
class GetCommissionDescriptionsResponse extends AbstractStructBase
{
    /**
     * The MidocoCommissionDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCommissionDescription
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionDescriptionDTO[]
     */
    protected ?array $MidocoCommissionDescription = null;
    /**
     * Constructor method for GetCommissionDescriptionsResponse
     * @uses GetCommissionDescriptionsResponse::setMidocoCommissionDescription()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionDescriptionDTO[] $midocoCommissionDescription
     */
    public function __construct(?array $midocoCommissionDescription = null)
    {
        $this
            ->setMidocoCommissionDescription($midocoCommissionDescription);
    }
    /**
     * Get MidocoCommissionDescription value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionDescriptionDTO[]
     */
    public function getMidocoCommissionDescription(): ?array
    {
        return $this->MidocoCommissionDescription;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCommissionDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCommissionDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCommissionDescriptionForArrayConstraintsFromSetMidocoCommissionDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCommissionDescriptionsResponseMidocoCommissionDescriptionItem) {
            // validation for constraint: itemType
            if (!$getCommissionDescriptionsResponseMidocoCommissionDescriptionItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionDescriptionDTO) {
                $invalidValues[] = is_object($getCommissionDescriptionsResponseMidocoCommissionDescriptionItem) ? get_class($getCommissionDescriptionsResponseMidocoCommissionDescriptionItem) : sprintf('%s(%s)', gettype($getCommissionDescriptionsResponseMidocoCommissionDescriptionItem), var_export($getCommissionDescriptionsResponseMidocoCommissionDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCommissionDescription property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionDescriptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCommissionDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionDescriptionDTO[] $midocoCommissionDescription
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetCommissionDescriptionsResponse
     */
    public function setMidocoCommissionDescription(?array $midocoCommissionDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCommissionDescriptionArrayErrorMessage = self::validateMidocoCommissionDescriptionForArrayConstraintsFromSetMidocoCommissionDescription($midocoCommissionDescription))) {
            throw new InvalidArgumentException($midocoCommissionDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoCommissionDescription = $midocoCommissionDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoCommissionDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionDescriptionDTO $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetCommissionDescriptionsResponse
     */
    public function addToMidocoCommissionDescription(\Pggns\MidocoApi\Api\CrmSD\StructType\CommissionDescriptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionDescriptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCommissionDescription property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionDescriptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCommissionDescription[] = $item;
        
        return $this;
    }
}
