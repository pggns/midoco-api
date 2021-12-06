<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoRuleSetRequest StructType
 * @subpackage Structs
 */
class SaveMidocoRuleSetRequest extends AbstractStructBase
{
    /**
     * The MidocoRuleSet
     * Meta information extracted from the WSDL
     * - ref: MidocoRuleSet
     * @var \Pggns\MidocoApi\Orderlists\StructType\RulesetDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\RulesetDTO $MidocoRuleSet = null;
    /**
     * Constructor method for SaveMidocoRuleSetRequest
     * @uses SaveMidocoRuleSetRequest::setMidocoRuleSet()
     * @param \Pggns\MidocoApi\Orderlists\StructType\RulesetDTO $midocoRuleSet
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\RulesetDTO $midocoRuleSet = null)
    {
        $this
            ->setMidocoRuleSet($midocoRuleSet);
    }
    /**
     * Get MidocoRuleSet value
     * @return \Pggns\MidocoApi\Orderlists\StructType\RulesetDTO|null
     */
    public function getMidocoRuleSet(): ?\Pggns\MidocoApi\Orderlists\StructType\RulesetDTO
    {
        return $this->MidocoRuleSet;
    }
    /**
     * Set MidocoRuleSet value
     * @param \Pggns\MidocoApi\Orderlists\StructType\RulesetDTO $midocoRuleSet
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveMidocoRuleSetRequest
     */
    public function setMidocoRuleSet(?\Pggns\MidocoApi\Orderlists\StructType\RulesetDTO $midocoRuleSet = null): self
    {
        $this->MidocoRuleSet = $midocoRuleSet;
        
        return $this;
    }
}
