<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCrmPersonTravellerResponse StructType
 * @subpackage Structs
 */
class DeleteCrmPersonTravellerResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmPersonTraveller
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmPersonTraveller
     * @var \Pggns\MidocoApi\Api\Crm\StructType\CrmPersonTravellerDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\CrmPersonTravellerDTO $MidocoCrmPersonTraveller = null;
    /**
     * Constructor method for DeleteCrmPersonTravellerResponse
     * @uses DeleteCrmPersonTravellerResponse::setMidocoCrmPersonTraveller()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CrmPersonTravellerDTO $midocoCrmPersonTraveller
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\CrmPersonTravellerDTO $midocoCrmPersonTraveller = null)
    {
        $this
            ->setMidocoCrmPersonTraveller($midocoCrmPersonTraveller);
    }
    /**
     * Get MidocoCrmPersonTraveller value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CrmPersonTravellerDTO|null
     */
    public function getMidocoCrmPersonTraveller(): ?\Pggns\MidocoApi\Api\Crm\StructType\CrmPersonTravellerDTO
    {
        return $this->MidocoCrmPersonTraveller;
    }
    /**
     * Set MidocoCrmPersonTraveller value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CrmPersonTravellerDTO $midocoCrmPersonTraveller
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteCrmPersonTravellerResponse
     */
    public function setMidocoCrmPersonTraveller(?\Pggns\MidocoApi\Api\Crm\StructType\CrmPersonTravellerDTO $midocoCrmPersonTraveller = null): self
    {
        $this->MidocoCrmPersonTraveller = $midocoCrmPersonTraveller;
        
        return $this;
    }
}
