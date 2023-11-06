<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListTourOperatorsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListTourOperatorsResponse extends AbstractStructBase
{
    /**
     * The MidocoTourOperator
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTourOperator
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperator[]
     */
    protected ?array $MidocoTourOperator = null;
    /**
     * Constructor method for ListTourOperatorsResponse
     * @uses ListTourOperatorsResponse::setMidocoTourOperator()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperator[] $midocoTourOperator
     */
    public function __construct(?array $midocoTourOperator = null)
    {
        $this
            ->setMidocoTourOperator($midocoTourOperator);
    }
    /**
     * Get MidocoTourOperator value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperator[]
     */
    public function getMidocoTourOperator(): ?array
    {
        return $this->MidocoTourOperator;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTourOperator method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTourOperator method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTourOperatorForArrayConstraintFromSetMidocoTourOperator(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listTourOperatorsResponseMidocoTourOperatorItem) {
            // validation for constraint: itemType
            if (!$listTourOperatorsResponseMidocoTourOperatorItem instanceof \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperator) {
                $invalidValues[] = is_object($listTourOperatorsResponseMidocoTourOperatorItem) ? get_class($listTourOperatorsResponseMidocoTourOperatorItem) : sprintf('%s(%s)', gettype($listTourOperatorsResponseMidocoTourOperatorItem), var_export($listTourOperatorsResponseMidocoTourOperatorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTourOperator property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperator, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTourOperator value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperator[] $midocoTourOperator
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ListTourOperatorsResponse
     */
    public function setMidocoTourOperator(?array $midocoTourOperator = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTourOperatorArrayErrorMessage = self::validateMidocoTourOperatorForArrayConstraintFromSetMidocoTourOperator($midocoTourOperator))) {
            throw new InvalidArgumentException($midocoTourOperatorArrayErrorMessage, __LINE__);
        }
        $this->MidocoTourOperator = $midocoTourOperator;
        
        return $this;
    }
    /**
     * Add item to MidocoTourOperator value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperator $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ListTourOperatorsResponse
     */
    public function addToMidocoTourOperator(\Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperator $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperator) {
            throw new InvalidArgumentException(sprintf('The MidocoTourOperator property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperator, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTourOperator[] = $item;
        
        return $this;
    }
}
