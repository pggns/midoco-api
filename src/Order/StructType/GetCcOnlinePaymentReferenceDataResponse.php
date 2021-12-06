<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCcOnlinePaymentReferenceDataResponse StructType
 * @subpackage Structs
 */
class GetCcOnlinePaymentReferenceDataResponse extends AbstractStructBase
{
    /**
     * The CcOnlinePaymentReferenceData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CcOnlinePaymentReferenceData
     * @var \Pggns\MidocoApi\Api\Order\StructType\CcOnlinePaymentReferenceData|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\CcOnlinePaymentReferenceData $CcOnlinePaymentReferenceData = null;
    /**
     * Constructor method for GetCcOnlinePaymentReferenceDataResponse
     * @uses GetCcOnlinePaymentReferenceDataResponse::setCcOnlinePaymentReferenceData()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CcOnlinePaymentReferenceData $ccOnlinePaymentReferenceData
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\CcOnlinePaymentReferenceData $ccOnlinePaymentReferenceData = null)
    {
        $this
            ->setCcOnlinePaymentReferenceData($ccOnlinePaymentReferenceData);
    }
    /**
     * Get CcOnlinePaymentReferenceData value
     * @return \Pggns\MidocoApi\Api\Order\StructType\CcOnlinePaymentReferenceData|null
     */
    public function getCcOnlinePaymentReferenceData(): ?\Pggns\MidocoApi\Api\Order\StructType\CcOnlinePaymentReferenceData
    {
        return $this->CcOnlinePaymentReferenceData;
    }
    /**
     * Set CcOnlinePaymentReferenceData value
     * @param \Pggns\MidocoApi\Api\Order\StructType\CcOnlinePaymentReferenceData $ccOnlinePaymentReferenceData
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetCcOnlinePaymentReferenceDataResponse
     */
    public function setCcOnlinePaymentReferenceData(?\Pggns\MidocoApi\Api\Order\StructType\CcOnlinePaymentReferenceData $ccOnlinePaymentReferenceData = null): self
    {
        $this->CcOnlinePaymentReferenceData = $ccOnlinePaymentReferenceData;
        
        return $this;
    }
}
