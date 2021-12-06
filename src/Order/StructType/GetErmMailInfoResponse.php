<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetErmMailInfoResponse StructType
 * @subpackage Structs
 */
class GetErmMailInfoResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderMailErm
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderMailErm
     * @var \Pggns\MidocoApi\Api\Order\StructType\OrderMailErmDTO[]
     */
    protected ?array $MidocoOrderMailErm = null;
    /**
     * Constructor method for GetErmMailInfoResponse
     * @uses GetErmMailInfoResponse::setMidocoOrderMailErm()
     * @param \Pggns\MidocoApi\Api\Order\StructType\OrderMailErmDTO[] $midocoOrderMailErm
     */
    public function __construct(?array $midocoOrderMailErm = null)
    {
        $this
            ->setMidocoOrderMailErm($midocoOrderMailErm);
    }
    /**
     * Get MidocoOrderMailErm value
     * @return \Pggns\MidocoApi\Api\Order\StructType\OrderMailErmDTO[]
     */
    public function getMidocoOrderMailErm(): ?array
    {
        return $this->MidocoOrderMailErm;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrderMailErm method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderMailErm method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderMailErmForArrayConstraintsFromSetMidocoOrderMailErm(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getErmMailInfoResponseMidocoOrderMailErmItem) {
            // validation for constraint: itemType
            if (!$getErmMailInfoResponseMidocoOrderMailErmItem instanceof \Pggns\MidocoApi\Api\Order\StructType\OrderMailErmDTO) {
                $invalidValues[] = is_object($getErmMailInfoResponseMidocoOrderMailErmItem) ? get_class($getErmMailInfoResponseMidocoOrderMailErmItem) : sprintf('%s(%s)', gettype($getErmMailInfoResponseMidocoOrderMailErmItem), var_export($getErmMailInfoResponseMidocoOrderMailErmItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderMailErm property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\OrderMailErmDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderMailErm value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\OrderMailErmDTO[] $midocoOrderMailErm
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetErmMailInfoResponse
     */
    public function setMidocoOrderMailErm(?array $midocoOrderMailErm = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderMailErmArrayErrorMessage = self::validateMidocoOrderMailErmForArrayConstraintsFromSetMidocoOrderMailErm($midocoOrderMailErm))) {
            throw new InvalidArgumentException($midocoOrderMailErmArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderMailErm = $midocoOrderMailErm;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderMailErm value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\OrderMailErmDTO $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetErmMailInfoResponse
     */
    public function addToMidocoOrderMailErm(\Pggns\MidocoApi\Api\Order\StructType\OrderMailErmDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\OrderMailErmDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderMailErm property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\OrderMailErmDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderMailErm[] = $item;
        
        return $this;
    }
}
