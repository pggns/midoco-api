<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMisReportRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMisReportRequest extends AbstractStructBase
{
    /**
     * The MidocoMisReport
     * Meta information extracted from the WSDL
     * - ref: MidocoMisReport
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoMisReport|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MidocoMisReport $MidocoMisReport = null;
    /**
     * Constructor method for SaveMisReportRequest
     * @uses SaveMisReportRequest::setMidocoMisReport()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoMisReport $midocoMisReport
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\MidocoMisReport $midocoMisReport = null)
    {
        $this
            ->setMidocoMisReport($midocoMisReport);
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
     * @return \Pggns\MidocoApi\Mis\StructType\SaveMisReportRequest
     */
    public function setMidocoMisReport(?\Pggns\MidocoApi\Mis\StructType\MidocoMisReport $midocoMisReport = null): self
    {
        $this->MidocoMisReport = $midocoMisReport;
        
        return $this;
    }
}
