<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrderPaymentReminderInfo StructType
 * @subpackage Structs
 */
class MidocoOrderPaymentReminderInfo extends AbstractStructBase
{
    /**
     * The PaymentReminderInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Documents\StructType\PaymentReminderInfo[]
     */
    protected ?array $PaymentReminderInfo = null;
    /**
     * Constructor method for MidocoOrderPaymentReminderInfo
     * @uses MidocoOrderPaymentReminderInfo::setPaymentReminderInfo()
     * @param \Pggns\MidocoApi\Documents\StructType\PaymentReminderInfo[] $paymentReminderInfo
     */
    public function __construct(?array $paymentReminderInfo = null)
    {
        $this
            ->setPaymentReminderInfo($paymentReminderInfo);
    }
    /**
     * Get PaymentReminderInfo value
     * @return \Pggns\MidocoApi\Documents\StructType\PaymentReminderInfo[]
     */
    public function getPaymentReminderInfo(): ?array
    {
        return $this->PaymentReminderInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setPaymentReminderInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentReminderInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentReminderInfoForArrayConstraintsFromSetPaymentReminderInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoOrderPaymentReminderInfoPaymentReminderInfoItem) {
            // validation for constraint: itemType
            if (!$midocoOrderPaymentReminderInfoPaymentReminderInfoItem instanceof \Pggns\MidocoApi\Documents\StructType\PaymentReminderInfo) {
                $invalidValues[] = is_object($midocoOrderPaymentReminderInfoPaymentReminderInfoItem) ? get_class($midocoOrderPaymentReminderInfoPaymentReminderInfoItem) : sprintf('%s(%s)', gettype($midocoOrderPaymentReminderInfoPaymentReminderInfoItem), var_export($midocoOrderPaymentReminderInfoPaymentReminderInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaymentReminderInfo property can only contain items of type \Pggns\MidocoApi\Documents\StructType\PaymentReminderInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PaymentReminderInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\PaymentReminderInfo[] $paymentReminderInfo
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoOrderPaymentReminderInfo
     */
    public function setPaymentReminderInfo(?array $paymentReminderInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($paymentReminderInfoArrayErrorMessage = self::validatePaymentReminderInfoForArrayConstraintsFromSetPaymentReminderInfo($paymentReminderInfo))) {
            throw new InvalidArgumentException($paymentReminderInfoArrayErrorMessage, __LINE__);
        }
        $this->PaymentReminderInfo = $paymentReminderInfo;
        
        return $this;
    }
    /**
     * Add item to PaymentReminderInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\PaymentReminderInfo $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoOrderPaymentReminderInfo
     */
    public function addToPaymentReminderInfo(\Pggns\MidocoApi\Documents\StructType\PaymentReminderInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\PaymentReminderInfo) {
            throw new InvalidArgumentException(sprintf('The PaymentReminderInfo property can only contain items of type \Pggns\MidocoApi\Documents\StructType\PaymentReminderInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PaymentReminderInfo[] = $item;
        
        return $this;
    }
}
