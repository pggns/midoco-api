<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchTextTemplateRequest StructType
 * @subpackage Structs
 */
class SearchTextTemplateRequest extends AbstractStructBase
{
    /**
     * The MidocoTextTemplateSearch
     * Meta information extracted from the WSDL
     * - ref: MidocoTextTemplateSearch
     * @var \Pggns\MidocoApi\Api\Mis\StructType\TextTemplateSearchDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Mis\StructType\TextTemplateSearchDTO $MidocoTextTemplateSearch = null;
    /**
     * Constructor method for SearchTextTemplateRequest
     * @uses SearchTextTemplateRequest::setMidocoTextTemplateSearch()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\TextTemplateSearchDTO $midocoTextTemplateSearch
     */
    public function __construct(?\Pggns\MidocoApi\Api\Mis\StructType\TextTemplateSearchDTO $midocoTextTemplateSearch = null)
    {
        $this
            ->setMidocoTextTemplateSearch($midocoTextTemplateSearch);
    }
    /**
     * Get MidocoTextTemplateSearch value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\TextTemplateSearchDTO|null
     */
    public function getMidocoTextTemplateSearch(): ?\Pggns\MidocoApi\Api\Mis\StructType\TextTemplateSearchDTO
    {
        return $this->MidocoTextTemplateSearch;
    }
    /**
     * Set MidocoTextTemplateSearch value
     * @param \Pggns\MidocoApi\Api\Mis\StructType\TextTemplateSearchDTO $midocoTextTemplateSearch
     * @return \Pggns\MidocoApi\Api\Mis\StructType\SearchTextTemplateRequest
     */
    public function setMidocoTextTemplateSearch(?\Pggns\MidocoApi\Api\Mis\StructType\TextTemplateSearchDTO $midocoTextTemplateSearch = null): self
    {
        $this->MidocoTextTemplateSearch = $midocoTextTemplateSearch;
        
        return $this;
    }
}
