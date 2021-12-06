<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CampaignWorkflowDTO StructType
 * @subpackage Structs
 */
class CampaignWorkflowDTO extends AbstractStructBase
{
    /**
     * The MidocoCrmCampaign
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCampaign
     * @var \Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO $MidocoCrmCampaign = null;
    /**
     * The workflow
     * @var string|null
     */
    protected ?string $workflow = null;
    /**
     * Constructor method for CampaignWorkflowDTO
     * @uses CampaignWorkflowDTO::setMidocoCrmCampaign()
     * @uses CampaignWorkflowDTO::setWorkflow()
     * @param \Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO $midocoCrmCampaign
     * @param string $workflow
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO $midocoCrmCampaign = null, ?string $workflow = null)
    {
        $this
            ->setMidocoCrmCampaign($midocoCrmCampaign)
            ->setWorkflow($workflow);
    }
    /**
     * Get MidocoCrmCampaign value
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO|null
     */
    public function getMidocoCrmCampaign(): ?\Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO
    {
        return $this->MidocoCrmCampaign;
    }
    /**
     * Set MidocoCrmCampaign value
     * @param \Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO $midocoCrmCampaign
     * @return \Pggns\MidocoApi\Mis\StructType\CampaignWorkflowDTO
     */
    public function setMidocoCrmCampaign(?\Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO $midocoCrmCampaign = null): self
    {
        $this->MidocoCrmCampaign = $midocoCrmCampaign;
        
        return $this;
    }
    /**
     * Get workflow value
     * @return string|null
     */
    public function getWorkflow(): ?string
    {
        return $this->workflow;
    }
    /**
     * Set workflow value
     * @param string $workflow
     * @return \Pggns\MidocoApi\Mis\StructType\CampaignWorkflowDTO
     */
    public function setWorkflow(?string $workflow = null): self
    {
        // validation for constraint: string
        if (!is_null($workflow) && !is_string($workflow)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workflow, true), gettype($workflow)), __LINE__);
        }
        $this->workflow = $workflow;
        
        return $this;
    }
}
