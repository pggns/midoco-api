<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCentralCampaignAssignedOrgUnitRequest StructType
 * @subpackage Structs
 */
class DeleteCentralCampaignAssignedOrgUnitRequest extends AbstractStructBase
{
    /**
     * The campaignOrgUnitId
     * @var int|null
     */
    protected ?int $campaignOrgUnitId = null;
    /**
     * Constructor method for DeleteCentralCampaignAssignedOrgUnitRequest
     * @uses DeleteCentralCampaignAssignedOrgUnitRequest::setCampaignOrgUnitId()
     * @param int $campaignOrgUnitId
     */
    public function __construct(?int $campaignOrgUnitId = null)
    {
        $this
            ->setCampaignOrgUnitId($campaignOrgUnitId);
    }
    /**
     * Get campaignOrgUnitId value
     * @return int|null
     */
    public function getCampaignOrgUnitId(): ?int
    {
        return $this->campaignOrgUnitId;
    }
    /**
     * Set campaignOrgUnitId value
     * @param int $campaignOrgUnitId
     * @return \Pggns\MidocoApi\Mis\StructType\DeleteCentralCampaignAssignedOrgUnitRequest
     */
    public function setCampaignOrgUnitId(?int $campaignOrgUnitId = null): self
    {
        // validation for constraint: int
        if (!is_null($campaignOrgUnitId) && !(is_int($campaignOrgUnitId) || ctype_digit($campaignOrgUnitId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($campaignOrgUnitId, true), gettype($campaignOrgUnitId)), __LINE__);
        }
        $this->campaignOrgUnitId = $campaignOrgUnitId;
        
        return $this;
    }
}
