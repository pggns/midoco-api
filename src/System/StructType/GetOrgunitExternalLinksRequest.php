<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgunitExternalLinksRequest StructType
 * @subpackage Structs
 */
class GetOrgunitExternalLinksRequest extends AbstractStructBase
{
    /**
     * The MidocoOrgunitExternalLink
     * Meta information extracted from the WSDL
     * - ref: MidocoOrgunitExternalLink
     * @var \Pggns\MidocoApi\System\StructType\OrgunitExternalLinkDTO|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\OrgunitExternalLinkDTO $MidocoOrgunitExternalLink = null;
    /**
     * Constructor method for GetOrgunitExternalLinksRequest
     * @uses GetOrgunitExternalLinksRequest::setMidocoOrgunitExternalLink()
     * @param \Pggns\MidocoApi\System\StructType\OrgunitExternalLinkDTO $midocoOrgunitExternalLink
     */
    public function __construct(?\Pggns\MidocoApi\System\StructType\OrgunitExternalLinkDTO $midocoOrgunitExternalLink = null)
    {
        $this
            ->setMidocoOrgunitExternalLink($midocoOrgunitExternalLink);
    }
    /**
     * Get MidocoOrgunitExternalLink value
     * @return \Pggns\MidocoApi\System\StructType\OrgunitExternalLinkDTO|null
     */
    public function getMidocoOrgunitExternalLink(): ?\Pggns\MidocoApi\System\StructType\OrgunitExternalLinkDTO
    {
        return $this->MidocoOrgunitExternalLink;
    }
    /**
     * Set MidocoOrgunitExternalLink value
     * @param \Pggns\MidocoApi\System\StructType\OrgunitExternalLinkDTO $midocoOrgunitExternalLink
     * @return \Pggns\MidocoApi\System\StructType\GetOrgunitExternalLinksRequest
     */
    public function setMidocoOrgunitExternalLink(?\Pggns\MidocoApi\System\StructType\OrgunitExternalLinkDTO $midocoOrgunitExternalLink = null): self
    {
        $this->MidocoOrgunitExternalLink = $midocoOrgunitExternalLink;
        
        return $this;
    }
}
