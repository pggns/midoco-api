<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMergedDunningResponse StructType
 * @subpackage Structs
 */
class GetMergedDunningResponse extends AbstractStructBase
{
    /**
     * The MidocoDunning
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDunning
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDunning[]
     */
    protected ?array $MidocoDunning = null;
    /**
     * Constructor method for GetMergedDunningResponse
     * @uses GetMergedDunningResponse::setMidocoDunning()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDunning[] $midocoDunning
     */
    public function __construct(?array $midocoDunning = null)
    {
        $this
            ->setMidocoDunning($midocoDunning);
    }
    /**
     * Get MidocoDunning value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDunning[]
     */
    public function getMidocoDunning(): ?array
    {
        return $this->MidocoDunning;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDunning method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDunning method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDunningForArrayConstraintsFromSetMidocoDunning(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMergedDunningResponseMidocoDunningItem) {
            // validation for constraint: itemType
            if (!$getMergedDunningResponseMidocoDunningItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoDunning) {
                $invalidValues[] = is_object($getMergedDunningResponseMidocoDunningItem) ? get_class($getMergedDunningResponseMidocoDunningItem) : sprintf('%s(%s)', gettype($getMergedDunningResponseMidocoDunningItem), var_export($getMergedDunningResponseMidocoDunningItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDunning property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDunning, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDunning value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDunning[] $midocoDunning
     * @return \Pggns\MidocoApi\Order\StructType\GetMergedDunningResponse
     */
    public function setMidocoDunning(?array $midocoDunning = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDunningArrayErrorMessage = self::validateMidocoDunningForArrayConstraintsFromSetMidocoDunning($midocoDunning))) {
            throw new InvalidArgumentException($midocoDunningArrayErrorMessage, __LINE__);
        }
        $this->MidocoDunning = $midocoDunning;
        
        return $this;
    }
    /**
     * Add item to MidocoDunning value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDunning $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMergedDunningResponse
     */
    public function addToMidocoDunning(\Pggns\MidocoApi\Order\StructType\MidocoDunning $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoDunning) {
            throw new InvalidArgumentException(sprintf('The MidocoDunning property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDunning, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDunning[] = $item;
        
        return $this;
    }
}
