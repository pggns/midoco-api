<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MisCampaignOutputDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MisCampaignOutputDTO extends AbstractStructBase
{
    /**
     * The campaignId
     * @var int|null
     */
    protected ?int $campaignId = null;
    /**
     * The fieldName
     * @var string|null
     */
    protected ?string $fieldName = null;
    /**
     * The sortDesc
     * @var bool|null
     */
    protected ?bool $sortDesc = null;
    /**
     * The sortIndex
     * @var int|null
     */
    protected ?int $sortIndex = null;
    /**
     * The sortPosition
     * @var int|null
     */
    protected ?int $sortPosition = null;
    /**
     * Constructor method for MisCampaignOutputDTO
     * @uses MisCampaignOutputDTO::setCampaignId()
     * @uses MisCampaignOutputDTO::setFieldName()
     * @uses MisCampaignOutputDTO::setSortDesc()
     * @uses MisCampaignOutputDTO::setSortIndex()
     * @uses MisCampaignOutputDTO::setSortPosition()
     * @param int $campaignId
     * @param string $fieldName
     * @param bool $sortDesc
     * @param int $sortIndex
     * @param int $sortPosition
     */
    public function __construct(?int $campaignId = null, ?string $fieldName = null, ?bool $sortDesc = null, ?int $sortIndex = null, ?int $sortPosition = null)
    {
        $this
            ->setCampaignId($campaignId)
            ->setFieldName($fieldName)
            ->setSortDesc($sortDesc)
            ->setSortIndex($sortIndex)
            ->setSortPosition($sortPosition);
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignOutputDTO
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
     * Get fieldName value
     * @return string|null
     */
    public function getFieldName(): ?string
    {
        return $this->fieldName;
    }
    /**
     * Set fieldName value
     * @param string $fieldName
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignOutputDTO
     */
    public function setFieldName(?string $fieldName = null): self
    {
        // validation for constraint: string
        if (!is_null($fieldName) && !is_string($fieldName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldName, true), gettype($fieldName)), __LINE__);
        }
        $this->fieldName = $fieldName;
        
        return $this;
    }
    /**
     * Get sortDesc value
     * @return bool|null
     */
    public function getSortDesc(): ?bool
    {
        return $this->sortDesc;
    }
    /**
     * Set sortDesc value
     * @param bool $sortDesc
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignOutputDTO
     */
    public function setSortDesc(?bool $sortDesc = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sortDesc) && !is_bool($sortDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sortDesc, true), gettype($sortDesc)), __LINE__);
        }
        $this->sortDesc = $sortDesc;
        
        return $this;
    }
    /**
     * Get sortIndex value
     * @return int|null
     */
    public function getSortIndex(): ?int
    {
        return $this->sortIndex;
    }
    /**
     * Set sortIndex value
     * @param int $sortIndex
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignOutputDTO
     */
    public function setSortIndex(?int $sortIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($sortIndex) && !(is_int($sortIndex) || ctype_digit($sortIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sortIndex, true), gettype($sortIndex)), __LINE__);
        }
        $this->sortIndex = $sortIndex;
        
        return $this;
    }
    /**
     * Get sortPosition value
     * @return int|null
     */
    public function getSortPosition(): ?int
    {
        return $this->sortPosition;
    }
    /**
     * Set sortPosition value
     * @param int $sortPosition
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignOutputDTO
     */
    public function setSortPosition(?int $sortPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($sortPosition) && !(is_int($sortPosition) || ctype_digit($sortPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sortPosition, true), gettype($sortPosition)), __LINE__);
        }
        $this->sortPosition = $sortPosition;
        
        return $this;
    }
}
