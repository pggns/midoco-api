<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMediatorCommissionResponse StructType
 * @subpackage Structs
 */
class GetMediatorCommissionResponse extends AbstractStructBase
{
    /**
     * The MediatorCommision
     * @var \Pggns\MidocoApi\Api\Order\StructType\MediatorCommision|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MediatorCommision $MediatorCommision = null;
    /**
     * Constructor method for GetMediatorCommissionResponse
     * @uses GetMediatorCommissionResponse::setMediatorCommision()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MediatorCommision $mediatorCommision
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MediatorCommision $mediatorCommision = null)
    {
        $this
            ->setMediatorCommision($mediatorCommision);
    }
    /**
     * Get MediatorCommision value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MediatorCommision|null
     */
    public function getMediatorCommision(): ?\Pggns\MidocoApi\Api\Order\StructType\MediatorCommision
    {
        return $this->MediatorCommision;
    }
    /**
     * Set MediatorCommision value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MediatorCommision $mediatorCommision
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetMediatorCommissionResponse
     */
    public function setMediatorCommision(?\Pggns\MidocoApi\Api\Order\StructType\MediatorCommision $mediatorCommision = null): self
    {
        $this->MediatorCommision = $mediatorCommision;
        
        return $this;
    }
}
