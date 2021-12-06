<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateCompetitionRuleContentRequest StructType
 * @subpackage Structs
 */
class ValidateCompetitionRuleContentRequest extends AbstractStructBase
{
    /**
     * The MidocoRuleSet
     * Meta information extracted from the WSDL
     * - ref: MidocoRuleSet
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\RulesetDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\RulesetDTO $MidocoRuleSet = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * Constructor method for ValidateCompetitionRuleContentRequest
     * @uses ValidateCompetitionRuleContentRequest::setMidocoRuleSet()
     * @uses ValidateCompetitionRuleContentRequest::setOrderNo()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\RulesetDTO $midocoRuleSet
     * @param int $orderNo
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\RulesetDTO $midocoRuleSet = null, ?int $orderNo = null)
    {
        $this
            ->setMidocoRuleSet($midocoRuleSet)
            ->setOrderNo($orderNo);
    }
    /**
     * Get MidocoRuleSet value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\RulesetDTO|null
     */
    public function getMidocoRuleSet(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\RulesetDTO
    {
        return $this->MidocoRuleSet;
    }
    /**
     * Set MidocoRuleSet value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\RulesetDTO $midocoRuleSet
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\ValidateCompetitionRuleContentRequest
     */
    public function setMidocoRuleSet(?\Pggns\MidocoApi\Api\OrderSD\StructType\RulesetDTO $midocoRuleSet = null): self
    {
        $this->MidocoRuleSet = $midocoRuleSet;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\ValidateCompetitionRuleContentRequest
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
}
