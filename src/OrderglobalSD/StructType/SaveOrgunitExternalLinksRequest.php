<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

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
     * @var \Pggns\MidocoApi\OrderglobalSD\StructType\OrgunitExternalLinkDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderglobalSD\StructType\OrgunitExternalLinkDTO $MidocoOrgunitExternalLink = null;
    /**
     * Constructor method for SaveOrgunitExternalLinksRequest
     * @uses SaveOrgunitExternalLinksRequest::setMidocoOrgunitExternalLink()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\OrgunitExternalLinkDTO $midocoOrgunitExternalLink
     */
    public function __construct(?\Pggns\MidocoApi\OrderglobalSD\StructType\OrgunitExternalLinkDTO $midocoOrgunitExternalLink = null)
    {
        $this
            ->setMidocoOrgunitExternalLink($midocoOrgunitExternalLink);
    }
    /**
     * Get MidocoOrgunitExternalLink value
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\OrgunitExternalLinkDTO|null
     */
    public function getMidocoOrgunitExternalLink(): ?\Pggns\MidocoApi\OrderglobalSD\StructType\OrgunitExternalLinkDTO
    {
        return $this->MidocoOrgunitExternalLink;
    }
    /**
     * Set MidocoOrgunitExternalLink value
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\OrgunitExternalLinkDTO $midocoOrgunitExternalLink
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\SaveOrgunitExternalLinksRequest
     */
    public function setMidocoOrgunitExternalLink(?\Pggns\MidocoApi\OrderglobalSD\StructType\OrgunitExternalLinkDTO $midocoOrgunitExternalLink = null): self
    {
        $this->MidocoOrgunitExternalLink = $midocoOrgunitExternalLink;
        
        return $this;
    }
}
