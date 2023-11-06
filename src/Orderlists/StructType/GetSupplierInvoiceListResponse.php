<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierInvoiceListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSupplierInvoiceListResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierInvoiceList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierInvoiceList
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierInvoiceListType[]
     */
    protected ?array $MidocoSupplierInvoiceList = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * Constructor method for GetSupplierInvoiceListResponse
     * @uses GetSupplierInvoiceListResponse::setMidocoSupplierInvoiceList()
     * @uses GetSupplierInvoiceListResponse::setNoOfResults()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierInvoiceListType[] $midocoSupplierInvoiceList
     * @param int $noOfResults
     */
    public function __construct(?array $midocoSupplierInvoiceList = null, ?int $noOfResults = null)
    {
        $this
            ->setMidocoSupplierInvoiceList($midocoSupplierInvoiceList)
            ->setNoOfResults($noOfResults);
    }
    /**
     * Get MidocoSupplierInvoiceList value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierInvoiceListType[]
     */
    public function getMidocoSupplierInvoiceList(): ?array
    {
        return $this->MidocoSupplierInvoiceList;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSupplierInvoiceList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierInvoiceList method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierInvoiceListForArrayConstraintFromSetMidocoSupplierInvoiceList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierInvoiceListResponseMidocoSupplierInvoiceListItem) {
            // validation for constraint: itemType
            if (!$getSupplierInvoiceListResponseMidocoSupplierInvoiceListItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierInvoiceListType) {
                $invalidValues[] = is_object($getSupplierInvoiceListResponseMidocoSupplierInvoiceListItem) ? get_class($getSupplierInvoiceListResponseMidocoSupplierInvoiceListItem) : sprintf('%s(%s)', gettype($getSupplierInvoiceListResponseMidocoSupplierInvoiceListItem), var_export($getSupplierInvoiceListResponseMidocoSupplierInvoiceListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierInvoiceList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierInvoiceListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierInvoiceList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierInvoiceListType[] $midocoSupplierInvoiceList
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetSupplierInvoiceListResponse
     */
    public function setMidocoSupplierInvoiceList(?array $midocoSupplierInvoiceList = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierInvoiceListArrayErrorMessage = self::validateMidocoSupplierInvoiceListForArrayConstraintFromSetMidocoSupplierInvoiceList($midocoSupplierInvoiceList))) {
            throw new InvalidArgumentException($midocoSupplierInvoiceListArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierInvoiceList = $midocoSupplierInvoiceList;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierInvoiceList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierInvoiceListType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetSupplierInvoiceListResponse
     */
    public function addToMidocoSupplierInvoiceList(\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierInvoiceListType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierInvoiceListType) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierInvoiceList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierInvoiceListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierInvoiceList[] = $item;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetSupplierInvoiceListResponse
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
