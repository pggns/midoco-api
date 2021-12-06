<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCampaignRequest StructType
 * @subpackage Structs
 */
class DeleteCampaignRequest extends AbstractStructBase
{
    /**
     * The campaignId
     * @var int|null
     */
    protected ?int $campaignId = null;
    /**
     * Constructor method for DeleteCampaignRequest
     * @uses DeleteCampaignRequest::setCampaignId()
     * @param int $campaignId
     */
    public function __construct(?int $campaignId = null)
    {
        $this
            ->setCampaignId($campaignId);
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
     * @return \Pggns\MidocoApi\Mis\StructType\DeleteCampaignRequest
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
}
