<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoJasperReportListExt StructType
 * @subpackage Structs
 */
class MidocoJasperReportListExt extends AbstractStructBase
{
    /**
     * The MidocoParameter
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoParameter
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoParameter[]
     */
    protected ?array $MidocoParameter = null;
    /**
     * The MidocoJasperReport
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoJasperReport
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoJasperReport[]
     */
    protected ?array $MidocoJasperReport = null;
    /**
     * Constructor method for MidocoJasperReportListExt
     * @uses MidocoJasperReportListExt::setMidocoParameter()
     * @uses MidocoJasperReportListExt::setMidocoJasperReport()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoParameter[] $midocoParameter
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoJasperReport[] $midocoJasperReport
     */
    public function __construct(?array $midocoParameter = null, ?array $midocoJasperReport = null)
    {
        $this
            ->setMidocoParameter($midocoParameter)
            ->setMidocoJasperReport($midocoJasperReport);
    }
    /**
     * Get MidocoParameter value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoParameter[]
     */
    public function getMidocoParameter(): ?array
    {
        return $this->MidocoParameter;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoParameter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoParameter method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoParameterForArrayConstraintsFromSetMidocoParameter(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoJasperReportListExtMidocoParameterItem) {
            // validation for constraint: itemType
            if (!$midocoJasperReportListExtMidocoParameterItem instanceof \Pggns\MidocoApi\OrderSD\StructType\MidocoParameter) {
                $invalidValues[] = is_object($midocoJasperReportListExtMidocoParameterItem) ? get_class($midocoJasperReportListExtMidocoParameterItem) : sprintf('%s(%s)', gettype($midocoJasperReportListExtMidocoParameterItem), var_export($midocoJasperReportListExtMidocoParameterItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoParameter property can only contain items of type \Pggns\MidocoApi\OrderSD\StructType\MidocoParameter, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoParameter value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoParameter[] $midocoParameter
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoJasperReportListExt
     */
    public function setMidocoParameter(?array $midocoParameter = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoParameterArrayErrorMessage = self::validateMidocoParameterForArrayConstraintsFromSetMidocoParameter($midocoParameter))) {
            throw new InvalidArgumentException($midocoParameterArrayErrorMessage, __LINE__);
        }
        $this->MidocoParameter = $midocoParameter;
        
        return $this;
    }
    /**
     * Add item to MidocoParameter value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoParameter $item
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoJasperReportListExt
     */
    public function addToMidocoParameter(\Pggns\MidocoApi\OrderSD\StructType\MidocoParameter $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\OrderSD\StructType\MidocoParameter) {
            throw new InvalidArgumentException(sprintf('The MidocoParameter property can only contain items of type \Pggns\MidocoApi\OrderSD\StructType\MidocoParameter, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoParameter[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoJasperReport value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoJasperReport[]
     */
    public function getMidocoJasperReport(): ?array
    {
        return $this->MidocoJasperReport;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoJasperReport method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoJasperReport method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoJasperReportForArrayConstraintsFromSetMidocoJasperReport(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoJasperReportListExtMidocoJasperReportItem) {
            // validation for constraint: itemType
            if (!$midocoJasperReportListExtMidocoJasperReportItem instanceof \Pggns\MidocoApi\OrderSD\StructType\MidocoJasperReport) {
                $invalidValues[] = is_object($midocoJasperReportListExtMidocoJasperReportItem) ? get_class($midocoJasperReportListExtMidocoJasperReportItem) : sprintf('%s(%s)', gettype($midocoJasperReportListExtMidocoJasperReportItem), var_export($midocoJasperReportListExtMidocoJasperReportItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoJasperReport property can only contain items of type \Pggns\MidocoApi\OrderSD\StructType\MidocoJasperReport, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoJasperReport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoJasperReport[] $midocoJasperReport
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoJasperReportListExt
     */
    public function setMidocoJasperReport(?array $midocoJasperReport = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoJasperReportArrayErrorMessage = self::validateMidocoJasperReportForArrayConstraintsFromSetMidocoJasperReport($midocoJasperReport))) {
            throw new InvalidArgumentException($midocoJasperReportArrayErrorMessage, __LINE__);
        }
        $this->MidocoJasperReport = $midocoJasperReport;
        
        return $this;
    }
    /**
     * Add item to MidocoJasperReport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoJasperReport $item
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoJasperReportListExt
     */
    public function addToMidocoJasperReport(\Pggns\MidocoApi\OrderSD\StructType\MidocoJasperReport $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\OrderSD\StructType\MidocoJasperReport) {
            throw new InvalidArgumentException(sprintf('The MidocoJasperReport property can only contain items of type \Pggns\MidocoApi\OrderSD\StructType\MidocoJasperReport, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoJasperReport[] = $item;
        
        return $this;
    }
}
