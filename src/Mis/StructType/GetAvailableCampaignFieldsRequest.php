<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableCampaignFieldsRequest StructType
 * @subpackage Structs
 */
class GetAvailableCampaignFieldsRequest extends AbstractStructBase
{
    /**
     * The language
     * @var string|null
     */
    protected ?string $language = null;
    /**
     * Constructor method for GetAvailableCampaignFieldsRequest
     * @uses GetAvailableCampaignFieldsRequest::setLanguage()
     * @param string $language
     */
    public function __construct(?string $language = null)
    {
        $this
            ->setLanguage($language);
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
     * @return \Pggns\MidocoApi\Mis\StructType\GetAvailableCampaignFieldsRequest
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
