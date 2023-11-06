<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CampaignTemplateLanguageIdDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CampaignTemplateLanguageIdDTO extends AbstractStructBase
{
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The language
     * @var string|null
     */
    protected ?string $language = null;
    /**
     * Constructor method for CampaignTemplateLanguageIdDTO
     * @uses CampaignTemplateLanguageIdDTO::setId()
     * @uses CampaignTemplateLanguageIdDTO::setLanguage()
     * @param int $id
     * @param string $language
     */
    public function __construct(?int $id = null, ?string $language = null)
    {
        $this
            ->setId($id)
            ->setLanguage($language);
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Mis\StructType\CampaignTemplateLanguageIdDTO
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Pggns\MidocoApi\Mis\StructType\CampaignTemplateLanguageIdDTO
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        
        return $this;
    }
}
