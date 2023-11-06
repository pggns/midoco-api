<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoJasperParameterValue StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoJasperParameterValue extends AbstractStructBase
{
    /**
     * The ParameterValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Pggns\MidocoApi\Mis\StructType\ParameterValue[]
     */
    protected ?array $ParameterValue = null;
    /**
     * The paramId
     * @var int|null
     */
    protected ?int $paramId = null;
    /**
     * Constructor method for MidocoJasperParameterValue
     * @uses MidocoJasperParameterValue::setParameterValue()
     * @uses MidocoJasperParameterValue::setParamId()
     * @param \Pggns\MidocoApi\Mis\StructType\ParameterValue[] $parameterValue
     * @param int $paramId
     */
    public function __construct(?array $parameterValue = null, ?int $paramId = null)
    {
        $this
            ->setParameterValue($parameterValue)
            ->setParamId($paramId);
    }
    /**
     * Get ParameterValue value
     * @return \Pggns\MidocoApi\Mis\StructType\ParameterValue[]
     */
    public function getParameterValue(): ?array
    {
        return $this->ParameterValue;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setParameterValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setParameterValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateParameterValueForArrayConstraintFromSetParameterValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoJasperParameterValueParameterValueItem) {
            // validation for constraint: itemType
            if (!$midocoJasperParameterValueParameterValueItem instanceof \Pggns\MidocoApi\Mis\StructType\ParameterValue) {
                $invalidValues[] = is_object($midocoJasperParameterValueParameterValueItem) ? get_class($midocoJasperParameterValueParameterValueItem) : sprintf('%s(%s)', gettype($midocoJasperParameterValueParameterValueItem), var_export($midocoJasperParameterValueParameterValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ParameterValue property can only contain items of type \Pggns\MidocoApi\Mis\StructType\ParameterValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ParameterValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\ParameterValue[] $parameterValue
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterValue
     */
    public function setParameterValue(?array $parameterValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($parameterValueArrayErrorMessage = self::validateParameterValueForArrayConstraintFromSetParameterValue($parameterValue))) {
            throw new InvalidArgumentException($parameterValueArrayErrorMessage, __LINE__);
        }
        $this->ParameterValue = $parameterValue;
        
        return $this;
    }
    /**
     * Add item to ParameterValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\ParameterValue $item
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterValue
     */
    public function addToParameterValue(\Pggns\MidocoApi\Mis\StructType\ParameterValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\ParameterValue) {
            throw new InvalidArgumentException(sprintf('The ParameterValue property can only contain items of type \Pggns\MidocoApi\Mis\StructType\ParameterValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ParameterValue[] = $item;
        
        return $this;
    }
    /**
     * Get paramId value
     * @return int|null
     */
    public function getParamId(): ?int
    {
        return $this->paramId;
    }
    /**
     * Set paramId value
     * @param int $paramId
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterValue
     */
    public function setParamId(?int $paramId = null): self
    {
        // validation for constraint: int
        if (!is_null($paramId) && !(is_int($paramId) || ctype_digit($paramId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paramId, true), gettype($paramId)), __LINE__);
        }
        $this->paramId = $paramId;
        
        return $this;
    }
}
