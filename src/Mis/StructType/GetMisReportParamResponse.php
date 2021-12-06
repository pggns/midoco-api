<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMisReportParamResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getMisReportParam --- returns the mis report parameter with the given key
 * @subpackage Structs
 */
class GetMisReportParamResponse extends AbstractStructBase
{
    /**
     * The MidocoMisReportParam
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoMisReportParam
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReportParam|null
     */
    protected ?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReportParam $MidocoMisReportParam = null;
    /**
     * Constructor method for GetMisReportParamResponse
     * @uses GetMisReportParamResponse::setMidocoMisReportParam()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReportParam $midocoMisReportParam
     */
    public function __construct(?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReportParam $midocoMisReportParam = null)
    {
        $this
            ->setMidocoMisReportParam($midocoMisReportParam);
    }
    /**
     * Get MidocoMisReportParam value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReportParam|null
     */
    public function getMidocoMisReportParam(): ?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReportParam
    {
        return $this->MidocoMisReportParam;
    }
    /**
     * Set MidocoMisReportParam value
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReportParam $midocoMisReportParam
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetMisReportParamResponse
     */
    public function setMidocoMisReportParam(?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMisReportParam $midocoMisReportParam = null): self
    {
        $this->MidocoMisReportParam = $midocoMisReportParam;
        
        return $this;
    }
}
