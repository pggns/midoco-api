<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DepositListCsvExportRequest StructType
 * @subpackage Structs
 */
class DepositListCsvExportRequest extends AbstractStructBase
{
    /**
     * The midocoDepositList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListType[]
     */
    protected ?array $midocoDepositList = null;
    /**
     * The midocoDepositListSums
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListSumsType[]
     */
    protected ?array $midocoDepositListSums = null;
    /**
     * The midocoDepositListOverall
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListOverallType[]
     */
    protected ?array $midocoDepositListOverall = null;
    /**
     * Constructor method for DepositListCsvExportRequest
     * @uses DepositListCsvExportRequest::setMidocoDepositList()
     * @uses DepositListCsvExportRequest::setMidocoDepositListSums()
     * @uses DepositListCsvExportRequest::setMidocoDepositListOverall()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListType[] $midocoDepositList
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListSumsType[] $midocoDepositListSums
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListOverallType[] $midocoDepositListOverall
     */
    public function __construct(?array $midocoDepositList = null, ?array $midocoDepositListSums = null, ?array $midocoDepositListOverall = null)
    {
        $this
            ->setMidocoDepositList($midocoDepositList)
            ->setMidocoDepositListSums($midocoDepositListSums)
            ->setMidocoDepositListOverall($midocoDepositListOverall);
    }
    /**
     * Get midocoDepositList value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListType[]
     */
    public function getMidocoDepositList(): ?array
    {
        return $this->midocoDepositList;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDepositList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDepositList method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDepositListForArrayConstraintsFromSetMidocoDepositList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $depositListCsvExportRequestMidocoDepositListItem) {
            // validation for constraint: itemType
            if (!$depositListCsvExportRequestMidocoDepositListItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListType) {
                $invalidValues[] = is_object($depositListCsvExportRequestMidocoDepositListItem) ? get_class($depositListCsvExportRequestMidocoDepositListItem) : sprintf('%s(%s)', gettype($depositListCsvExportRequestMidocoDepositListItem), var_export($depositListCsvExportRequestMidocoDepositListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The midocoDepositList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set midocoDepositList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListType[] $midocoDepositList
     * @return \Pggns\MidocoApi\Orderlists\StructType\DepositListCsvExportRequest
     */
    public function setMidocoDepositList(?array $midocoDepositList = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDepositListArrayErrorMessage = self::validateMidocoDepositListForArrayConstraintsFromSetMidocoDepositList($midocoDepositList))) {
            throw new InvalidArgumentException($midocoDepositListArrayErrorMessage, __LINE__);
        }
        $this->midocoDepositList = $midocoDepositList;
        
        return $this;
    }
    /**
     * Add item to midocoDepositList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\DepositListCsvExportRequest
     */
    public function addToMidocoDepositList(\Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListType) {
            throw new InvalidArgumentException(sprintf('The midocoDepositList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->midocoDepositList[] = $item;
        
        return $this;
    }
    /**
     * Get midocoDepositListSums value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListSumsType[]
     */
    public function getMidocoDepositListSums(): ?array
    {
        return $this->midocoDepositListSums;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDepositListSums method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDepositListSums method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDepositListSumsForArrayConstraintsFromSetMidocoDepositListSums(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $depositListCsvExportRequestMidocoDepositListSumsItem) {
            // validation for constraint: itemType
            if (!$depositListCsvExportRequestMidocoDepositListSumsItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListSumsType) {
                $invalidValues[] = is_object($depositListCsvExportRequestMidocoDepositListSumsItem) ? get_class($depositListCsvExportRequestMidocoDepositListSumsItem) : sprintf('%s(%s)', gettype($depositListCsvExportRequestMidocoDepositListSumsItem), var_export($depositListCsvExportRequestMidocoDepositListSumsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The midocoDepositListSums property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListSumsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set midocoDepositListSums value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListSumsType[] $midocoDepositListSums
     * @return \Pggns\MidocoApi\Orderlists\StructType\DepositListCsvExportRequest
     */
    public function setMidocoDepositListSums(?array $midocoDepositListSums = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDepositListSumsArrayErrorMessage = self::validateMidocoDepositListSumsForArrayConstraintsFromSetMidocoDepositListSums($midocoDepositListSums))) {
            throw new InvalidArgumentException($midocoDepositListSumsArrayErrorMessage, __LINE__);
        }
        $this->midocoDepositListSums = $midocoDepositListSums;
        
        return $this;
    }
    /**
     * Add item to midocoDepositListSums value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListSumsType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\DepositListCsvExportRequest
     */
    public function addToMidocoDepositListSums(\Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListSumsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListSumsType) {
            throw new InvalidArgumentException(sprintf('The midocoDepositListSums property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListSumsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->midocoDepositListSums[] = $item;
        
        return $this;
    }
    /**
     * Get midocoDepositListOverall value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListOverallType[]
     */
    public function getMidocoDepositListOverall(): ?array
    {
        return $this->midocoDepositListOverall;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDepositListOverall method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDepositListOverall method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDepositListOverallForArrayConstraintsFromSetMidocoDepositListOverall(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $depositListCsvExportRequestMidocoDepositListOverallItem) {
            // validation for constraint: itemType
            if (!$depositListCsvExportRequestMidocoDepositListOverallItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListOverallType) {
                $invalidValues[] = is_object($depositListCsvExportRequestMidocoDepositListOverallItem) ? get_class($depositListCsvExportRequestMidocoDepositListOverallItem) : sprintf('%s(%s)', gettype($depositListCsvExportRequestMidocoDepositListOverallItem), var_export($depositListCsvExportRequestMidocoDepositListOverallItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The midocoDepositListOverall property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListOverallType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set midocoDepositListOverall value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListOverallType[] $midocoDepositListOverall
     * @return \Pggns\MidocoApi\Orderlists\StructType\DepositListCsvExportRequest
     */
    public function setMidocoDepositListOverall(?array $midocoDepositListOverall = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDepositListOverallArrayErrorMessage = self::validateMidocoDepositListOverallForArrayConstraintsFromSetMidocoDepositListOverall($midocoDepositListOverall))) {
            throw new InvalidArgumentException($midocoDepositListOverallArrayErrorMessage, __LINE__);
        }
        $this->midocoDepositListOverall = $midocoDepositListOverall;
        
        return $this;
    }
    /**
     * Add item to midocoDepositListOverall value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListOverallType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\DepositListCsvExportRequest
     */
    public function addToMidocoDepositListOverall(\Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListOverallType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListOverallType) {
            throw new InvalidArgumentException(sprintf('The midocoDepositListOverall property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListOverallType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->midocoDepositListOverall[] = $item;
        
        return $this;
    }
}
