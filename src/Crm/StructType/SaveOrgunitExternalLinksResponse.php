<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrgunitExternalLinksResponse StructType
 * @subpackage Structs
 */
class SaveOrgunitExternalLinksResponse extends AbstractStructBase
{
    /**
     * The MidocoOrgunitExternalLink
     * Meta information extracted from the WSDL
     * - ref: MidocoOrgunitExternalLink
     * @var \Pggns\MidocoApi\Crm\StructType\OrgunitExternalLinkDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\OrgunitExternalLinkDTO $MidocoOrgunitExternalLink = null;
    /**
     * Constructor method for SaveOrgunitExternalLinksResponse
     * @uses SaveOrgunitExternalLinksResponse::setMidocoOrgunitExternalLink()
     * @param \Pggns\MidocoApi\Crm\StructType\OrgunitExternalLinkDTO $midocoOrgunitExternalLink
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\OrgunitExternalLinkDTO $midocoOrgunitExternalLink = null)
    {
        $this
            ->setMidocoOrgunitExternalLink($midocoOrgunitExternalLink);
    }
    /**
     * Get MidocoOrgunitExternalLink value
     * @return \Pggns\MidocoApi\Crm\StructType\OrgunitExternalLinkDTO|null
     */
    public function getMidocoOrgunitExternalLink(): ?\Pggns\MidocoApi\Crm\StructType\OrgunitExternalLinkDTO
    {
        return $this->MidocoOrgunitExternalLink;
    }
    /**
     * Set MidocoOrgunitExternalLink value
     * @param \Pggns\MidocoApi\Crm\StructType\OrgunitExternalLinkDTO $midocoOrgunitExternalLink
     * @return \Pggns\MidocoApi\Crm\StructType\SaveOrgunitExternalLinksResponse
     */
    public function setMidocoOrgunitExternalLink(?\Pggns\MidocoApi\Crm\StructType\OrgunitExternalLinkDTO $midocoOrgunitExternalLink = null): self
    {
        $this->MidocoOrgunitExternalLink = $midocoOrgunitExternalLink;
        
        return $this;
    }
}
