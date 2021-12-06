<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalesListByPaymentTypeResponse StructType
 * @subpackage Structs
 */
class SalesListByPaymentTypeResponse extends AbstractStructBase
{
    /**
     * The MidocoSalesListByPaymentType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSalesListByPaymentType
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeType[]
     */
    protected ?array $MidocoSalesListByPaymentType = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * The SalesListsByPaymentTypeSums
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeType $SalesListsByPaymentTypeSums = null;
    /**
     * Constructor method for SalesListByPaymentTypeResponse
     * @uses SalesListByPaymentTypeResponse::setMidocoSalesListByPaymentType()
     * @uses SalesListByPaymentTypeResponse::setNoOfResults()
     * @uses SalesListByPaymentTypeResponse::setSalesListsByPaymentTypeSums()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeType[] $midocoSalesListByPaymentType
     * @param int $noOfResults
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeType $salesListsByPaymentTypeSums
     */
    public function __construct(?array $midocoSalesListByPaymentType = null, ?int $noOfResults = null, ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeType $salesListsByPaymentTypeSums = null)
    {
        $this
            ->setMidocoSalesListByPaymentType($midocoSalesListByPaymentType)
            ->setNoOfResults($noOfResults)
            ->setSalesListsByPaymentTypeSums($salesListsByPaymentTypeSums);
    }
    /**
     * Get MidocoSalesListByPaymentType value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeType[]
     */
    public function getMidocoSalesListByPaymentType(): ?array
    {
        return $this->MidocoSalesListByPaymentType;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSalesListByPaymentType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSalesListByPaymentType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSalesListByPaymentTypeForArrayConstraintsFromSetMidocoSalesListByPaymentType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $salesListByPaymentTypeResponseMidocoSalesListByPaymentTypeItem) {
            // validation for constraint: itemType
            if (!$salesListByPaymentTypeResponseMidocoSalesListByPaymentTypeItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeType) {
                $invalidValues[] = is_object($salesListByPaymentTypeResponseMidocoSalesListByPaymentTypeItem) ? get_class($salesListByPaymentTypeResponseMidocoSalesListByPaymentTypeItem) : sprintf('%s(%s)', gettype($salesListByPaymentTypeResponseMidocoSalesListByPaymentTypeItem), var_export($salesListByPaymentTypeResponseMidocoSalesListByPaymentTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSalesListByPaymentType property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSalesListByPaymentType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeType[] $midocoSalesListByPaymentType
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListByPaymentTypeResponse
     */
    public function setMidocoSalesListByPaymentType(?array $midocoSalesListByPaymentType = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSalesListByPaymentTypeArrayErrorMessage = self::validateMidocoSalesListByPaymentTypeForArrayConstraintsFromSetMidocoSalesListByPaymentType($midocoSalesListByPaymentType))) {
            throw new InvalidArgumentException($midocoSalesListByPaymentTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoSalesListByPaymentType = $midocoSalesListByPaymentType;
        
        return $this;
    }
    /**
     * Add item to MidocoSalesListByPaymentType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListByPaymentTypeResponse
     */
    public function addToMidocoSalesListByPaymentType(\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeType) {
            throw new InvalidArgumentException(sprintf('The MidocoSalesListByPaymentType property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSalesListByPaymentType[] = $item;
        
        return $this;
    }
    /**
     * Get noOfResults value
     * @return int|null
     */
    public function getNoOfResults(): ?int
    {
        return $this->noOfResults;
    }
    /**
     * Set noOfResults value
     * @param int $noOfResults
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListByPaymentTypeResponse
     */
    public function setNoOfResults(?int $noOfResults = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfResults) && !(is_int($noOfResults) || ctype_digit($noOfResults))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfResults, true), gettype($noOfResults)), __LINE__);
        }
        $this->noOfResults = $noOfResults;
        
        return $this;
    }
    /**
     * Get SalesListsByPaymentTypeSums value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeType|null
     */
    public function getSalesListsByPaymentTypeSums(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeType
    {
        return $this->SalesListsByPaymentTypeSums;
    }
    /**
     * Set SalesListsByPaymentTypeSums value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeType $salesListsByPaymentTypeSums
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListByPaymentTypeResponse
     */
    public function setSalesListsByPaymentTypeSums(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeType $salesListsByPaymentTypeSums = null): self
    {
        $this->SalesListsByPaymentTypeSums = $salesListsByPaymentTypeSums;
        
        return $this;
    }
}
