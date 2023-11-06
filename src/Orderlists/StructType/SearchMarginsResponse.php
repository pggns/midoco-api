<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMarginsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchMarginsResponse extends AbstractStructBase
{
    /**
     * The MidocoMargin
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: order:MidocoMargin
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoMargin[]
     */
    protected ?array $MidocoMargin = null;
    /**
     * Constructor method for SearchMarginsResponse
     * @uses SearchMarginsResponse::setMidocoMargin()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMargin[] $midocoMargin
     */
    public function __construct(?array $midocoMargin = null)
    {
        $this
            ->setMidocoMargin($midocoMargin);
    }
    /**
     * Get MidocoMargin value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoMargin[]
     */
    public function getMidocoMargin(): ?array
    {
        return $this->MidocoMargin;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMargin method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMargin method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMarginForArrayConstraintFromSetMidocoMargin(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchMarginsResponseMidocoMarginItem) {
            // validation for constraint: itemType
            if (!$searchMarginsResponseMidocoMarginItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoMargin) {
                $invalidValues[] = is_object($searchMarginsResponseMidocoMarginItem) ? get_class($searchMarginsResponseMidocoMarginItem) : sprintf('%s(%s)', gettype($searchMarginsResponseMidocoMarginItem), var_export($searchMarginsResponseMidocoMarginItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMargin property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoMargin, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMargin value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMargin[] $midocoMargin
     * @return \Pggns\MidocoApi\Orderlists\StructType\SearchMarginsResponse
     */
    public function setMidocoMargin(?array $midocoMargin = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMarginArrayErrorMessage = self::validateMidocoMarginForArrayConstraintFromSetMidocoMargin($midocoMargin))) {
            throw new InvalidArgumentException($midocoMarginArrayErrorMessage, __LINE__);
        }
        $this->MidocoMargin = $midocoMargin;
        
        return $this;
    }
    /**
     * Add item to MidocoMargin value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMargin $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\SearchMarginsResponse
     */
    public function addToMidocoMargin(\Pggns\MidocoApi\Orderlists\StructType\MidocoMargin $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoMargin) {
            throw new InvalidArgumentException(sprintf('The MidocoMargin property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoMargin, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMargin[] = $item;
        
        return $this;
    }
}
