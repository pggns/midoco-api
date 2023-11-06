<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteExternalServiceLinkRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Delete an ExternalServiceLink.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteExternalServiceLinkRequest extends AbstractStructBase
{
    /**
     * The MidocoExternalServiceLink
     * Meta information extracted from the WSDL
     * - ref: MidocoExternalServiceLink
     * @var \Pggns\MidocoApi\Documents\StructType\ExternalServiceLinkDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\ExternalServiceLinkDTO $MidocoExternalServiceLink = null;
    /**
     * Constructor method for DeleteExternalServiceLinkRequest
     * @uses DeleteExternalServiceLinkRequest::setMidocoExternalServiceLink()
     * @param \Pggns\MidocoApi\Documents\StructType\ExternalServiceLinkDTO $midocoExternalServiceLink
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\ExternalServiceLinkDTO $midocoExternalServiceLink = null)
    {
        $this
            ->setMidocoExternalServiceLink($midocoExternalServiceLink);
    }
    /**
     * Get MidocoExternalServiceLink value
     * @return \Pggns\MidocoApi\Documents\StructType\ExternalServiceLinkDTO|null
     */
    public function getMidocoExternalServiceLink(): ?\Pggns\MidocoApi\Documents\StructType\ExternalServiceLinkDTO
    {
        return $this->MidocoExternalServiceLink;
    }
    /**
     * Set MidocoExternalServiceLink value
     * @param \Pggns\MidocoApi\Documents\StructType\ExternalServiceLinkDTO $midocoExternalServiceLink
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteExternalServiceLinkRequest
     */
    public function setMidocoExternalServiceLink(?\Pggns\MidocoApi\Documents\StructType\ExternalServiceLinkDTO $midocoExternalServiceLink = null): self
    {
        $this->MidocoExternalServiceLink = $midocoExternalServiceLink;
        
        return $this;
    }
}
