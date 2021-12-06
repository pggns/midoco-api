<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateFlightTimeChangeEmailDetRequest StructType
 * @subpackage Structs
 */
class UpdateFlightTimeChangeEmailDetRequest extends AbstractStructBase
{
    /**
     * The MidocoFlightTimeChangeEmailDet
     * Meta information extracted from the WSDL
     * - ref: MidocoFlightTimeChangeEmailDet
     * @var \Pggns\MidocoApi\Api\Order\StructType\FlightTimeChangeEmailDetDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\FlightTimeChangeEmailDetDTO $MidocoFlightTimeChangeEmailDet = null;
    /**
     * Constructor method for UpdateFlightTimeChangeEmailDetRequest
     * @uses UpdateFlightTimeChangeEmailDetRequest::setMidocoFlightTimeChangeEmailDet()
     * @param \Pggns\MidocoApi\Api\Order\StructType\FlightTimeChangeEmailDetDTO $midocoFlightTimeChangeEmailDet
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\FlightTimeChangeEmailDetDTO $midocoFlightTimeChangeEmailDet = null)
    {
        $this
            ->setMidocoFlightTimeChangeEmailDet($midocoFlightTimeChangeEmailDet);
    }
    /**
     * Get MidocoFlightTimeChangeEmailDet value
     * @return \Pggns\MidocoApi\Api\Order\StructType\FlightTimeChangeEmailDetDTO|null
     */
    public function getMidocoFlightTimeChangeEmailDet(): ?\Pggns\MidocoApi\Api\Order\StructType\FlightTimeChangeEmailDetDTO
    {
        return $this->MidocoFlightTimeChangeEmailDet;
    }
    /**
     * Set MidocoFlightTimeChangeEmailDet value
     * @param \Pggns\MidocoApi\Api\Order\StructType\FlightTimeChangeEmailDetDTO $midocoFlightTimeChangeEmailDet
     * @return \Pggns\MidocoApi\Api\Order\StructType\UpdateFlightTimeChangeEmailDetRequest
     */
    public function setMidocoFlightTimeChangeEmailDet(?\Pggns\MidocoApi\Api\Order\StructType\FlightTimeChangeEmailDetDTO $midocoFlightTimeChangeEmailDet = null): self
    {
        $this->MidocoFlightTimeChangeEmailDet = $midocoFlightTimeChangeEmailDet;
        
        return $this;
    }
}
