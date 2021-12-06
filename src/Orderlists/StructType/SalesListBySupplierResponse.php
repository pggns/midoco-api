<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalesListBySupplierResponse StructType
 * @subpackage Structs
 */
class SalesListBySupplierResponse extends AbstractStructBase
{
    /**
     * The MidocoSalesListsBySupplier
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSalesListsBySupplier
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsBySupplierType[]
     */
    protected ?array $MidocoSalesListsBySupplier = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * The SalesListsBySupplierSums
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsBySupplierType|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsBySupplierType $SalesListsBySupplierSums = null;
    /**
     * Constructor method for SalesListBySupplierResponse
     * @uses SalesListBySupplierResponse::setMidocoSalesListsBySupplier()
     * @uses SalesListBySupplierResponse::setNoOfResults()
     * @uses SalesListBySupplierResponse::setSalesListsBySupplierSums()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsBySupplierType[] $midocoSalesListsBySupplier
     * @param int $noOfResults
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsBySupplierType $salesListsBySupplierSums
     */
    public function __construct(?array $midocoSalesListsBySupplier = null, ?int $noOfResults = null, ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsBySupplierType $salesListsBySupplierSums = null)
    {
        $this
            ->setMidocoSalesListsBySupplier($midocoSalesListsBySupplier)
            ->setNoOfResults($noOfResults)
            ->setSalesListsBySupplierSums($salesListsBySupplierSums);
    }
    /**
     * Get MidocoSalesListsBySupplier value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsBySupplierType[]
     */
    public function getMidocoSalesListsBySupplier(): ?array
    {
        return $this->MidocoSalesListsBySupplier;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSalesListsBySupplier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSalesListsBySupplier method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSalesListsBySupplierForArrayConstraintsFromSetMidocoSalesListsBySupplier(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $salesListBySupplierResponseMidocoSalesListsBySupplierItem) {
            // validation for constraint: itemType
            if (!$salesListBySupplierResponseMidocoSalesListsBySupplierItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsBySupplierType) {
                $invalidValues[] = is_object($salesListBySupplierResponseMidocoSalesListsBySupplierItem) ? get_class($salesListBySupplierResponseMidocoSalesListsBySupplierItem) : sprintf('%s(%s)', gettype($salesListBySupplierResponseMidocoSalesListsBySupplierItem), var_export($salesListBySupplierResponseMidocoSalesListsBySupplierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSalesListsBySupplier property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsBySupplierType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSalesListsBySupplier value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsBySupplierType[] $midocoSalesListsBySupplier
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SalesListBySupplierResponse
     */
    public function setMidocoSalesListsBySupplier(?array $midocoSalesListsBySupplier = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSalesListsBySupplierArrayErrorMessage = self::validateMidocoSalesListsBySupplierForArrayConstraintsFromSetMidocoSalesListsBySupplier($midocoSalesListsBySupplier))) {
            throw new InvalidArgumentException($midocoSalesListsBySupplierArrayErrorMessage, __LINE__);
        }
        $this->MidocoSalesListsBySupplier = $midocoSalesListsBySupplier;
        
        return $this;
    }
    /**
     * Add item to MidocoSalesListsBySupplier value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsBySupplierType $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SalesListBySupplierResponse
     */
    public function addToMidocoSalesListsBySupplier(\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsBySupplierType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsBySupplierType) {
            throw new InvalidArgumentException(sprintf('The MidocoSalesListsBySupplier property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsBySupplierType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSalesListsBySupplier[] = $item;
        
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SalesListBySupplierResponse
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
     * Get SalesListsBySupplierSums value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsBySupplierType|null
     */
    public function getSalesListsBySupplierSums(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsBySupplierType
    {
        return $this->SalesListsBySupplierSums;
    }
    /**
     * Set SalesListsBySupplierSums value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsBySupplierType $salesListsBySupplierSums
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SalesListBySupplierResponse
     */
    public function setSalesListsBySupplierSums(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsBySupplierType $salesListsBySupplierSums = null): self
    {
        $this->SalesListsBySupplierSums = $salesListsBySupplierSums;
        
        return $this;
    }
}
