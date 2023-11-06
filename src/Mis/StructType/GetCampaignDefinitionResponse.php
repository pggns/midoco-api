<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCampaignDefinitionResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCampaignDefinition --- gets the lists of criterias and outputs corresponding to a crm campaign
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCampaignDefinitionResponse extends AbstractStructBase
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
     * The MidocoMisCampaignQueryFilter
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMisCampaignQueryFilter
     * @var \Pggns\MidocoApi\Mis\StructType\MisCampaignQueryFilterDTO[]
     */
    protected ?array $MidocoMisCampaignQueryFilter = null;
    /**
     * Constructor method for GetCampaignDefinitionResponse
     * @uses GetCampaignDefinitionResponse::setMidocoMisCampaignCriteria()
     * @uses GetCampaignDefinitionResponse::setMidocoMisCampaignOutput()
     * @uses GetCampaignDefinitionResponse::setMidocoMisCampaignQueryFilter()
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignCriteriaDTO[] $midocoMisCampaignCriteria
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignOutputDTO[] $midocoMisCampaignOutput
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignQueryFilterDTO[] $midocoMisCampaignQueryFilter
     */
    public function __construct(?array $midocoMisCampaignCriteria = null, ?array $midocoMisCampaignOutput = null, ?array $midocoMisCampaignQueryFilter = null)
    {
        $this
            ->setMidocoMisCampaignCriteria($midocoMisCampaignCriteria)
            ->setMidocoMisCampaignOutput($midocoMisCampaignOutput)
            ->setMidocoMisCampaignQueryFilter($midocoMisCampaignQueryFilter);
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
        foreach ($values as $getCampaignDefinitionResponseMidocoMisCampaignCriteriaItem) {
            // validation for constraint: itemType
            if (!$getCampaignDefinitionResponseMidocoMisCampaignCriteriaItem instanceof \Pggns\MidocoApi\Mis\StructType\MisCampaignCriteriaDTO) {
                $invalidValues[] = is_object($getCampaignDefinitionResponseMidocoMisCampaignCriteriaItem) ? get_class($getCampaignDefinitionResponseMidocoMisCampaignCriteriaItem) : sprintf('%s(%s)', gettype($getCampaignDefinitionResponseMidocoMisCampaignCriteriaItem), var_export($getCampaignDefinitionResponseMidocoMisCampaignCriteriaItem, true));
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
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignDefinitionResponse
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
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignDefinitionResponse
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
        foreach ($values as $getCampaignDefinitionResponseMidocoMisCampaignOutputItem) {
            // validation for constraint: itemType
            if (!$getCampaignDefinitionResponseMidocoMisCampaignOutputItem instanceof \Pggns\MidocoApi\Mis\StructType\MisCampaignOutputDTO) {
                $invalidValues[] = is_object($getCampaignDefinitionResponseMidocoMisCampaignOutputItem) ? get_class($getCampaignDefinitionResponseMidocoMisCampaignOutputItem) : sprintf('%s(%s)', gettype($getCampaignDefinitionResponseMidocoMisCampaignOutputItem), var_export($getCampaignDefinitionResponseMidocoMisCampaignOutputItem, true));
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
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignDefinitionResponse
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
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignDefinitionResponse
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
    /**
     * Get MidocoMisCampaignQueryFilter value
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignQueryFilterDTO[]
     */
    public function getMidocoMisCampaignQueryFilter(): ?array
    {
        return $this->MidocoMisCampaignQueryFilter;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMisCampaignQueryFilter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMisCampaignQueryFilter method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMisCampaignQueryFilterForArrayConstraintFromSetMidocoMisCampaignQueryFilter(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCampaignDefinitionResponseMidocoMisCampaignQueryFilterItem) {
            // validation for constraint: itemType
            if (!$getCampaignDefinitionResponseMidocoMisCampaignQueryFilterItem instanceof \Pggns\MidocoApi\Mis\StructType\MisCampaignQueryFilterDTO) {
                $invalidValues[] = is_object($getCampaignDefinitionResponseMidocoMisCampaignQueryFilterItem) ? get_class($getCampaignDefinitionResponseMidocoMisCampaignQueryFilterItem) : sprintf('%s(%s)', gettype($getCampaignDefinitionResponseMidocoMisCampaignQueryFilterItem), var_export($getCampaignDefinitionResponseMidocoMisCampaignQueryFilterItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMisCampaignQueryFilter property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisCampaignQueryFilterDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMisCampaignQueryFilter value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignQueryFilterDTO[] $midocoMisCampaignQueryFilter
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignDefinitionResponse
     */
    public function setMidocoMisCampaignQueryFilter(?array $midocoMisCampaignQueryFilter = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMisCampaignQueryFilterArrayErrorMessage = self::validateMidocoMisCampaignQueryFilterForArrayConstraintFromSetMidocoMisCampaignQueryFilter($midocoMisCampaignQueryFilter))) {
            throw new InvalidArgumentException($midocoMisCampaignQueryFilterArrayErrorMessage, __LINE__);
        }
        $this->MidocoMisCampaignQueryFilter = $midocoMisCampaignQueryFilter;
        
        return $this;
    }
    /**
     * Add item to MidocoMisCampaignQueryFilter value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignQueryFilterDTO $item
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignDefinitionResponse
     */
    public function addToMidocoMisCampaignQueryFilter(\Pggns\MidocoApi\Mis\StructType\MisCampaignQueryFilterDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MisCampaignQueryFilterDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMisCampaignQueryFilter property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisCampaignQueryFilterDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMisCampaignQueryFilter[] = $item;
        
        return $this;
    }
}
