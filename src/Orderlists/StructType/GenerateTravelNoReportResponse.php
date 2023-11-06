<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateTravelNoReportResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GenerateTravelNoReportResponse extends AbstractStructBase
{
    /**
     * The reportFilename
     * @var string|null
     */
    protected ?string $reportFilename = null;
    /**
     * The reportContent
     * @var string|null
     */
    protected ?string $reportContent = null;
    /**
     * Constructor method for GenerateTravelNoReportResponse
     * @uses GenerateTravelNoReportResponse::setReportFilename()
     * @uses GenerateTravelNoReportResponse::setReportContent()
     * @param string $reportFilename
     * @param string $reportContent
     */
    public function __construct(?string $reportFilename = null, ?string $reportContent = null)
    {
        $this
            ->setReportFilename($reportFilename)
            ->setReportContent($reportContent);
    }
    /**
     * Get reportFilename value
     * @return string|null
     */
    public function getReportFilename(): ?string
    {
        return $this->reportFilename;
    }
    /**
     * Set reportFilename value
     * @param string $reportFilename
     * @return \Pggns\MidocoApi\Orderlists\StructType\GenerateTravelNoReportResponse
     */
    public function setReportFilename(?string $reportFilename = null): self
    {
        // validation for constraint: string
        if (!is_null($reportFilename) && !is_string($reportFilename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reportFilename, true), gettype($reportFilename)), __LINE__);
        }
        $this->reportFilename = $reportFilename;
        
        return $this;
    }
    /**
     * Get reportContent value
     * @return string|null
     */
    public function getReportContent(): ?string
    {
        return $this->reportContent;
    }
    /**
     * Set reportContent value
     * @param string $reportContent
     * @return \Pggns\MidocoApi\Orderlists\StructType\GenerateTravelNoReportResponse
     */
    public function setReportContent(?string $reportContent = null): self
    {
        // validation for constraint: string
        if (!is_null($reportContent) && !is_string($reportContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reportContent, true), gettype($reportContent)), __LINE__);
        }
        $this->reportContent = $reportContent;
        
        return $this;
    }
}
