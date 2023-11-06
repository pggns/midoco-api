<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCcCodesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCcCodesResponse extends AbstractStructBase
{
    /**
     * The CcCode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $CcCode = null;
    /**
     * Constructor method for GetCcCodesResponse
     * @uses GetCcCodesResponse::setCcCode()
     * @param string[] $ccCode
     */
    public function __construct(?array $ccCode = null)
    {
        $this
            ->setCcCode($ccCode);
    }
    /**
     * Get CcCode value
     * @return string[]
     */
    public function getCcCode(): ?array
    {
        return $this->CcCode;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCcCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCcCode method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCcCodeForArrayConstraintFromSetCcCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCcCodesResponseCcCodeItem) {
            // validation for constraint: itemType
            if (!is_string($getCcCodesResponseCcCodeItem)) {
                $invalidValues[] = is_object($getCcCodesResponseCcCodeItem) ? get_class($getCcCodesResponseCcCodeItem) : sprintf('%s(%s)', gettype($getCcCodesResponseCcCodeItem), var_export($getCcCodesResponseCcCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CcCode property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CcCode value
     * @throws InvalidArgumentException
     * @param string[] $ccCode
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetCcCodesResponse
     */
    public function setCcCode(?array $ccCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($ccCodeArrayErrorMessage = self::validateCcCodeForArrayConstraintFromSetCcCode($ccCode))) {
            throw new InvalidArgumentException($ccCodeArrayErrorMessage, __LINE__);
        }
        $this->CcCode = $ccCode;
        
        return $this;
    }
    /**
     * Add item to CcCode value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetCcCodesResponse
     */
    public function addToCcCode(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The CcCode property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CcCode[] = $item;
        
        return $this;
    }
}
