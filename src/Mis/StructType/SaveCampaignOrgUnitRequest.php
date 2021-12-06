<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCampaignOrgUnitRequest StructType
 * @subpackage Structs
 */
class SaveCampaignOrgUnitRequest extends AbstractStructBase
{
    /**
     * The MidocoMisCampaignOrgUnit
     * Meta information extracted from the WSDL
     * - ref: MidocoMisCampaignOrgUnit
     * @var \Pggns\MidocoApi\Mis\StructType\MisCampaignOrgUnitDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MisCampaignOrgUnitDTO $MidocoMisCampaignOrgUnit = null;
    /**
     * The campaign_unit_name
     * @var string|null
     */
    protected ?string $campaign_unit_name = null;
    /**
     * Constructor method for SaveCampaignOrgUnitRequest
     * @uses SaveCampaignOrgUnitRequest::setMidocoMisCampaignOrgUnit()
     * @uses SaveCampaignOrgUnitRequest::setCampaign_unit_name()
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignOrgUnitDTO $midocoMisCampaignOrgUnit
     * @param string $campaign_unit_name
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\MisCampaignOrgUnitDTO $midocoMisCampaignOrgUnit = null, ?string $campaign_unit_name = null)
    {
        $this
            ->setMidocoMisCampaignOrgUnit($midocoMisCampaignOrgUnit)
            ->setCampaign_unit_name($campaign_unit_name);
    }
    /**
     * Get MidocoMisCampaignOrgUnit value
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignOrgUnitDTO|null
     */
    public function getMidocoMisCampaignOrgUnit(): ?\Pggns\MidocoApi\Mis\StructType\MisCampaignOrgUnitDTO
    {
        return $this->MidocoMisCampaignOrgUnit;
    }
    /**
     * Set MidocoMisCampaignOrgUnit value
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignOrgUnitDTO $midocoMisCampaignOrgUnit
     * @return \Pggns\MidocoApi\Mis\StructType\SaveCampaignOrgUnitRequest
     */
    public function setMidocoMisCampaignOrgUnit(?\Pggns\MidocoApi\Mis\StructType\MisCampaignOrgUnitDTO $midocoMisCampaignOrgUnit = null): self
    {
        $this->MidocoMisCampaignOrgUnit = $midocoMisCampaignOrgUnit;
        
        return $this;
    }
    /**
     * Get campaign_unit_name value
     * @return string|null
     */
    public function getCampaign_unit_name(): ?string
    {
        return $this->campaign_unit_name;
    }
    /**
     * Set campaign_unit_name value
     * @param string $campaign_unit_name
     * @return \Pggns\MidocoApi\Mis\StructType\SaveCampaignOrgUnitRequest
     */
    public function setCampaign_unit_name(?string $campaign_unit_name = null): self
    {
        // validation for constraint: string
        if (!is_null($campaign_unit_name) && !is_string($campaign_unit_name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($campaign_unit_name, true), gettype($campaign_unit_name)), __LINE__);
        }
        $this->campaign_unit_name = $campaign_unit_name;
        
        return $this;
    }
}
