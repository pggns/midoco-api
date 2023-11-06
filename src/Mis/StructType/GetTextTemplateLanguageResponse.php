<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTextTemplateLanguageResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getTextTemplateLanguage --- return a text template having the given template id and language id
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTextTemplateLanguageResponse extends AbstractStructBase
{
    /**
     * The MidocoCampaignTemplate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCampaignTemplate
     * @var \Pggns\MidocoApi\Mis\StructType\CrmCampaignTemplateDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\CrmCampaignTemplateDTO $MidocoCampaignTemplate = null;
    /**
     * Constructor method for GetTextTemplateLanguageResponse
     * @uses GetTextTemplateLanguageResponse::setMidocoCampaignTemplate()
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
     * @return \Pggns\MidocoApi\Mis\StructType\GetTextTemplateLanguageResponse
     */
    public function setMidocoCampaignTemplate(?\Pggns\MidocoApi\Mis\StructType\CrmCampaignTemplateDTO $midocoCampaignTemplate = null): self
    {
        $this->MidocoCampaignTemplate = $midocoCampaignTemplate;
        
        return $this;
    }
}
