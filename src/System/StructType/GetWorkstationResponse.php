<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

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
     * @var \Pggns\MidocoApi\System\StructType\WorkstationDTO|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\WorkstationDTO $MidocoWorkstation = null;
    /**
     * Constructor method for GetWorkstationResponse
     * @uses GetWorkstationResponse::setMidocoWorkstation()
     * @param \Pggns\MidocoApi\System\StructType\WorkstationDTO $midocoWorkstation
     */
    public function __construct(?\Pggns\MidocoApi\System\StructType\WorkstationDTO $midocoWorkstation = null)
    {
        $this
            ->setMidocoWorkstation($midocoWorkstation);
    }
    /**
     * Get MidocoWorkstation value
     * @return \Pggns\MidocoApi\System\StructType\WorkstationDTO|null
     */
    public function getMidocoWorkstation(): ?\Pggns\MidocoApi\System\StructType\WorkstationDTO
    {
        return $this->MidocoWorkstation;
    }
    /**
     * Set MidocoWorkstation value
     * @param \Pggns\MidocoApi\System\StructType\WorkstationDTO $midocoWorkstation
     * @return \Pggns\MidocoApi\System\StructType\GetWorkstationResponse
     */
    public function setMidocoWorkstation(?\Pggns\MidocoApi\System\StructType\WorkstationDTO $midocoWorkstation = null): self
    {
        $this->MidocoWorkstation = $midocoWorkstation;
        
        return $this;
    }
}
