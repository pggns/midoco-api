<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveReportVersionRequest StructType
 * @subpackage Structs
 */
class SaveReportVersionRequest extends AbstractStructBase
{
    /**
     * The MidocoSavedJasperReport
     * Meta information extracted from the WSDL
     * - ref: MidocoSavedJasperReport
     * @var \Pggns\MidocoApi\Mis\StructType\SavedReportDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\SavedReportDTO $MidocoSavedJasperReport = null;
    /**
     * The reportId
     * @var int|null
     */
    protected ?int $reportId = null;
    /**
     * Constructor method for SaveReportVersionRequest
     * @uses SaveReportVersionRequest::setMidocoSavedJasperReport()
     * @uses SaveReportVersionRequest::setReportId()
     * @param \Pggns\MidocoApi\Mis\StructType\SavedReportDTO $midocoSavedJasperReport
     * @param int $reportId
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\SavedReportDTO $midocoSavedJasperReport = null, ?int $reportId = null)
    {
        $this
            ->setMidocoSavedJasperReport($midocoSavedJasperReport)
            ->setReportId($reportId);
    }
    /**
     * Get MidocoSavedJasperReport value
     * @return \Pggns\MidocoApi\Mis\StructType\SavedReportDTO|null
     */
    public function getMidocoSavedJasperReport(): ?\Pggns\MidocoApi\Mis\StructType\SavedReportDTO
    {
        return $this->MidocoSavedJasperReport;
    }
    /**
     * Set MidocoSavedJasperReport value
     * @param \Pggns\MidocoApi\Mis\StructType\SavedReportDTO $midocoSavedJasperReport
     * @return \Pggns\MidocoApi\Mis\StructType\SaveReportVersionRequest
     */
    public function setMidocoSavedJasperReport(?\Pggns\MidocoApi\Mis\StructType\SavedReportDTO $midocoSavedJasperReport = null): self
    {
        $this->MidocoSavedJasperReport = $midocoSavedJasperReport;
        
        return $this;
    }
    /**
     * Get reportId value
     * @return int|null
     */
    public function getReportId(): ?int
    {
        return $this->reportId;
    }
    /**
     * Set reportId value
     * @param int $reportId
     * @return \Pggns\MidocoApi\Mis\StructType\SaveReportVersionRequest
     */
    public function setReportId(?int $reportId = null): self
    {
        // validation for constraint: int
        if (!is_null($reportId) && !(is_int($reportId) || ctype_digit($reportId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($reportId, true), gettype($reportId)), __LINE__);
        }
        $this->reportId = $reportId;
        
        return $this;
    }
}
