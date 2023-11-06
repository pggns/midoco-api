<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMisReportParamRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMisReportParamRequest extends AbstractStructBase
{
    /**
     * The reportId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $reportId;
    /**
     * The parameterId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $parameterId;
    /**
     * Constructor method for GetMisReportParamRequest
     * @uses GetMisReportParamRequest::setReportId()
     * @uses GetMisReportParamRequest::setParameterId()
     * @param int $reportId
     * @param int $parameterId
     */
    public function __construct(int $reportId, int $parameterId)
    {
        $this
            ->setReportId($reportId)
            ->setParameterId($parameterId);
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
     * @return \Pggns\MidocoApi\Mis\StructType\GetMisReportParamRequest
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
    /**
     * Get parameterId value
     * @return int
     */
    public function getParameterId(): int
    {
        return $this->parameterId;
    }
    /**
     * Set parameterId value
     * @param int $parameterId
     * @return \Pggns\MidocoApi\Mis\StructType\GetMisReportParamRequest
     */
    public function setParameterId(int $parameterId): self
    {
        // validation for constraint: int
        if (!is_null($parameterId) && !(is_int($parameterId) || ctype_digit($parameterId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parameterId, true), gettype($parameterId)), __LINE__);
        }
        $this->parameterId = $parameterId;
        
        return $this;
    }
}
