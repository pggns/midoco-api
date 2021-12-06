<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListTourOperatorsResponse StructType
 * @subpackage Structs
 */
class ListTourOperatorsResponse extends AbstractStructBase
{
    /**
     * The MidocoTourOperator
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTourOperator
     * @var \Pggns\MidocoApi\System\StructType\MidocoTourOperator[]
     */
    protected ?array $MidocoTourOperator = null;
    /**
     * Constructor method for ListTourOperatorsResponse
     * @uses ListTourOperatorsResponse::setMidocoTourOperator()
     * @param \Pggns\MidocoApi\System\StructType\MidocoTourOperator[] $midocoTourOperator
     */
    public function __construct(?array $midocoTourOperator = null)
    {
        $this
            ->setMidocoTourOperator($midocoTourOperator);
    }
    /**
     * Get MidocoTourOperator value
     * @return \Pggns\MidocoApi\System\StructType\MidocoTourOperator[]
     */
    public function getMidocoTourOperator(): ?array
    {
        return $this->MidocoTourOperator;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTourOperator method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTourOperator method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTourOperatorForArrayConstraintsFromSetMidocoTourOperator(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listTourOperatorsResponseMidocoTourOperatorItem) {
            // validation for constraint: itemType
            if (!$listTourOperatorsResponseMidocoTourOperatorItem instanceof \Pggns\MidocoApi\System\StructType\MidocoTourOperator) {
                $invalidValues[] = is_object($listTourOperatorsResponseMidocoTourOperatorItem) ? get_class($listTourOperatorsResponseMidocoTourOperatorItem) : sprintf('%s(%s)', gettype($listTourOperatorsResponseMidocoTourOperatorItem), var_export($listTourOperatorsResponseMidocoTourOperatorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTourOperator property can only contain items of type \Pggns\MidocoApi\System\StructType\MidocoTourOperator, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTourOperator value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\System\StructType\MidocoTourOperator[] $midocoTourOperator
     * @return \Pggns\MidocoApi\System\StructType\ListTourOperatorsResponse
     */
    public function setMidocoTourOperator(?array $midocoTourOperator = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTourOperatorArrayErrorMessage = self::validateMidocoTourOperatorForArrayConstraintsFromSetMidocoTourOperator($midocoTourOperator))) {
            throw new InvalidArgumentException($midocoTourOperatorArrayErrorMessage, __LINE__);
        }
        $this->MidocoTourOperator = $midocoTourOperator;
        
        return $this;
    }
    /**
     * Add item to MidocoTourOperator value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\System\StructType\MidocoTourOperator $item
     * @return \Pggns\MidocoApi\System\StructType\ListTourOperatorsResponse
     */
    public function addToMidocoTourOperator(\Pggns\MidocoApi\System\StructType\MidocoTourOperator $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\System\StructType\MidocoTourOperator) {
            throw new InvalidArgumentException(sprintf('The MidocoTourOperator property can only contain items of type \Pggns\MidocoApi\System\StructType\MidocoTourOperator, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTourOperator[] = $item;
        
        return $this;
    }
}
