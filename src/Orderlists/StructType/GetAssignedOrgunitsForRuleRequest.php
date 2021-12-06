<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAssignedOrgunitsForRuleRequest StructType
 * @subpackage Structs
 */
class GetAssignedOrgunitsForRuleRequest extends AbstractStructBase
{
    /**
     * The MidocoRuleAssignSearchCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoRuleAssignSearchCriteria
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoRuleAssignSearchCriteria|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoRuleAssignSearchCriteria $MidocoRuleAssignSearchCriteria = null;
    /**
     * Constructor method for GetAssignedOrgunitsForRuleRequest
     * @uses GetAssignedOrgunitsForRuleRequest::setMidocoRuleAssignSearchCriteria()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoRuleAssignSearchCriteria $midocoRuleAssignSearchCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoRuleAssignSearchCriteria $midocoRuleAssignSearchCriteria = null)
    {
        $this
            ->setMidocoRuleAssignSearchCriteria($midocoRuleAssignSearchCriteria);
    }
    /**
     * Get MidocoRuleAssignSearchCriteria value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoRuleAssignSearchCriteria|null
     */
    public function getMidocoRuleAssignSearchCriteria(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoRuleAssignSearchCriteria
    {
        return $this->MidocoRuleAssignSearchCriteria;
    }
    /**
     * Set MidocoRuleAssignSearchCriteria value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoRuleAssignSearchCriteria $midocoRuleAssignSearchCriteria
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetAssignedOrgunitsForRuleRequest
     */
    public function setMidocoRuleAssignSearchCriteria(?\Pggns\MidocoApi\Orderlists\StructType\MidocoRuleAssignSearchCriteria $midocoRuleAssignSearchCriteria = null): self
    {
        $this->MidocoRuleAssignSearchCriteria = $midocoRuleAssignSearchCriteria;
        
        return $this;
    }
}
