<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCampaignFieldValuesResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCampaignField --- returns the list of (value field key, value field to be displayed) for the values of the criteria in campaigns
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCampaignFieldValuesResponse extends AbstractStructBase
{
    /**
     * The MidocoCriteriaValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCriteriaValue
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldValueType[]
     */
    protected ?array $MidocoCriteriaValue = null;
    /**
     * Constructor method for GetCampaignFieldValuesResponse
     * @uses GetCampaignFieldValuesResponse::setMidocoCriteriaValue()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldValueType[] $midocoCriteriaValue
     */
    public function __construct(?array $midocoCriteriaValue = null)
    {
        $this
            ->setMidocoCriteriaValue($midocoCriteriaValue);
    }
    /**
     * Get MidocoCriteriaValue value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldValueType[]
     */
    public function getMidocoCriteriaValue(): ?array
    {
        return $this->MidocoCriteriaValue;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCriteriaValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCriteriaValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCriteriaValueForArrayConstraintFromSetMidocoCriteriaValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCampaignFieldValuesResponseMidocoCriteriaValueItem) {
            // validation for constraint: itemType
            if (!$getCampaignFieldValuesResponseMidocoCriteriaValueItem instanceof \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldValueType) {
                $invalidValues[] = is_object($getCampaignFieldValuesResponseMidocoCriteriaValueItem) ? get_class($getCampaignFieldValuesResponseMidocoCriteriaValueItem) : sprintf('%s(%s)', gettype($getCampaignFieldValuesResponseMidocoCriteriaValueItem), var_export($getCampaignFieldValuesResponseMidocoCriteriaValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCriteriaValue property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldValueType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCriteriaValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldValueType[] $midocoCriteriaValue
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignFieldValuesResponse
     */
    public function setMidocoCriteriaValue(?array $midocoCriteriaValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCriteriaValueArrayErrorMessage = self::validateMidocoCriteriaValueForArrayConstraintFromSetMidocoCriteriaValue($midocoCriteriaValue))) {
            throw new InvalidArgumentException($midocoCriteriaValueArrayErrorMessage, __LINE__);
        }
        $this->MidocoCriteriaValue = $midocoCriteriaValue;
        
        return $this;
    }
    /**
     * Add item to MidocoCriteriaValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldValueType $item
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignFieldValuesResponse
     */
    public function addToMidocoCriteriaValue(\Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldValueType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldValueType) {
            throw new InvalidArgumentException(sprintf('The MidocoCriteriaValue property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldValueType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCriteriaValue[] = $item;
        
        return $this;
    }
}
