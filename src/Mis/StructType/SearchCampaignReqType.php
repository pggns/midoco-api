<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCampaignReqType StructType
 * @subpackage Structs
 */
class SearchCampaignReqType extends AbstractStructBase
{
    /**
     * The MidocoMisCampaign
     * Meta information extracted from the WSDL
     * - ref: MidocoMisCampaign
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign $MidocoMisCampaign = null;
    /**
     * The participate
     * @var bool|null
     */
    protected ?bool $participate = null;
    /**
     * Constructor method for SearchCampaignReqType
     * @uses SearchCampaignReqType::setMidocoMisCampaign()
     * @uses SearchCampaignReqType::setParticipate()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign $midocoMisCampaign
     * @param bool $participate
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign $midocoMisCampaign = null, ?bool $participate = null)
    {
        $this
            ->setMidocoMisCampaign($midocoMisCampaign)
            ->setParticipate($participate);
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
     * @return \Pggns\MidocoApi\Mis\StructType\SearchCampaignReqType
     */
    public function setMidocoMisCampaign(?\Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign $midocoMisCampaign = null): self
    {
        $this->MidocoMisCampaign = $midocoMisCampaign;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\SearchCampaignReqType
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
