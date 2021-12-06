<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllJasperReportResponse StructType
 * @subpackage Structs
 */
class GetAllJasperReportResponse extends AbstractStructBase
{
    /**
     * The MidocoJasperReport
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: system:MidocoJasperReport
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoJasperReport[]
     */
    protected ?array $MidocoJasperReport = null;
    /**
     * Constructor method for GetAllJasperReportResponse
     * @uses GetAllJasperReportResponse::setMidocoJasperReport()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoJasperReport[] $midocoJasperReport
     */
    public function __construct(?array $midocoJasperReport = null)
    {
        $this
            ->setMidocoJasperReport($midocoJasperReport);
    }
    /**
     * Get MidocoJasperReport value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoJasperReport[]
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
        foreach ($values as $getAllJasperReportResponseMidocoJasperReportItem) {
            // validation for constraint: itemType
            if (!$getAllJasperReportResponseMidocoJasperReportItem instanceof \Pggns\MidocoApi\Mis\StructType\MidocoJasperReport) {
                $invalidValues[] = is_object($getAllJasperReportResponseMidocoJasperReportItem) ? get_class($getAllJasperReportResponseMidocoJasperReportItem) : sprintf('%s(%s)', gettype($getAllJasperReportResponseMidocoJasperReportItem), var_export($getAllJasperReportResponseMidocoJasperReportItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoJasperReport property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoJasperReport, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoJasperReport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoJasperReport[] $midocoJasperReport
     * @return \Pggns\MidocoApi\Mis\StructType\GetAllJasperReportResponse
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
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoJasperReport $item
     * @return \Pggns\MidocoApi\Mis\StructType\GetAllJasperReportResponse
     */
    public function addToMidocoJasperReport(\Pggns\MidocoApi\Mis\StructType\MidocoJasperReport $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MidocoJasperReport) {
            throw new InvalidArgumentException(sprintf('The MidocoJasperReport property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoJasperReport, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoJasperReport[] = $item;
        
        return $this;
    }
}
