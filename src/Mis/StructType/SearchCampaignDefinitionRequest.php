<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCampaignDefinitionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchCampaignDefinitionRequest extends AbstractStructBase
{
    /**
     * The MidocoCampaignSearch
     * Meta information extracted from the WSDL
     * - ref: MidocoCampaignSearch
     * @var \Pggns\MidocoApi\Mis\StructType\CampaignSearchDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\CampaignSearchDTO $MidocoCampaignSearch = null;
    /**
     * Constructor method for SearchCampaignDefinitionRequest
     * @uses SearchCampaignDefinitionRequest::setMidocoCampaignSearch()
     * @param \Pggns\MidocoApi\Mis\StructType\CampaignSearchDTO $midocoCampaignSearch
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\CampaignSearchDTO $midocoCampaignSearch = null)
    {
        $this
            ->setMidocoCampaignSearch($midocoCampaignSearch);
    }
    /**
     * Get MidocoCampaignSearch value
     * @return \Pggns\MidocoApi\Mis\StructType\CampaignSearchDTO|null
     */
    public function getMidocoCampaignSearch(): ?\Pggns\MidocoApi\Mis\StructType\CampaignSearchDTO
    {
        return $this->MidocoCampaignSearch;
    }
    /**
     * Set MidocoCampaignSearch value
     * @param \Pggns\MidocoApi\Mis\StructType\CampaignSearchDTO $midocoCampaignSearch
     * @return \Pggns\MidocoApi\Mis\StructType\SearchCampaignDefinitionRequest
     */
    public function setMidocoCampaignSearch(?\Pggns\MidocoApi\Mis\StructType\CampaignSearchDTO $midocoCampaignSearch = null): self
    {
        $this->MidocoCampaignSearch = $midocoCampaignSearch;
        
        return $this;
    }
}
