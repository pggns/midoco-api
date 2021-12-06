<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSavedReportRequest StructType
 * @subpackage Structs
 */
class DeleteSavedReportRequest extends AbstractStructBase
{
    /**
     * The versionId
     * @var int|null
     */
    protected ?int $versionId = null;
    /**
     * The reportId
     * @var int|null
     */
    protected ?int $reportId = null;
    /**
     * Constructor method for DeleteSavedReportRequest
     * @uses DeleteSavedReportRequest::setVersionId()
     * @uses DeleteSavedReportRequest::setReportId()
     * @param int $versionId
     * @param int $reportId
     */
    public function __construct(?int $versionId = null, ?int $reportId = null)
    {
        $this
            ->setVersionId($versionId)
            ->setReportId($reportId);
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
     * @return \Pggns\MidocoApi\Mis\StructType\DeleteSavedReportRequest
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
     * @return \Pggns\MidocoApi\Mis\StructType\DeleteSavedReportRequest
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
