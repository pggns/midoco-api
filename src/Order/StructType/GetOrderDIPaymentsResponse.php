<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderDIPaymentsResponse StructType
 * @subpackage Structs
 */
class GetOrderDIPaymentsResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderPayment
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderPayment[]
     */
    protected ?array $MidocoOrderPayment = null;
    /**
     * Constructor method for GetOrderDIPaymentsResponse
     * @uses GetOrderDIPaymentsResponse::setMidocoOrderPayment()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderPayment[] $midocoOrderPayment
     */
    public function __construct(?array $midocoOrderPayment = null)
    {
        $this
            ->setMidocoOrderPayment($midocoOrderPayment);
    }
    /**
     * Get MidocoOrderPayment value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderPayment[]
     */
    public function getMidocoOrderPayment(): ?array
    {
        return $this->MidocoOrderPayment;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrderPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderPayment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderPaymentForArrayConstraintsFromSetMidocoOrderPayment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderDIPaymentsResponseMidocoOrderPaymentItem) {
            // validation for constraint: itemType
            if (!$getOrderDIPaymentsResponseMidocoOrderPaymentItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderPayment) {
                $invalidValues[] = is_object($getOrderDIPaymentsResponseMidocoOrderPaymentItem) ? get_class($getOrderDIPaymentsResponseMidocoOrderPaymentItem) : sprintf('%s(%s)', gettype($getOrderDIPaymentsResponseMidocoOrderPaymentItem), var_export($getOrderDIPaymentsResponseMidocoOrderPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderPayment property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderPayment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderPayment[] $midocoOrderPayment
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderDIPaymentsResponse
     */
    public function setMidocoOrderPayment(?array $midocoOrderPayment = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderPaymentArrayErrorMessage = self::validateMidocoOrderPaymentForArrayConstraintsFromSetMidocoOrderPayment($midocoOrderPayment))) {
            throw new InvalidArgumentException($midocoOrderPaymentArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderPayment = $midocoOrderPayment;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderPayment $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderDIPaymentsResponse
     */
    public function addToMidocoOrderPayment(\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderPayment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderPayment) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderPayment property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderPayment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderPayment[] = $item;
        
        return $this;
    }
}