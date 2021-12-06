<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSavedReportRequest StructType
 * @subpackage Structs
 */
class GetSavedReportRequest extends AbstractStructBase
{
    /**
     * The MidocoSavedReport
     * Meta information extracted from the WSDL
     * - ref: system:MidocoSavedReport
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoSavedReport|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MidocoSavedReport $MidocoSavedReport = null;
    /**
     * Constructor method for GetSavedReportRequest
     * @uses GetSavedReportRequest::setMidocoSavedReport()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoSavedReport $midocoSavedReport
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\MidocoSavedReport $midocoSavedReport = null)
    {
        $this
            ->setMidocoSavedReport($midocoSavedReport);
    }
    /**
     * Get MidocoSavedReport value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoSavedReport|null
     */
    public function getMidocoSavedReport(): ?\Pggns\MidocoApi\Mis\StructType\MidocoSavedReport
    {
        return $this->MidocoSavedReport;
    }
    /**
     * Set MidocoSavedReport value
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoSavedReport $midocoSavedReport
     * @return \Pggns\MidocoApi\Mis\StructType\GetSavedReportRequest
     */
    public function setMidocoSavedReport(?\Pggns\MidocoApi\Mis\StructType\MidocoSavedReport $midocoSavedReport = null): self
    {
        $this->MidocoSavedReport = $midocoSavedReport;
        
        return $this;
    }
}
