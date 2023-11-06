<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeAssignMidocoRuleRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeAssignMidocoRuleRequest extends AbstractStructBase
{
    /**
     * The MidocoRuleAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoRuleAssign
     * @var \Pggns\MidocoApi\Documents\StructType\RuleAssignDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\RuleAssignDTO $MidocoRuleAssign = null;
    /**
     * Constructor method for DeAssignMidocoRuleRequest
     * @uses DeAssignMidocoRuleRequest::setMidocoRuleAssign()
     * @param \Pggns\MidocoApi\Documents\StructType\RuleAssignDTO $midocoRuleAssign
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\RuleAssignDTO $midocoRuleAssign = null)
    {
        $this
            ->setMidocoRuleAssign($midocoRuleAssign);
    }
    /**
     * Get MidocoRuleAssign value
     * @return \Pggns\MidocoApi\Documents\StructType\RuleAssignDTO|null
     */
    public function getMidocoRuleAssign(): ?\Pggns\MidocoApi\Documents\StructType\RuleAssignDTO
    {
        return $this->MidocoRuleAssign;
    }
    /**
     * Set MidocoRuleAssign value
     * @param \Pggns\MidocoApi\Documents\StructType\RuleAssignDTO $midocoRuleAssign
     * @return \Pggns\MidocoApi\Documents\StructType\DeAssignMidocoRuleRequest
     */
    public function setMidocoRuleAssign(?\Pggns\MidocoApi\Documents\StructType\RuleAssignDTO $midocoRuleAssign = null): self
    {
        $this->MidocoRuleAssign = $midocoRuleAssign;
        
        return $this;
    }
}
