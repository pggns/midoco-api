<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetWorkstationResponse StructType
 * @subpackage Structs
 */
class GetWorkstationResponse extends AbstractStructBase
{
    /**
     * The MidocoWorkstation
     * Meta information extracted from the WSDL
     * - ref: MidocoWorkstation
     * @var \Pggns\MidocoApi\OrderglobalSD\StructType\WorkstationDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderglobalSD\StructType\WorkstationDTO $MidocoWorkstation = null;
    /**
     * Constructor method for GetWorkstationResponse
     * @uses GetWorkstationResponse::setMidocoWorkstation()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\WorkstationDTO $midocoWorkstation
     */
    public function __construct(?\Pggns\MidocoApi\OrderglobalSD\StructType\WorkstationDTO $midocoWorkstation = null)
    {
        $this
            ->setMidocoWorkstation($midocoWorkstation);
    }
    /**
     * Get MidocoWorkstation value
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\WorkstationDTO|null
     */
    public function getMidocoWorkstation(): ?\Pggns\MidocoApi\OrderglobalSD\StructType\WorkstationDTO
    {
        return $this->MidocoWorkstation;
    }
    /**
     * Set MidocoWorkstation value
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\WorkstationDTO $midocoWorkstation
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\GetWorkstationResponse
     */
    public function setMidocoWorkstation(?\Pggns\MidocoApi\OrderglobalSD\StructType\WorkstationDTO $midocoWorkstation = null): self
    {
        $this->MidocoWorkstation = $midocoWorkstation;
        
        return $this;
    }
}
