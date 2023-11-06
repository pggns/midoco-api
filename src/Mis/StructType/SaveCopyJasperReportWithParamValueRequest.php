<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCopyJasperReportWithParamValueRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCopyJasperReportWithParamValueRequest extends AbstractStructBase
{
    /**
     * The MidocoSavedReportAndParamValue
     * Meta information extracted from the WSDL
     * - ref: system:MidocoSavedReportAndParamValue
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoSavedReportAndParamValue|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MidocoSavedReportAndParamValue $MidocoSavedReportAndParamValue = null;
    /**
     * Constructor method for SaveCopyJasperReportWithParamValueRequest
     * @uses SaveCopyJasperReportWithParamValueRequest::setMidocoSavedReportAndParamValue()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoSavedReportAndParamValue $midocoSavedReportAndParamValue
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\MidocoSavedReportAndParamValue $midocoSavedReportAndParamValue = null)
    {
        $this
            ->setMidocoSavedReportAndParamValue($midocoSavedReportAndParamValue);
    }
    /**
     * Get MidocoSavedReportAndParamValue value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoSavedReportAndParamValue|null
     */
    public function getMidocoSavedReportAndParamValue(): ?\Pggns\MidocoApi\Mis\StructType\MidocoSavedReportAndParamValue
    {
        return $this->MidocoSavedReportAndParamValue;
    }
    /**
     * Set MidocoSavedReportAndParamValue value
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoSavedReportAndParamValue $midocoSavedReportAndParamValue
     * @return \Pggns\MidocoApi\Mis\StructType\SaveCopyJasperReportWithParamValueRequest
     */
    public function setMidocoSavedReportAndParamValue(?\Pggns\MidocoApi\Mis\StructType\MidocoSavedReportAndParamValue $midocoSavedReportAndParamValue = null): self
    {
        $this->MidocoSavedReportAndParamValue = $midocoSavedReportAndParamValue;
        
        return $this;
    }
}
