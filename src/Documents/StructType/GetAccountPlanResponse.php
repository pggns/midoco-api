<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccountPlanResponse StructType
 * @subpackage Structs
 */
class GetAccountPlanResponse extends AbstractStructBase
{
    /**
     * The MidocoAccountPlan
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoAccountPlan
     * @var \Pggns\MidocoApi\Documents\StructType\AccountPlanDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\AccountPlanDTO $MidocoAccountPlan = null;
    /**
     * Constructor method for GetAccountPlanResponse
     * @uses GetAccountPlanResponse::setMidocoAccountPlan()
     * @param \Pggns\MidocoApi\Documents\StructType\AccountPlanDTO $midocoAccountPlan
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\AccountPlanDTO $midocoAccountPlan = null)
    {
        $this
            ->setMidocoAccountPlan($midocoAccountPlan);
    }
    /**
     * Get MidocoAccountPlan value
     * @return \Pggns\MidocoApi\Documents\StructType\AccountPlanDTO|null
     */
    public function getMidocoAccountPlan(): ?\Pggns\MidocoApi\Documents\StructType\AccountPlanDTO
    {
        return $this->MidocoAccountPlan;
    }
    /**
     * Set MidocoAccountPlan value
     * @param \Pggns\MidocoApi\Documents\StructType\AccountPlanDTO $midocoAccountPlan
     * @return \Pggns\MidocoApi\Documents\StructType\GetAccountPlanResponse
     */
    public function setMidocoAccountPlan(?\Pggns\MidocoApi\Documents\StructType\AccountPlanDTO $midocoAccountPlan = null): self
    {
        $this->MidocoAccountPlan = $midocoAccountPlan;
        
        return $this;
    }
}
