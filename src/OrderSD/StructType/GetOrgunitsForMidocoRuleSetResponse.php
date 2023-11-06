<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgunitsForMidocoRuleSetResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrgunitsForMidocoRuleSetResponse extends AbstractStructBase
{
    /**
     * The MidocoOrgunit
     * Meta information extracted from the WSDL
     * - ref: system:MidocoOrgunit
     * @var \Pggns\MidocoApi\OrderSD\StructType\OrgunitDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\OrgunitDTO $MidocoOrgunit = null;
    /**
     * Constructor method for GetOrgunitsForMidocoRuleSetResponse
     * @uses GetOrgunitsForMidocoRuleSetResponse::setMidocoOrgunit()
     * @param \Pggns\MidocoApi\OrderSD\StructType\OrgunitDTO $midocoOrgunit
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\OrgunitDTO $midocoOrgunit = null)
    {
        $this
            ->setMidocoOrgunit($midocoOrgunit);
    }
    /**
     * Get MidocoOrgunit value
     * @return \Pggns\MidocoApi\OrderSD\StructType\OrgunitDTO|null
     */
    public function getMidocoOrgunit(): ?\Pggns\MidocoApi\OrderSD\StructType\OrgunitDTO
    {
        return $this->MidocoOrgunit;
    }
    /**
     * Set MidocoOrgunit value
     * @param \Pggns\MidocoApi\OrderSD\StructType\OrgunitDTO $midocoOrgunit
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetOrgunitsForMidocoRuleSetResponse
     */
    public function setMidocoOrgunit(?\Pggns\MidocoApi\OrderSD\StructType\OrgunitDTO $midocoOrgunit = null): self
    {
        $this->MidocoOrgunit = $midocoOrgunit;
        
        return $this;
    }
}
