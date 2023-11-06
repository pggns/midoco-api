<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetJasperReportParamResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getJasperReportParam --- return the parameter for the given param id and report id
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetJasperReportParamResponse extends AbstractStructBase
{
    /**
     * The MidocoJasperReportParam
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: system:MidocoJasperReportParam
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoJasperReportParam|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MidocoJasperReportParam $MidocoJasperReportParam = null;
    /**
     * Constructor method for GetJasperReportParamResponse
     * @uses GetJasperReportParamResponse::setMidocoJasperReportParam()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoJasperReportParam $midocoJasperReportParam
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\MidocoJasperReportParam $midocoJasperReportParam = null)
    {
        $this
            ->setMidocoJasperReportParam($midocoJasperReportParam);
    }
    /**
     * Get MidocoJasperReportParam value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoJasperReportParam|null
     */
    public function getMidocoJasperReportParam(): ?\Pggns\MidocoApi\Mis\StructType\MidocoJasperReportParam
    {
        return $this->MidocoJasperReportParam;
    }
    /**
     * Set MidocoJasperReportParam value
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoJasperReportParam $midocoJasperReportParam
     * @return \Pggns\MidocoApi\Mis\StructType\GetJasperReportParamResponse
     */
    public function setMidocoJasperReportParam(?\Pggns\MidocoApi\Mis\StructType\MidocoJasperReportParam $midocoJasperReportParam = null): self
    {
        $this->MidocoJasperReportParam = $midocoJasperReportParam;
        
        return $this;
    }
}
