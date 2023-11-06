<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableCampaignFieldsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getAvailableCampaignFields --- returns the available fields for the Mis campaign
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAvailableCampaignFieldsResponse extends AbstractStructBase
{
    /**
     * The MidocoCampaignFieldExt
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCampaignFieldExt
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoCampaignFieldExt[]
     */
    protected ?array $MidocoCampaignFieldExt = null;
    /**
     * Constructor method for GetAvailableCampaignFieldsResponse
     * @uses GetAvailableCampaignFieldsResponse::setMidocoCampaignFieldExt()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoCampaignFieldExt[] $midocoCampaignFieldExt
     */
    public function __construct(?array $midocoCampaignFieldExt = null)
    {
        $this
            ->setMidocoCampaignFieldExt($midocoCampaignFieldExt);
    }
    /**
     * Get MidocoCampaignFieldExt value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoCampaignFieldExt[]
     */
    public function getMidocoCampaignFieldExt(): ?array
    {
        return $this->MidocoCampaignFieldExt;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCampaignFieldExt method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCampaignFieldExt method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCampaignFieldExtForArrayConstraintFromSetMidocoCampaignFieldExt(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailableCampaignFieldsResponseMidocoCampaignFieldExtItem) {
            // validation for constraint: itemType
            if (!$getAvailableCampaignFieldsResponseMidocoCampaignFieldExtItem instanceof \Pggns\MidocoApi\Mis\StructType\MidocoCampaignFieldExt) {
                $invalidValues[] = is_object($getAvailableCampaignFieldsResponseMidocoCampaignFieldExtItem) ? get_class($getAvailableCampaignFieldsResponseMidocoCampaignFieldExtItem) : sprintf('%s(%s)', gettype($getAvailableCampaignFieldsResponseMidocoCampaignFieldExtItem), var_export($getAvailableCampaignFieldsResponseMidocoCampaignFieldExtItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCampaignFieldExt property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoCampaignFieldExt, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCampaignFieldExt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoCampaignFieldExt[] $midocoCampaignFieldExt
     * @return \Pggns\MidocoApi\Mis\StructType\GetAvailableCampaignFieldsResponse
     */
    public function setMidocoCampaignFieldExt(?array $midocoCampaignFieldExt = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCampaignFieldExtArrayErrorMessage = self::validateMidocoCampaignFieldExtForArrayConstraintFromSetMidocoCampaignFieldExt($midocoCampaignFieldExt))) {
            throw new InvalidArgumentException($midocoCampaignFieldExtArrayErrorMessage, __LINE__);
        }
        $this->MidocoCampaignFieldExt = $midocoCampaignFieldExt;
        
        return $this;
    }
    /**
     * Add item to MidocoCampaignFieldExt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoCampaignFieldExt $item
     * @return \Pggns\MidocoApi\Mis\StructType\GetAvailableCampaignFieldsResponse
     */
    public function addToMidocoCampaignFieldExt(\Pggns\MidocoApi\Mis\StructType\MidocoCampaignFieldExt $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MidocoCampaignFieldExt) {
            throw new InvalidArgumentException(sprintf('The MidocoCampaignFieldExt property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoCampaignFieldExt, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCampaignFieldExt[] = $item;
        
        return $this;
    }
}
