<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgunitsForMidocoRuleSetResponse StructType
 * @subpackage Structs
 */
class GetOrgunitsForMidocoRuleSetResponse extends AbstractStructBase
{
    /**
     * The MidocoOrgunit
     * Meta information extracted from the WSDL
     * - ref: system:MidocoOrgunit
     * @var \Pggns\MidocoApi\Orderlists\StructType\OrgunitDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\OrgunitDTO $MidocoOrgunit = null;
    /**
     * Constructor method for GetOrgunitsForMidocoRuleSetResponse
     * @uses GetOrgunitsForMidocoRuleSetResponse::setMidocoOrgunit()
     * @param \Pggns\MidocoApi\Orderlists\StructType\OrgunitDTO $midocoOrgunit
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\OrgunitDTO $midocoOrgunit = null)
    {
        $this
            ->setMidocoOrgunit($midocoOrgunit);
    }
    /**
     * Get MidocoOrgunit value
     * @return \Pggns\MidocoApi\Orderlists\StructType\OrgunitDTO|null
     */
    public function getMidocoOrgunit(): ?\Pggns\MidocoApi\Orderlists\StructType\OrgunitDTO
    {
        return $this->MidocoOrgunit;
    }
    /**
     * Set MidocoOrgunit value
     * @param \Pggns\MidocoApi\Orderlists\StructType\OrgunitDTO $midocoOrgunit
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetOrgunitsForMidocoRuleSetResponse
     */
    public function setMidocoOrgunit(?\Pggns\MidocoApi\Orderlists\StructType\OrgunitDTO $midocoOrgunit = null): self
    {
        $this->MidocoOrgunit = $midocoOrgunit;
        
        return $this;
    }
}
