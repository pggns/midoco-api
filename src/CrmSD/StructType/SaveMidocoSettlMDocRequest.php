<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmMidocoSettlMdoc|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmMidocoSettlMdoc $MidocoCrmMidocoSettlMdoc = null;
    /**
     * Constructor method for SaveMidocoSettlMDocRequest
     * @uses SaveMidocoSettlMDocRequest::setMidocoCrmMidocoSettlMdoc()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmMidocoSettlMdoc $midocoCrmMidocoSettlMdoc
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmMidocoSettlMdoc $midocoCrmMidocoSettlMdoc = null)
    {
        $this
            ->setMidocoCrmMidocoSettlMdoc($midocoCrmMidocoSettlMdoc);
    }
    /**
     * Get MidocoCrmMidocoSettlMdoc value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmMidocoSettlMdoc|null
     */
    public function getMidocoCrmMidocoSettlMdoc(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmMidocoSettlMdoc
    {
        return $this->MidocoCrmMidocoSettlMdoc;
    }
    /**
     * Set MidocoCrmMidocoSettlMdoc value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmMidocoSettlMdoc $midocoCrmMidocoSettlMdoc
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveMidocoSettlMDocRequest
     */
    public function setMidocoCrmMidocoSettlMdoc(?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmMidocoSettlMdoc $midocoCrmMidocoSettlMdoc = null): self
    {
        $this->MidocoCrmMidocoSettlMdoc = $midocoCrmMidocoSettlMdoc;
        
        return $this;
    }
}
