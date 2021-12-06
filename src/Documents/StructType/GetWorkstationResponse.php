<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

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
     * @var \Pggns\MidocoApi\Documents\StructType\WorkstationDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\WorkstationDTO $MidocoWorkstation = null;
    /**
     * Constructor method for GetWorkstationResponse
     * @uses GetWorkstationResponse::setMidocoWorkstation()
     * @param \Pggns\MidocoApi\Documents\StructType\WorkstationDTO $midocoWorkstation
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\WorkstationDTO $midocoWorkstation = null)
    {
        $this
            ->setMidocoWorkstation($midocoWorkstation);
    }
    /**
     * Get MidocoWorkstation value
     * @return \Pggns\MidocoApi\Documents\StructType\WorkstationDTO|null
     */
    public function getMidocoWorkstation(): ?\Pggns\MidocoApi\Documents\StructType\WorkstationDTO
    {
        return $this->MidocoWorkstation;
    }
    /**
     * Set MidocoWorkstation value
     * @param \Pggns\MidocoApi\Documents\StructType\WorkstationDTO $midocoWorkstation
     * @return \Pggns\MidocoApi\Documents\StructType\GetWorkstationResponse
     */
    public function setMidocoWorkstation(?\Pggns\MidocoApi\Documents\StructType\WorkstationDTO $midocoWorkstation = null): self
    {
        $this->MidocoWorkstation = $midocoWorkstation;
        
        return $this;
    }
}
