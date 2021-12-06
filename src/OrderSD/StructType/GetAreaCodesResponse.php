<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAreaCodesResponse StructType
 * @subpackage Structs
 */
class GetAreaCodesResponse extends AbstractStructBase
{
    /**
     * The MidocoAreaCode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAreaCode
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoAreaCode[]
     */
    protected ?array $MidocoAreaCode = null;
    /**
     * Constructor method for GetAreaCodesResponse
     * @uses GetAreaCodesResponse::setMidocoAreaCode()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoAreaCode[] $midocoAreaCode
     */
    public function __construct(?array $midocoAreaCode = null)
    {
        $this
            ->setMidocoAreaCode($midocoAreaCode);
    }
    /**
     * Get MidocoAreaCode value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoAreaCode[]
     */
    public function getMidocoAreaCode(): ?array
    {
        return $this->MidocoAreaCode;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAreaCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAreaCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAreaCodeForArrayConstraintsFromSetMidocoAreaCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAreaCodesResponseMidocoAreaCodeItem) {
            // validation for constraint: itemType
            if (!$getAreaCodesResponseMidocoAreaCodeItem instanceof \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoAreaCode) {
                $invalidValues[] = is_object($getAreaCodesResponseMidocoAreaCodeItem) ? get_class($getAreaCodesResponseMidocoAreaCodeItem) : sprintf('%s(%s)', gettype($getAreaCodesResponseMidocoAreaCodeItem), var_export($getAreaCodesResponseMidocoAreaCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAreaCode property can only contain items of type \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoAreaCode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAreaCode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoAreaCode[] $midocoAreaCode
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetAreaCodesResponse
     */
    public function setMidocoAreaCode(?array $midocoAreaCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAreaCodeArrayErrorMessage = self::validateMidocoAreaCodeForArrayConstraintsFromSetMidocoAreaCode($midocoAreaCode))) {
            throw new InvalidArgumentException($midocoAreaCodeArrayErrorMessage, __LINE__);
        }
        $this->MidocoAreaCode = $midocoAreaCode;
        
        return $this;
    }
    /**
     * Add item to MidocoAreaCode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoAreaCode $item
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetAreaCodesResponse
     */
    public function addToMidocoAreaCode(\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoAreaCode $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoAreaCode) {
            throw new InvalidArgumentException(sprintf('The MidocoAreaCode property can only contain items of type \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoAreaCode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAreaCode[] = $item;
        
        return $this;
    }
}
