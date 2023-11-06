<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCampaignDefinitionResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: searchCampaignDefinition --- campaign definition search
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchCampaignDefinitionResponse extends AbstractStructBase
{
    /**
     * The MidocoMisCampaignCriteria
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMisCampaignCriteria
     * @var \Pggns\MidocoApi\Mis\StructType\MisCampaignCriteriaDTO[]
     */
    protected ?array $MidocoMisCampaignCriteria = null;
    /**
     * The MidocoMisCampaignOutput
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMisCampaignOutput
     * @var \Pggns\MidocoApi\Mis\StructType\MisCampaignOutputDTO[]
     */
    protected ?array $MidocoMisCampaignOutput = null;
    /**
     * Constructor method for SearchCampaignDefinitionResponse
     * @uses SearchCampaignDefinitionResponse::setMidocoMisCampaignCriteria()
     * @uses SearchCampaignDefinitionResponse::setMidocoMisCampaignOutput()
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignCriteriaDTO[] $midocoMisCampaignCriteria
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignOutputDTO[] $midocoMisCampaignOutput
     */
    public function __construct(?array $midocoMisCampaignCriteria = null, ?array $midocoMisCampaignOutput = null)
    {
        $this
            ->setMidocoMisCampaignCriteria($midocoMisCampaignCriteria)
            ->setMidocoMisCampaignOutput($midocoMisCampaignOutput);
    }
    /**
     * Get MidocoMisCampaignCriteria value
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignCriteriaDTO[]
     */
    public function getMidocoMisCampaignCriteria(): ?array
    {
        return $this->MidocoMisCampaignCriteria;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMisCampaignCriteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMisCampaignCriteria method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMisCampaignCriteriaForArrayConstraintFromSetMidocoMisCampaignCriteria(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchCampaignDefinitionResponseMidocoMisCampaignCriteriaItem) {
            // validation for constraint: itemType
            if (!$searchCampaignDefinitionResponseMidocoMisCampaignCriteriaItem instanceof \Pggns\MidocoApi\Mis\StructType\MisCampaignCriteriaDTO) {
                $invalidValues[] = is_object($searchCampaignDefinitionResponseMidocoMisCampaignCriteriaItem) ? get_class($searchCampaignDefinitionResponseMidocoMisCampaignCriteriaItem) : sprintf('%s(%s)', gettype($searchCampaignDefinitionResponseMidocoMisCampaignCriteriaItem), var_export($searchCampaignDefinitionResponseMidocoMisCampaignCriteriaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMisCampaignCriteria property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisCampaignCriteriaDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMisCampaignCriteria value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignCriteriaDTO[] $midocoMisCampaignCriteria
     * @return \Pggns\MidocoApi\Mis\StructType\SearchCampaignDefinitionResponse
     */
    public function setMidocoMisCampaignCriteria(?array $midocoMisCampaignCriteria = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMisCampaignCriteriaArrayErrorMessage = self::validateMidocoMisCampaignCriteriaForArrayConstraintFromSetMidocoMisCampaignCriteria($midocoMisCampaignCriteria))) {
            throw new InvalidArgumentException($midocoMisCampaignCriteriaArrayErrorMessage, __LINE__);
        }
        $this->MidocoMisCampaignCriteria = $midocoMisCampaignCriteria;
        
        return $this;
    }
    /**
     * Add item to MidocoMisCampaignCriteria value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignCriteriaDTO $item
     * @return \Pggns\MidocoApi\Mis\StructType\SearchCampaignDefinitionResponse
     */
    public function addToMidocoMisCampaignCriteria(\Pggns\MidocoApi\Mis\StructType\MisCampaignCriteriaDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MisCampaignCriteriaDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMisCampaignCriteria property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisCampaignCriteriaDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMisCampaignCriteria[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMisCampaignOutput value
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignOutputDTO[]
     */
    public function getMidocoMisCampaignOutput(): ?array
    {
        return $this->MidocoMisCampaignOutput;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMisCampaignOutput method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMisCampaignOutput method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMisCampaignOutputForArrayConstraintFromSetMidocoMisCampaignOutput(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchCampaignDefinitionResponseMidocoMisCampaignOutputItem) {
            // validation for constraint: itemType
            if (!$searchCampaignDefinitionResponseMidocoMisCampaignOutputItem instanceof \Pggns\MidocoApi\Mis\StructType\MisCampaignOutputDTO) {
                $invalidValues[] = is_object($searchCampaignDefinitionResponseMidocoMisCampaignOutputItem) ? get_class($searchCampaignDefinitionResponseMidocoMisCampaignOutputItem) : sprintf('%s(%s)', gettype($searchCampaignDefinitionResponseMidocoMisCampaignOutputItem), var_export($searchCampaignDefinitionResponseMidocoMisCampaignOutputItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMisCampaignOutput property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisCampaignOutputDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMisCampaignOutput value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignOutputDTO[] $midocoMisCampaignOutput
     * @return \Pggns\MidocoApi\Mis\StructType\SearchCampaignDefinitionResponse
     */
    public function setMidocoMisCampaignOutput(?array $midocoMisCampaignOutput = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMisCampaignOutputArrayErrorMessage = self::validateMidocoMisCampaignOutputForArrayConstraintFromSetMidocoMisCampaignOutput($midocoMisCampaignOutput))) {
            throw new InvalidArgumentException($midocoMisCampaignOutputArrayErrorMessage, __LINE__);
        }
        $this->MidocoMisCampaignOutput = $midocoMisCampaignOutput;
        
        return $this;
    }
    /**
     * Add item to MidocoMisCampaignOutput value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignOutputDTO $item
     * @return \Pggns\MidocoApi\Mis\StructType\SearchCampaignDefinitionResponse
     */
    public function addToMidocoMisCampaignOutput(\Pggns\MidocoApi\Mis\StructType\MisCampaignOutputDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MisCampaignOutputDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMisCampaignOutput property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisCampaignOutputDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMisCampaignOutput[] = $item;
        
        return $this;
    }
}
