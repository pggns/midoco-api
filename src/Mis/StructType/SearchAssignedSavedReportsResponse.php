<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchAssignedSavedReportsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchAssignedSavedReportsResponse extends AbstractStructBase
{
    /**
     * The MidocoSavedReport
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: system:MidocoSavedReport
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoSavedReport[]
     */
    protected ?array $MidocoSavedReport = null;
    /**
     * Constructor method for SearchAssignedSavedReportsResponse
     * @uses SearchAssignedSavedReportsResponse::setMidocoSavedReport()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoSavedReport[] $midocoSavedReport
     */
    public function __construct(?array $midocoSavedReport = null)
    {
        $this
            ->setMidocoSavedReport($midocoSavedReport);
    }
    /**
     * Get MidocoSavedReport value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoSavedReport[]
     */
    public function getMidocoSavedReport(): ?array
    {
        return $this->MidocoSavedReport;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSavedReport method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSavedReport method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSavedReportForArrayConstraintFromSetMidocoSavedReport(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchAssignedSavedReportsResponseMidocoSavedReportItem) {
            // validation for constraint: itemType
            if (!$searchAssignedSavedReportsResponseMidocoSavedReportItem instanceof \Pggns\MidocoApi\Mis\StructType\MidocoSavedReport) {
                $invalidValues[] = is_object($searchAssignedSavedReportsResponseMidocoSavedReportItem) ? get_class($searchAssignedSavedReportsResponseMidocoSavedReportItem) : sprintf('%s(%s)', gettype($searchAssignedSavedReportsResponseMidocoSavedReportItem), var_export($searchAssignedSavedReportsResponseMidocoSavedReportItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSavedReport property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoSavedReport, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSavedReport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoSavedReport[] $midocoSavedReport
     * @return \Pggns\MidocoApi\Mis\StructType\SearchAssignedSavedReportsResponse
     */
    public function setMidocoSavedReport(?array $midocoSavedReport = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSavedReportArrayErrorMessage = self::validateMidocoSavedReportForArrayConstraintFromSetMidocoSavedReport($midocoSavedReport))) {
            throw new InvalidArgumentException($midocoSavedReportArrayErrorMessage, __LINE__);
        }
        $this->MidocoSavedReport = $midocoSavedReport;
        
        return $this;
    }
    /**
     * Add item to MidocoSavedReport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoSavedReport $item
     * @return \Pggns\MidocoApi\Mis\StructType\SearchAssignedSavedReportsResponse
     */
    public function addToMidocoSavedReport(\Pggns\MidocoApi\Mis\StructType\MidocoSavedReport $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MidocoSavedReport) {
            throw new InvalidArgumentException(sprintf('The MidocoSavedReport property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoSavedReport, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSavedReport[] = $item;
        
        return $this;
    }
}
