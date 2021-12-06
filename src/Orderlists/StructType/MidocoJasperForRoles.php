<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoJasperForRoles StructType
 * @subpackage Structs
 */
class MidocoJasperForRoles extends AbstractStructBase
{
    /**
     * The MidocoJasperReport
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoJasperReport
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoJasperReport[]
     */
    protected ?array $MidocoJasperReport = null;
    /**
     * The MidocoAccessJasperReport
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoAccessJasperReport[]
     */
    protected ?array $MidocoAccessJasperReport = null;
    /**
     * Constructor method for MidocoJasperForRoles
     * @uses MidocoJasperForRoles::setMidocoJasperReport()
     * @uses MidocoJasperForRoles::setMidocoAccessJasperReport()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoJasperReport[] $midocoJasperReport
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoAccessJasperReport[] $midocoAccessJasperReport
     */
    public function __construct(?array $midocoJasperReport = null, ?array $midocoAccessJasperReport = null)
    {
        $this
            ->setMidocoJasperReport($midocoJasperReport)
            ->setMidocoAccessJasperReport($midocoAccessJasperReport);
    }
    /**
     * Get MidocoJasperReport value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoJasperReport[]
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
        foreach ($values as $midocoJasperForRolesMidocoJasperReportItem) {
            // validation for constraint: itemType
            if (!$midocoJasperForRolesMidocoJasperReportItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoJasperReport) {
                $invalidValues[] = is_object($midocoJasperForRolesMidocoJasperReportItem) ? get_class($midocoJasperForRolesMidocoJasperReportItem) : sprintf('%s(%s)', gettype($midocoJasperForRolesMidocoJasperReportItem), var_export($midocoJasperForRolesMidocoJasperReportItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoJasperReport property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoJasperReport, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoJasperReport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoJasperReport[] $midocoJasperReport
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoJasperForRoles
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
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoJasperReport $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoJasperForRoles
     */
    public function addToMidocoJasperReport(\Pggns\MidocoApi\Orderlists\StructType\MidocoJasperReport $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoJasperReport) {
            throw new InvalidArgumentException(sprintf('The MidocoJasperReport property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoJasperReport, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoJasperReport[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoAccessJasperReport value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoAccessJasperReport[]
     */
    public function getMidocoAccessJasperReport(): ?array
    {
        return $this->MidocoAccessJasperReport;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAccessJasperReport method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAccessJasperReport method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAccessJasperReportForArrayConstraintsFromSetMidocoAccessJasperReport(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoJasperForRolesMidocoAccessJasperReportItem) {
            // validation for constraint: itemType
            if (!$midocoJasperForRolesMidocoAccessJasperReportItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoAccessJasperReport) {
                $invalidValues[] = is_object($midocoJasperForRolesMidocoAccessJasperReportItem) ? get_class($midocoJasperForRolesMidocoAccessJasperReportItem) : sprintf('%s(%s)', gettype($midocoJasperForRolesMidocoAccessJasperReportItem), var_export($midocoJasperForRolesMidocoAccessJasperReportItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAccessJasperReport property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoAccessJasperReport, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAccessJasperReport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoAccessJasperReport[] $midocoAccessJasperReport
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoJasperForRoles
     */
    public function setMidocoAccessJasperReport(?array $midocoAccessJasperReport = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAccessJasperReportArrayErrorMessage = self::validateMidocoAccessJasperReportForArrayConstraintsFromSetMidocoAccessJasperReport($midocoAccessJasperReport))) {
            throw new InvalidArgumentException($midocoAccessJasperReportArrayErrorMessage, __LINE__);
        }
        $this->MidocoAccessJasperReport = $midocoAccessJasperReport;
        
        return $this;
    }
    /**
     * Add item to MidocoAccessJasperReport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoAccessJasperReport $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoJasperForRoles
     */
    public function addToMidocoAccessJasperReport(\Pggns\MidocoApi\Orderlists\StructType\MidocoAccessJasperReport $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoAccessJasperReport) {
            throw new InvalidArgumentException(sprintf('The MidocoAccessJasperReport property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoAccessJasperReport, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAccessJasperReport[] = $item;
        
        return $this;
    }
}
