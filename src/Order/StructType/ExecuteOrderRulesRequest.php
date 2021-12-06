<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteOrderRulesRequest StructType
 * @subpackage Structs
 */
class ExecuteOrderRulesRequest extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The ruleName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    protected ?array $ruleName = null;
    /**
     * Constructor method for ExecuteOrderRulesRequest
     * @uses ExecuteOrderRulesRequest::setOrderId()
     * @uses ExecuteOrderRulesRequest::setRuleName()
     * @param int $orderId
     * @param string[] $ruleName
     */
    public function __construct(?int $orderId = null, ?array $ruleName = null)
    {
        $this
            ->setOrderId($orderId)
            ->setRuleName($ruleName);
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Api\Order\StructType\ExecuteOrderRulesRequest
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get ruleName value
     * @return string[]
     */
    public function getRuleName(): ?array
    {
        return $this->ruleName;
    }
    /**
     * This method is responsible for validating the values passed to the setRuleName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRuleName method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRuleNameForArrayConstraintsFromSetRuleName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeOrderRulesRequestRuleNameItem) {
            // validation for constraint: itemType
            if (!is_string($executeOrderRulesRequestRuleNameItem)) {
                $invalidValues[] = is_object($executeOrderRulesRequestRuleNameItem) ? get_class($executeOrderRulesRequestRuleNameItem) : sprintf('%s(%s)', gettype($executeOrderRulesRequestRuleNameItem), var_export($executeOrderRulesRequestRuleNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ruleName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ruleName value
     * @throws InvalidArgumentException
     * @param string[] $ruleName
     * @return \Pggns\MidocoApi\Api\Order\StructType\ExecuteOrderRulesRequest
     */
    public function setRuleName(?array $ruleName = null): self
    {
        // validation for constraint: array
        if ('' !== ($ruleNameArrayErrorMessage = self::validateRuleNameForArrayConstraintsFromSetRuleName($ruleName))) {
            throw new InvalidArgumentException($ruleNameArrayErrorMessage, __LINE__);
        }
        $this->ruleName = $ruleName;
        
        return $this;
    }
    /**
     * Add item to ruleName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\ExecuteOrderRulesRequest
     */
    public function addToRuleName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The ruleName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ruleName[] = $item;
        
        return $this;
    }
}
