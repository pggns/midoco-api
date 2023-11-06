<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TextTemplateSearchDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TextTemplateSearchDTO extends AbstractStructBase
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The defaultLanguage
     * @var string|null
     */
    protected ?string $defaultLanguage = null;
    /**
     * The visibility
     * @var int|null
     */
    protected ?int $visibility = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * Constructor method for TextTemplateSearchDTO
     * @uses TextTemplateSearchDTO::setDescription()
     * @uses TextTemplateSearchDTO::setDefaultLanguage()
     * @uses TextTemplateSearchDTO::setVisibility()
     * @uses TextTemplateSearchDTO::setOrgUnit()
     * @param string $description
     * @param string $defaultLanguage
     * @param int $visibility
     * @param string $orgUnit
     */
    public function __construct(?string $description = null, ?string $defaultLanguage = null, ?int $visibility = null, ?string $orgUnit = null)
    {
        $this
            ->setDescription($description)
            ->setDefaultLanguage($defaultLanguage)
            ->setVisibility($visibility)
            ->setOrgUnit($orgUnit);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Mis\StructType\TextTemplateSearchDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get defaultLanguage value
     * @return string|null
     */
    public function getDefaultLanguage(): ?string
    {
        return $this->defaultLanguage;
    }
    /**
     * Set defaultLanguage value
     * @param string $defaultLanguage
     * @return \Pggns\MidocoApi\Mis\StructType\TextTemplateSearchDTO
     */
    public function setDefaultLanguage(?string $defaultLanguage = null): self
    {
        // validation for constraint: string
        if (!is_null($defaultLanguage) && !is_string($defaultLanguage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultLanguage, true), gettype($defaultLanguage)), __LINE__);
        }
        $this->defaultLanguage = $defaultLanguage;
        
        return $this;
    }
    /**
     * Get visibility value
     * @return int|null
     */
    public function getVisibility(): ?int
    {
        return $this->visibility;
    }
    /**
     * Set visibility value
     * @param int $visibility
     * @return \Pggns\MidocoApi\Mis\StructType\TextTemplateSearchDTO
     */
    public function setVisibility(?int $visibility = null): self
    {
        // validation for constraint: int
        if (!is_null($visibility) && !(is_int($visibility) || ctype_digit($visibility))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($visibility, true), gettype($visibility)), __LINE__);
        }
        $this->visibility = $visibility;
        
        return $this;
    }
    /**
     * Get orgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Mis\StructType\TextTemplateSearchDTO
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
        return $this;
    }
}
