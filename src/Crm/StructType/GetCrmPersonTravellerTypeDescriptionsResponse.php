<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCrmPersonTravellerTypeDescriptionsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCrmPersonTravellerTypeDescriptionsResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmPersonTravellerTypeDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmPersonTravellerTypeDescription
     * @var \Pggns\MidocoApi\Crm\StructType\CrmTravellerTypeDescrDTO[]
     */
    protected ?array $MidocoCrmPersonTravellerTypeDescription = null;
    /**
     * Constructor method for GetCrmPersonTravellerTypeDescriptionsResponse
     * @uses GetCrmPersonTravellerTypeDescriptionsResponse::setMidocoCrmPersonTravellerTypeDescription()
     * @param \Pggns\MidocoApi\Crm\StructType\CrmTravellerTypeDescrDTO[] $midocoCrmPersonTravellerTypeDescription
     */
    public function __construct(?array $midocoCrmPersonTravellerTypeDescription = null)
    {
        $this
            ->setMidocoCrmPersonTravellerTypeDescription($midocoCrmPersonTravellerTypeDescription);
    }
    /**
     * Get MidocoCrmPersonTravellerTypeDescription value
     * @return \Pggns\MidocoApi\Crm\StructType\CrmTravellerTypeDescrDTO[]
     */
    public function getMidocoCrmPersonTravellerTypeDescription(): ?array
    {
        return $this->MidocoCrmPersonTravellerTypeDescription;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmPersonTravellerTypeDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmPersonTravellerTypeDescription method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmPersonTravellerTypeDescriptionForArrayConstraintFromSetMidocoCrmPersonTravellerTypeDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCrmPersonTravellerTypeDescriptionsResponseMidocoCrmPersonTravellerTypeDescriptionItem) {
            // validation for constraint: itemType
            if (!$getCrmPersonTravellerTypeDescriptionsResponseMidocoCrmPersonTravellerTypeDescriptionItem instanceof \Pggns\MidocoApi\Crm\StructType\CrmTravellerTypeDescrDTO) {
                $invalidValues[] = is_object($getCrmPersonTravellerTypeDescriptionsResponseMidocoCrmPersonTravellerTypeDescriptionItem) ? get_class($getCrmPersonTravellerTypeDescriptionsResponseMidocoCrmPersonTravellerTypeDescriptionItem) : sprintf('%s(%s)', gettype($getCrmPersonTravellerTypeDescriptionsResponseMidocoCrmPersonTravellerTypeDescriptionItem), var_export($getCrmPersonTravellerTypeDescriptionsResponseMidocoCrmPersonTravellerTypeDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmPersonTravellerTypeDescription property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CrmTravellerTypeDescrDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmPersonTravellerTypeDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CrmTravellerTypeDescrDTO[] $midocoCrmPersonTravellerTypeDescription
     * @return \Pggns\MidocoApi\Crm\StructType\GetCrmPersonTravellerTypeDescriptionsResponse
     */
    public function setMidocoCrmPersonTravellerTypeDescription(?array $midocoCrmPersonTravellerTypeDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmPersonTravellerTypeDescriptionArrayErrorMessage = self::validateMidocoCrmPersonTravellerTypeDescriptionForArrayConstraintFromSetMidocoCrmPersonTravellerTypeDescription($midocoCrmPersonTravellerTypeDescription))) {
            throw new InvalidArgumentException($midocoCrmPersonTravellerTypeDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmPersonTravellerTypeDescription = $midocoCrmPersonTravellerTypeDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmPersonTravellerTypeDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CrmTravellerTypeDescrDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetCrmPersonTravellerTypeDescriptionsResponse
     */
    public function addToMidocoCrmPersonTravellerTypeDescription(\Pggns\MidocoApi\Crm\StructType\CrmTravellerTypeDescrDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\CrmTravellerTypeDescrDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmPersonTravellerTypeDescription property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CrmTravellerTypeDescrDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmPersonTravellerTypeDescription[] = $item;
        
        return $this;
    }
}
