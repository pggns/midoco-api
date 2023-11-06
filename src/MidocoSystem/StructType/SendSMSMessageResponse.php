<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendSMSMessageResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SendSMSMessageResponse extends AbstractStructBase
{
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for SendSMSMessageResponse
     * @uses SendSMSMessageResponse::setError()
     * @param string[] $error
     */
    public function __construct(?array $error = null)
    {
        $this
            ->setError($error);
    }
    /**
     * Get error value
     * @return string[]
     */
    public function getError(): ?array
    {
        return $this->error;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setError method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorForArrayConstraintFromSetError(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $sendSMSMessageResponseErrorItem) {
            // validation for constraint: itemType
            if (!is_string($sendSMSMessageResponseErrorItem)) {
                $invalidValues[] = is_object($sendSMSMessageResponseErrorItem) ? get_class($sendSMSMessageResponseErrorItem) : sprintf('%s(%s)', gettype($sendSMSMessageResponseErrorItem), var_export($sendSMSMessageResponseErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The error property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set error value
     * @throws InvalidArgumentException
     * @param string[] $error
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SendSMSMessageResponse
     */
    public function setError(?array $error = null): self
    {
        // validation for constraint: array
        if ('' !== ($errorArrayErrorMessage = self::validateErrorForArrayConstraintFromSetError($error))) {
            throw new InvalidArgumentException($errorArrayErrorMessage, __LINE__);
        }
        $this->error = $error;
        
        return $this;
    }
    /**
     * Add item to error value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SendSMSMessageResponse
     */
    public function addToError(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The error property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->error[] = $item;
        
        return $this;
    }
}
