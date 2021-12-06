<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateTextTemplateResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: createTextTemplate --- creates a text template
 * @subpackage Structs
 */
class CreateTextTemplateResponse extends AbstractStructBase
{
    /**
     * The MidocoCampaignTemplateLanguageId
     * Meta information extracted from the WSDL
     * - ref: MidocoCampaignTemplateLanguageId
     * @var \Pggns\MidocoApi\Mis\StructType\CampaignTemplateLanguageIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\CampaignTemplateLanguageIdDTO $MidocoCampaignTemplateLanguageId = null;
    /**
     * Constructor method for CreateTextTemplateResponse
     * @uses CreateTextTemplateResponse::setMidocoCampaignTemplateLanguageId()
     * @param \Pggns\MidocoApi\Mis\StructType\CampaignTemplateLanguageIdDTO $midocoCampaignTemplateLanguageId
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\CampaignTemplateLanguageIdDTO $midocoCampaignTemplateLanguageId = null)
    {
        $this
            ->setMidocoCampaignTemplateLanguageId($midocoCampaignTemplateLanguageId);
    }
    /**
     * Get MidocoCampaignTemplateLanguageId value
     * @return \Pggns\MidocoApi\Mis\StructType\CampaignTemplateLanguageIdDTO|null
     */
    public function getMidocoCampaignTemplateLanguageId(): ?\Pggns\MidocoApi\Mis\StructType\CampaignTemplateLanguageIdDTO
    {
        return $this->MidocoCampaignTemplateLanguageId;
    }
    /**
     * Set MidocoCampaignTemplateLanguageId value
     * @param \Pggns\MidocoApi\Mis\StructType\CampaignTemplateLanguageIdDTO $midocoCampaignTemplateLanguageId
     * @return \Pggns\MidocoApi\Mis\StructType\CreateTextTemplateResponse
     */
    public function setMidocoCampaignTemplateLanguageId(?\Pggns\MidocoApi\Mis\StructType\CampaignTemplateLanguageIdDTO $midocoCampaignTemplateLanguageId = null): self
    {
        $this->MidocoCampaignTemplateLanguageId = $midocoCampaignTemplateLanguageId;
        
        return $this;
    }
}
