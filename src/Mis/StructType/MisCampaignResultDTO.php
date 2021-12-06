<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MisCampaignResultDTO StructType
 * @subpackage Structs
 */
class MisCampaignResultDTO extends AbstractStructBase
{
    /**
     * The campaignId
     * @var int|null
     */
    protected ?int $campaignId = null;
    /**
     * The pageContent
     * @var string|null
     */
    protected ?string $pageContent = null;
    /**
     * The pageNo
     * @var int|null
     */
    protected ?int $pageNo = null;
    /**
     * Constructor method for MisCampaignResultDTO
     * @uses MisCampaignResultDTO::setCampaignId()
     * @uses MisCampaignResultDTO::setPageContent()
     * @uses MisCampaignResultDTO::setPageNo()
     * @param int $campaignId
     * @param string $pageContent
     * @param int $pageNo
     */
    public function __construct(?int $campaignId = null, ?string $pageContent = null, ?int $pageNo = null)
    {
        $this
            ->setCampaignId($campaignId)
            ->setPageContent($pageContent)
            ->setPageNo($pageNo);
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignResultDTO
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
    /**
     * Get pageContent value
     * @return string|null
     */
    public function getPageContent(): ?string
    {
        return $this->pageContent;
    }
    /**
     * Set pageContent value
     * @param string $pageContent
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignResultDTO
     */
    public function setPageContent(?string $pageContent = null): self
    {
        // validation for constraint: string
        if (!is_null($pageContent) && !is_string($pageContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pageContent, true), gettype($pageContent)), __LINE__);
        }
        $this->pageContent = $pageContent;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignResultDTO
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
}
