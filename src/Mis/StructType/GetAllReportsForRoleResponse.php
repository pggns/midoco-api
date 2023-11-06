<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllReportsForRoleResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getAllReportsForRole --- returns all the reports for a role id and org unit
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAllReportsForRoleResponse extends AbstractStructBase
{
    /**
     * The MidocoMisReport
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMisReport
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoMisReport[]
     */
    protected ?array $MidocoMisReport = null;
    /**
     * Constructor method for GetAllReportsForRoleResponse
     * @uses GetAllReportsForRoleResponse::setMidocoMisReport()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoMisReport[] $midocoMisReport
     */
    public function __construct(?array $midocoMisReport = null)
    {
        $this
            ->setMidocoMisReport($midocoMisReport);
    }
    /**
     * Get MidocoMisReport value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoMisReport[]
     */
    public function getMidocoMisReport(): ?array
    {
        return $this->MidocoMisReport;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMisReport method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMisReport method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMisReportForArrayConstraintFromSetMidocoMisReport(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAllReportsForRoleResponseMidocoMisReportItem) {
            // validation for constraint: itemType
            if (!$getAllReportsForRoleResponseMidocoMisReportItem instanceof \Pggns\MidocoApi\Mis\StructType\MidocoMisReport) {
                $invalidValues[] = is_object($getAllReportsForRoleResponseMidocoMisReportItem) ? get_class($getAllReportsForRoleResponseMidocoMisReportItem) : sprintf('%s(%s)', gettype($getAllReportsForRoleResponseMidocoMisReportItem), var_export($getAllReportsForRoleResponseMidocoMisReportItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMisReport property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoMisReport, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMisReport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoMisReport[] $midocoMisReport
     * @return \Pggns\MidocoApi\Mis\StructType\GetAllReportsForRoleResponse
     */
    public function setMidocoMisReport(?array $midocoMisReport = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMisReportArrayErrorMessage = self::validateMidocoMisReportForArrayConstraintFromSetMidocoMisReport($midocoMisReport))) {
            throw new InvalidArgumentException($midocoMisReportArrayErrorMessage, __LINE__);
        }
        $this->MidocoMisReport = $midocoMisReport;
        
        return $this;
    }
    /**
     * Add item to MidocoMisReport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoMisReport $item
     * @return \Pggns\MidocoApi\Mis\StructType\GetAllReportsForRoleResponse
     */
    public function addToMidocoMisReport(\Pggns\MidocoApi\Mis\StructType\MidocoMisReport $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MidocoMisReport) {
            throw new InvalidArgumentException(sprintf('The MidocoMisReport property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoMisReport, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMisReport[] = $item;
        
        return $this;
    }
}
