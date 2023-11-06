<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMisReportRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchMisReportRequest extends AbstractStructBase
{
    /**
     * The MidocoMisReport
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoMisReport
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoMisReport|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MidocoMisReport $MidocoMisReport = null;
    /**
     * The cubeName
     * @var string|null
     */
    protected ?string $cubeName = null;
    /**
     * Constructor method for SearchMisReportRequest
     * @uses SearchMisReportRequest::setMidocoMisReport()
     * @uses SearchMisReportRequest::setCubeName()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoMisReport $midocoMisReport
     * @param string $cubeName
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\MidocoMisReport $midocoMisReport = null, ?string $cubeName = null)
    {
        $this
            ->setMidocoMisReport($midocoMisReport)
            ->setCubeName($cubeName);
    }
    /**
     * Get MidocoMisReport value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoMisReport|null
     */
    public function getMidocoMisReport(): ?\Pggns\MidocoApi\Mis\StructType\MidocoMisReport
    {
        return $this->MidocoMisReport;
    }
    /**
     * Set MidocoMisReport value
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoMisReport $midocoMisReport
     * @return \Pggns\MidocoApi\Mis\StructType\SearchMisReportRequest
     */
    public function setMidocoMisReport(?\Pggns\MidocoApi\Mis\StructType\MidocoMisReport $midocoMisReport = null): self
    {
        $this->MidocoMisReport = $midocoMisReport;
        
        return $this;
    }
    /**
     * Get cubeName value
     * @return string|null
     */
    public function getCubeName(): ?string
    {
        return $this->cubeName;
    }
    /**
     * Set cubeName value
     * @param string $cubeName
     * @return \Pggns\MidocoApi\Mis\StructType\SearchMisReportRequest
     */
    public function setCubeName(?string $cubeName = null): self
    {
        // validation for constraint: string
        if (!is_null($cubeName) && !is_string($cubeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cubeName, true), gettype($cubeName)), __LINE__);
        }
        $this->cubeName = $cubeName;
        
        return $this;
    }
}
