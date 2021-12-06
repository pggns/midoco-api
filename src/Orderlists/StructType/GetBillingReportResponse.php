<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingReportResponse StructType
 * @subpackage Structs
 */
class GetBillingReportResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingReport
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingReportType[]
     */
    protected ?array $MidocoBillingReport = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * The MidocoBillingReportSums
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingReportSumType[]
     */
    protected ?array $MidocoBillingReportSums = null;
    /**
     * Constructor method for GetBillingReportResponse
     * @uses GetBillingReportResponse::setMidocoBillingReport()
     * @uses GetBillingReportResponse::setNoOfResults()
     * @uses GetBillingReportResponse::setMidocoBillingReportSums()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingReportType[] $midocoBillingReport
     * @param int $noOfResults
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingReportSumType[] $midocoBillingReportSums
     */
    public function __construct(?array $midocoBillingReport = null, ?int $noOfResults = null, ?array $midocoBillingReportSums = null)
    {
        $this
            ->setMidocoBillingReport($midocoBillingReport)
            ->setNoOfResults($noOfResults)
            ->setMidocoBillingReportSums($midocoBillingReportSums);
    }
    /**
     * Get MidocoBillingReport value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingReportType[]
     */
    public function getMidocoBillingReport(): ?array
    {
        return $this->MidocoBillingReport;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBillingReport method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingReport method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingReportForArrayConstraintsFromSetMidocoBillingReport(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBillingReportResponseMidocoBillingReportItem) {
            // validation for constraint: itemType
            if (!$getBillingReportResponseMidocoBillingReportItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingReportType) {
                $invalidValues[] = is_object($getBillingReportResponseMidocoBillingReportItem) ? get_class($getBillingReportResponseMidocoBillingReportItem) : sprintf('%s(%s)', gettype($getBillingReportResponseMidocoBillingReportItem), var_export($getBillingReportResponseMidocoBillingReportItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingReport property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingReportType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingReport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingReportType[] $midocoBillingReport
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetBillingReportResponse
     */
    public function setMidocoBillingReport(?array $midocoBillingReport = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingReportArrayErrorMessage = self::validateMidocoBillingReportForArrayConstraintsFromSetMidocoBillingReport($midocoBillingReport))) {
            throw new InvalidArgumentException($midocoBillingReportArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingReport = $midocoBillingReport;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingReport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingReportType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetBillingReportResponse
     */
    public function addToMidocoBillingReport(\Pggns\MidocoApi\Orderlists\StructType\MidocoBillingReportType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingReportType) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingReport property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingReportType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingReport[] = $item;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetBillingReportResponse
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
     * Get MidocoBillingReportSums value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingReportSumType[]
     */
    public function getMidocoBillingReportSums(): ?array
    {
        return $this->MidocoBillingReportSums;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBillingReportSums method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingReportSums method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingReportSumsForArrayConstraintsFromSetMidocoBillingReportSums(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBillingReportResponseMidocoBillingReportSumsItem) {
            // validation for constraint: itemType
            if (!$getBillingReportResponseMidocoBillingReportSumsItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingReportSumType) {
                $invalidValues[] = is_object($getBillingReportResponseMidocoBillingReportSumsItem) ? get_class($getBillingReportResponseMidocoBillingReportSumsItem) : sprintf('%s(%s)', gettype($getBillingReportResponseMidocoBillingReportSumsItem), var_export($getBillingReportResponseMidocoBillingReportSumsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingReportSums property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingReportSumType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingReportSums value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingReportSumType[] $midocoBillingReportSums
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetBillingReportResponse
     */
    public function setMidocoBillingReportSums(?array $midocoBillingReportSums = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingReportSumsArrayErrorMessage = self::validateMidocoBillingReportSumsForArrayConstraintsFromSetMidocoBillingReportSums($midocoBillingReportSums))) {
            throw new InvalidArgumentException($midocoBillingReportSumsArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingReportSums = $midocoBillingReportSums;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingReportSums value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingReportSumType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetBillingReportResponse
     */
    public function addToMidocoBillingReportSums(\Pggns\MidocoApi\Orderlists\StructType\MidocoBillingReportSumType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingReportSumType) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingReportSums property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingReportSumType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingReportSums[] = $item;
        
        return $this;
    }
}
