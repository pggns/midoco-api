<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

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
     * @var \Pggns\MidocoApi\Documents\StructType\OrgunitDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\OrgunitDTO $MidocoOrgunit = null;
    /**
     * Constructor method for GetOrgunitsForMidocoRuleSetResponse
     * @uses GetOrgunitsForMidocoRuleSetResponse::setMidocoOrgunit()
     * @param \Pggns\MidocoApi\Documents\StructType\OrgunitDTO $midocoOrgunit
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\OrgunitDTO $midocoOrgunit = null)
    {
        $this
            ->setMidocoOrgunit($midocoOrgunit);
    }
    /**
     * Get MidocoOrgunit value
     * @return \Pggns\MidocoApi\Documents\StructType\OrgunitDTO|null
     */
    public function getMidocoOrgunit(): ?\Pggns\MidocoApi\Documents\StructType\OrgunitDTO
    {
        return $this->MidocoOrgunit;
    }
    /**
     * Set MidocoOrgunit value
     * @param \Pggns\MidocoApi\Documents\StructType\OrgunitDTO $midocoOrgunit
     * @return \Pggns\MidocoApi\Documents\StructType\GetOrgunitsForMidocoRuleSetResponse
     */
    public function setMidocoOrgunit(?\Pggns\MidocoApi\Documents\StructType\OrgunitDTO $midocoOrgunit = null): self
    {
        $this->MidocoOrgunit = $midocoOrgunit;
        
        return $this;
    }
}
