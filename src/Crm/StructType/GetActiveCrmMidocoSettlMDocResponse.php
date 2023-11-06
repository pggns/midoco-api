<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetActiveCrmMidocoSettlMDocResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getActiveCrmMidocoSettlMDoc --- returns the active Midoco settlement MDoc defined for the given customer
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetActiveCrmMidocoSettlMDocResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmMidocoSettlMdoc
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmMidocoSettlMdoc
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmMidocoSettlMdoc|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmMidocoSettlMdoc $MidocoCrmMidocoSettlMdoc = null;
    /**
     * Constructor method for GetActiveCrmMidocoSettlMDocResponse
     * @uses GetActiveCrmMidocoSettlMDocResponse::setMidocoCrmMidocoSettlMdoc()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmMidocoSettlMdoc $midocoCrmMidocoSettlMdoc
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmMidocoSettlMdoc $midocoCrmMidocoSettlMdoc = null)
    {
        $this
            ->setMidocoCrmMidocoSettlMdoc($midocoCrmMidocoSettlMdoc);
    }
    /**
     * Get MidocoCrmMidocoSettlMdoc value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmMidocoSettlMdoc|null
     */
    public function getMidocoCrmMidocoSettlMdoc(): ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmMidocoSettlMdoc
    {
        return $this->MidocoCrmMidocoSettlMdoc;
    }
    /**
     * Set MidocoCrmMidocoSettlMdoc value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmMidocoSettlMdoc $midocoCrmMidocoSettlMdoc
     * @return \Pggns\MidocoApi\Crm\StructType\GetActiveCrmMidocoSettlMDocResponse
     */
    public function setMidocoCrmMidocoSettlMdoc(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmMidocoSettlMdoc $midocoCrmMidocoSettlMdoc = null): self
    {
        $this->MidocoCrmMidocoSettlMdoc = $midocoCrmMidocoSettlMdoc;
        
        return $this;
    }
}
