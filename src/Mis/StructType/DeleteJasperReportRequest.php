<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteJasperReportRequest StructType
 * @subpackage Structs
 */
class DeleteJasperReportRequest extends AbstractStructBase
{
    /**
     * The reportId
     * @var int|null
     */
    protected ?int $reportId = null;
    /**
     * The versionId
     * @var int|null
     */
    protected ?int $versionId = null;
    /**
     * Constructor method for DeleteJasperReportRequest
     * @uses DeleteJasperReportRequest::setReportId()
     * @uses DeleteJasperReportRequest::setVersionId()
     * @param int $reportId
     * @param int $versionId
     */
    public function __construct(?int $reportId = null, ?int $versionId = null)
    {
        $this
            ->setReportId($reportId)
            ->setVersionId($versionId);
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
     * @return \Pggns\MidocoApi\Mis\StructType\DeleteJasperReportRequest
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
    /**
     * Get versionId value
     * @return int|null
     */
    public function getVersionId(): ?int
    {
        return $this->versionId;
    }
    /**
     * Set versionId value
     * @param int $versionId
     * @return \Pggns\MidocoApi\Mis\StructType\DeleteJasperReportRequest
     */
    public function setVersionId(?int $versionId = null): self
    {
        // validation for constraint: int
        if (!is_null($versionId) && !(is_int($versionId) || ctype_digit($versionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($versionId, true), gettype($versionId)), __LINE__);
        }
        $this->versionId = $versionId;
        
        return $this;
    }
}
