<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MisCampaignQueryFilterDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MisCampaignQueryFilterDTO extends AbstractStructBase
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
     * The inSelect
     * @var bool|null
     */
    protected ?bool $inSelect = null;
    /**
     * The category
     * @var string|null
     */
    protected ?string $category = null;
    /**
     * Constructor method for MisCampaignQueryFilterDTO
     * @uses MisCampaignQueryFilterDTO::setMidocoMisCampaignCriteria()
     * @uses MisCampaignQueryFilterDTO::setInSelect()
     * @uses MisCampaignQueryFilterDTO::setCategory()
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignCriteriaDTO[] $midocoMisCampaignCriteria
     * @param bool $inSelect
     * @param string $category
     */
    public function __construct(?array $midocoMisCampaignCriteria = null, ?bool $inSelect = null, ?string $category = null)
    {
        $this
            ->setMidocoMisCampaignCriteria($midocoMisCampaignCriteria)
            ->setInSelect($inSelect)
            ->setCategory($category);
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
        foreach ($values as $misCampaignQueryFilterDTOMidocoMisCampaignCriteriaItem) {
            // validation for constraint: itemType
            if (!$misCampaignQueryFilterDTOMidocoMisCampaignCriteriaItem instanceof \Pggns\MidocoApi\Mis\StructType\MisCampaignCriteriaDTO) {
                $invalidValues[] = is_object($misCampaignQueryFilterDTOMidocoMisCampaignCriteriaItem) ? get_class($misCampaignQueryFilterDTOMidocoMisCampaignCriteriaItem) : sprintf('%s(%s)', gettype($misCampaignQueryFilterDTOMidocoMisCampaignCriteriaItem), var_export($misCampaignQueryFilterDTOMidocoMisCampaignCriteriaItem, true));
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignQueryFilterDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignQueryFilterDTO
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
     * Get inSelect value
     * @return bool|null
     */
    public function getInSelect(): ?bool
    {
        return $this->inSelect;
    }
    /**
     * Set inSelect value
     * @param bool $inSelect
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignQueryFilterDTO
     */
    public function setInSelect(?bool $inSelect = null): self
    {
        // validation for constraint: boolean
        if (!is_null($inSelect) && !is_bool($inSelect)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inSelect, true), gettype($inSelect)), __LINE__);
        }
        $this->inSelect = $inSelect;
        
        return $this;
    }
    /**
     * Get category value
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param string $category
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignQueryFilterDTO
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->category = $category;
        
        return $this;
    }
}
