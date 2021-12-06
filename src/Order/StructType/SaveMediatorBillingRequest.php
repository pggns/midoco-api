<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMediatorBillingRequest StructType
 * @subpackage Structs
 */
class SaveMediatorBillingRequest extends AbstractStructBase
{
    /**
     * The MidocoMediatorBilling
     * Meta information extracted from the WSDL
     * - ref: MidocoMediatorBilling
     * @var \Pggns\MidocoApi\Api\Order\StructType\MediatorBillingDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MediatorBillingDTO $MidocoMediatorBilling = null;
    /**
     * Constructor method for SaveMediatorBillingRequest
     * @uses SaveMediatorBillingRequest::setMidocoMediatorBilling()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MediatorBillingDTO $midocoMediatorBilling
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MediatorBillingDTO $midocoMediatorBilling = null)
    {
        $this
            ->setMidocoMediatorBilling($midocoMediatorBilling);
    }
    /**
     * Get MidocoMediatorBilling value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MediatorBillingDTO|null
     */
    public function getMidocoMediatorBilling(): ?\Pggns\MidocoApi\Api\Order\StructType\MediatorBillingDTO
    {
        return $this->MidocoMediatorBilling;
    }
    /**
     * Set MidocoMediatorBilling value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MediatorBillingDTO $midocoMediatorBilling
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveMediatorBillingRequest
     */
    public function setMidocoMediatorBilling(?\Pggns\MidocoApi\Api\Order\StructType\MediatorBillingDTO $midocoMediatorBilling = null): self
    {
        $this->MidocoMediatorBilling = $midocoMediatorBilling;
        
        return $this;
    }
}
