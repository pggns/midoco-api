<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMisReportResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveMisReport --- saves a given mis report
 * @subpackage Structs
 */
class SaveMisReportResponse extends AbstractStructBase
{
    /**
     * The reportId
     * @var int|null
     */
    protected ?int $reportId = null;
    /**
     * Constructor method for SaveMisReportResponse
     * @uses SaveMisReportResponse::setReportId()
     * @param int $reportId
     */
    public function __construct(?int $reportId = null)
    {
        $this
            ->setReportId($reportId);
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
     * @return \Pggns\MidocoApi\Mis\StructType\SaveMisReportResponse
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
