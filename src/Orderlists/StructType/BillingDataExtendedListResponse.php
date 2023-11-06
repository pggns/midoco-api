<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingDataExtendedListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BillingDataExtendedListResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingDataExtendedList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataExtendedListType[]
     */
    protected ?array $MidocoBillingDataExtendedList = null;
    /**
     * The MidocoBillingDataListSums
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListSumsType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListSumsType $MidocoBillingDataListSums = null;
    /**
     * The CdfTitle
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\CdfTitle[]
     */
    protected ?array $CdfTitle = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * Constructor method for BillingDataExtendedListResponse
     * @uses BillingDataExtendedListResponse::setMidocoBillingDataExtendedList()
     * @uses BillingDataExtendedListResponse::setMidocoBillingDataListSums()
     * @uses BillingDataExtendedListResponse::setCdfTitle()
     * @uses BillingDataExtendedListResponse::setNoOfResults()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataExtendedListType[] $midocoBillingDataExtendedList
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListSumsType $midocoBillingDataListSums
     * @param \Pggns\MidocoApi\Orderlists\StructType\CdfTitle[] $cdfTitle
     * @param int $noOfResults
     */
    public function __construct(?array $midocoBillingDataExtendedList = null, ?\Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListSumsType $midocoBillingDataListSums = null, ?array $cdfTitle = null, ?int $noOfResults = null)
    {
        $this
            ->setMidocoBillingDataExtendedList($midocoBillingDataExtendedList)
            ->setMidocoBillingDataListSums($midocoBillingDataListSums)
            ->setCdfTitle($cdfTitle)
            ->setNoOfResults($noOfResults);
    }
    /**
     * Get MidocoBillingDataExtendedList value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataExtendedListType[]
     */
    public function getMidocoBillingDataExtendedList(): ?array
    {
        return $this->MidocoBillingDataExtendedList;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBillingDataExtendedList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingDataExtendedList method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingDataExtendedListForArrayConstraintFromSetMidocoBillingDataExtendedList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $billingDataExtendedListResponseMidocoBillingDataExtendedListItem) {
            // validation for constraint: itemType
            if (!$billingDataExtendedListResponseMidocoBillingDataExtendedListItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataExtendedListType) {
                $invalidValues[] = is_object($billingDataExtendedListResponseMidocoBillingDataExtendedListItem) ? get_class($billingDataExtendedListResponseMidocoBillingDataExtendedListItem) : sprintf('%s(%s)', gettype($billingDataExtendedListResponseMidocoBillingDataExtendedListItem), var_export($billingDataExtendedListResponseMidocoBillingDataExtendedListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingDataExtendedList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataExtendedListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingDataExtendedList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataExtendedListType[] $midocoBillingDataExtendedList
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingDataExtendedListResponse
     */
    public function setMidocoBillingDataExtendedList(?array $midocoBillingDataExtendedList = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingDataExtendedListArrayErrorMessage = self::validateMidocoBillingDataExtendedListForArrayConstraintFromSetMidocoBillingDataExtendedList($midocoBillingDataExtendedList))) {
            throw new InvalidArgumentException($midocoBillingDataExtendedListArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingDataExtendedList = $midocoBillingDataExtendedList;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingDataExtendedList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataExtendedListType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingDataExtendedListResponse
     */
    public function addToMidocoBillingDataExtendedList(\Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataExtendedListType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataExtendedListType) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingDataExtendedList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataExtendedListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingDataExtendedList[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoBillingDataListSums value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListSumsType|null
     */
    public function getMidocoBillingDataListSums(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListSumsType
    {
        return $this->MidocoBillingDataListSums;
    }
    /**
     * Set MidocoBillingDataListSums value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListSumsType $midocoBillingDataListSums
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingDataExtendedListResponse
     */
    public function setMidocoBillingDataListSums(?\Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListSumsType $midocoBillingDataListSums = null): self
    {
        $this->MidocoBillingDataListSums = $midocoBillingDataListSums;
        
        return $this;
    }
    /**
     * Get CdfTitle value
     * @return \Pggns\MidocoApi\Orderlists\StructType\CdfTitle[]
     */
    public function getCdfTitle(): ?array
    {
        return $this->CdfTitle;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCdfTitle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCdfTitle method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCdfTitleForArrayConstraintFromSetCdfTitle(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $billingDataExtendedListResponseCdfTitleItem) {
            // validation for constraint: itemType
            if (!$billingDataExtendedListResponseCdfTitleItem instanceof \Pggns\MidocoApi\Orderlists\StructType\CdfTitle) {
                $invalidValues[] = is_object($billingDataExtendedListResponseCdfTitleItem) ? get_class($billingDataExtendedListResponseCdfTitleItem) : sprintf('%s(%s)', gettype($billingDataExtendedListResponseCdfTitleItem), var_export($billingDataExtendedListResponseCdfTitleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CdfTitle property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\CdfTitle, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CdfTitle value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\CdfTitle[] $cdfTitle
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingDataExtendedListResponse
     */
    public function setCdfTitle(?array $cdfTitle = null): self
    {
        // validation for constraint: array
        if ('' !== ($cdfTitleArrayErrorMessage = self::validateCdfTitleForArrayConstraintFromSetCdfTitle($cdfTitle))) {
            throw new InvalidArgumentException($cdfTitleArrayErrorMessage, __LINE__);
        }
        $this->CdfTitle = $cdfTitle;
        
        return $this;
    }
    /**
     * Add item to CdfTitle value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\CdfTitle $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingDataExtendedListResponse
     */
    public function addToCdfTitle(\Pggns\MidocoApi\Orderlists\StructType\CdfTitle $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\CdfTitle) {
            throw new InvalidArgumentException(sprintf('The CdfTitle property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\CdfTitle, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CdfTitle[] = $item;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingDataExtendedListResponse
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
