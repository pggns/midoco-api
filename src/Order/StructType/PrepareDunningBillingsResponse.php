<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrepareDunningBillingsResponse StructType
 * @subpackage Structs
 */
class PrepareDunningBillingsResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingDunning
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingDunning
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDunning[]
     */
    protected ?array $MidocoBillingDunning = null;
    /**
     * Constructor method for PrepareDunningBillingsResponse
     * @uses PrepareDunningBillingsResponse::setMidocoBillingDunning()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDunning[] $midocoBillingDunning
     */
    public function __construct(?array $midocoBillingDunning = null)
    {
        $this
            ->setMidocoBillingDunning($midocoBillingDunning);
    }
    /**
     * Get MidocoBillingDunning value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDunning[]
     */
    public function getMidocoBillingDunning(): ?array
    {
        return $this->MidocoBillingDunning;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBillingDunning method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingDunning method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingDunningForArrayConstraintsFromSetMidocoBillingDunning(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $prepareDunningBillingsResponseMidocoBillingDunningItem) {
            // validation for constraint: itemType
            if (!$prepareDunningBillingsResponseMidocoBillingDunningItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDunning) {
                $invalidValues[] = is_object($prepareDunningBillingsResponseMidocoBillingDunningItem) ? get_class($prepareDunningBillingsResponseMidocoBillingDunningItem) : sprintf('%s(%s)', gettype($prepareDunningBillingsResponseMidocoBillingDunningItem), var_export($prepareDunningBillingsResponseMidocoBillingDunningItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingDunning property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDunning, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingDunning value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDunning[] $midocoBillingDunning
     * @return \Pggns\MidocoApi\Api\Order\StructType\PrepareDunningBillingsResponse
     */
    public function setMidocoBillingDunning(?array $midocoBillingDunning = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingDunningArrayErrorMessage = self::validateMidocoBillingDunningForArrayConstraintsFromSetMidocoBillingDunning($midocoBillingDunning))) {
            throw new InvalidArgumentException($midocoBillingDunningArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingDunning = $midocoBillingDunning;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingDunning value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDunning $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\PrepareDunningBillingsResponse
     */
    public function addToMidocoBillingDunning(\Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDunning $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDunning) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingDunning property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDunning, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingDunning[] = $item;
        
        return $this;
    }
}
