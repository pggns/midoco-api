<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\CrmSD\StructType\CrmPersonTravellerDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\CrmPersonTravellerDTO $MidocoCrmPersonTraveller = null;
    /**
     * Constructor method for DeleteCrmPersonTravellerResponse
     * @uses DeleteCrmPersonTravellerResponse::setMidocoCrmPersonTraveller()
     * @param \Pggns\MidocoApi\CrmSD\StructType\CrmPersonTravellerDTO $midocoCrmPersonTraveller
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\CrmPersonTravellerDTO $midocoCrmPersonTraveller = null)
    {
        $this
            ->setMidocoCrmPersonTraveller($midocoCrmPersonTraveller);
    }
    /**
     * Get MidocoCrmPersonTraveller value
     * @return \Pggns\MidocoApi\CrmSD\StructType\CrmPersonTravellerDTO|null
     */
    public function getMidocoCrmPersonTraveller(): ?\Pggns\MidocoApi\CrmSD\StructType\CrmPersonTravellerDTO
    {
        return $this->MidocoCrmPersonTraveller;
    }
    /**
     * Set MidocoCrmPersonTraveller value
     * @param \Pggns\MidocoApi\CrmSD\StructType\CrmPersonTravellerDTO $midocoCrmPersonTraveller
     * @return \Pggns\MidocoApi\CrmSD\StructType\DeleteCrmPersonTravellerResponse
     */
    public function setMidocoCrmPersonTraveller(?\Pggns\MidocoApi\CrmSD\StructType\CrmPersonTravellerDTO $midocoCrmPersonTraveller = null): self
    {
        $this->MidocoCrmPersonTraveller = $midocoCrmPersonTraveller;
        
        return $this;
    }
}
