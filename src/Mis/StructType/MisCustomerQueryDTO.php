<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MisCustomerQueryDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MisCustomerQueryDTO extends AbstractStructBase
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
     * Constructor method for MisCustomerQueryDTO
     * @uses MisCustomerQueryDTO::setMidocoMisCampaignCriteria()
     * @uses MisCustomerQueryDTO::setMidocoMisCampaignOutput()
     * @uses MisCustomerQueryDTO::setMidocoMisCampaignQueryFilter()
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
        foreach ($values as $misCustomerQueryDTOMidocoMisCampaignCriteriaItem) {
            // validation for constraint: itemType
            if (!$misCustomerQueryDTOMidocoMisCampaignCriteriaItem instanceof \Pggns\MidocoApi\Mis\StructType\MisCampaignCriteriaDTO) {
                $invalidValues[] = is_object($misCustomerQueryDTOMidocoMisCampaignCriteriaItem) ? get_class($misCustomerQueryDTOMidocoMisCampaignCriteriaItem) : sprintf('%s(%s)', gettype($misCustomerQueryDTOMidocoMisCampaignCriteriaItem), var_export($misCustomerQueryDTOMidocoMisCampaignCriteriaItem, true));
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerQueryDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerQueryDTO
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
        foreach ($values as $misCustomerQueryDTOMidocoMisCampaignOutputItem) {
            // validation for constraint: itemType
            if (!$misCustomerQueryDTOMidocoMisCampaignOutputItem instanceof \Pggns\MidocoApi\Mis\StructType\MisCampaignOutputDTO) {
                $invalidValues[] = is_object($misCustomerQueryDTOMidocoMisCampaignOutputItem) ? get_class($misCustomerQueryDTOMidocoMisCampaignOutputItem) : sprintf('%s(%s)', gettype($misCustomerQueryDTOMidocoMisCampaignOutputItem), var_export($misCustomerQueryDTOMidocoMisCampaignOutputItem, true));
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerQueryDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerQueryDTO
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
        foreach ($values as $misCustomerQueryDTOMidocoMisCampaignQueryFilterItem) {
            // validation for constraint: itemType
            if (!$misCustomerQueryDTOMidocoMisCampaignQueryFilterItem instanceof \Pggns\MidocoApi\Mis\StructType\MisCampaignQueryFilterDTO) {
                $invalidValues[] = is_object($misCustomerQueryDTOMidocoMisCampaignQueryFilterItem) ? get_class($misCustomerQueryDTOMidocoMisCampaignQueryFilterItem) : sprintf('%s(%s)', gettype($misCustomerQueryDTOMidocoMisCampaignQueryFilterItem), var_export($misCustomerQueryDTOMidocoMisCampaignQueryFilterItem, true));
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerQueryDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerQueryDTO
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
