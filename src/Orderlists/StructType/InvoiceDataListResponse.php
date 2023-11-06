<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvoiceDataListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class InvoiceDataListResponse extends AbstractStructBase
{
    /**
     * The MidocoInvoiceDataList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListType[]
     */
    protected ?array $MidocoInvoiceDataList = null;
    /**
     * The MidocoInvoiceDataListSums
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListSumsType[]
     */
    protected ?array $MidocoInvoiceDataListSums = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * Constructor method for InvoiceDataListResponse
     * @uses InvoiceDataListResponse::setMidocoInvoiceDataList()
     * @uses InvoiceDataListResponse::setMidocoInvoiceDataListSums()
     * @uses InvoiceDataListResponse::setNoOfResults()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListType[] $midocoInvoiceDataList
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListSumsType[] $midocoInvoiceDataListSums
     * @param int $noOfResults
     */
    public function __construct(?array $midocoInvoiceDataList = null, ?array $midocoInvoiceDataListSums = null, ?int $noOfResults = null)
    {
        $this
            ->setMidocoInvoiceDataList($midocoInvoiceDataList)
            ->setMidocoInvoiceDataListSums($midocoInvoiceDataListSums)
            ->setNoOfResults($noOfResults);
    }
    /**
     * Get MidocoInvoiceDataList value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListType[]
     */
    public function getMidocoInvoiceDataList(): ?array
    {
        return $this->MidocoInvoiceDataList;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoInvoiceDataList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoInvoiceDataList method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoInvoiceDataListForArrayConstraintFromSetMidocoInvoiceDataList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $invoiceDataListResponseMidocoInvoiceDataListItem) {
            // validation for constraint: itemType
            if (!$invoiceDataListResponseMidocoInvoiceDataListItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListType) {
                $invalidValues[] = is_object($invoiceDataListResponseMidocoInvoiceDataListItem) ? get_class($invoiceDataListResponseMidocoInvoiceDataListItem) : sprintf('%s(%s)', gettype($invoiceDataListResponseMidocoInvoiceDataListItem), var_export($invoiceDataListResponseMidocoInvoiceDataListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoInvoiceDataList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoInvoiceDataList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListType[] $midocoInvoiceDataList
     * @return \Pggns\MidocoApi\Orderlists\StructType\InvoiceDataListResponse
     */
    public function setMidocoInvoiceDataList(?array $midocoInvoiceDataList = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoInvoiceDataListArrayErrorMessage = self::validateMidocoInvoiceDataListForArrayConstraintFromSetMidocoInvoiceDataList($midocoInvoiceDataList))) {
            throw new InvalidArgumentException($midocoInvoiceDataListArrayErrorMessage, __LINE__);
        }
        $this->MidocoInvoiceDataList = $midocoInvoiceDataList;
        
        return $this;
    }
    /**
     * Add item to MidocoInvoiceDataList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\InvoiceDataListResponse
     */
    public function addToMidocoInvoiceDataList(\Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListType) {
            throw new InvalidArgumentException(sprintf('The MidocoInvoiceDataList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoInvoiceDataList[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoInvoiceDataListSums value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListSumsType[]
     */
    public function getMidocoInvoiceDataListSums(): ?array
    {
        return $this->MidocoInvoiceDataListSums;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoInvoiceDataListSums method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoInvoiceDataListSums method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoInvoiceDataListSumsForArrayConstraintFromSetMidocoInvoiceDataListSums(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $invoiceDataListResponseMidocoInvoiceDataListSumsItem) {
            // validation for constraint: itemType
            if (!$invoiceDataListResponseMidocoInvoiceDataListSumsItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListSumsType) {
                $invalidValues[] = is_object($invoiceDataListResponseMidocoInvoiceDataListSumsItem) ? get_class($invoiceDataListResponseMidocoInvoiceDataListSumsItem) : sprintf('%s(%s)', gettype($invoiceDataListResponseMidocoInvoiceDataListSumsItem), var_export($invoiceDataListResponseMidocoInvoiceDataListSumsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoInvoiceDataListSums property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListSumsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoInvoiceDataListSums value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListSumsType[] $midocoInvoiceDataListSums
     * @return \Pggns\MidocoApi\Orderlists\StructType\InvoiceDataListResponse
     */
    public function setMidocoInvoiceDataListSums(?array $midocoInvoiceDataListSums = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoInvoiceDataListSumsArrayErrorMessage = self::validateMidocoInvoiceDataListSumsForArrayConstraintFromSetMidocoInvoiceDataListSums($midocoInvoiceDataListSums))) {
            throw new InvalidArgumentException($midocoInvoiceDataListSumsArrayErrorMessage, __LINE__);
        }
        $this->MidocoInvoiceDataListSums = $midocoInvoiceDataListSums;
        
        return $this;
    }
    /**
     * Add item to MidocoInvoiceDataListSums value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListSumsType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\InvoiceDataListResponse
     */
    public function addToMidocoInvoiceDataListSums(\Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListSumsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListSumsType) {
            throw new InvalidArgumentException(sprintf('The MidocoInvoiceDataListSums property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListSumsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoInvoiceDataListSums[] = $item;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\InvoiceDataListResponse
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
}
