<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetJasperReportParamRequest StructType
 * @subpackage Structs
 */
class GetJasperReportParamRequest extends AbstractStructBase
{
    /**
     * The reportId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $reportId;
    /**
     * The paramId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $paramId;
    /**
     * The versionId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $versionId;
    /**
     * Constructor method for GetJasperReportParamRequest
     * @uses GetJasperReportParamRequest::setReportId()
     * @uses GetJasperReportParamRequest::setParamId()
     * @uses GetJasperReportParamRequest::setVersionId()
     * @param int $reportId
     * @param int $paramId
     * @param int $versionId
     */
    public function __construct(int $reportId, int $paramId, int $versionId)
    {
        $this
            ->setReportId($reportId)
            ->setParamId($paramId)
            ->setVersionId($versionId);
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
     * @return \Pggns\MidocoApi\Mis\StructType\GetJasperReportParamRequest
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
     * Get paramId value
     * @return int
     */
    public function getParamId(): int
    {
        return $this->paramId;
    }
    /**
     * Set paramId value
     * @param int $paramId
     * @return \Pggns\MidocoApi\Mis\StructType\GetJasperReportParamRequest
     */
    public function setParamId(int $paramId): self
    {
        // validation for constraint: int
        if (!is_null($paramId) && !(is_int($paramId) || ctype_digit($paramId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paramId, true), gettype($paramId)), __LINE__);
        }
        $this->paramId = $paramId;
        
        return $this;
    }
    /**
     * Get versionId value
     * @return int
     */
    public function getVersionId(): int
    {
        return $this->versionId;
    }
    /**
     * Set versionId value
     * @param int $versionId
     * @return \Pggns\MidocoApi\Mis\StructType\GetJasperReportParamRequest
     */
    public function setVersionId(int $versionId): self
    {
        // validation for constraint: int
        if (!is_null($versionId) && !(is_int($versionId) || ctype_digit($versionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($versionId, true), gettype($versionId)), __LINE__);
        }
        $this->versionId = $versionId;
        
        return $this;
    }
}
