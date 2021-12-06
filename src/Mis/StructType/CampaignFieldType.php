<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CampaignFieldType StructType
 * @subpackage Structs
 */
class CampaignFieldType extends AbstractStructBase
{
    /**
     * The fieldId
     * @var string|null
     */
    protected ?string $fieldId = null;
    /**
     * The localizedName
     * @var string|null
     */
    protected ?string $localizedName = null;
    /**
     * The sqlTypeId
     * @var int|null
     */
    protected ?int $sqlTypeId = null;
    /**
     * Constructor method for CampaignFieldType
     * @uses CampaignFieldType::setFieldId()
     * @uses CampaignFieldType::setLocalizedName()
     * @uses CampaignFieldType::setSqlTypeId()
     * @param string $fieldId
     * @param string $localizedName
     * @param int $sqlTypeId
     */
    public function __construct(?string $fieldId = null, ?string $localizedName = null, ?int $sqlTypeId = null)
    {
        $this
            ->setFieldId($fieldId)
            ->setLocalizedName($localizedName)
            ->setSqlTypeId($sqlTypeId);
    }
    /**
     * Get fieldId value
     * @return string|null
     */
    public function getFieldId(): ?string
    {
        return $this->fieldId;
    }
    /**
     * Set fieldId value
     * @param string $fieldId
     * @return \Pggns\MidocoApi\Mis\StructType\CampaignFieldType
     */
    public function setFieldId(?string $fieldId = null): self
    {
        // validation for constraint: string
        if (!is_null($fieldId) && !is_string($fieldId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldId, true), gettype($fieldId)), __LINE__);
        }
        $this->fieldId = $fieldId;
        
        return $this;
    }
    /**
     * Get localizedName value
     * @return string|null
     */
    public function getLocalizedName(): ?string
    {
        return $this->localizedName;
    }
    /**
     * Set localizedName value
     * @param string $localizedName
     * @return \Pggns\MidocoApi\Mis\StructType\CampaignFieldType
     */
    public function setLocalizedName(?string $localizedName = null): self
    {
        // validation for constraint: string
        if (!is_null($localizedName) && !is_string($localizedName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localizedName, true), gettype($localizedName)), __LINE__);
        }
        $this->localizedName = $localizedName;
        
        return $this;
    }
    /**
     * Get sqlTypeId value
     * @return int|null
     */
    public function getSqlTypeId(): ?int
    {
        return $this->sqlTypeId;
    }
    /**
     * Set sqlTypeId value
     * @param int $sqlTypeId
     * @return \Pggns\MidocoApi\Mis\StructType\CampaignFieldType
     */
    public function setSqlTypeId(?int $sqlTypeId = null): self
    {
        // validation for constraint: int
        if (!is_null($sqlTypeId) && !(is_int($sqlTypeId) || ctype_digit($sqlTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sqlTypeId, true), gettype($sqlTypeId)), __LINE__);
        }
        $this->sqlTypeId = $sqlTypeId;
        
        return $this;
    }
}
