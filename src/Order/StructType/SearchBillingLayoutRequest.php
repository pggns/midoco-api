<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchBillingLayoutRequest StructType
 * @subpackage Structs
 */
class SearchBillingLayoutRequest extends AbstractStructBase
{
    /**
     * The MidocoBillingLayout
     * Meta information extracted from the WSDL
     * - ref: MidocoBillingLayout
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingLayout|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoBillingLayout $MidocoBillingLayout = null;
    /**
     * Constructor method for SearchBillingLayoutRequest
     * @uses SearchBillingLayoutRequest::setMidocoBillingLayout()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingLayout $midocoBillingLayout
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoBillingLayout $midocoBillingLayout = null)
    {
        $this
            ->setMidocoBillingLayout($midocoBillingLayout);
    }
    /**
     * Get MidocoBillingLayout value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingLayout|null
     */
    public function getMidocoBillingLayout(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoBillingLayout
    {
        return $this->MidocoBillingLayout;
    }
    /**
     * Set MidocoBillingLayout value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingLayout $midocoBillingLayout
     * @return \Pggns\MidocoApi\Api\Order\StructType\SearchBillingLayoutRequest
     */
    public function setMidocoBillingLayout(?\Pggns\MidocoApi\Api\Order\StructType\MidocoBillingLayout $midocoBillingLayout = null): self
    {
        $this->MidocoBillingLayout = $midocoBillingLayout;
        
        return $this;
    }
}
