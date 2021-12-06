<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MakePreparedAgencySettlementRequest StructType
 * @subpackage Structs
 */
class MakePreparedAgencySettlementRequest extends AbstractStructBase
{
    /**
     * The MakeBillingDocumentForAgencySettlementRequest
     * Meta information extracted from the WSDL
     * - ref: MakeBillingDocumentForAgencySettlementRequest
     * @var \Pggns\MidocoApi\Api\Order\StructType\MakeBillingDocumentForAgencySettlementRequest|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MakeBillingDocumentForAgencySettlementRequest $MakeBillingDocumentForAgencySettlementRequest = null;
    /**
     * Constructor method for MakePreparedAgencySettlementRequest
     * @uses MakePreparedAgencySettlementRequest::setMakeBillingDocumentForAgencySettlementRequest()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MakeBillingDocumentForAgencySettlementRequest $makeBillingDocumentForAgencySettlementRequest
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MakeBillingDocumentForAgencySettlementRequest $makeBillingDocumentForAgencySettlementRequest = null)
    {
        $this
            ->setMakeBillingDocumentForAgencySettlementRequest($makeBillingDocumentForAgencySettlementRequest);
    }
    /**
     * Get MakeBillingDocumentForAgencySettlementRequest value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MakeBillingDocumentForAgencySettlementRequest|null
     */
    public function getMakeBillingDocumentForAgencySettlementRequest(): ?\Pggns\MidocoApi\Api\Order\StructType\MakeBillingDocumentForAgencySettlementRequest
    {
        return $this->MakeBillingDocumentForAgencySettlementRequest;
    }
    /**
     * Set MakeBillingDocumentForAgencySettlementRequest value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MakeBillingDocumentForAgencySettlementRequest $makeBillingDocumentForAgencySettlementRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\MakePreparedAgencySettlementRequest
     */
    public function setMakeBillingDocumentForAgencySettlementRequest(?\Pggns\MidocoApi\Api\Order\StructType\MakeBillingDocumentForAgencySettlementRequest $makeBillingDocumentForAgencySettlementRequest = null): self
    {
        $this->MakeBillingDocumentForAgencySettlementRequest = $makeBillingDocumentForAgencySettlementRequest;
        
        return $this;
    }
}
