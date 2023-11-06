<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCampaignResultsInfoRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCampaignResultsInfoRequest extends AbstractStructBase
{
    /**
     * The campaignId
     * @var int|null
     */
    protected ?int $campaignId = null;
    /**
     * The campaignOrgUnit
     * @var string|null
     */
    protected ?string $campaignOrgUnit = null;
    /**
     * The notExecutedOnly
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $notExecutedOnly = null;
    /**
     * The maxResults
     * @var int|null
     */
    protected ?int $maxResults = null;
    /**
     * Constructor method for GetCampaignResultsInfoRequest
     * @uses GetCampaignResultsInfoRequest::setCampaignId()
     * @uses GetCampaignResultsInfoRequest::setCampaignOrgUnit()
     * @uses GetCampaignResultsInfoRequest::setNotExecutedOnly()
     * @uses GetCampaignResultsInfoRequest::setMaxResults()
     * @param int $campaignId
     * @param string $campaignOrgUnit
     * @param bool $notExecutedOnly
     * @param int $maxResults
     */
    public function __construct(?int $campaignId = null, ?string $campaignOrgUnit = null, ?bool $notExecutedOnly = true, ?int $maxResults = null)
    {
        $this
            ->setCampaignId($campaignId)
            ->setCampaignOrgUnit($campaignOrgUnit)
            ->setNotExecutedOnly($notExecutedOnly)
            ->setMaxResults($maxResults);
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
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignResultsInfoRequest
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
     * Get campaignOrgUnit value
     * @return string|null
     */
    public function getCampaignOrgUnit(): ?string
    {
        return $this->campaignOrgUnit;
    }
    /**
     * Set campaignOrgUnit value
     * @param string $campaignOrgUnit
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignResultsInfoRequest
     */
    public function setCampaignOrgUnit(?string $campaignOrgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($campaignOrgUnit) && !is_string($campaignOrgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($campaignOrgUnit, true), gettype($campaignOrgUnit)), __LINE__);
        }
        $this->campaignOrgUnit = $campaignOrgUnit;
        
        return $this;
    }
    /**
     * Get notExecutedOnly value
     * @return bool|null
     */
    public function getNotExecutedOnly(): ?bool
    {
        return $this->notExecutedOnly;
    }
    /**
     * Set notExecutedOnly value
     * @param bool $notExecutedOnly
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignResultsInfoRequest
     */
    public function setNotExecutedOnly(?bool $notExecutedOnly = true): self
    {
        // validation for constraint: boolean
        if (!is_null($notExecutedOnly) && !is_bool($notExecutedOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($notExecutedOnly, true), gettype($notExecutedOnly)), __LINE__);
        }
        $this->notExecutedOnly = $notExecutedOnly;
        
        return $this;
    }
    /**
     * Get maxResults value
     * @return int|null
     */
    public function getMaxResults(): ?int
    {
        return $this->maxResults;
    }
    /**
     * Set maxResults value
     * @param int $maxResults
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignResultsInfoRequest
     */
    public function setMaxResults(?int $maxResults = null): self
    {
        // validation for constraint: int
        if (!is_null($maxResults) && !(is_int($maxResults) || ctype_digit($maxResults))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxResults, true), gettype($maxResults)), __LINE__);
        }
        $this->maxResults = $maxResults;
        
        return $this;
    }
}
