<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBankNumberResponse StructType
 * @subpackage Structs
 */
class GetBankNumberResponse extends AbstractStructBase
{
    /**
     * The MidocoBankCode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoBankCode[]
     */
    protected ?array $MidocoBankCode = null;
    /**
     * Constructor method for GetBankNumberResponse
     * @uses GetBankNumberResponse::setMidocoBankCode()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoBankCode[] $midocoBankCode
     */
    public function __construct(?array $midocoBankCode = null)
    {
        $this
            ->setMidocoBankCode($midocoBankCode);
    }
    /**
     * Get MidocoBankCode value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoBankCode[]
     */
    public function getMidocoBankCode(): ?array
    {
        return $this->MidocoBankCode;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBankCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBankCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBankCodeForArrayConstraintsFromSetMidocoBankCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBankNumberResponseMidocoBankCodeItem) {
            // validation for constraint: itemType
            if (!$getBankNumberResponseMidocoBankCodeItem instanceof \Pggns\MidocoApi\Api\Documents\StructType\MidocoBankCode) {
                $invalidValues[] = is_object($getBankNumberResponseMidocoBankCodeItem) ? get_class($getBankNumberResponseMidocoBankCodeItem) : sprintf('%s(%s)', gettype($getBankNumberResponseMidocoBankCodeItem), var_export($getBankNumberResponseMidocoBankCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBankCode property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\MidocoBankCode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBankCode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoBankCode[] $midocoBankCode
     * @return \Pggns\MidocoApi\Api\Documents\StructType\GetBankNumberResponse
     */
    public function setMidocoBankCode(?array $midocoBankCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBankCodeArrayErrorMessage = self::validateMidocoBankCodeForArrayConstraintsFromSetMidocoBankCode($midocoBankCode))) {
            throw new InvalidArgumentException($midocoBankCodeArrayErrorMessage, __LINE__);
        }
        $this->MidocoBankCode = $midocoBankCode;
        
        return $this;
    }
    /**
     * Add item to MidocoBankCode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoBankCode $item
     * @return \Pggns\MidocoApi\Api\Documents\StructType\GetBankNumberResponse
     */
    public function addToMidocoBankCode(\Pggns\MidocoApi\Api\Documents\StructType\MidocoBankCode $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Documents\StructType\MidocoBankCode) {
            throw new InvalidArgumentException(sprintf('The MidocoBankCode property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\MidocoBankCode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBankCode[] = $item;
        
        return $this;
    }
}
