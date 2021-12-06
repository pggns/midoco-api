<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MisCampaignCriteriaDTO StructType
 * @subpackage Structs
 */
class MisCampaignCriteriaDTO extends AbstractStructBase
{
    /**
     * The campaignId
     * @var int|null
     */
    protected ?int $campaignId = null;
    /**
     * The criteriaId
     * @var int|null
     */
    protected ?int $criteriaId = null;
    /**
     * The criteriaLink
     * @var string|null
     */
    protected ?string $criteriaLink = null;
    /**
     * The fieldname
     * @var string|null
     */
    protected ?string $fieldname = null;
    /**
     * The filterId
     * @var int|null
     */
    protected ?int $filterId = null;
    /**
     * The operatorname
     * @var string|null
     */
    protected ?string $operatorname = null;
    /**
     * The value1
     * @var string|null
     */
    protected ?string $value1 = null;
    /**
     * The value2
     * @var string|null
     */
    protected ?string $value2 = null;
    /**
     * Constructor method for MisCampaignCriteriaDTO
     * @uses MisCampaignCriteriaDTO::setCampaignId()
     * @uses MisCampaignCriteriaDTO::setCriteriaId()
     * @uses MisCampaignCriteriaDTO::setCriteriaLink()
     * @uses MisCampaignCriteriaDTO::setFieldname()
     * @uses MisCampaignCriteriaDTO::setFilterId()
     * @uses MisCampaignCriteriaDTO::setOperatorname()
     * @uses MisCampaignCriteriaDTO::setValue1()
     * @uses MisCampaignCriteriaDTO::setValue2()
     * @param int $campaignId
     * @param int $criteriaId
     * @param string $criteriaLink
     * @param string $fieldname
     * @param int $filterId
     * @param string $operatorname
     * @param string $value1
     * @param string $value2
     */
    public function __construct(?int $campaignId = null, ?int $criteriaId = null, ?string $criteriaLink = null, ?string $fieldname = null, ?int $filterId = null, ?string $operatorname = null, ?string $value1 = null, ?string $value2 = null)
    {
        $this
            ->setCampaignId($campaignId)
            ->setCriteriaId($criteriaId)
            ->setCriteriaLink($criteriaLink)
            ->setFieldname($fieldname)
            ->setFilterId($filterId)
            ->setOperatorname($operatorname)
            ->setValue1($value1)
            ->setValue2($value2);
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignCriteriaDTO
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
     * Get criteriaId value
     * @return int|null
     */
    public function getCriteriaId(): ?int
    {
        return $this->criteriaId;
    }
    /**
     * Set criteriaId value
     * @param int $criteriaId
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignCriteriaDTO
     */
    public function setCriteriaId(?int $criteriaId = null): self
    {
        // validation for constraint: int
        if (!is_null($criteriaId) && !(is_int($criteriaId) || ctype_digit($criteriaId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($criteriaId, true), gettype($criteriaId)), __LINE__);
        }
        $this->criteriaId = $criteriaId;
        
        return $this;
    }
    /**
     * Get criteriaLink value
     * @return string|null
     */
    public function getCriteriaLink(): ?string
    {
        return $this->criteriaLink;
    }
    /**
     * Set criteriaLink value
     * @param string $criteriaLink
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignCriteriaDTO
     */
    public function setCriteriaLink(?string $criteriaLink = null): self
    {
        // validation for constraint: string
        if (!is_null($criteriaLink) && !is_string($criteriaLink)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($criteriaLink, true), gettype($criteriaLink)), __LINE__);
        }
        $this->criteriaLink = $criteriaLink;
        
        return $this;
    }
    /**
     * Get fieldname value
     * @return string|null
     */
    public function getFieldname(): ?string
    {
        return $this->fieldname;
    }
    /**
     * Set fieldname value
     * @param string $fieldname
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignCriteriaDTO
     */
    public function setFieldname(?string $fieldname = null): self
    {
        // validation for constraint: string
        if (!is_null($fieldname) && !is_string($fieldname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldname, true), gettype($fieldname)), __LINE__);
        }
        $this->fieldname = $fieldname;
        
        return $this;
    }
    /**
     * Get filterId value
     * @return int|null
     */
    public function getFilterId(): ?int
    {
        return $this->filterId;
    }
    /**
     * Set filterId value
     * @param int $filterId
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignCriteriaDTO
     */
    public function setFilterId(?int $filterId = null): self
    {
        // validation for constraint: int
        if (!is_null($filterId) && !(is_int($filterId) || ctype_digit($filterId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($filterId, true), gettype($filterId)), __LINE__);
        }
        $this->filterId = $filterId;
        
        return $this;
    }
    /**
     * Get operatorname value
     * @return string|null
     */
    public function getOperatorname(): ?string
    {
        return $this->operatorname;
    }
    /**
     * Set operatorname value
     * @param string $operatorname
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignCriteriaDTO
     */
    public function setOperatorname(?string $operatorname = null): self
    {
        // validation for constraint: string
        if (!is_null($operatorname) && !is_string($operatorname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operatorname, true), gettype($operatorname)), __LINE__);
        }
        $this->operatorname = $operatorname;
        
        return $this;
    }
    /**
     * Get value1 value
     * @return string|null
     */
    public function getValue1(): ?string
    {
        return $this->value1;
    }
    /**
     * Set value1 value
     * @param string $value1
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignCriteriaDTO
     */
    public function setValue1(?string $value1 = null): self
    {
        // validation for constraint: string
        if (!is_null($value1) && !is_string($value1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value1, true), gettype($value1)), __LINE__);
        }
        $this->value1 = $value1;
        
        return $this;
    }
    /**
     * Get value2 value
     * @return string|null
     */
    public function getValue2(): ?string
    {
        return $this->value2;
    }
    /**
     * Set value2 value
     * @param string $value2
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignCriteriaDTO
     */
    public function setValue2(?string $value2 = null): self
    {
        // validation for constraint: string
        if (!is_null($value2) && !is_string($value2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value2, true), gettype($value2)), __LINE__);
        }
        $this->value2 = $value2;
        
        return $this;
    }
}
