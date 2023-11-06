<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateTextTemplateRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateTextTemplateRequest extends AbstractStructBase
{
    /**
     * The MidocoCampaignTemplate
     * Meta information extracted from the WSDL
     * - ref: MidocoCampaignTemplate
     * @var \Pggns\MidocoApi\Mis\StructType\CrmCampaignTemplateDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\CrmCampaignTemplateDTO $MidocoCampaignTemplate = null;
    /**
     * Constructor method for CreateTextTemplateRequest
     * @uses CreateTextTemplateRequest::setMidocoCampaignTemplate()
     * @param \Pggns\MidocoApi\Mis\StructType\CrmCampaignTemplateDTO $midocoCampaignTemplate
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\CrmCampaignTemplateDTO $midocoCampaignTemplate = null)
    {
        $this
            ->setMidocoCampaignTemplate($midocoCampaignTemplate);
    }
    /**
     * Get MidocoCampaignTemplate value
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCampaignTemplateDTO|null
     */
    public function getMidocoCampaignTemplate(): ?\Pggns\MidocoApi\Mis\StructType\CrmCampaignTemplateDTO
    {
        return $this->MidocoCampaignTemplate;
    }
    /**
     * Set MidocoCampaignTemplate value
     * @param \Pggns\MidocoApi\Mis\StructType\CrmCampaignTemplateDTO $midocoCampaignTemplate
     * @return \Pggns\MidocoApi\Mis\StructType\CreateTextTemplateRequest
     */
    public function setMidocoCampaignTemplate(?\Pggns\MidocoApi\Mis\StructType\CrmCampaignTemplateDTO $midocoCampaignTemplate = null): self
    {
        $this->MidocoCampaignTemplate = $midocoCampaignTemplate;
        
        return $this;
    }
}
