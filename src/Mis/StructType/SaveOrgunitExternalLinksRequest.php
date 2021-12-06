<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrgunitExternalLinksRequest StructType
 * @subpackage Structs
 */
class SaveOrgunitExternalLinksRequest extends AbstractStructBase
{
    /**
     * The MidocoOrgunitExternalLink
     * Meta information extracted from the WSDL
     * - ref: MidocoOrgunitExternalLink
     * @var \Pggns\MidocoApi\Mis\StructType\OrgunitExternalLinkDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\OrgunitExternalLinkDTO $MidocoOrgunitExternalLink = null;
    /**
     * Constructor method for SaveOrgunitExternalLinksRequest
     * @uses SaveOrgunitExternalLinksRequest::setMidocoOrgunitExternalLink()
     * @param \Pggns\MidocoApi\Mis\StructType\OrgunitExternalLinkDTO $midocoOrgunitExternalLink
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\OrgunitExternalLinkDTO $midocoOrgunitExternalLink = null)
    {
        $this
            ->setMidocoOrgunitExternalLink($midocoOrgunitExternalLink);
    }
    /**
     * Get MidocoOrgunitExternalLink value
     * @return \Pggns\MidocoApi\Mis\StructType\OrgunitExternalLinkDTO|null
     */
    public function getMidocoOrgunitExternalLink(): ?\Pggns\MidocoApi\Mis\StructType\OrgunitExternalLinkDTO
    {
        return $this->MidocoOrgunitExternalLink;
    }
    /**
     * Set MidocoOrgunitExternalLink value
     * @param \Pggns\MidocoApi\Mis\StructType\OrgunitExternalLinkDTO $midocoOrgunitExternalLink
     * @return \Pggns\MidocoApi\Mis\StructType\SaveOrgunitExternalLinksRequest
     */
    public function setMidocoOrgunitExternalLink(?\Pggns\MidocoApi\Mis\StructType\OrgunitExternalLinkDTO $midocoOrgunitExternalLink = null): self
    {
        $this->MidocoOrgunitExternalLink = $midocoOrgunitExternalLink;
        
        return $this;
    }
}
