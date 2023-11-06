<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompileRulesetRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CompileRulesetRequest extends AbstractStructBase
{
    /**
     * The rulesetId
     * @var int|null
     */
    protected ?int $rulesetId = null;
    /**
     * Constructor method for CompileRulesetRequest
     * @uses CompileRulesetRequest::setRulesetId()
     * @param int $rulesetId
     */
    public function __construct(?int $rulesetId = null)
    {
        $this
            ->setRulesetId($rulesetId);
    }
    /**
     * Get rulesetId value
     * @return int|null
     */
    public function getRulesetId(): ?int
    {
        return $this->rulesetId;
    }
    /**
     * Set rulesetId value
     * @param int $rulesetId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\CompileRulesetRequest
     */
    public function setRulesetId(?int $rulesetId = null): self
    {
        // validation for constraint: int
        if (!is_null($rulesetId) && !(is_int($rulesetId) || ctype_digit($rulesetId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rulesetId, true), gettype($rulesetId)), __LINE__);
        }
        $this->rulesetId = $rulesetId;
        
        return $this;
    }
}
