<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecompileRulesetsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RecompileRulesetsRequest extends AbstractStructBase
{
    /**
     * The SystemRuleset2CompileIds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $SystemRuleset2CompileIds = null;
    /**
     * Constructor method for RecompileRulesetsRequest
     * @uses RecompileRulesetsRequest::setSystemRuleset2CompileIds()
     * @param int[] $systemRuleset2CompileIds
     */
    public function __construct(?array $systemRuleset2CompileIds = null)
    {
        $this
            ->setSystemRuleset2CompileIds($systemRuleset2CompileIds);
    }
    /**
     * Get SystemRuleset2CompileIds value
     * @return int[]
     */
    public function getSystemRuleset2CompileIds(): ?array
    {
        return $this->SystemRuleset2CompileIds;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSystemRuleset2CompileIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSystemRuleset2CompileIds method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSystemRuleset2CompileIdsForArrayConstraintFromSetSystemRuleset2CompileIds(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $recompileRulesetsRequestSystemRuleset2CompileIdsItem) {
            // validation for constraint: itemType
            if (!(is_int($recompileRulesetsRequestSystemRuleset2CompileIdsItem) || ctype_digit($recompileRulesetsRequestSystemRuleset2CompileIdsItem))) {
                $invalidValues[] = is_object($recompileRulesetsRequestSystemRuleset2CompileIdsItem) ? get_class($recompileRulesetsRequestSystemRuleset2CompileIdsItem) : sprintf('%s(%s)', gettype($recompileRulesetsRequestSystemRuleset2CompileIdsItem), var_export($recompileRulesetsRequestSystemRuleset2CompileIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SystemRuleset2CompileIds property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SystemRuleset2CompileIds value
     * @throws InvalidArgumentException
     * @param int[] $systemRuleset2CompileIds
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\RecompileRulesetsRequest
     */
    public function setSystemRuleset2CompileIds(?array $systemRuleset2CompileIds = null): self
    {
        // validation for constraint: array
        if ('' !== ($systemRuleset2CompileIdsArrayErrorMessage = self::validateSystemRuleset2CompileIdsForArrayConstraintFromSetSystemRuleset2CompileIds($systemRuleset2CompileIds))) {
            throw new InvalidArgumentException($systemRuleset2CompileIdsArrayErrorMessage, __LINE__);
        }
        $this->SystemRuleset2CompileIds = $systemRuleset2CompileIds;
        
        return $this;
    }
    /**
     * Add item to SystemRuleset2CompileIds value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\RecompileRulesetsRequest
     */
    public function addToSystemRuleset2CompileIds(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The SystemRuleset2CompileIds property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SystemRuleset2CompileIds[] = $item;
        
        return $this;
    }
}
