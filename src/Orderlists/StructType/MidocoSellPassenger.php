<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

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
     * @var \Pggns\MidocoApi\Orderlists\StructType\PassengerInfosFlightDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\PassengerInfosFlightDTO $MidocoPassengerInfosFlight = null;
    /**
     * The MidocoPassengerInfosRail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoPassengerInfosRail
     * @var \Pggns\MidocoApi\Orderlists\StructType\PassengerInfosRailDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\PassengerInfosRailDTO $MidocoPassengerInfosRail = null;
    /**
     * Constructor method for MidocoSellPassenger
     * @uses MidocoSellPassenger::setMidocoPassengerInfosFlight()
     * @uses MidocoSellPassenger::setMidocoPassengerInfosRail()
     * @param \Pggns\MidocoApi\Orderlists\StructType\PassengerInfosFlightDTO $midocoPassengerInfosFlight
     * @param \Pggns\MidocoApi\Orderlists\StructType\PassengerInfosRailDTO $midocoPassengerInfosRail
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\PassengerInfosFlightDTO $midocoPassengerInfosFlight = null, ?\Pggns\MidocoApi\Orderlists\StructType\PassengerInfosRailDTO $midocoPassengerInfosRail = null)
    {
        $this
            ->setMidocoPassengerInfosFlight($midocoPassengerInfosFlight)
            ->setMidocoPassengerInfosRail($midocoPassengerInfosRail);
    }
    /**
     * Get MidocoPassengerInfosFlight value
     * @return \Pggns\MidocoApi\Orderlists\StructType\PassengerInfosFlightDTO|null
     */
    public function getMidocoPassengerInfosFlight(): ?\Pggns\MidocoApi\Orderlists\StructType\PassengerInfosFlightDTO
    {
        return $this->MidocoPassengerInfosFlight;
    }
    /**
     * Set MidocoPassengerInfosFlight value
     * @param \Pggns\MidocoApi\Orderlists\StructType\PassengerInfosFlightDTO $midocoPassengerInfosFlight
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSellPassenger
     */
    public function setMidocoPassengerInfosFlight(?\Pggns\MidocoApi\Orderlists\StructType\PassengerInfosFlightDTO $midocoPassengerInfosFlight = null): self
    {
        $this->MidocoPassengerInfosFlight = $midocoPassengerInfosFlight;
        
        return $this;
    }
    /**
     * Get MidocoPassengerInfosRail value
     * @return \Pggns\MidocoApi\Orderlists\StructType\PassengerInfosRailDTO|null
     */
    public function getMidocoPassengerInfosRail(): ?\Pggns\MidocoApi\Orderlists\StructType\PassengerInfosRailDTO
    {
        return $this->MidocoPassengerInfosRail;
    }
    /**
     * Set MidocoPassengerInfosRail value
     * @param \Pggns\MidocoApi\Orderlists\StructType\PassengerInfosRailDTO $midocoPassengerInfosRail
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSellPassenger
     */
    public function setMidocoPassengerInfosRail(?\Pggns\MidocoApi\Orderlists\StructType\PassengerInfosRailDTO $midocoPassengerInfosRail = null): self
    {
        $this->MidocoPassengerInfosRail = $midocoPassengerInfosRail;
        
        return $this;
    }
}
