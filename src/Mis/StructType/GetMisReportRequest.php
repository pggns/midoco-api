<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMisReportRequest StructType
 * @subpackage Structs
 */
class GetMisReportRequest extends AbstractStructBase
{
    /**
     * The reportId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $reportId;
    /**
     * Constructor method for GetMisReportRequest
     * @uses GetMisReportRequest::setReportId()
     * @param int $reportId
     */
    public function __construct(int $reportId)
    {
        $this
            ->setReportId($reportId);
    }
    /**
     * Get reportId value
     * @return int
     */
    public function getReportId(): int
    {
        return $this->reportId;
    }
    /**
     * Set reportId value
     * @param int $reportId
     * @return \Pggns\MidocoApi\Mis\StructType\GetMisReportRequest
     */
    public function setReportId(int $reportId): self
    {
        // validation for constraint: int
        if (!is_null($reportId) && !(is_int($reportId) || ctype_digit($reportId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($reportId, true), gettype($reportId)), __LINE__);
        }
        $this->reportId = $reportId;
        
        return $this;
    }
}
