<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoAgencySettlementRequest StructType
 * @subpackage Structs
 */
class GetMidocoAgencySettlementRequest extends AbstractStructBase
{
    /**
     * The MidocoAgencySettlementSearchCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoAgencySettlementSearchCriteria
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoAgencySettlementSearchCriteria|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoAgencySettlementSearchCriteria $MidocoAgencySettlementSearchCriteria = null;
    /**
     * Constructor method for GetMidocoAgencySettlementRequest
     * @uses GetMidocoAgencySettlementRequest::setMidocoAgencySettlementSearchCriteria()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoAgencySettlementSearchCriteria $midocoAgencySettlementSearchCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoAgencySettlementSearchCriteria $midocoAgencySettlementSearchCriteria = null)
    {
        $this
            ->setMidocoAgencySettlementSearchCriteria($midocoAgencySettlementSearchCriteria);
    }
    /**
     * Get MidocoAgencySettlementSearchCriteria value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoAgencySettlementSearchCriteria|null
     */
    public function getMidocoAgencySettlementSearchCriteria(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoAgencySettlementSearchCriteria
    {
        return $this->MidocoAgencySettlementSearchCriteria;
    }
    /**
     * Set MidocoAgencySettlementSearchCriteria value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoAgencySettlementSearchCriteria $midocoAgencySettlementSearchCriteria
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetMidocoAgencySettlementRequest
     */
    public function setMidocoAgencySettlementSearchCriteria(?\Pggns\MidocoApi\Api\Order\StructType\MidocoAgencySettlementSearchCriteria $midocoAgencySettlementSearchCriteria = null): self
    {
        $this->MidocoAgencySettlementSearchCriteria = $midocoAgencySettlementSearchCriteria;
        
        return $this;
    }
}
