<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveExternalLinkRequest StructType
 * @subpackage Structs
 */
class SaveExternalLinkRequest extends AbstractStructBase
{
    /**
     * The MidocoExternalLink
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoExternalLink
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoExternalLink|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoExternalLink $MidocoExternalLink = null;
    /**
     * Constructor method for SaveExternalLinkRequest
     * @uses SaveExternalLinkRequest::setMidocoExternalLink()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoExternalLink $midocoExternalLink
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoExternalLink $midocoExternalLink = null)
    {
        $this
            ->setMidocoExternalLink($midocoExternalLink);
    }
    /**
     * Get MidocoExternalLink value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoExternalLink|null
     */
    public function getMidocoExternalLink(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoExternalLink
    {
        return $this->MidocoExternalLink;
    }
    /**
     * Set MidocoExternalLink value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoExternalLink $midocoExternalLink
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveExternalLinkRequest
     */
    public function setMidocoExternalLink(?\Pggns\MidocoApi\Api\Order\StructType\MidocoExternalLink $midocoExternalLink = null): self
    {
        $this->MidocoExternalLink = $midocoExternalLink;
        
        return $this;
    }
}
