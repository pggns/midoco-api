<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MisCampaignResultWSType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MisCampaignResultWSType extends AbstractStructBase
{
    /**
     * The MidocoPageContent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoPageContent
     * @var \Pggns\MidocoApi\Mis\StructType\PageContentType|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\PageContentType $MidocoPageContent = null;
    /**
     * The pageNo
     * @var int|null
     */
    protected ?int $pageNo = null;
    /**
     * The campaignId
     * @var int|null
     */
    protected ?int $campaignId = null;
    /**
     * Constructor method for MisCampaignResultWSType
     * @uses MisCampaignResultWSType::setMidocoPageContent()
     * @uses MisCampaignResultWSType::setPageNo()
     * @uses MisCampaignResultWSType::setCampaignId()
     * @param \Pggns\MidocoApi\Mis\StructType\PageContentType $midocoPageContent
     * @param int $pageNo
     * @param int $campaignId
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\PageContentType $midocoPageContent = null, ?int $pageNo = null, ?int $campaignId = null)
    {
        $this
            ->setMidocoPageContent($midocoPageContent)
            ->setPageNo($pageNo)
            ->setCampaignId($campaignId);
    }
    /**
     * Get MidocoPageContent value
     * @return \Pggns\MidocoApi\Mis\StructType\PageContentType|null
     */
    public function getMidocoPageContent(): ?\Pggns\MidocoApi\Mis\StructType\PageContentType
    {
        return $this->MidocoPageContent;
    }
    /**
     * Set MidocoPageContent value
     * @param \Pggns\MidocoApi\Mis\StructType\PageContentType $midocoPageContent
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignResultWSType
     */
    public function setMidocoPageContent(?\Pggns\MidocoApi\Mis\StructType\PageContentType $midocoPageContent = null): self
    {
        $this->MidocoPageContent = $midocoPageContent;
        
        return $this;
    }
    /**
     * Get pageNo value
     * @return int|null
     */
    public function getPageNo(): ?int
    {
        return $this->pageNo;
    }
    /**
     * Set pageNo value
     * @param int $pageNo
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignResultWSType
     */
    public function setPageNo(?int $pageNo = null): self
    {
        // validation for constraint: int
        if (!is_null($pageNo) && !(is_int($pageNo) || ctype_digit($pageNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageNo, true), gettype($pageNo)), __LINE__);
        }
        $this->pageNo = $pageNo;
        
        return $this;
    }
    /**
     * Get campaignId value
     * @return int|null
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }
    /**
     * Set campaignId value
     * @param int $campaignId
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignResultWSType
     */
    public function setCampaignId(?int $campaignId = null): self
    {
        // validation for constraint: int
        if (!is_null($campaignId) && !(is_int($campaignId) || ctype_digit($campaignId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($campaignId, true), gettype($campaignId)), __LINE__);
        }
        $this->campaignId = $campaignId;
        
        return $this;
    }
}
