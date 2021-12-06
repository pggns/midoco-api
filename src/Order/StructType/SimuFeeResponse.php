<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SimuFeeResponse StructType
 * @subpackage Structs
 */
class SimuFeeResponse extends AbstractStructBase
{
    /**
     * The MidocoSimuFee
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSimuFee
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoSimuFee[]
     */
    protected ?array $MidocoSimuFee = null;
    /**
     * Constructor method for SimuFeeResponse
     * @uses SimuFeeResponse::setMidocoSimuFee()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSimuFee[] $midocoSimuFee
     */
    public function __construct(?array $midocoSimuFee = null)
    {
        $this
            ->setMidocoSimuFee($midocoSimuFee);
    }
    /**
     * Get MidocoSimuFee value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoSimuFee[]
     */
    public function getMidocoSimuFee(): ?array
    {
        return $this->MidocoSimuFee;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSimuFee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSimuFee method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSimuFeeForArrayConstraintsFromSetMidocoSimuFee(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $simuFeeResponseMidocoSimuFeeItem) {
            // validation for constraint: itemType
            if (!$simuFeeResponseMidocoSimuFeeItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoSimuFee) {
                $invalidValues[] = is_object($simuFeeResponseMidocoSimuFeeItem) ? get_class($simuFeeResponseMidocoSimuFeeItem) : sprintf('%s(%s)', gettype($simuFeeResponseMidocoSimuFeeItem), var_export($simuFeeResponseMidocoSimuFeeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSimuFee property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoSimuFee, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSimuFee value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSimuFee[] $midocoSimuFee
     * @return \Pggns\MidocoApi\Api\Order\StructType\SimuFeeResponse
     */
    public function setMidocoSimuFee(?array $midocoSimuFee = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSimuFeeArrayErrorMessage = self::validateMidocoSimuFeeForArrayConstraintsFromSetMidocoSimuFee($midocoSimuFee))) {
            throw new InvalidArgumentException($midocoSimuFeeArrayErrorMessage, __LINE__);
        }
        $this->MidocoSimuFee = $midocoSimuFee;
        
        return $this;
    }
    /**
     * Add item to MidocoSimuFee value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSimuFee $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\SimuFeeResponse
     */
    public function addToMidocoSimuFee(\Pggns\MidocoApi\Api\Order\StructType\MidocoSimuFee $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoSimuFee) {
            throw new InvalidArgumentException(sprintf('The MidocoSimuFee property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoSimuFee, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSimuFee[] = $item;
        
        return $this;
    }
}
