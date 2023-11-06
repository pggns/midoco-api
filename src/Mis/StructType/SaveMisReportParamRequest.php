<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMisReportParamRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMisReportParamRequest extends AbstractStructBase
{
    /**
     * The MidocoMisReportParam
     * Meta information extracted from the WSDL
     * - ref: MidocoMisReportParam
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoMisReportParam|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MidocoMisReportParam $MidocoMisReportParam = null;
    /**
     * Constructor method for SaveMisReportParamRequest
     * @uses SaveMisReportParamRequest::setMidocoMisReportParam()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoMisReportParam $midocoMisReportParam
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\MidocoMisReportParam $midocoMisReportParam = null)
    {
        $this
            ->setMidocoMisReportParam($midocoMisReportParam);
    }
    /**
     * Get MidocoMisReportParam value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoMisReportParam|null
     */
    public function getMidocoMisReportParam(): ?\Pggns\MidocoApi\Mis\StructType\MidocoMisReportParam
    {
        return $this->MidocoMisReportParam;
    }
    /**
     * Set MidocoMisReportParam value
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoMisReportParam $midocoMisReportParam
     * @return \Pggns\MidocoApi\Mis\StructType\SaveMisReportParamRequest
     */
    public function setMidocoMisReportParam(?\Pggns\MidocoApi\Mis\StructType\MidocoMisReportParam $midocoMisReportParam = null): self
    {
        $this->MidocoMisReportParam = $midocoMisReportParam;
        
        return $this;
    }
}
