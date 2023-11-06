<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCampaignResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: searchCampaign --- campaign search
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchCampaignResponse extends AbstractStructBase
{
    /**
     * The MidocoMisCampaign
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMisCampaign
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign[]
     */
    protected ?array $MidocoMisCampaign = null;
    /**
     * Constructor method for SearchCampaignResponse
     * @uses SearchCampaignResponse::setMidocoMisCampaign()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign[] $midocoMisCampaign
     */
    public function __construct(?array $midocoMisCampaign = null)
    {
        $this
            ->setMidocoMisCampaign($midocoMisCampaign);
    }
    /**
     * Get MidocoMisCampaign value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign[]
     */
    public function getMidocoMisCampaign(): ?array
    {
        return $this->MidocoMisCampaign;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMisCampaign method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMisCampaign method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMisCampaignForArrayConstraintFromSetMidocoMisCampaign(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchCampaignResponseMidocoMisCampaignItem) {
            // validation for constraint: itemType
            if (!$searchCampaignResponseMidocoMisCampaignItem instanceof \Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign) {
                $invalidValues[] = is_object($searchCampaignResponseMidocoMisCampaignItem) ? get_class($searchCampaignResponseMidocoMisCampaignItem) : sprintf('%s(%s)', gettype($searchCampaignResponseMidocoMisCampaignItem), var_export($searchCampaignResponseMidocoMisCampaignItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMisCampaign property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMisCampaign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign[] $midocoMisCampaign
     * @return \Pggns\MidocoApi\Mis\StructType\SearchCampaignResponse
     */
    public function setMidocoMisCampaign(?array $midocoMisCampaign = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMisCampaignArrayErrorMessage = self::validateMidocoMisCampaignForArrayConstraintFromSetMidocoMisCampaign($midocoMisCampaign))) {
            throw new InvalidArgumentException($midocoMisCampaignArrayErrorMessage, __LINE__);
        }
        $this->MidocoMisCampaign = $midocoMisCampaign;
        
        return $this;
    }
    /**
     * Add item to MidocoMisCampaign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign $item
     * @return \Pggns\MidocoApi\Mis\StructType\SearchCampaignResponse
     */
    public function addToMidocoMisCampaign(\Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign) {
            throw new InvalidArgumentException(sprintf('The MidocoMisCampaign property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMisCampaign[] = $item;
        
        return $this;
    }
}
