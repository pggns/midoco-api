<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrdersForMediatorResponse StructType
 * @subpackage Structs
 */
class GetOrdersForMediatorResponse extends AbstractStructBase
{
    /**
     * The MidocoMediatorOrderInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMediatorOrderInfo
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoMediatorOrderInfo[]
     */
    protected ?array $MidocoMediatorOrderInfo = null;
    /**
     * Constructor method for GetOrdersForMediatorResponse
     * @uses GetOrdersForMediatorResponse::setMidocoMediatorOrderInfo()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoMediatorOrderInfo[] $midocoMediatorOrderInfo
     */
    public function __construct(?array $midocoMediatorOrderInfo = null)
    {
        $this
            ->setMidocoMediatorOrderInfo($midocoMediatorOrderInfo);
    }
    /**
     * Get MidocoMediatorOrderInfo value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoMediatorOrderInfo[]
     */
    public function getMidocoMediatorOrderInfo(): ?array
    {
        return $this->MidocoMediatorOrderInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMediatorOrderInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMediatorOrderInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMediatorOrderInfoForArrayConstraintsFromSetMidocoMediatorOrderInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrdersForMediatorResponseMidocoMediatorOrderInfoItem) {
            // validation for constraint: itemType
            if (!$getOrdersForMediatorResponseMidocoMediatorOrderInfoItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoMediatorOrderInfo) {
                $invalidValues[] = is_object($getOrdersForMediatorResponseMidocoMediatorOrderInfoItem) ? get_class($getOrdersForMediatorResponseMidocoMediatorOrderInfoItem) : sprintf('%s(%s)', gettype($getOrdersForMediatorResponseMidocoMediatorOrderInfoItem), var_export($getOrdersForMediatorResponseMidocoMediatorOrderInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMediatorOrderInfo property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoMediatorOrderInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMediatorOrderInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoMediatorOrderInfo[] $midocoMediatorOrderInfo
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrdersForMediatorResponse
     */
    public function setMidocoMediatorOrderInfo(?array $midocoMediatorOrderInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMediatorOrderInfoArrayErrorMessage = self::validateMidocoMediatorOrderInfoForArrayConstraintsFromSetMidocoMediatorOrderInfo($midocoMediatorOrderInfo))) {
            throw new InvalidArgumentException($midocoMediatorOrderInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoMediatorOrderInfo = $midocoMediatorOrderInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoMediatorOrderInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoMediatorOrderInfo $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrdersForMediatorResponse
     */
    public function addToMidocoMediatorOrderInfo(\Pggns\MidocoApi\Api\Order\StructType\MidocoMediatorOrderInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoMediatorOrderInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoMediatorOrderInfo property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoMediatorOrderInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMediatorOrderInfo[] = $item;
        
        return $this;
    }
}
