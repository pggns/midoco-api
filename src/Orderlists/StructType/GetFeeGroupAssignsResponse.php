<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFeeGroupAssignsResponse StructType
 * @subpackage Structs
 */
class GetFeeGroupAssignsResponse extends AbstractStructBase
{
    /**
     * The MidocoFeeGroupAssign
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoFeeGroupAssign
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoFeeGroupAssign[]
     */
    protected ?array $MidocoFeeGroupAssign = null;
    /**
     * Constructor method for GetFeeGroupAssignsResponse
     * @uses GetFeeGroupAssignsResponse::setMidocoFeeGroupAssign()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoFeeGroupAssign[] $midocoFeeGroupAssign
     */
    public function __construct(?array $midocoFeeGroupAssign = null)
    {
        $this
            ->setMidocoFeeGroupAssign($midocoFeeGroupAssign);
    }
    /**
     * Get MidocoFeeGroupAssign value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoFeeGroupAssign[]
     */
    public function getMidocoFeeGroupAssign(): ?array
    {
        return $this->MidocoFeeGroupAssign;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoFeeGroupAssign method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFeeGroupAssign method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFeeGroupAssignForArrayConstraintsFromSetMidocoFeeGroupAssign(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getFeeGroupAssignsResponseMidocoFeeGroupAssignItem) {
            // validation for constraint: itemType
            if (!$getFeeGroupAssignsResponseMidocoFeeGroupAssignItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoFeeGroupAssign) {
                $invalidValues[] = is_object($getFeeGroupAssignsResponseMidocoFeeGroupAssignItem) ? get_class($getFeeGroupAssignsResponseMidocoFeeGroupAssignItem) : sprintf('%s(%s)', gettype($getFeeGroupAssignsResponseMidocoFeeGroupAssignItem), var_export($getFeeGroupAssignsResponseMidocoFeeGroupAssignItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFeeGroupAssign property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoFeeGroupAssign, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFeeGroupAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoFeeGroupAssign[] $midocoFeeGroupAssign
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetFeeGroupAssignsResponse
     */
    public function setMidocoFeeGroupAssign(?array $midocoFeeGroupAssign = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFeeGroupAssignArrayErrorMessage = self::validateMidocoFeeGroupAssignForArrayConstraintsFromSetMidocoFeeGroupAssign($midocoFeeGroupAssign))) {
            throw new InvalidArgumentException($midocoFeeGroupAssignArrayErrorMessage, __LINE__);
        }
        $this->MidocoFeeGroupAssign = $midocoFeeGroupAssign;
        
        return $this;
    }
    /**
     * Add item to MidocoFeeGroupAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoFeeGroupAssign $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetFeeGroupAssignsResponse
     */
    public function addToMidocoFeeGroupAssign(\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoFeeGroupAssign $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoFeeGroupAssign) {
            throw new InvalidArgumentException(sprintf('The MidocoFeeGroupAssign property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoFeeGroupAssign, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFeeGroupAssign[] = $item;
        
        return $this;
    }
}
