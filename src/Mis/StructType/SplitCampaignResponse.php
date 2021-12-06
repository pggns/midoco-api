<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SplitCampaignResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: splitCampaign --- the selected campaign is split, a name is given for the new campaign, the type of media entry to be searched for is provided (email, mobile). The new Campaign is returned (remember to apply the splitting in MIS
 * database)
 * @subpackage Structs
 */
class SplitCampaignResponse extends AbstractStructBase
{
    /**
     * The MidocoMisCampaign
     * Meta information extracted from the WSDL
     * - ref: MidocoMisCampaign
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign $MidocoMisCampaign = null;
    /**
     * The newBaseCampaignId
     * @var int|null
     */
    protected ?int $newBaseCampaignId = null;
    /**
     * The newCampaignId
     * @var int|null
     */
    protected ?int $newCampaignId = null;
    /**
     * Constructor method for SplitCampaignResponse
     * @uses SplitCampaignResponse::setMidocoMisCampaign()
     * @uses SplitCampaignResponse::setNewBaseCampaignId()
     * @uses SplitCampaignResponse::setNewCampaignId()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign $midocoMisCampaign
     * @param int $newBaseCampaignId
     * @param int $newCampaignId
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign $midocoMisCampaign = null, ?int $newBaseCampaignId = null, ?int $newCampaignId = null)
    {
        $this
            ->setMidocoMisCampaign($midocoMisCampaign)
            ->setNewBaseCampaignId($newBaseCampaignId)
            ->setNewCampaignId($newCampaignId);
    }
    /**
     * Get MidocoMisCampaign value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign|null
     */
    public function getMidocoMisCampaign(): ?\Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign
    {
        return $this->MidocoMisCampaign;
    }
    /**
     * Set MidocoMisCampaign value
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign $midocoMisCampaign
     * @return \Pggns\MidocoApi\Mis\StructType\SplitCampaignResponse
     */
    public function setMidocoMisCampaign(?\Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign $midocoMisCampaign = null): self
    {
        $this->MidocoMisCampaign = $midocoMisCampaign;
        
        return $this;
    }
    /**
     * Get newBaseCampaignId value
     * @return int|null
     */
    public function getNewBaseCampaignId(): ?int
    {
        return $this->newBaseCampaignId;
    }
    /**
     * Set newBaseCampaignId value
     * @param int $newBaseCampaignId
     * @return \Pggns\MidocoApi\Mis\StructType\SplitCampaignResponse
     */
    public function setNewBaseCampaignId(?int $newBaseCampaignId = null): self
    {
        // validation for constraint: int
        if (!is_null($newBaseCampaignId) && !(is_int($newBaseCampaignId) || ctype_digit($newBaseCampaignId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($newBaseCampaignId, true), gettype($newBaseCampaignId)), __LINE__);
        }
        $this->newBaseCampaignId = $newBaseCampaignId;
        
        return $this;
    }
    /**
     * Get newCampaignId value
     * @return int|null
     */
    public function getNewCampaignId(): ?int
    {
        return $this->newCampaignId;
    }
    /**
     * Set newCampaignId value
     * @param int $newCampaignId
     * @return \Pggns\MidocoApi\Mis\StructType\SplitCampaignResponse
     */
    public function setNewCampaignId(?int $newCampaignId = null): self
    {
        // validation for constraint: int
        if (!is_null($newCampaignId) && !(is_int($newCampaignId) || ctype_digit($newCampaignId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($newCampaignId, true), gettype($newCampaignId)), __LINE__);
        }
        $this->newCampaignId = $newCampaignId;
        
        return $this;
    }
}
