<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoSettlMDocRequest StructType
 * @subpackage Structs
 */
class SaveMidocoSettlMDocRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmMidocoSettlMdoc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmMidocoSettlMdoc
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmMidocoSettlMdoc|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmMidocoSettlMdoc $MidocoCrmMidocoSettlMdoc = null;
    /**
     * Constructor method for SaveMidocoSettlMDocRequest
     * @uses SaveMidocoSettlMDocRequest::setMidocoCrmMidocoSettlMdoc()
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
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMidocoSettlMDocRequest
     */
    public function setMidocoCrmMidocoSettlMdoc(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmMidocoSettlMdoc $midocoCrmMidocoSettlMdoc = null): self
    {
        $this->MidocoCrmMidocoSettlMdoc = $midocoCrmMidocoSettlMdoc;
        
        return $this;
    }
}
