<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEstimateMisCampaignTemplateResultsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEstimateMisCampaignTemplateResultsRequest extends AbstractStructBase
{
    /**
     * The campaignId
     * @var int|null
     */
    protected ?int $campaignId = null;
    /**
     * The orgUnits
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $orgUnits = null;
    /**
     * The MidocoMisCustomerQuery
     * Meta information extracted from the WSDL
     * - ref: MidocoMisCustomerQuery
     * @var \Pggns\MidocoApi\Mis\StructType\MisCustomerQueryDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MisCustomerQueryDTO $MidocoMisCustomerQuery = null;
    /**
     * Constructor method for GetEstimateMisCampaignTemplateResultsRequest
     * @uses GetEstimateMisCampaignTemplateResultsRequest::setCampaignId()
     * @uses GetEstimateMisCampaignTemplateResultsRequest::setOrgUnits()
     * @uses GetEstimateMisCampaignTemplateResultsRequest::setMidocoMisCustomerQuery()
     * @param int $campaignId
     * @param string[] $orgUnits
     * @param \Pggns\MidocoApi\Mis\StructType\MisCustomerQueryDTO $midocoMisCustomerQuery
     */
    public function __construct(?int $campaignId = null, ?array $orgUnits = null, ?\Pggns\MidocoApi\Mis\StructType\MisCustomerQueryDTO $midocoMisCustomerQuery = null)
    {
        $this
            ->setCampaignId($campaignId)
            ->setOrgUnits($orgUnits)
            ->setMidocoMisCustomerQuery($midocoMisCustomerQuery);
    }
    /**
     * Get campaignId value
     * @return int|null
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }
    /**
     * Set campaignId value
     * @param int $campaignId
     * @return \Pggns\MidocoApi\Mis\StructType\GetEstimateMisCampaignTemplateResultsRequest
     */
    public function setCampaignId(?int $campaignId = null): self
    {
        // validation for constraint: int
        if (!is_null($campaignId) && !(is_int($campaignId) || ctype_digit($campaignId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($campaignId, true), gettype($campaignId)), __LINE__);
        }
        $this->campaignId = $campaignId;
        
        return $this;
    }
    /**
     * Get orgUnits value
     * @return string[]
     */
    public function getOrgUnits(): ?array
    {
        return $this->orgUnits;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setOrgUnits method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrgUnits method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrgUnitsForArrayConstraintFromSetOrgUnits(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEstimateMisCampaignTemplateResultsRequestOrgUnitsItem) {
            // validation for constraint: itemType
            if (!is_string($getEstimateMisCampaignTemplateResultsRequestOrgUnitsItem)) {
                $invalidValues[] = is_object($getEstimateMisCampaignTemplateResultsRequestOrgUnitsItem) ? get_class($getEstimateMisCampaignTemplateResultsRequestOrgUnitsItem) : sprintf('%s(%s)', gettype($getEstimateMisCampaignTemplateResultsRequestOrgUnitsItem), var_export($getEstimateMisCampaignTemplateResultsRequestOrgUnitsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The orgUnits property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set orgUnits value
     * @throws InvalidArgumentException
     * @param string[] $orgUnits
     * @return \Pggns\MidocoApi\Mis\StructType\GetEstimateMisCampaignTemplateResultsRequest
     */
    public function setOrgUnits(?array $orgUnits = null): self
    {
        // validation for constraint: array
        if ('' !== ($orgUnitsArrayErrorMessage = self::validateOrgUnitsForArrayConstraintFromSetOrgUnits($orgUnits))) {
            throw new InvalidArgumentException($orgUnitsArrayErrorMessage, __LINE__);
        }
        $this->orgUnits = $orgUnits;
        
        return $this;
    }
    /**
     * Add item to orgUnits value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Mis\StructType\GetEstimateMisCampaignTemplateResultsRequest
     */
    public function addToOrgUnits(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The orgUnits property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->orgUnits[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMisCustomerQuery value
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerQueryDTO|null
     */
    public function getMidocoMisCustomerQuery(): ?\Pggns\MidocoApi\Mis\StructType\MisCustomerQueryDTO
    {
        return $this->MidocoMisCustomerQuery;
    }
    /**
     * Set MidocoMisCustomerQuery value
     * @param \Pggns\MidocoApi\Mis\StructType\MisCustomerQueryDTO $midocoMisCustomerQuery
     * @return \Pggns\MidocoApi\Mis\StructType\GetEstimateMisCampaignTemplateResultsRequest
     */
    public function setMidocoMisCustomerQuery(?\Pggns\MidocoApi\Mis\StructType\MisCustomerQueryDTO $midocoMisCustomerQuery = null): self
    {
        $this->MidocoMisCustomerQuery = $midocoMisCustomerQuery;
        
        return $this;
    }
}
