<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\CrmSD\StructType\WorkstationDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\WorkstationDTO $MidocoWorkstation = null;
    /**
     * Constructor method for GetWorkstationResponse
     * @uses GetWorkstationResponse::setMidocoWorkstation()
     * @param \Pggns\MidocoApi\CrmSD\StructType\WorkstationDTO $midocoWorkstation
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\WorkstationDTO $midocoWorkstation = null)
    {
        $this
            ->setMidocoWorkstation($midocoWorkstation);
    }
    /**
     * Get MidocoWorkstation value
     * @return \Pggns\MidocoApi\CrmSD\StructType\WorkstationDTO|null
     */
    public function getMidocoWorkstation(): ?\Pggns\MidocoApi\CrmSD\StructType\WorkstationDTO
    {
        return $this->MidocoWorkstation;
    }
    /**
     * Set MidocoWorkstation value
     * @param \Pggns\MidocoApi\CrmSD\StructType\WorkstationDTO $midocoWorkstation
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetWorkstationResponse
     */
    public function setMidocoWorkstation(?\Pggns\MidocoApi\CrmSD\StructType\WorkstationDTO $midocoWorkstation = null): self
    {
        $this->MidocoWorkstation = $midocoWorkstation;
        
        return $this;
    }
}
