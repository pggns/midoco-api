<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MisCampaignFilterDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MisCampaignFilterDTO extends AbstractStructBase
{
    /**
     * The campaignId
     * @var int|null
     */
    protected ?int $campaignId = null;
    /**
     * The category
     * @var string|null
     */
    protected ?string $category = null;
    /**
     * The filterId
     * @var int|null
     */
    protected ?int $filterId = null;
    /**
     * The inSelect
     * @var bool|null
     */
    protected ?bool $inSelect = null;
    /**
     * Constructor method for MisCampaignFilterDTO
     * @uses MisCampaignFilterDTO::setCampaignId()
     * @uses MisCampaignFilterDTO::setCategory()
     * @uses MisCampaignFilterDTO::setFilterId()
     * @uses MisCampaignFilterDTO::setInSelect()
     * @param int $campaignId
     * @param string $category
     * @param int $filterId
     * @param bool $inSelect
     */
    public function __construct(?int $campaignId = null, ?string $category = null, ?int $filterId = null, ?bool $inSelect = null)
    {
        $this
            ->setCampaignId($campaignId)
            ->setCategory($category)
            ->setFilterId($filterId)
            ->setInSelect($inSelect);
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignFilterDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignFilterDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignFilterDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignFilterDTO
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
}
