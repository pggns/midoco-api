<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PerformFollowupWorkRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PerformFollowupWorkRequest extends AbstractStructBase
{
    /**
     * The MidocoCampaignWorkflow
     * Meta information extracted from the WSDL
     * - ref: MidocoCampaignWorkflow
     * @var \Pggns\MidocoApi\Mis\StructType\CampaignWorkflowDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\CampaignWorkflowDTO $MidocoCampaignWorkflow = null;
    /**
     * Constructor method for PerformFollowupWorkRequest
     * @uses PerformFollowupWorkRequest::setMidocoCampaignWorkflow()
     * @param \Pggns\MidocoApi\Mis\StructType\CampaignWorkflowDTO $midocoCampaignWorkflow
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\CampaignWorkflowDTO $midocoCampaignWorkflow = null)
    {
        $this
            ->setMidocoCampaignWorkflow($midocoCampaignWorkflow);
    }
    /**
     * Get MidocoCampaignWorkflow value
     * @return \Pggns\MidocoApi\Mis\StructType\CampaignWorkflowDTO|null
     */
    public function getMidocoCampaignWorkflow(): ?\Pggns\MidocoApi\Mis\StructType\CampaignWorkflowDTO
    {
        return $this->MidocoCampaignWorkflow;
    }
    /**
     * Set MidocoCampaignWorkflow value
     * @param \Pggns\MidocoApi\Mis\StructType\CampaignWorkflowDTO $midocoCampaignWorkflow
     * @return \Pggns\MidocoApi\Mis\StructType\PerformFollowupWorkRequest
     */
    public function setMidocoCampaignWorkflow(?\Pggns\MidocoApi\Mis\StructType\CampaignWorkflowDTO $midocoCampaignWorkflow = null): self
    {
        $this->MidocoCampaignWorkflow = $midocoCampaignWorkflow;
        
        return $this;
    }
}
