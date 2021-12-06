<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierAgencyReservationRequest StructType
 * @subpackage Structs
 */
class GetSupplierAgencyReservationRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAgencyReservation
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAgencyReservation
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAgencyReservation|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAgencyReservation $MidocoSupplierAgencyReservation = null;
    /**
     * Constructor method for GetSupplierAgencyReservationRequest
     * @uses GetSupplierAgencyReservationRequest::setMidocoSupplierAgencyReservation()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAgencyReservation $midocoSupplierAgencyReservation
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAgencyReservation $midocoSupplierAgencyReservation = null)
    {
        $this
            ->setMidocoSupplierAgencyReservation($midocoSupplierAgencyReservation);
    }
    /**
     * Get MidocoSupplierAgencyReservation value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAgencyReservation|null
     */
    public function getMidocoSupplierAgencyReservation(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAgencyReservation
    {
        return $this->MidocoSupplierAgencyReservation;
    }
    /**
     * Set MidocoSupplierAgencyReservation value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAgencyReservation $midocoSupplierAgencyReservation
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetSupplierAgencyReservationRequest
     */
    public function setMidocoSupplierAgencyReservation(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAgencyReservation $midocoSupplierAgencyReservation = null): self
    {
        $this->MidocoSupplierAgencyReservation = $midocoSupplierAgencyReservation;
        
        return $this;
    }
}
