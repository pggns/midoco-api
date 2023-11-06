<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExternalServiceLinksRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Request all available ExternalServiceLinks based on the search criteria provided
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetExternalServiceLinksRequest extends AbstractStructBase
{
    /**
     * The MidocoExternalServiceLink
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoExternalServiceLink
     * @var \Pggns\MidocoApi\Orderlists\StructType\ExternalServiceLinkDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\ExternalServiceLinkDTO $MidocoExternalServiceLink = null;
    /**
     * Constructor method for GetExternalServiceLinksRequest
     * @uses GetExternalServiceLinksRequest::setMidocoExternalServiceLink()
     * @param \Pggns\MidocoApi\Orderlists\StructType\ExternalServiceLinkDTO $midocoExternalServiceLink
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\ExternalServiceLinkDTO $midocoExternalServiceLink = null)
    {
        $this
            ->setMidocoExternalServiceLink($midocoExternalServiceLink);
    }
    /**
     * Get MidocoExternalServiceLink value
     * @return \Pggns\MidocoApi\Orderlists\StructType\ExternalServiceLinkDTO|null
     */
    public function getMidocoExternalServiceLink(): ?\Pggns\MidocoApi\Orderlists\StructType\ExternalServiceLinkDTO
    {
        return $this->MidocoExternalServiceLink;
    }
    /**
     * Set MidocoExternalServiceLink value
     * @param \Pggns\MidocoApi\Orderlists\StructType\ExternalServiceLinkDTO $midocoExternalServiceLink
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetExternalServiceLinksRequest
     */
    public function setMidocoExternalServiceLink(?\Pggns\MidocoApi\Orderlists\StructType\ExternalServiceLinkDTO $midocoExternalServiceLink = null): self
    {
        $this->MidocoExternalServiceLink = $midocoExternalServiceLink;
        
        return $this;
    }
}
