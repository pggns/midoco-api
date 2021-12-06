<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSupplierAgencyReservationRequest StructType
 * @subpackage Structs
 */
class DeleteSupplierAgencyReservationRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAgencyReservation
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAgencyReservation
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencyReservation|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencyReservation $MidocoSupplierAgencyReservation = null;
    /**
     * Constructor method for DeleteSupplierAgencyReservationRequest
     * @uses DeleteSupplierAgencyReservationRequest::setMidocoSupplierAgencyReservation()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencyReservation $midocoSupplierAgencyReservation
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencyReservation $midocoSupplierAgencyReservation = null)
    {
        $this
            ->setMidocoSupplierAgencyReservation($midocoSupplierAgencyReservation);
    }
    /**
     * Get MidocoSupplierAgencyReservation value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencyReservation|null
     */
    public function getMidocoSupplierAgencyReservation(): ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencyReservation
    {
        return $this->MidocoSupplierAgencyReservation;
    }
    /**
     * Set MidocoSupplierAgencyReservation value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencyReservation $midocoSupplierAgencyReservation
     * @return \Pggns\MidocoApi\Order\StructType\DeleteSupplierAgencyReservationRequest
     */
    public function setMidocoSupplierAgencyReservation(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencyReservation $midocoSupplierAgencyReservation = null): self
    {
        $this->MidocoSupplierAgencyReservation = $midocoSupplierAgencyReservation;
        
        return $this;
    }
}
