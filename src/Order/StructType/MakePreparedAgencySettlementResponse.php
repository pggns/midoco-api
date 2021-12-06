<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MakePreparedAgencySettlementResponse StructType
 * @subpackage Structs
 */
class MakePreparedAgencySettlementResponse extends AbstractStructBase
{
    /**
     * The MakeBillingDocumentForAgencySettlementResponse
     * Meta information extracted from the WSDL
     * - ref: MakeBillingDocumentForAgencySettlementResponse
     * @var \Pggns\MidocoApi\Api\Order\StructType\MakeBillingDocumentForAgencySettlementResponse|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MakeBillingDocumentForAgencySettlementResponse $MakeBillingDocumentForAgencySettlementResponse = null;
    /**
     * Constructor method for MakePreparedAgencySettlementResponse
     * @uses MakePreparedAgencySettlementResponse::setMakeBillingDocumentForAgencySettlementResponse()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MakeBillingDocumentForAgencySettlementResponse $makeBillingDocumentForAgencySettlementResponse
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MakeBillingDocumentForAgencySettlementResponse $makeBillingDocumentForAgencySettlementResponse = null)
    {
        $this
            ->setMakeBillingDocumentForAgencySettlementResponse($makeBillingDocumentForAgencySettlementResponse);
    }
    /**
     * Get MakeBillingDocumentForAgencySettlementResponse value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MakeBillingDocumentForAgencySettlementResponse|null
     */
    public function getMakeBillingDocumentForAgencySettlementResponse(): ?\Pggns\MidocoApi\Api\Order\StructType\MakeBillingDocumentForAgencySettlementResponse
    {
        return $this->MakeBillingDocumentForAgencySettlementResponse;
    }
    /**
     * Set MakeBillingDocumentForAgencySettlementResponse value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MakeBillingDocumentForAgencySettlementResponse $makeBillingDocumentForAgencySettlementResponse
     * @return \Pggns\MidocoApi\Api\Order\StructType\MakePreparedAgencySettlementResponse
     */
    public function setMakeBillingDocumentForAgencySettlementResponse(?\Pggns\MidocoApi\Api\Order\StructType\MakeBillingDocumentForAgencySettlementResponse $makeBillingDocumentForAgencySettlementResponse = null): self
    {
        $this->MakeBillingDocumentForAgencySettlementResponse = $makeBillingDocumentForAgencySettlementResponse;
        
        return $this;
    }
}
