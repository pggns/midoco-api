<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListTssClientRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListTssClientRequest extends AbstractStructBase
{
    /**
     * The unit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $unit = null;
    /**
     * The MidocoTssClient
     * Meta information extracted from the WSDL
     * - ref: MidocoTssClient
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTssClient|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoTssClient $MidocoTssClient = null;
    /**
     * The extern
     * Meta information extracted from the WSDL
     * - documentation: If true, the TSS and Clients are requested from the external service provider.
     * @var bool|null
     */
    protected ?bool $extern = null;
    /**
     * Constructor method for ListTssClientRequest
     * @uses ListTssClientRequest::setUnit()
     * @uses ListTssClientRequest::setMidocoTssClient()
     * @uses ListTssClientRequest::setExtern()
     * @param string[] $unit
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTssClient $midocoTssClient
     * @param bool $extern
     */
    public function __construct(?array $unit = null, ?\Pggns\MidocoApi\Order\StructType\MidocoTssClient $midocoTssClient = null, ?bool $extern = null)
    {
        $this
            ->setUnit($unit)
            ->setMidocoTssClient($midocoTssClient)
            ->setExtern($extern);
    }
    /**
     * Get unit value
     * @return string[]
     */
    public function getUnit(): ?array
    {
        return $this->unit;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUnit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnit method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnitForArrayConstraintFromSetUnit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listTssClientRequestUnitItem) {
            // validation for constraint: itemType
            if (!is_string($listTssClientRequestUnitItem)) {
                $invalidValues[] = is_object($listTssClientRequestUnitItem) ? get_class($listTssClientRequestUnitItem) : sprintf('%s(%s)', gettype($listTssClientRequestUnitItem), var_export($listTssClientRequestUnitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The unit property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set unit value
     * @throws InvalidArgumentException
     * @param string[] $unit
     * @return \Pggns\MidocoApi\Order\StructType\ListTssClientRequest
     */
    public function setUnit(?array $unit = null): self
    {
        // validation for constraint: array
        if ('' !== ($unitArrayErrorMessage = self::validateUnitForArrayConstraintFromSetUnit($unit))) {
            throw new InvalidArgumentException($unitArrayErrorMessage, __LINE__);
        }
        $this->unit = $unit;
        
        return $this;
    }
    /**
     * Add item to unit value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\ListTssClientRequest
     */
    public function addToUnit(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The unit property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->unit[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoTssClient value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTssClient|null
     */
    public function getMidocoTssClient(): ?\Pggns\MidocoApi\Order\StructType\MidocoTssClient
    {
        return $this->MidocoTssClient;
    }
    /**
     * Set MidocoTssClient value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTssClient $midocoTssClient
     * @return \Pggns\MidocoApi\Order\StructType\ListTssClientRequest
     */
    public function setMidocoTssClient(?\Pggns\MidocoApi\Order\StructType\MidocoTssClient $midocoTssClient = null): self
    {
        $this->MidocoTssClient = $midocoTssClient;
        
        return $this;
    }
    /**
     * Get extern value
     * @return bool|null
     */
    public function getExtern(): ?bool
    {
        return $this->extern;
    }
    /**
     * Set extern value
     * @param bool $extern
     * @return \Pggns\MidocoApi\Order\StructType\ListTssClientRequest
     */
    public function setExtern(?bool $extern = null): self
    {
        // validation for constraint: boolean
        if (!is_null($extern) && !is_bool($extern)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($extern, true), gettype($extern)), __LINE__);
        }
        $this->extern = $extern;
        
        return $this;
    }
}
