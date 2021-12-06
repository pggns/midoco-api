<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoJasperReportParamForExec StructType
 * @subpackage Structs
 */
class MidocoJasperReportParamForExec extends AbstractStructBase
{
    /**
     * The MidocoJasperReportParam
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoJasperReportParam
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoJasperReportParam|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoJasperReportParam $MidocoJasperReportParam = null;
    /**
     * The MidocoJasperParameter
     * Meta information extracted from the WSDL
     * - ref: MidocoJasperParameter
     * @var \Pggns\MidocoApi\Crm\StructType\JasperParameterDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\JasperParameterDTO $MidocoJasperParameter = null;
    /**
     * Constructor method for MidocoJasperReportParamForExec
     * @uses MidocoJasperReportParamForExec::setMidocoJasperReportParam()
     * @uses MidocoJasperReportParamForExec::setMidocoJasperParameter()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoJasperReportParam $midocoJasperReportParam
     * @param \Pggns\MidocoApi\Crm\StructType\JasperParameterDTO $midocoJasperParameter
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoJasperReportParam $midocoJasperReportParam = null, ?\Pggns\MidocoApi\Crm\StructType\JasperParameterDTO $midocoJasperParameter = null)
    {
        $this
            ->setMidocoJasperReportParam($midocoJasperReportParam)
            ->setMidocoJasperParameter($midocoJasperParameter);
    }
    /**
     * Get MidocoJasperReportParam value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoJasperReportParam|null
     */
    public function getMidocoJasperReportParam(): ?\Pggns\MidocoApi\Crm\StructType\MidocoJasperReportParam
    {
        return $this->MidocoJasperReportParam;
    }
    /**
     * Set MidocoJasperReportParam value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoJasperReportParam $midocoJasperReportParam
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoJasperReportParamForExec
     */
    public function setMidocoJasperReportParam(?\Pggns\MidocoApi\Crm\StructType\MidocoJasperReportParam $midocoJasperReportParam = null): self
    {
        $this->MidocoJasperReportParam = $midocoJasperReportParam;
        
        return $this;
    }
    /**
     * Get MidocoJasperParameter value
     * @return \Pggns\MidocoApi\Crm\StructType\JasperParameterDTO|null
     */
    public function getMidocoJasperParameter(): ?\Pggns\MidocoApi\Crm\StructType\JasperParameterDTO
    {
        return $this->MidocoJasperParameter;
    }
    /**
     * Set MidocoJasperParameter value
     * @param \Pggns\MidocoApi\Crm\StructType\JasperParameterDTO $midocoJasperParameter
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoJasperReportParamForExec
     */
    public function setMidocoJasperParameter(?\Pggns\MidocoApi\Crm\StructType\JasperParameterDTO $midocoJasperParameter = null): self
    {
        $this->MidocoJasperParameter = $midocoJasperParameter;
        
        return $this;
    }
}
