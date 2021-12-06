<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteSettlementChargeForCompanyResponse StructType
 * @subpackage Structs
 */
class ExecuteSettlementChargeForCompanyResponse extends AbstractStructBase
{
    /**
     * The MidocoMdcSettlementCharge
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMdcSettlementCharge
     * @var \Pggns\MidocoApi\Api\Order\StructType\MdcSettlementChargeDTO[]
     */
    protected ?array $MidocoMdcSettlementCharge = null;
    /**
     * Constructor method for ExecuteSettlementChargeForCompanyResponse
     * @uses ExecuteSettlementChargeForCompanyResponse::setMidocoMdcSettlementCharge()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MdcSettlementChargeDTO[] $midocoMdcSettlementCharge
     */
    public function __construct(?array $midocoMdcSettlementCharge = null)
    {
        $this
            ->setMidocoMdcSettlementCharge($midocoMdcSettlementCharge);
    }
    /**
     * Get MidocoMdcSettlementCharge value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MdcSettlementChargeDTO[]
     */
    public function getMidocoMdcSettlementCharge(): ?array
    {
        return $this->MidocoMdcSettlementCharge;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMdcSettlementCharge method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMdcSettlementCharge method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMdcSettlementChargeForArrayConstraintsFromSetMidocoMdcSettlementCharge(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeSettlementChargeForCompanyResponseMidocoMdcSettlementChargeItem) {
            // validation for constraint: itemType
            if (!$executeSettlementChargeForCompanyResponseMidocoMdcSettlementChargeItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MdcSettlementChargeDTO) {
                $invalidValues[] = is_object($executeSettlementChargeForCompanyResponseMidocoMdcSettlementChargeItem) ? get_class($executeSettlementChargeForCompanyResponseMidocoMdcSettlementChargeItem) : sprintf('%s(%s)', gettype($executeSettlementChargeForCompanyResponseMidocoMdcSettlementChargeItem), var_export($executeSettlementChargeForCompanyResponseMidocoMdcSettlementChargeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMdcSettlementCharge property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MdcSettlementChargeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMdcSettlementCharge value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MdcSettlementChargeDTO[] $midocoMdcSettlementCharge
     * @return \Pggns\MidocoApi\Api\Order\StructType\ExecuteSettlementChargeForCompanyResponse
     */
    public function setMidocoMdcSettlementCharge(?array $midocoMdcSettlementCharge = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMdcSettlementChargeArrayErrorMessage = self::validateMidocoMdcSettlementChargeForArrayConstraintsFromSetMidocoMdcSettlementCharge($midocoMdcSettlementCharge))) {
            throw new InvalidArgumentException($midocoMdcSettlementChargeArrayErrorMessage, __LINE__);
        }
        $this->MidocoMdcSettlementCharge = $midocoMdcSettlementCharge;
        
        return $this;
    }
    /**
     * Add item to MidocoMdcSettlementCharge value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MdcSettlementChargeDTO $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\ExecuteSettlementChargeForCompanyResponse
     */
    public function addToMidocoMdcSettlementCharge(\Pggns\MidocoApi\Api\Order\StructType\MdcSettlementChargeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MdcSettlementChargeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMdcSettlementCharge property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MdcSettlementChargeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMdcSettlementCharge[] = $item;
        
        return $this;
    }
}
