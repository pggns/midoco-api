<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PerformOtherCampaignRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PerformOtherCampaignRequest extends AbstractStructBase
{
    /**
     * The MidocoCampaignExecute
     * Meta information extracted from the WSDL
     * - ref: MidocoCampaignExecute
     * @var \Pggns\MidocoApi\Mis\StructType\CampaignExecuteDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\CampaignExecuteDTO $MidocoCampaignExecute = null;
    /**
     * Constructor method for PerformOtherCampaignRequest
     * @uses PerformOtherCampaignRequest::setMidocoCampaignExecute()
     * @param \Pggns\MidocoApi\Mis\StructType\CampaignExecuteDTO $midocoCampaignExecute
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\CampaignExecuteDTO $midocoCampaignExecute = null)
    {
        $this
            ->setMidocoCampaignExecute($midocoCampaignExecute);
    }
    /**
     * Get MidocoCampaignExecute value
     * @return \Pggns\MidocoApi\Mis\StructType\CampaignExecuteDTO|null
     */
    public function getMidocoCampaignExecute(): ?\Pggns\MidocoApi\Mis\StructType\CampaignExecuteDTO
    {
        return $this->MidocoCampaignExecute;
    }
    /**
     * Set MidocoCampaignExecute value
     * @param \Pggns\MidocoApi\Mis\StructType\CampaignExecuteDTO $midocoCampaignExecute
     * @return \Pggns\MidocoApi\Mis\StructType\PerformOtherCampaignRequest
     */
    public function setMidocoCampaignExecute(?\Pggns\MidocoApi\Mis\StructType\CampaignExecuteDTO $midocoCampaignExecute = null): self
    {
        $this->MidocoCampaignExecute = $midocoCampaignExecute;
        
        return $this;
    }
}
