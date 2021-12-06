<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTravellerRequest StructType
 * @subpackage Structs
 */
class SaveTravellerRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmTraveller
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmTraveller
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmTraveller|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmTraveller $MidocoCrmTraveller = null;
    /**
     * Constructor method for SaveTravellerRequest
     * @uses SaveTravellerRequest::setMidocoCrmTraveller()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmTraveller $midocoCrmTraveller
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmTraveller $midocoCrmTraveller = null)
    {
        $this
            ->setMidocoCrmTraveller($midocoCrmTraveller);
    }
    /**
     * Get MidocoCrmTraveller value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmTraveller|null
     */
    public function getMidocoCrmTraveller(): ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmTraveller
    {
        return $this->MidocoCrmTraveller;
    }
    /**
     * Set MidocoCrmTraveller value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmTraveller $midocoCrmTraveller
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveTravellerRequest
     */
    public function setMidocoCrmTraveller(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmTraveller $midocoCrmTraveller = null): self
    {
        $this->MidocoCrmTraveller = $midocoCrmTraveller;
        
        return $this;
    }
}
