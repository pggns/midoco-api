<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetHedgeCurrencyRateRequest StructType
 * @subpackage Structs
 */
class GetHedgeCurrencyRateRequest extends AbstractStructBase
{
    /**
     * The hedgeCurrencyRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Pggns\MidocoApi\Documents\StructType\HedgeCurrencyRequest[]
     */
    protected ?array $hedgeCurrencyRequest = null;
    /**
     * Constructor method for GetHedgeCurrencyRateRequest
     * @uses GetHedgeCurrencyRateRequest::setHedgeCurrencyRequest()
     * @param \Pggns\MidocoApi\Documents\StructType\HedgeCurrencyRequest[] $hedgeCurrencyRequest
     */
    public function __construct(?array $hedgeCurrencyRequest = null)
    {
        $this
            ->setHedgeCurrencyRequest($hedgeCurrencyRequest);
    }
    /**
     * Get hedgeCurrencyRequest value
     * @return \Pggns\MidocoApi\Documents\StructType\HedgeCurrencyRequest[]
     */
    public function getHedgeCurrencyRequest(): ?array
    {
        return $this->hedgeCurrencyRequest;
    }
    /**
     * This method is responsible for validating the values passed to the setHedgeCurrencyRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHedgeCurrencyRequest method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHedgeCurrencyRequestForArrayConstraintsFromSetHedgeCurrencyRequest(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getHedgeCurrencyRateRequestHedgeCurrencyRequestItem) {
            // validation for constraint: itemType
            if (!$getHedgeCurrencyRateRequestHedgeCurrencyRequestItem instanceof \Pggns\MidocoApi\Documents\StructType\HedgeCurrencyRequest) {
                $invalidValues[] = is_object($getHedgeCurrencyRateRequestHedgeCurrencyRequestItem) ? get_class($getHedgeCurrencyRateRequestHedgeCurrencyRequestItem) : sprintf('%s(%s)', gettype($getHedgeCurrencyRateRequestHedgeCurrencyRequestItem), var_export($getHedgeCurrencyRateRequestHedgeCurrencyRequestItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The hedgeCurrencyRequest property can only contain items of type \Pggns\MidocoApi\Documents\StructType\HedgeCurrencyRequest, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set hedgeCurrencyRequest value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\HedgeCurrencyRequest[] $hedgeCurrencyRequest
     * @return \Pggns\MidocoApi\Documents\StructType\GetHedgeCurrencyRateRequest
     */
    public function setHedgeCurrencyRequest(?array $hedgeCurrencyRequest = null): self
    {
        // validation for constraint: array
        if ('' !== ($hedgeCurrencyRequestArrayErrorMessage = self::validateHedgeCurrencyRequestForArrayConstraintsFromSetHedgeCurrencyRequest($hedgeCurrencyRequest))) {
            throw new InvalidArgumentException($hedgeCurrencyRequestArrayErrorMessage, __LINE__);
        }
        $this->hedgeCurrencyRequest = $hedgeCurrencyRequest;
        
        return $this;
    }
    /**
     * Add item to hedgeCurrencyRequest value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\HedgeCurrencyRequest $item
     * @return \Pggns\MidocoApi\Documents\StructType\GetHedgeCurrencyRateRequest
     */
    public function addToHedgeCurrencyRequest(\Pggns\MidocoApi\Documents\StructType\HedgeCurrencyRequest $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\HedgeCurrencyRequest) {
            throw new InvalidArgumentException(sprintf('The hedgeCurrencyRequest property can only contain items of type \Pggns\MidocoApi\Documents\StructType\HedgeCurrencyRequest, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->hedgeCurrencyRequest[] = $item;
        
        return $this;
    }
}
