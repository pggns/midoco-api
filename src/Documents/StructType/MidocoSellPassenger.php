<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSellPassenger StructType
 * @subpackage Structs
 */
class MidocoSellPassenger extends SellPassengerDTO
{
    /**
     * The MidocoPassengerInfosFlight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoPassengerInfosFlight
     * @var \Pggns\MidocoApi\Documents\StructType\PassengerInfosFlightDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\PassengerInfosFlightDTO $MidocoPassengerInfosFlight = null;
    /**
     * The MidocoPassengerInfosRail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoPassengerInfosRail
     * @var \Pggns\MidocoApi\Documents\StructType\PassengerInfosRailDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\PassengerInfosRailDTO $MidocoPassengerInfosRail = null;
    /**
     * Constructor method for MidocoSellPassenger
     * @uses MidocoSellPassenger::setMidocoPassengerInfosFlight()
     * @uses MidocoSellPassenger::setMidocoPassengerInfosRail()
     * @param \Pggns\MidocoApi\Documents\StructType\PassengerInfosFlightDTO $midocoPassengerInfosFlight
     * @param \Pggns\MidocoApi\Documents\StructType\PassengerInfosRailDTO $midocoPassengerInfosRail
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\PassengerInfosFlightDTO $midocoPassengerInfosFlight = null, ?\Pggns\MidocoApi\Documents\StructType\PassengerInfosRailDTO $midocoPassengerInfosRail = null)
    {
        $this
            ->setMidocoPassengerInfosFlight($midocoPassengerInfosFlight)
            ->setMidocoPassengerInfosRail($midocoPassengerInfosRail);
    }
    /**
     * Get MidocoPassengerInfosFlight value
     * @return \Pggns\MidocoApi\Documents\StructType\PassengerInfosFlightDTO|null
     */
    public function getMidocoPassengerInfosFlight(): ?\Pggns\MidocoApi\Documents\StructType\PassengerInfosFlightDTO
    {
        return $this->MidocoPassengerInfosFlight;
    }
    /**
     * Set MidocoPassengerInfosFlight value
     * @param \Pggns\MidocoApi\Documents\StructType\PassengerInfosFlightDTO $midocoPassengerInfosFlight
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellPassenger
     */
    public function setMidocoPassengerInfosFlight(?\Pggns\MidocoApi\Documents\StructType\PassengerInfosFlightDTO $midocoPassengerInfosFlight = null): self
    {
        $this->MidocoPassengerInfosFlight = $midocoPassengerInfosFlight;
        
        return $this;
    }
    /**
     * Get MidocoPassengerInfosRail value
     * @return \Pggns\MidocoApi\Documents\StructType\PassengerInfosRailDTO|null
     */
    public function getMidocoPassengerInfosRail(): ?\Pggns\MidocoApi\Documents\StructType\PassengerInfosRailDTO
    {
        return $this->MidocoPassengerInfosRail;
    }
    /**
     * Set MidocoPassengerInfosRail value
     * @param \Pggns\MidocoApi\Documents\StructType\PassengerInfosRailDTO $midocoPassengerInfosRail
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellPassenger
     */
    public function setMidocoPassengerInfosRail(?\Pggns\MidocoApi\Documents\StructType\PassengerInfosRailDTO $midocoPassengerInfosRail = null): self
    {
        $this->MidocoPassengerInfosRail = $midocoPassengerInfosRail;
        
        return $this;
    }
}
