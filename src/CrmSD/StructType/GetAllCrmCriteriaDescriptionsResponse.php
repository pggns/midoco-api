<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllCrmCriteriaDescriptionsResponse StructType
 * @subpackage Structs
 */
class GetAllCrmCriteriaDescriptionsResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmCriteriaDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmCriteriaDescription
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\CriteriaDescriptionDTO[]
     */
    protected ?array $MidocoCrmCriteriaDescription = null;
    /**
     * Constructor method for GetAllCrmCriteriaDescriptionsResponse
     * @uses GetAllCrmCriteriaDescriptionsResponse::setMidocoCrmCriteriaDescription()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CriteriaDescriptionDTO[] $midocoCrmCriteriaDescription
     */
    public function __construct(?array $midocoCrmCriteriaDescription = null)
    {
        $this
            ->setMidocoCrmCriteriaDescription($midocoCrmCriteriaDescription);
    }
    /**
     * Get MidocoCrmCriteriaDescription value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CriteriaDescriptionDTO[]
     */
    public function getMidocoCrmCriteriaDescription(): ?array
    {
        return $this->MidocoCrmCriteriaDescription;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmCriteriaDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmCriteriaDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmCriteriaDescriptionForArrayConstraintsFromSetMidocoCrmCriteriaDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAllCrmCriteriaDescriptionsResponseMidocoCrmCriteriaDescriptionItem) {
            // validation for constraint: itemType
            if (!$getAllCrmCriteriaDescriptionsResponseMidocoCrmCriteriaDescriptionItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\CriteriaDescriptionDTO) {
                $invalidValues[] = is_object($getAllCrmCriteriaDescriptionsResponseMidocoCrmCriteriaDescriptionItem) ? get_class($getAllCrmCriteriaDescriptionsResponseMidocoCrmCriteriaDescriptionItem) : sprintf('%s(%s)', gettype($getAllCrmCriteriaDescriptionsResponseMidocoCrmCriteriaDescriptionItem), var_export($getAllCrmCriteriaDescriptionsResponseMidocoCrmCriteriaDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmCriteriaDescription property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\CriteriaDescriptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmCriteriaDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CriteriaDescriptionDTO[] $midocoCrmCriteriaDescription
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetAllCrmCriteriaDescriptionsResponse
     */
    public function setMidocoCrmCriteriaDescription(?array $midocoCrmCriteriaDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmCriteriaDescriptionArrayErrorMessage = self::validateMidocoCrmCriteriaDescriptionForArrayConstraintsFromSetMidocoCrmCriteriaDescription($midocoCrmCriteriaDescription))) {
            throw new InvalidArgumentException($midocoCrmCriteriaDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmCriteriaDescription = $midocoCrmCriteriaDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmCriteriaDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CriteriaDescriptionDTO $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetAllCrmCriteriaDescriptionsResponse
     */
    public function addToMidocoCrmCriteriaDescription(\Pggns\MidocoApi\Api\CrmSD\StructType\CriteriaDescriptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\CriteriaDescriptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmCriteriaDescription property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\CriteriaDescriptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmCriteriaDescription[] = $item;
        
        return $this;
    }
}
