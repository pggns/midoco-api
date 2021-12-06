<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAgencyDetailsResponse StructType
 * @subpackage Structs
 */
class GetAgencyDetailsResponse extends AbstractStructBase
{
    /**
     * The MidocoAgency
     * Meta information extracted from the WSDL
     * - ref: MidocoAgency
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoAgency|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoAgency $MidocoAgency = null;
    /**
     * Constructor method for GetAgencyDetailsResponse
     * @uses GetAgencyDetailsResponse::setMidocoAgency()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoAgency $midocoAgency
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoAgency $midocoAgency = null)
    {
        $this
            ->setMidocoAgency($midocoAgency);
    }
    /**
     * Get MidocoAgency value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoAgency|null
     */
    public function getMidocoAgency(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoAgency
    {
        return $this->MidocoAgency;
    }
    /**
     * Set MidocoAgency value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoAgency $midocoAgency
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetAgencyDetailsResponse
     */
    public function setMidocoAgency(?\Pggns\MidocoApi\CrmSD\StructType\MidocoAgency $midocoAgency = null): self
    {
        $this->MidocoAgency = $midocoAgency;
        
        return $this;
    }
}
