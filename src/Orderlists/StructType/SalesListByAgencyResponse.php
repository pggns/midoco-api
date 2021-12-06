<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalesListByAgencyResponse StructType
 * @subpackage Structs
 */
class SalesListByAgencyResponse extends AbstractStructBase
{
    /**
     * The MidocoSalesListsByAgency
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSalesListsByAgency
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByAgencyType[]
     */
    protected ?array $MidocoSalesListsByAgency = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * The SalesListsByAgencySums
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByAgencyType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByAgencyType $SalesListsByAgencySums = null;
    /**
     * Constructor method for SalesListByAgencyResponse
     * @uses SalesListByAgencyResponse::setMidocoSalesListsByAgency()
     * @uses SalesListByAgencyResponse::setNoOfResults()
     * @uses SalesListByAgencyResponse::setSalesListsByAgencySums()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByAgencyType[] $midocoSalesListsByAgency
     * @param int $noOfResults
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByAgencyType $salesListsByAgencySums
     */
    public function __construct(?array $midocoSalesListsByAgency = null, ?int $noOfResults = null, ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByAgencyType $salesListsByAgencySums = null)
    {
        $this
            ->setMidocoSalesListsByAgency($midocoSalesListsByAgency)
            ->setNoOfResults($noOfResults)
            ->setSalesListsByAgencySums($salesListsByAgencySums);
    }
    /**
     * Get MidocoSalesListsByAgency value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByAgencyType[]
     */
    public function getMidocoSalesListsByAgency(): ?array
    {
        return $this->MidocoSalesListsByAgency;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSalesListsByAgency method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSalesListsByAgency method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSalesListsByAgencyForArrayConstraintsFromSetMidocoSalesListsByAgency(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $salesListByAgencyResponseMidocoSalesListsByAgencyItem) {
            // validation for constraint: itemType
            if (!$salesListByAgencyResponseMidocoSalesListsByAgencyItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByAgencyType) {
                $invalidValues[] = is_object($salesListByAgencyResponseMidocoSalesListsByAgencyItem) ? get_class($salesListByAgencyResponseMidocoSalesListsByAgencyItem) : sprintf('%s(%s)', gettype($salesListByAgencyResponseMidocoSalesListsByAgencyItem), var_export($salesListByAgencyResponseMidocoSalesListsByAgencyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSalesListsByAgency property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByAgencyType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSalesListsByAgency value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByAgencyType[] $midocoSalesListsByAgency
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListByAgencyResponse
     */
    public function setMidocoSalesListsByAgency(?array $midocoSalesListsByAgency = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSalesListsByAgencyArrayErrorMessage = self::validateMidocoSalesListsByAgencyForArrayConstraintsFromSetMidocoSalesListsByAgency($midocoSalesListsByAgency))) {
            throw new InvalidArgumentException($midocoSalesListsByAgencyArrayErrorMessage, __LINE__);
        }
        $this->MidocoSalesListsByAgency = $midocoSalesListsByAgency;
        
        return $this;
    }
    /**
     * Add item to MidocoSalesListsByAgency value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByAgencyType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListByAgencyResponse
     */
    public function addToMidocoSalesListsByAgency(\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByAgencyType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByAgencyType) {
            throw new InvalidArgumentException(sprintf('The MidocoSalesListsByAgency property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByAgencyType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSalesListsByAgency[] = $item;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListByAgencyResponse
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
     * Get SalesListsByAgencySums value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByAgencyType|null
     */
    public function getSalesListsByAgencySums(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByAgencyType
    {
        return $this->SalesListsByAgencySums;
    }
    /**
     * Set SalesListsByAgencySums value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByAgencyType $salesListsByAgencySums
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListByAgencyResponse
     */
    public function setSalesListsByAgencySums(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByAgencyType $salesListsByAgencySums = null): self
    {
        $this->SalesListsByAgencySums = $salesListsByAgencySums;
        
        return $this;
    }
}
