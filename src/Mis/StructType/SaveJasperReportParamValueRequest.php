<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveJasperReportParamValueRequest StructType
 * @subpackage Structs
 */
class SaveJasperReportParamValueRequest extends AbstractStructBase
{
    /**
     * The MidocoJasperReportParamValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: system:MidocoJasperReportParamValue
     * @var \Pggns\MidocoApi\Api\Mis\StructType\JasperReportParamValueDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Mis\StructType\JasperReportParamValueDTO $MidocoJasperReportParamValue = null;
    /**
     * Constructor method for SaveJasperReportParamValueRequest
     * @uses SaveJasperReportParamValueRequest::setMidocoJasperReportParamValue()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\JasperReportParamValueDTO $midocoJasperReportParamValue
     */
    public function __construct(?\Pggns\MidocoApi\Api\Mis\StructType\JasperReportParamValueDTO $midocoJasperReportParamValue = null)
    {
        $this
            ->setMidocoJasperReportParamValue($midocoJasperReportParamValue);
    }
    /**
     * Get MidocoJasperReportParamValue value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\JasperReportParamValueDTO|null
     */
    public function getMidocoJasperReportParamValue(): ?\Pggns\MidocoApi\Api\Mis\StructType\JasperReportParamValueDTO
    {
        return $this->MidocoJasperReportParamValue;
    }
    /**
     * Set MidocoJasperReportParamValue value
     * @param \Pggns\MidocoApi\Api\Mis\StructType\JasperReportParamValueDTO $midocoJasperReportParamValue
     * @return \Pggns\MidocoApi\Api\Mis\StructType\SaveJasperReportParamValueRequest
     */
    public function setMidocoJasperReportParamValue(?\Pggns\MidocoApi\Api\Mis\StructType\JasperReportParamValueDTO $midocoJasperReportParamValue = null): self
    {
        $this->MidocoJasperReportParamValue = $midocoJasperReportParamValue;
        
        return $this;
    }
}
