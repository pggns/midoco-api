<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoAgency|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoAgency $MidocoAgency = null;
    /**
     * Constructor method for GetAgencyDetailsResponse
     * @uses GetAgencyDetailsResponse::setMidocoAgency()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoAgency $midocoAgency
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoAgency $midocoAgency = null)
    {
        $this
            ->setMidocoAgency($midocoAgency);
    }
    /**
     * Get MidocoAgency value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoAgency|null
     */
    public function getMidocoAgency(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoAgency
    {
        return $this->MidocoAgency;
    }
    /**
     * Set MidocoAgency value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoAgency $midocoAgency
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetAgencyDetailsResponse
     */
    public function setMidocoAgency(?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoAgency $midocoAgency = null): self
    {
        $this->MidocoAgency = $midocoAgency;
        
        return $this;
    }
}
