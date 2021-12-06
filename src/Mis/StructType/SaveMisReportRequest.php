<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMisReportRequest StructType
 * @subpackage Structs
 */
class SaveMisReportRequest extends AbstractStructBase
{
    /**
     * The MidocoMisReport
     * Meta information extracted from the WSDL
     * - ref: MidocoMisReport
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReport|null
     */
    protected ?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReport $MidocoMisReport = null;
    /**
     * Constructor method for SaveMisReportRequest
     * @uses SaveMisReportRequest::setMidocoMisReport()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReport $midocoMisReport
     */
    public function __construct(?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReport $midocoMisReport = null)
    {
        $this
            ->setMidocoMisReport($midocoMisReport);
    }
    /**
     * Get MidocoMisReport value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReport|null
     */
    public function getMidocoMisReport(): ?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReport
    {
        return $this->MidocoMisReport;
    }
    /**
     * Set MidocoMisReport value
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReport $midocoMisReport
     * @return \Pggns\MidocoApi\Api\Mis\StructType\SaveMisReportRequest
     */
    public function setMidocoMisReport(?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReport $midocoMisReport = null): self
    {
        $this->MidocoMisReport = $midocoMisReport;
        
        return $this;
    }
}
