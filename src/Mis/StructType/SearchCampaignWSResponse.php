<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCampaignWSResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: searchCampaignWS --- campaign search
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchCampaignWSResponse extends AbstractStructBase
{
    /**
     * The MidocoMisCampaignWS
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMisCampaignWS
     * @var \Pggns\MidocoApi\Mis\StructType\MisCampaignWSType[]
     */
    protected ?array $MidocoMisCampaignWS = null;
    /**
     * Constructor method for SearchCampaignWSResponse
     * @uses SearchCampaignWSResponse::setMidocoMisCampaignWS()
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignWSType[] $midocoMisCampaignWS
     */
    public function __construct(?array $midocoMisCampaignWS = null)
    {
        $this
            ->setMidocoMisCampaignWS($midocoMisCampaignWS);
    }
    /**
     * Get MidocoMisCampaignWS value
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignWSType[]
     */
    public function getMidocoMisCampaignWS(): ?array
    {
        return $this->MidocoMisCampaignWS;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMisCampaignWS method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMisCampaignWS method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMisCampaignWSForArrayConstraintFromSetMidocoMisCampaignWS(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchCampaignWSResponseMidocoMisCampaignWSItem) {
            // validation for constraint: itemType
            if (!$searchCampaignWSResponseMidocoMisCampaignWSItem instanceof \Pggns\MidocoApi\Mis\StructType\MisCampaignWSType) {
                $invalidValues[] = is_object($searchCampaignWSResponseMidocoMisCampaignWSItem) ? get_class($searchCampaignWSResponseMidocoMisCampaignWSItem) : sprintf('%s(%s)', gettype($searchCampaignWSResponseMidocoMisCampaignWSItem), var_export($searchCampaignWSResponseMidocoMisCampaignWSItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMisCampaignWS property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisCampaignWSType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMisCampaignWS value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignWSType[] $midocoMisCampaignWS
     * @return \Pggns\MidocoApi\Mis\StructType\SearchCampaignWSResponse
     */
    public function setMidocoMisCampaignWS(?array $midocoMisCampaignWS = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMisCampaignWSArrayErrorMessage = self::validateMidocoMisCampaignWSForArrayConstraintFromSetMidocoMisCampaignWS($midocoMisCampaignWS))) {
            throw new InvalidArgumentException($midocoMisCampaignWSArrayErrorMessage, __LINE__);
        }
        $this->MidocoMisCampaignWS = $midocoMisCampaignWS;
        
        return $this;
    }
    /**
     * Add item to MidocoMisCampaignWS value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignWSType $item
     * @return \Pggns\MidocoApi\Mis\StructType\SearchCampaignWSResponse
     */
    public function addToMidocoMisCampaignWS(\Pggns\MidocoApi\Mis\StructType\MisCampaignWSType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MisCampaignWSType) {
            throw new InvalidArgumentException(sprintf('The MidocoMisCampaignWS property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisCampaignWSType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMisCampaignWS[] = $item;
        
        return $this;
    }
}
