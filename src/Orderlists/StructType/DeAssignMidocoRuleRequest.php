<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeAssignMidocoRuleRequest StructType
 * @subpackage Structs
 */
class DeAssignMidocoRuleRequest extends AbstractStructBase
{
    /**
     * The MidocoRuleAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoRuleAssign
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\RuleAssignDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\RuleAssignDTO $MidocoRuleAssign = null;
    /**
     * Constructor method for DeAssignMidocoRuleRequest
     * @uses DeAssignMidocoRuleRequest::setMidocoRuleAssign()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\RuleAssignDTO $midocoRuleAssign
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\RuleAssignDTO $midocoRuleAssign = null)
    {
        $this
            ->setMidocoRuleAssign($midocoRuleAssign);
    }
    /**
     * Get MidocoRuleAssign value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\RuleAssignDTO|null
     */
    public function getMidocoRuleAssign(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\RuleAssignDTO
    {
        return $this->MidocoRuleAssign;
    }
    /**
     * Set MidocoRuleAssign value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\RuleAssignDTO $midocoRuleAssign
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\DeAssignMidocoRuleRequest
     */
    public function setMidocoRuleAssign(?\Pggns\MidocoApi\Api\Orderlists\StructType\RuleAssignDTO $midocoRuleAssign = null): self
    {
        $this->MidocoRuleAssign = $midocoRuleAssign;
        
        return $this;
    }
}
