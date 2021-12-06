<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchAssignedSavedReportsRequest StructType
 * @subpackage Structs
 */
class SearchAssignedSavedReportsRequest extends AbstractStructBase
{
    /**
     * The MidocoJasperReport
     * Meta information extracted from the WSDL
     * - ref: system:MidocoJasperReport
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoJasperReport|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MidocoJasperReport $MidocoJasperReport = null;
    /**
     * The reportType
     * @var string|null
     */
    protected ?string $reportType = null;
    /**
     * Constructor method for SearchAssignedSavedReportsRequest
     * @uses SearchAssignedSavedReportsRequest::setMidocoJasperReport()
     * @uses SearchAssignedSavedReportsRequest::setReportType()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoJasperReport $midocoJasperReport
     * @param string $reportType
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\MidocoJasperReport $midocoJasperReport = null, ?string $reportType = null)
    {
        $this
            ->setMidocoJasperReport($midocoJasperReport)
            ->setReportType($reportType);
    }
    /**
     * Get MidocoJasperReport value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoJasperReport|null
     */
    public function getMidocoJasperReport(): ?\Pggns\MidocoApi\Mis\StructType\MidocoJasperReport
    {
        return $this->MidocoJasperReport;
    }
    /**
     * Set MidocoJasperReport value
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoJasperReport $midocoJasperReport
     * @return \Pggns\MidocoApi\Mis\StructType\SearchAssignedSavedReportsRequest
     */
    public function setMidocoJasperReport(?\Pggns\MidocoApi\Mis\StructType\MidocoJasperReport $midocoJasperReport = null): self
    {
        $this->MidocoJasperReport = $midocoJasperReport;
        
        return $this;
    }
    /**
     * Get reportType value
     * @return string|null
     */
    public function getReportType(): ?string
    {
        return $this->reportType;
    }
    /**
     * Set reportType value
     * @param string $reportType
     * @return \Pggns\MidocoApi\Mis\StructType\SearchAssignedSavedReportsRequest
     */
    public function setReportType(?string $reportType = null): self
    {
        // validation for constraint: string
        if (!is_null($reportType) && !is_string($reportType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reportType, true), gettype($reportType)), __LINE__);
        }
        $this->reportType = $reportType;
        
        return $this;
    }
}
