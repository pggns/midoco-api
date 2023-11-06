<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEstimateMisCampaignTemplateResultsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEstimateMisCampaignTemplateResultsResponse extends AbstractStructBase
{
    /**
     * The orgUnits
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $orgUnits = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $noOfResults = null;
    /**
     * Constructor method for GetEstimateMisCampaignTemplateResultsResponse
     * @uses GetEstimateMisCampaignTemplateResultsResponse::setOrgUnits()
     * @uses GetEstimateMisCampaignTemplateResultsResponse::setNoOfResults()
     * @param string[] $orgUnits
     * @param int[] $noOfResults
     */
    public function __construct(?array $orgUnits = null, ?array $noOfResults = null)
    {
        $this
            ->setOrgUnits($orgUnits)
            ->setNoOfResults($noOfResults);
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
        foreach ($values as $getEstimateMisCampaignTemplateResultsResponseOrgUnitsItem) {
            // validation for constraint: itemType
            if (!is_string($getEstimateMisCampaignTemplateResultsResponseOrgUnitsItem)) {
                $invalidValues[] = is_object($getEstimateMisCampaignTemplateResultsResponseOrgUnitsItem) ? get_class($getEstimateMisCampaignTemplateResultsResponseOrgUnitsItem) : sprintf('%s(%s)', gettype($getEstimateMisCampaignTemplateResultsResponseOrgUnitsItem), var_export($getEstimateMisCampaignTemplateResultsResponseOrgUnitsItem, true));
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
     * @return \Pggns\MidocoApi\Mis\StructType\GetEstimateMisCampaignTemplateResultsResponse
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
     * @return \Pggns\MidocoApi\Mis\StructType\GetEstimateMisCampaignTemplateResultsResponse
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
     * Get noOfResults value
     * @return int[]
     */
    public function getNoOfResults(): ?array
    {
        return $this->noOfResults;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setNoOfResults method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNoOfResults method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNoOfResultsForArrayConstraintFromSetNoOfResults(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEstimateMisCampaignTemplateResultsResponseNoOfResultsItem) {
            // validation for constraint: itemType
            if (!(is_int($getEstimateMisCampaignTemplateResultsResponseNoOfResultsItem) || ctype_digit($getEstimateMisCampaignTemplateResultsResponseNoOfResultsItem))) {
                $invalidValues[] = is_object($getEstimateMisCampaignTemplateResultsResponseNoOfResultsItem) ? get_class($getEstimateMisCampaignTemplateResultsResponseNoOfResultsItem) : sprintf('%s(%s)', gettype($getEstimateMisCampaignTemplateResultsResponseNoOfResultsItem), var_export($getEstimateMisCampaignTemplateResultsResponseNoOfResultsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The noOfResults property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set noOfResults value
     * @throws InvalidArgumentException
     * @param int[] $noOfResults
     * @return \Pggns\MidocoApi\Mis\StructType\GetEstimateMisCampaignTemplateResultsResponse
     */
    public function setNoOfResults(?array $noOfResults = null): self
    {
        // validation for constraint: array
        if ('' !== ($noOfResultsArrayErrorMessage = self::validateNoOfResultsForArrayConstraintFromSetNoOfResults($noOfResults))) {
            throw new InvalidArgumentException($noOfResultsArrayErrorMessage, __LINE__);
        }
        $this->noOfResults = $noOfResults;
        
        return $this;
    }
    /**
     * Add item to noOfResults value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Mis\StructType\GetEstimateMisCampaignTemplateResultsResponse
     */
    public function addToNoOfResults(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The noOfResults property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->noOfResults[] = $item;
        
        return $this;
    }
}
