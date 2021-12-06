<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTextTemplateRequest StructType
 * @subpackage Structs
 */
class GetTextTemplateRequest extends AbstractStructBase
{
    /**
     * The MidocoCampaignTemplateId
     * Meta information extracted from the WSDL
     * - ref: MidocoCampaignTemplateId
     * @var \Pggns\MidocoApi\Mis\StructType\CampaignTemplateIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\CampaignTemplateIdDTO $MidocoCampaignTemplateId = null;
    /**
     * Constructor method for GetTextTemplateRequest
     * @uses GetTextTemplateRequest::setMidocoCampaignTemplateId()
     * @param \Pggns\MidocoApi\Mis\StructType\CampaignTemplateIdDTO $midocoCampaignTemplateId
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\CampaignTemplateIdDTO $midocoCampaignTemplateId = null)
    {
        $this
            ->setMidocoCampaignTemplateId($midocoCampaignTemplateId);
    }
    /**
     * Get MidocoCampaignTemplateId value
     * @return \Pggns\MidocoApi\Mis\StructType\CampaignTemplateIdDTO|null
     */
    public function getMidocoCampaignTemplateId(): ?\Pggns\MidocoApi\Mis\StructType\CampaignTemplateIdDTO
    {
        return $this->MidocoCampaignTemplateId;
    }
    /**
     * Set MidocoCampaignTemplateId value
     * @param \Pggns\MidocoApi\Mis\StructType\CampaignTemplateIdDTO $midocoCampaignTemplateId
     * @return \Pggns\MidocoApi\Mis\StructType\GetTextTemplateRequest
     */
    public function setMidocoCampaignTemplateId(?\Pggns\MidocoApi\Mis\StructType\CampaignTemplateIdDTO $midocoCampaignTemplateId = null): self
    {
        $this->MidocoCampaignTemplateId = $midocoCampaignTemplateId;
        
        return $this;
    }
}
