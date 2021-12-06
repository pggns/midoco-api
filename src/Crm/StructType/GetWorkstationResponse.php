<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

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
     * @var \Pggns\MidocoApi\Crm\StructType\WorkstationDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\WorkstationDTO $MidocoWorkstation = null;
    /**
     * Constructor method for GetWorkstationResponse
     * @uses GetWorkstationResponse::setMidocoWorkstation()
     * @param \Pggns\MidocoApi\Crm\StructType\WorkstationDTO $midocoWorkstation
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\WorkstationDTO $midocoWorkstation = null)
    {
        $this
            ->setMidocoWorkstation($midocoWorkstation);
    }
    /**
     * Get MidocoWorkstation value
     * @return \Pggns\MidocoApi\Crm\StructType\WorkstationDTO|null
     */
    public function getMidocoWorkstation(): ?\Pggns\MidocoApi\Crm\StructType\WorkstationDTO
    {
        return $this->MidocoWorkstation;
    }
    /**
     * Set MidocoWorkstation value
     * @param \Pggns\MidocoApi\Crm\StructType\WorkstationDTO $midocoWorkstation
     * @return \Pggns\MidocoApi\Crm\StructType\GetWorkstationResponse
     */
    public function setMidocoWorkstation(?\Pggns\MidocoApi\Crm\StructType\WorkstationDTO $midocoWorkstation = null): self
    {
        $this->MidocoWorkstation = $midocoWorkstation;
        
        return $this;
    }
}
