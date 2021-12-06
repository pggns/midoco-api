<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteTravellerRequest StructType
 * @subpackage Structs
 */
class DeleteTravellerRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmTraveller
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmTraveller
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmTraveller|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmTraveller $MidocoCrmTraveller = null;
    /**
     * Constructor method for DeleteTravellerRequest
     * @uses DeleteTravellerRequest::setMidocoCrmTraveller()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmTraveller $midocoCrmTraveller
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmTraveller $midocoCrmTraveller = null)
    {
        $this
            ->setMidocoCrmTraveller($midocoCrmTraveller);
    }
    /**
     * Get MidocoCrmTraveller value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmTraveller|null
     */
    public function getMidocoCrmTraveller(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmTraveller
    {
        return $this->MidocoCrmTraveller;
    }
    /**
     * Set MidocoCrmTraveller value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmTraveller $midocoCrmTraveller
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\DeleteTravellerRequest
     */
    public function setMidocoCrmTraveller(?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmTraveller $midocoCrmTraveller = null): self
    {
        $this->MidocoCrmTraveller = $midocoCrmTraveller;
        
        return $this;
    }
}
