<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArErCsvExportRequest StructType
 * @subpackage Structs
 */
class ArErCsvExportRequest extends AbstractStructBase
{
    /**
     * The ArErListRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: ArErListRequest
     * @var \Pggns\MidocoApi\Orderlists\StructType\ArErListRequest|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\ArErListRequest $ArErListRequest = null;
    /**
     * The midocoArErOutputList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoArErOutputListType[]
     */
    protected ?array $midocoArErOutputList = null;
    /**
     * The midocoArErListSums
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListSumsType[]
     */
    protected ?array $midocoArErListSums = null;
    /**
     * Constructor method for ArErCsvExportRequest
     * @uses ArErCsvExportRequest::setArErListRequest()
     * @uses ArErCsvExportRequest::setMidocoArErOutputList()
     * @uses ArErCsvExportRequest::setMidocoArErListSums()
     * @param \Pggns\MidocoApi\Orderlists\StructType\ArErListRequest $arErListRequest
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoArErOutputListType[] $midocoArErOutputList
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListSumsType[] $midocoArErListSums
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\ArErListRequest $arErListRequest = null, ?array $midocoArErOutputList = null, ?array $midocoArErListSums = null)
    {
        $this
            ->setArErListRequest($arErListRequest)
            ->setMidocoArErOutputList($midocoArErOutputList)
            ->setMidocoArErListSums($midocoArErListSums);
    }
    /**
     * Get ArErListRequest value
     * @return \Pggns\MidocoApi\Orderlists\StructType\ArErListRequest|null
     */
    public function getArErListRequest(): ?\Pggns\MidocoApi\Orderlists\StructType\ArErListRequest
    {
        return $this->ArErListRequest;
    }
    /**
     * Set ArErListRequest value
     * @param \Pggns\MidocoApi\Orderlists\StructType\ArErListRequest $arErListRequest
     * @return \Pggns\MidocoApi\Orderlists\StructType\ArErCsvExportRequest
     */
    public function setArErListRequest(?\Pggns\MidocoApi\Orderlists\StructType\ArErListRequest $arErListRequest = null): self
    {
        $this->ArErListRequest = $arErListRequest;
        
        return $this;
    }
    /**
     * Get midocoArErOutputList value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErOutputListType[]
     */
    public function getMidocoArErOutputList(): ?array
    {
        return $this->midocoArErOutputList;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoArErOutputList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoArErOutputList method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoArErOutputListForArrayConstraintsFromSetMidocoArErOutputList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arErCsvExportRequestMidocoArErOutputListItem) {
            // validation for constraint: itemType
            if (!$arErCsvExportRequestMidocoArErOutputListItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoArErOutputListType) {
                $invalidValues[] = is_object($arErCsvExportRequestMidocoArErOutputListItem) ? get_class($arErCsvExportRequestMidocoArErOutputListItem) : sprintf('%s(%s)', gettype($arErCsvExportRequestMidocoArErOutputListItem), var_export($arErCsvExportRequestMidocoArErOutputListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The midocoArErOutputList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoArErOutputListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set midocoArErOutputList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoArErOutputListType[] $midocoArErOutputList
     * @return \Pggns\MidocoApi\Orderlists\StructType\ArErCsvExportRequest
     */
    public function setMidocoArErOutputList(?array $midocoArErOutputList = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoArErOutputListArrayErrorMessage = self::validateMidocoArErOutputListForArrayConstraintsFromSetMidocoArErOutputList($midocoArErOutputList))) {
            throw new InvalidArgumentException($midocoArErOutputListArrayErrorMessage, __LINE__);
        }
        $this->midocoArErOutputList = $midocoArErOutputList;
        
        return $this;
    }
    /**
     * Add item to midocoArErOutputList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoArErOutputListType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\ArErCsvExportRequest
     */
    public function addToMidocoArErOutputList(\Pggns\MidocoApi\Orderlists\StructType\MidocoArErOutputListType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoArErOutputListType) {
            throw new InvalidArgumentException(sprintf('The midocoArErOutputList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoArErOutputListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->midocoArErOutputList[] = $item;
        
        return $this;
    }
    /**
     * Get midocoArErListSums value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListSumsType[]
     */
    public function getMidocoArErListSums(): ?array
    {
        return $this->midocoArErListSums;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoArErListSums method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoArErListSums method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoArErListSumsForArrayConstraintsFromSetMidocoArErListSums(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arErCsvExportRequestMidocoArErListSumsItem) {
            // validation for constraint: itemType
            if (!$arErCsvExportRequestMidocoArErListSumsItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListSumsType) {
                $invalidValues[] = is_object($arErCsvExportRequestMidocoArErListSumsItem) ? get_class($arErCsvExportRequestMidocoArErListSumsItem) : sprintf('%s(%s)', gettype($arErCsvExportRequestMidocoArErListSumsItem), var_export($arErCsvExportRequestMidocoArErListSumsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The midocoArErListSums property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListSumsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set midocoArErListSums value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListSumsType[] $midocoArErListSums
     * @return \Pggns\MidocoApi\Orderlists\StructType\ArErCsvExportRequest
     */
    public function setMidocoArErListSums(?array $midocoArErListSums = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoArErListSumsArrayErrorMessage = self::validateMidocoArErListSumsForArrayConstraintsFromSetMidocoArErListSums($midocoArErListSums))) {
            throw new InvalidArgumentException($midocoArErListSumsArrayErrorMessage, __LINE__);
        }
        $this->midocoArErListSums = $midocoArErListSums;
        
        return $this;
    }
    /**
     * Add item to midocoArErListSums value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListSumsType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\ArErCsvExportRequest
     */
    public function addToMidocoArErListSums(\Pggns\MidocoApi\Orderlists\StructType\MidocoArErListSumsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListSumsType) {
            throw new InvalidArgumentException(sprintf('The midocoArErListSums property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListSumsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->midocoArErListSums[] = $item;
        
        return $this;
    }
}
