<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderRemarksResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getOrderRemarks --- returns the list of order Remarks for an order
 * @subpackage Structs
 */
class GetOrderRemarksResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderRemark
     * @var \Pggns\MidocoApi\Api\Order\StructType\OrderRemarkDTO[]
     */
    protected ?array $MidocoOrderRemark = null;
    /**
     * Constructor method for GetOrderRemarksResponse
     * @uses GetOrderRemarksResponse::setMidocoOrderRemark()
     * @param \Pggns\MidocoApi\Api\Order\StructType\OrderRemarkDTO[] $midocoOrderRemark
     */
    public function __construct(?array $midocoOrderRemark = null)
    {
        $this
            ->setMidocoOrderRemark($midocoOrderRemark);
    }
    /**
     * Get MidocoOrderRemark value
     * @return \Pggns\MidocoApi\Api\Order\StructType\OrderRemarkDTO[]
     */
    public function getMidocoOrderRemark(): ?array
    {
        return $this->MidocoOrderRemark;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrderRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderRemarkForArrayConstraintsFromSetMidocoOrderRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderRemarksResponseMidocoOrderRemarkItem) {
            // validation for constraint: itemType
            if (!$getOrderRemarksResponseMidocoOrderRemarkItem instanceof \Pggns\MidocoApi\Api\Order\StructType\OrderRemarkDTO) {
                $invalidValues[] = is_object($getOrderRemarksResponseMidocoOrderRemarkItem) ? get_class($getOrderRemarksResponseMidocoOrderRemarkItem) : sprintf('%s(%s)', gettype($getOrderRemarksResponseMidocoOrderRemarkItem), var_export($getOrderRemarksResponseMidocoOrderRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderRemark property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\OrderRemarkDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\OrderRemarkDTO[] $midocoOrderRemark
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderRemarksResponse
     */
    public function setMidocoOrderRemark(?array $midocoOrderRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderRemarkArrayErrorMessage = self::validateMidocoOrderRemarkForArrayConstraintsFromSetMidocoOrderRemark($midocoOrderRemark))) {
            throw new InvalidArgumentException($midocoOrderRemarkArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderRemark = $midocoOrderRemark;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\OrderRemarkDTO $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderRemarksResponse
     */
    public function addToMidocoOrderRemark(\Pggns\MidocoApi\Api\Order\StructType\OrderRemarkDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\OrderRemarkDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderRemark property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\OrderRemarkDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderRemark[] = $item;
        
        return $this;
    }
}
