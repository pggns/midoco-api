<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMisReportParamResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveMisReportParam --- saves the given report parameter
 * @subpackage Structs
 */
class SaveMisReportParamResponse extends AbstractStructBase
{
    /**
     * The parameterId
     * @var int|null
     */
    protected ?int $parameterId = null;
    /**
     * The reportId
     * @var int|null
     */
    protected ?int $reportId = null;
    /**
     * Constructor method for SaveMisReportParamResponse
     * @uses SaveMisReportParamResponse::setParameterId()
     * @uses SaveMisReportParamResponse::setReportId()
     * @param int $parameterId
     * @param int $reportId
     */
    public function __construct(?int $parameterId = null, ?int $reportId = null)
    {
        $this
            ->setParameterId($parameterId)
            ->setReportId($reportId);
    }
    /**
     * Get parameterId value
     * @return int|null
     */
    public function getParameterId(): ?int
    {
        return $this->parameterId;
    }
    /**
     * Set parameterId value
     * @param int $parameterId
     * @return \Pggns\MidocoApi\Mis\StructType\SaveMisReportParamResponse
     */
    public function setParameterId(?int $parameterId = null): self
    {
        // validation for constraint: int
        if (!is_null($parameterId) && !(is_int($parameterId) || ctype_digit($parameterId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parameterId, true), gettype($parameterId)), __LINE__);
        }
        $this->parameterId = $parameterId;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\SaveMisReportParamResponse
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
