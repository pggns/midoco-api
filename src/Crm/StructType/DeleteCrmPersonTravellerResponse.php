<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCrmPersonTravellerResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteCrmPersonTravellerResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmPersonTraveller
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmPersonTraveller
     * @var \Pggns\MidocoApi\Crm\StructType\CrmPersonTravellerDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CrmPersonTravellerDTO $MidocoCrmPersonTraveller = null;
    /**
     * Constructor method for DeleteCrmPersonTravellerResponse
     * @uses DeleteCrmPersonTravellerResponse::setMidocoCrmPersonTraveller()
     * @param \Pggns\MidocoApi\Crm\StructType\CrmPersonTravellerDTO $midocoCrmPersonTraveller
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CrmPersonTravellerDTO $midocoCrmPersonTraveller = null)
    {
        $this
            ->setMidocoCrmPersonTraveller($midocoCrmPersonTraveller);
    }
    /**
     * Get MidocoCrmPersonTraveller value
     * @return \Pggns\MidocoApi\Crm\StructType\CrmPersonTravellerDTO|null
     */
    public function getMidocoCrmPersonTraveller(): ?\Pggns\MidocoApi\Crm\StructType\CrmPersonTravellerDTO
    {
        return $this->MidocoCrmPersonTraveller;
    }
    /**
     * Set MidocoCrmPersonTraveller value
     * @param \Pggns\MidocoApi\Crm\StructType\CrmPersonTravellerDTO $midocoCrmPersonTraveller
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteCrmPersonTravellerResponse
     */
    public function setMidocoCrmPersonTraveller(?\Pggns\MidocoApi\Crm\StructType\CrmPersonTravellerDTO $midocoCrmPersonTraveller = null): self
    {
        $this->MidocoCrmPersonTraveller = $midocoCrmPersonTraveller;
        
        return $this;
    }
}
