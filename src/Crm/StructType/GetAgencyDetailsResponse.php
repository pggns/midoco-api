<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAgencyDetailsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAgencyDetailsResponse extends AbstractStructBase
{
    /**
     * The MidocoAgency
     * Meta information extracted from the WSDL
     * - ref: MidocoAgency
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoAgency|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoAgency $MidocoAgency = null;
    /**
     * Constructor method for GetAgencyDetailsResponse
     * @uses GetAgencyDetailsResponse::setMidocoAgency()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoAgency $midocoAgency
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoAgency $midocoAgency = null)
    {
        $this
            ->setMidocoAgency($midocoAgency);
    }
    /**
     * Get MidocoAgency value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoAgency|null
     */
    public function getMidocoAgency(): ?\Pggns\MidocoApi\Crm\StructType\MidocoAgency
    {
        return $this->MidocoAgency;
    }
    /**
     * Set MidocoAgency value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoAgency $midocoAgency
     * @return \Pggns\MidocoApi\Crm\StructType\GetAgencyDetailsResponse
     */
    public function setMidocoAgency(?\Pggns\MidocoApi\Crm\StructType\MidocoAgency $midocoAgency = null): self
    {
        $this->MidocoAgency = $midocoAgency;
        
        return $this;
    }
}
