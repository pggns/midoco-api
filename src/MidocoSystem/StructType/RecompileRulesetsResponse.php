<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecompileRulesetsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RecompileRulesetsResponse extends AbstractStructBase
{
    /**
     * The SystemRulesetCompiledResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: SystemRulesetCompiledResult
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\SystemRulesetCompiledResult[]
     */
    protected ?array $SystemRulesetCompiledResult = null;
    /**
     * Constructor method for RecompileRulesetsResponse
     * @uses RecompileRulesetsResponse::setSystemRulesetCompiledResult()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\SystemRulesetCompiledResult[] $systemRulesetCompiledResult
     */
    public function __construct(?array $systemRulesetCompiledResult = null)
    {
        $this
            ->setSystemRulesetCompiledResult($systemRulesetCompiledResult);
    }
    /**
     * Get SystemRulesetCompiledResult value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SystemRulesetCompiledResult[]
     */
    public function getSystemRulesetCompiledResult(): ?array
    {
        return $this->SystemRulesetCompiledResult;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSystemRulesetCompiledResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSystemRulesetCompiledResult method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSystemRulesetCompiledResultForArrayConstraintFromSetSystemRulesetCompiledResult(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $recompileRulesetsResponseSystemRulesetCompiledResultItem) {
            // validation for constraint: itemType
            if (!$recompileRulesetsResponseSystemRulesetCompiledResultItem instanceof \Pggns\MidocoApi\MidocoSystem\StructType\SystemRulesetCompiledResult) {
                $invalidValues[] = is_object($recompileRulesetsResponseSystemRulesetCompiledResultItem) ? get_class($recompileRulesetsResponseSystemRulesetCompiledResultItem) : sprintf('%s(%s)', gettype($recompileRulesetsResponseSystemRulesetCompiledResultItem), var_export($recompileRulesetsResponseSystemRulesetCompiledResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SystemRulesetCompiledResult property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\SystemRulesetCompiledResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SystemRulesetCompiledResult value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\SystemRulesetCompiledResult[] $systemRulesetCompiledResult
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\RecompileRulesetsResponse
     */
    public function setSystemRulesetCompiledResult(?array $systemRulesetCompiledResult = null): self
    {
        // validation for constraint: array
        if ('' !== ($systemRulesetCompiledResultArrayErrorMessage = self::validateSystemRulesetCompiledResultForArrayConstraintFromSetSystemRulesetCompiledResult($systemRulesetCompiledResult))) {
            throw new InvalidArgumentException($systemRulesetCompiledResultArrayErrorMessage, __LINE__);
        }
        $this->SystemRulesetCompiledResult = $systemRulesetCompiledResult;
        
        return $this;
    }
    /**
     * Add item to SystemRulesetCompiledResult value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\SystemRulesetCompiledResult $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\RecompileRulesetsResponse
     */
    public function addToSystemRulesetCompiledResult(\Pggns\MidocoApi\MidocoSystem\StructType\SystemRulesetCompiledResult $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\MidocoSystem\StructType\SystemRulesetCompiledResult) {
            throw new InvalidArgumentException(sprintf('The SystemRulesetCompiledResult property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\SystemRulesetCompiledResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SystemRulesetCompiledResult[] = $item;
        
        return $this;
    }
}
