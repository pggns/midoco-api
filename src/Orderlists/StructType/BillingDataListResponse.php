<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingDataListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BillingDataListResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingDataList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType[]
     */
    protected ?array $MidocoBillingDataList = null;
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
     * Constructor method for BillingDataListResponse
     * @uses BillingDataListResponse::setMidocoBillingDataList()
     * @uses BillingDataListResponse::setMidocoBillingDataListSums()
     * @uses BillingDataListResponse::setCdfTitle()
     * @uses BillingDataListResponse::setNoOfResults()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType[] $midocoBillingDataList
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListSumsType $midocoBillingDataListSums
     * @param \Pggns\MidocoApi\Orderlists\StructType\CdfTitle[] $cdfTitle
     * @param int $noOfResults
     */
    public function __construct(?array $midocoBillingDataList = null, ?\Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListSumsType $midocoBillingDataListSums = null, ?array $cdfTitle = null, ?int $noOfResults = null)
    {
        $this
            ->setMidocoBillingDataList($midocoBillingDataList)
            ->setMidocoBillingDataListSums($midocoBillingDataListSums)
            ->setCdfTitle($cdfTitle)
            ->setNoOfResults($noOfResults);
    }
    /**
     * Get MidocoBillingDataList value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType[]
     */
    public function getMidocoBillingDataList(): ?array
    {
        return $this->MidocoBillingDataList;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBillingDataList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingDataList method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingDataListForArrayConstraintFromSetMidocoBillingDataList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $billingDataListResponseMidocoBillingDataListItem) {
            // validation for constraint: itemType
            if (!$billingDataListResponseMidocoBillingDataListItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType) {
                $invalidValues[] = is_object($billingDataListResponseMidocoBillingDataListItem) ? get_class($billingDataListResponseMidocoBillingDataListItem) : sprintf('%s(%s)', gettype($billingDataListResponseMidocoBillingDataListItem), var_export($billingDataListResponseMidocoBillingDataListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingDataList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingDataList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType[] $midocoBillingDataList
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingDataListResponse
     */
    public function setMidocoBillingDataList(?array $midocoBillingDataList = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingDataListArrayErrorMessage = self::validateMidocoBillingDataListForArrayConstraintFromSetMidocoBillingDataList($midocoBillingDataList))) {
            throw new InvalidArgumentException($midocoBillingDataListArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingDataList = $midocoBillingDataList;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingDataList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingDataListResponse
     */
    public function addToMidocoBillingDataList(\Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingDataList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingDataList[] = $item;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingDataListResponse
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
        foreach ($values as $billingDataListResponseCdfTitleItem) {
            // validation for constraint: itemType
            if (!$billingDataListResponseCdfTitleItem instanceof \Pggns\MidocoApi\Orderlists\StructType\CdfTitle) {
                $invalidValues[] = is_object($billingDataListResponseCdfTitleItem) ? get_class($billingDataListResponseCdfTitleItem) : sprintf('%s(%s)', gettype($billingDataListResponseCdfTitleItem), var_export($billingDataListResponseCdfTitleItem, true));
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingDataListResponse
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingDataListResponse
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingDataListResponse
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
