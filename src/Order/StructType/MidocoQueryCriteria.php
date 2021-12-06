<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoQueryCriteria StructType
 * @subpackage Structs
 */
class MidocoQueryCriteria extends AbstractStructBase
{
    /**
     * The value
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $value = null;
    /**
     * The fieldName
     * @var string|null
     */
    protected ?string $fieldName = null;
    /**
     * The opName
     * @var string|null
     */
    protected ?string $opName = null;
    /**
     * The visible
     * @var bool|null
     */
    protected ?bool $visible = null;
    /**
     * Constructor method for MidocoQueryCriteria
     * @uses MidocoQueryCriteria::setValue()
     * @uses MidocoQueryCriteria::setFieldName()
     * @uses MidocoQueryCriteria::setOpName()
     * @uses MidocoQueryCriteria::setVisible()
     * @param string[] $value
     * @param string $fieldName
     * @param string $opName
     * @param bool $visible
     */
    public function __construct(?array $value = null, ?string $fieldName = null, ?string $opName = null, ?bool $visible = null)
    {
        $this
            ->setValue($value)
            ->setFieldName($fieldName)
            ->setOpName($opName)
            ->setVisible($visible);
    }
    /**
     * Get value value
     * @return string[]
     */
    public function getValue(): ?array
    {
        return $this->value;
    }
    /**
     * This method is responsible for validating the values passed to the setValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateValueForArrayConstraintsFromSetValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoQueryCriteriaValueItem) {
            // validation for constraint: itemType
            if (!is_string($midocoQueryCriteriaValueItem)) {
                $invalidValues[] = is_object($midocoQueryCriteriaValueItem) ? get_class($midocoQueryCriteriaValueItem) : sprintf('%s(%s)', gettype($midocoQueryCriteriaValueItem), var_export($midocoQueryCriteriaValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The value property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set value value
     * @throws InvalidArgumentException
     * @param string[] $value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoQueryCriteria
     */
    public function setValue(?array $value = null): self
    {
        // validation for constraint: array
        if ('' !== ($valueArrayErrorMessage = self::validateValueForArrayConstraintsFromSetValue($value))) {
            throw new InvalidArgumentException($valueArrayErrorMessage, __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
    /**
     * Add item to value value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoQueryCriteria
     */
    public function addToValue(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The value property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->value[] = $item;
        
        return $this;
    }
    /**
     * Get fieldName value
     * @return string|null
     */
    public function getFieldName(): ?string
    {
        return $this->fieldName;
    }
    /**
     * Set fieldName value
     * @param string $fieldName
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoQueryCriteria
     */
    public function setFieldName(?string $fieldName = null): self
    {
        // validation for constraint: string
        if (!is_null($fieldName) && !is_string($fieldName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldName, true), gettype($fieldName)), __LINE__);
        }
        $this->fieldName = $fieldName;
        
        return $this;
    }
    /**
     * Get opName value
     * @return string|null
     */
    public function getOpName(): ?string
    {
        return $this->opName;
    }
    /**
     * Set opName value
     * @param string $opName
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoQueryCriteria
     */
    public function setOpName(?string $opName = null): self
    {
        // validation for constraint: string
        if (!is_null($opName) && !is_string($opName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($opName, true), gettype($opName)), __LINE__);
        }
        $this->opName = $opName;
        
        return $this;
    }
    /**
     * Get visible value
     * @return bool|null
     */
    public function getVisible(): ?bool
    {
        return $this->visible;
    }
    /**
     * Set visible value
     * @param bool $visible
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoQueryCriteria
     */
    public function setVisible(?bool $visible = null): self
    {
        // validation for constraint: boolean
        if (!is_null($visible) && !is_bool($visible)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($visible, true), gettype($visible)), __LINE__);
        }
        $this->visible = $visible;
        
        return $this;
    }
}