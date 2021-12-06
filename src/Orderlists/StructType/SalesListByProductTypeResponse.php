<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalesListByProductTypeResponse StructType
 * @subpackage Structs
 */
class SalesListByProductTypeResponse extends AbstractStructBase
{
    /**
     * The MidocoSalesListsByProductType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSalesListsByProductType
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsByProductTypeType[]
     */
    protected ?array $MidocoSalesListsByProductType = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * The SalesListsByProductTypeSums
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsByProductTypeType|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsByProductTypeType $SalesListsByProductTypeSums = null;
    /**
     * Constructor method for SalesListByProductTypeResponse
     * @uses SalesListByProductTypeResponse::setMidocoSalesListsByProductType()
     * @uses SalesListByProductTypeResponse::setNoOfResults()
     * @uses SalesListByProductTypeResponse::setSalesListsByProductTypeSums()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsByProductTypeType[] $midocoSalesListsByProductType
     * @param int $noOfResults
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsByProductTypeType $salesListsByProductTypeSums
     */
    public function __construct(?array $midocoSalesListsByProductType = null, ?int $noOfResults = null, ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsByProductTypeType $salesListsByProductTypeSums = null)
    {
        $this
            ->setMidocoSalesListsByProductType($midocoSalesListsByProductType)
            ->setNoOfResults($noOfResults)
            ->setSalesListsByProductTypeSums($salesListsByProductTypeSums);
    }
    /**
     * Get MidocoSalesListsByProductType value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsByProductTypeType[]
     */
    public function getMidocoSalesListsByProductType(): ?array
    {
        return $this->MidocoSalesListsByProductType;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSalesListsByProductType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSalesListsByProductType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSalesListsByProductTypeForArrayConstraintsFromSetMidocoSalesListsByProductType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $salesListByProductTypeResponseMidocoSalesListsByProductTypeItem) {
            // validation for constraint: itemType
            if (!$salesListByProductTypeResponseMidocoSalesListsByProductTypeItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsByProductTypeType) {
                $invalidValues[] = is_object($salesListByProductTypeResponseMidocoSalesListsByProductTypeItem) ? get_class($salesListByProductTypeResponseMidocoSalesListsByProductTypeItem) : sprintf('%s(%s)', gettype($salesListByProductTypeResponseMidocoSalesListsByProductTypeItem), var_export($salesListByProductTypeResponseMidocoSalesListsByProductTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSalesListsByProductType property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsByProductTypeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSalesListsByProductType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsByProductTypeType[] $midocoSalesListsByProductType
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SalesListByProductTypeResponse
     */
    public function setMidocoSalesListsByProductType(?array $midocoSalesListsByProductType = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSalesListsByProductTypeArrayErrorMessage = self::validateMidocoSalesListsByProductTypeForArrayConstraintsFromSetMidocoSalesListsByProductType($midocoSalesListsByProductType))) {
            throw new InvalidArgumentException($midocoSalesListsByProductTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoSalesListsByProductType = $midocoSalesListsByProductType;
        
        return $this;
    }
    /**
     * Add item to MidocoSalesListsByProductType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsByProductTypeType $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SalesListByProductTypeResponse
     */
    public function addToMidocoSalesListsByProductType(\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsByProductTypeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsByProductTypeType) {
            throw new InvalidArgumentException(sprintf('The MidocoSalesListsByProductType property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsByProductTypeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSalesListsByProductType[] = $item;
        
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SalesListByProductTypeResponse
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
     * Get SalesListsByProductTypeSums value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsByProductTypeType|null
     */
    public function getSalesListsByProductTypeSums(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsByProductTypeType
    {
        return $this->SalesListsByProductTypeSums;
    }
    /**
     * Set SalesListsByProductTypeSums value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsByProductTypeType $salesListsByProductTypeSums
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SalesListByProductTypeResponse
     */
    public function setSalesListsByProductTypeSums(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsByProductTypeType $salesListsByProductTypeSums = null): self
    {
        $this->SalesListsByProductTypeSums = $salesListsByProductTypeSums;
        
        return $this;
    }
}
