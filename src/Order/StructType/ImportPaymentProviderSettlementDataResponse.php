<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportPaymentProviderSettlementDataResponse StructType
 * @subpackage Structs
 */
class ImportPaymentProviderSettlementDataResponse extends AbstractStructBase
{
    /**
     * The MidocoFault
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: system:MidocoFault
     * @var \Pggns\MidocoApi\Order\StructType\MidocoFaultType[]
     */
    protected ?array $MidocoFault = null;
    /**
     * Constructor method for ImportPaymentProviderSettlementDataResponse
     * @uses ImportPaymentProviderSettlementDataResponse::setMidocoFault()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFaultType[] $midocoFault
     */
    public function __construct(?array $midocoFault = null)
    {
        $this
            ->setMidocoFault($midocoFault);
    }
    /**
     * Get MidocoFault value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFaultType[]
     */
    public function getMidocoFault(): ?array
    {
        return $this->MidocoFault;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoFault method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFault method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFaultForArrayConstraintsFromSetMidocoFault(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $importPaymentProviderSettlementDataResponseMidocoFaultItem) {
            // validation for constraint: itemType
            if (!$importPaymentProviderSettlementDataResponseMidocoFaultItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoFaultType) {
                $invalidValues[] = is_object($importPaymentProviderSettlementDataResponseMidocoFaultItem) ? get_class($importPaymentProviderSettlementDataResponseMidocoFaultItem) : sprintf('%s(%s)', gettype($importPaymentProviderSettlementDataResponseMidocoFaultItem), var_export($importPaymentProviderSettlementDataResponseMidocoFaultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFault property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFaultType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFault value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFaultType[] $midocoFault
     * @return \Pggns\MidocoApi\Order\StructType\ImportPaymentProviderSettlementDataResponse
     */
    public function setMidocoFault(?array $midocoFault = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFaultArrayErrorMessage = self::validateMidocoFaultForArrayConstraintsFromSetMidocoFault($midocoFault))) {
            throw new InvalidArgumentException($midocoFaultArrayErrorMessage, __LINE__);
        }
        $this->MidocoFault = $midocoFault;
        
        return $this;
    }
    /**
     * Add item to MidocoFault value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFaultType $item
     * @return \Pggns\MidocoApi\Order\StructType\ImportPaymentProviderSettlementDataResponse
     */
    public function addToMidocoFault(\Pggns\MidocoApi\Order\StructType\MidocoFaultType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoFaultType) {
            throw new InvalidArgumentException(sprintf('The MidocoFault property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFaultType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFault[] = $item;
        
        return $this;
    }
}
