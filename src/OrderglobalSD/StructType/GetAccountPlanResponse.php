<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderglobalSD\StructType;

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
     * @var \Pggns\MidocoApi\Api\OrderglobalSD\StructType\AccountPlanDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\AccountPlanDTO $MidocoAccountPlan = null;
    /**
     * Constructor method for GetAccountPlanResponse
     * @uses GetAccountPlanResponse::setMidocoAccountPlan()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\AccountPlanDTO $midocoAccountPlan
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\AccountPlanDTO $midocoAccountPlan = null)
    {
        $this
            ->setMidocoAccountPlan($midocoAccountPlan);
    }
    /**
     * Get MidocoAccountPlan value
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\AccountPlanDTO|null
     */
    public function getMidocoAccountPlan(): ?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\AccountPlanDTO
    {
        return $this->MidocoAccountPlan;
    }
    /**
     * Set MidocoAccountPlan value
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\AccountPlanDTO $midocoAccountPlan
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAccountPlanResponse
     */
    public function setMidocoAccountPlan(?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\AccountPlanDTO $midocoAccountPlan = null): self
    {
        $this->MidocoAccountPlan = $midocoAccountPlan;
        
        return $this;
    }
}
