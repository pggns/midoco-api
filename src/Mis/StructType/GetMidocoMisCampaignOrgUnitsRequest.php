<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoMisCampaignOrgUnitsRequest StructType
 * @subpackage Structs
 */
class GetMidocoMisCampaignOrgUnitsRequest extends AbstractStructBase
{
    /**
     * The campaignId
     * @var int|null
     */
    protected ?int $campaignId = null;
    /**
     * The participate
     * @var bool|null
     */
    protected ?bool $participate = null;
    /**
     * Constructor method for GetMidocoMisCampaignOrgUnitsRequest
     * @uses GetMidocoMisCampaignOrgUnitsRequest::setCampaignId()
     * @uses GetMidocoMisCampaignOrgUnitsRequest::setParticipate()
     * @param int $campaignId
     * @param bool $participate
     */
    public function __construct(?int $campaignId = null, ?bool $participate = null)
    {
        $this
            ->setCampaignId($campaignId)
            ->setParticipate($participate);
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
     * @return \Pggns\MidocoApi\Mis\StructType\GetMidocoMisCampaignOrgUnitsRequest
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
     * Get participate value
     * @return bool|null
     */
    public function getParticipate(): ?bool
    {
        return $this->participate;
    }
    /**
     * Set participate value
     * @param bool $participate
     * @return \Pggns\MidocoApi\Mis\StructType\GetMidocoMisCampaignOrgUnitsRequest
     */
    public function setParticipate(?bool $participate = null): self
    {
        // validation for constraint: boolean
        if (!is_null($participate) && !is_bool($participate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($participate, true), gettype($participate)), __LINE__);
        }
        $this->participate = $participate;
        
        return $this;
    }
}
