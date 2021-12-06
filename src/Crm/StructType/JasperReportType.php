<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JasperReportType StructType
 * @subpackage Structs
 */
class JasperReportType extends AbstractStructBase
{
    /**
     * The MidocoJasperReportParamValue
     * Meta information extracted from the WSDL
     * - ref: MidocoJasperReportParamValue
     * @var \Pggns\MidocoApi\Crm\StructType\JasperReportParamValueDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\JasperReportParamValueDTO $MidocoJasperReportParamValue = null;
    /**
     * The MidocoJasperParameter
     * Meta information extracted from the WSDL
     * - ref: MidocoJasperParameter
     * @var \Pggns\MidocoApi\Crm\StructType\JasperParameterDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\JasperParameterDTO $MidocoJasperParameter = null;
    /**
     * The MidocoJasperReportParam
     * Meta information extracted from the WSDL
     * - ref: MidocoJasperReportParam
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoJasperReportParam|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoJasperReportParam $MidocoJasperReportParam = null;
    /**
     * Constructor method for JasperReportType
     * @uses JasperReportType::setMidocoJasperReportParamValue()
     * @uses JasperReportType::setMidocoJasperParameter()
     * @uses JasperReportType::setMidocoJasperReportParam()
     * @param \Pggns\MidocoApi\Crm\StructType\JasperReportParamValueDTO $midocoJasperReportParamValue
     * @param \Pggns\MidocoApi\Crm\StructType\JasperParameterDTO $midocoJasperParameter
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoJasperReportParam $midocoJasperReportParam
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\JasperReportParamValueDTO $midocoJasperReportParamValue = null, ?\Pggns\MidocoApi\Crm\StructType\JasperParameterDTO $midocoJasperParameter = null, ?\Pggns\MidocoApi\Crm\StructType\MidocoJasperReportParam $midocoJasperReportParam = null)
    {
        $this
            ->setMidocoJasperReportParamValue($midocoJasperReportParamValue)
            ->setMidocoJasperParameter($midocoJasperParameter)
            ->setMidocoJasperReportParam($midocoJasperReportParam);
    }
    /**
     * Get MidocoJasperReportParamValue value
     * @return \Pggns\MidocoApi\Crm\StructType\JasperReportParamValueDTO|null
     */
    public function getMidocoJasperReportParamValue(): ?\Pggns\MidocoApi\Crm\StructType\JasperReportParamValueDTO
    {
        return $this->MidocoJasperReportParamValue;
    }
    /**
     * Set MidocoJasperReportParamValue value
     * @param \Pggns\MidocoApi\Crm\StructType\JasperReportParamValueDTO $midocoJasperReportParamValue
     * @return \Pggns\MidocoApi\Crm\StructType\JasperReportType
     */
    public function setMidocoJasperReportParamValue(?\Pggns\MidocoApi\Crm\StructType\JasperReportParamValueDTO $midocoJasperReportParamValue = null): self
    {
        $this->MidocoJasperReportParamValue = $midocoJasperReportParamValue;
        
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
     * @return \Pggns\MidocoApi\Crm\StructType\JasperReportType
     */
    public function setMidocoJasperParameter(?\Pggns\MidocoApi\Crm\StructType\JasperParameterDTO $midocoJasperParameter = null): self
    {
        $this->MidocoJasperParameter = $midocoJasperParameter;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Crm\StructType\JasperReportType
     */
    public function setMidocoJasperReportParam(?\Pggns\MidocoApi\Crm\StructType\MidocoJasperReportParam $midocoJasperReportParam = null): self
    {
        $this->MidocoJasperReportParam = $midocoJasperReportParam;
        
        return $this;
    }
}
