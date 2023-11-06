<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoFeeTypesByCodeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoFeeTypesByCodeRequest extends AbstractStructBase
{
    /**
     * The code
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $code = null;
    /**
     * Constructor method for GetMidocoFeeTypesByCodeRequest
     * @uses GetMidocoFeeTypesByCodeRequest::setCode()
     * @param string[] $code
     */
    public function __construct(?array $code = null)
    {
        $this
            ->setCode($code);
    }
    /**
     * Get code value
     * @return string[]
     */
    public function getCode(): ?array
    {
        return $this->code;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCode method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCodeForArrayConstraintFromSetCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoFeeTypesByCodeRequestCodeItem) {
            // validation for constraint: itemType
            if (!is_string($getMidocoFeeTypesByCodeRequestCodeItem)) {
                $invalidValues[] = is_object($getMidocoFeeTypesByCodeRequestCodeItem) ? get_class($getMidocoFeeTypesByCodeRequestCodeItem) : sprintf('%s(%s)', gettype($getMidocoFeeTypesByCodeRequestCodeItem), var_export($getMidocoFeeTypesByCodeRequestCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The code property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set code value
     * @throws InvalidArgumentException
     * @param string[] $code
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoFeeTypesByCodeRequest
     */
    public function setCode(?array $code = null): self
    {
        // validation for constraint: array
        if ('' !== ($codeArrayErrorMessage = self::validateCodeForArrayConstraintFromSetCode($code))) {
            throw new InvalidArgumentException($codeArrayErrorMessage, __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
    /**
     * Add item to code value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoFeeTypesByCodeRequest
     */
    public function addToCode(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The code property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->code[] = $item;
        
        return $this;
    }
}
