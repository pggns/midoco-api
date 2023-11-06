<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetReportWithSameParamResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetReportWithSameParamResponse extends AbstractStructBase
{
    /**
     * The JasperReport
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: system:JasperReport
     * @var \Pggns\MidocoApi\Mis\StructType\JasperReport[]
     */
    protected ?array $JasperReport = null;
    /**
     * Constructor method for GetReportWithSameParamResponse
     * @uses GetReportWithSameParamResponse::setJasperReport()
     * @param \Pggns\MidocoApi\Mis\StructType\JasperReport[] $jasperReport
     */
    public function __construct(?array $jasperReport = null)
    {
        $this
            ->setJasperReport($jasperReport);
    }
    /**
     * Get JasperReport value
     * @return \Pggns\MidocoApi\Mis\StructType\JasperReport[]
     */
    public function getJasperReport(): ?array
    {
        return $this->JasperReport;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setJasperReport method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJasperReport method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJasperReportForArrayConstraintFromSetJasperReport(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getReportWithSameParamResponseJasperReportItem) {
            // validation for constraint: itemType
            if (!$getReportWithSameParamResponseJasperReportItem instanceof \Pggns\MidocoApi\Mis\StructType\JasperReport) {
                $invalidValues[] = is_object($getReportWithSameParamResponseJasperReportItem) ? get_class($getReportWithSameParamResponseJasperReportItem) : sprintf('%s(%s)', gettype($getReportWithSameParamResponseJasperReportItem), var_export($getReportWithSameParamResponseJasperReportItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The JasperReport property can only contain items of type \Pggns\MidocoApi\Mis\StructType\JasperReport, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set JasperReport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\JasperReport[] $jasperReport
     * @return \Pggns\MidocoApi\Mis\StructType\GetReportWithSameParamResponse
     */
    public function setJasperReport(?array $jasperReport = null): self
    {
        // validation for constraint: array
        if ('' !== ($jasperReportArrayErrorMessage = self::validateJasperReportForArrayConstraintFromSetJasperReport($jasperReport))) {
            throw new InvalidArgumentException($jasperReportArrayErrorMessage, __LINE__);
        }
        $this->JasperReport = $jasperReport;
        
        return $this;
    }
    /**
     * Add item to JasperReport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\JasperReport $item
     * @return \Pggns\MidocoApi\Mis\StructType\GetReportWithSameParamResponse
     */
    public function addToJasperReport(\Pggns\MidocoApi\Mis\StructType\JasperReport $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\JasperReport) {
            throw new InvalidArgumentException(sprintf('The JasperReport property can only contain items of type \Pggns\MidocoApi\Mis\StructType\JasperReport, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->JasperReport[] = $item;
        
        return $this;
    }
}
