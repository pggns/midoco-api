<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

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
     * @var \Pggns\MidocoApi\Mis\StructType\JasperReportParamValueDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\JasperReportParamValueDTO $MidocoJasperReportParamValue = null;
    /**
     * The MidocoJasperParameter
     * Meta information extracted from the WSDL
     * - ref: MidocoJasperParameter
     * @var \Pggns\MidocoApi\Mis\StructType\JasperParameterDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\JasperParameterDTO $MidocoJasperParameter = null;
    /**
     * The MidocoJasperReportParam
     * Meta information extracted from the WSDL
     * - ref: MidocoJasperReportParam
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoJasperReportParam|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MidocoJasperReportParam $MidocoJasperReportParam = null;
    /**
     * Constructor method for JasperReportType
     * @uses JasperReportType::setMidocoJasperReportParamValue()
     * @uses JasperReportType::setMidocoJasperParameter()
     * @uses JasperReportType::setMidocoJasperReportParam()
     * @param \Pggns\MidocoApi\Mis\StructType\JasperReportParamValueDTO $midocoJasperReportParamValue
     * @param \Pggns\MidocoApi\Mis\StructType\JasperParameterDTO $midocoJasperParameter
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoJasperReportParam $midocoJasperReportParam
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\JasperReportParamValueDTO $midocoJasperReportParamValue = null, ?\Pggns\MidocoApi\Mis\StructType\JasperParameterDTO $midocoJasperParameter = null, ?\Pggns\MidocoApi\Mis\StructType\MidocoJasperReportParam $midocoJasperReportParam = null)
    {
        $this
            ->setMidocoJasperReportParamValue($midocoJasperReportParamValue)
            ->setMidocoJasperParameter($midocoJasperParameter)
            ->setMidocoJasperReportParam($midocoJasperReportParam);
    }
    /**
     * Get MidocoJasperReportParamValue value
     * @return \Pggns\MidocoApi\Mis\StructType\JasperReportParamValueDTO|null
     */
    public function getMidocoJasperReportParamValue(): ?\Pggns\MidocoApi\Mis\StructType\JasperReportParamValueDTO
    {
        return $this->MidocoJasperReportParamValue;
    }
    /**
     * Set MidocoJasperReportParamValue value
     * @param \Pggns\MidocoApi\Mis\StructType\JasperReportParamValueDTO $midocoJasperReportParamValue
     * @return \Pggns\MidocoApi\Mis\StructType\JasperReportType
     */
    public function setMidocoJasperReportParamValue(?\Pggns\MidocoApi\Mis\StructType\JasperReportParamValueDTO $midocoJasperReportParamValue = null): self
    {
        $this->MidocoJasperReportParamValue = $midocoJasperReportParamValue;
        
        return $this;
    }
    /**
     * Get MidocoJasperParameter value
     * @return \Pggns\MidocoApi\Mis\StructType\JasperParameterDTO|null
     */
    public function getMidocoJasperParameter(): ?\Pggns\MidocoApi\Mis\StructType\JasperParameterDTO
    {
        return $this->MidocoJasperParameter;
    }
    /**
     * Set MidocoJasperParameter value
     * @param \Pggns\MidocoApi\Mis\StructType\JasperParameterDTO $midocoJasperParameter
     * @return \Pggns\MidocoApi\Mis\StructType\JasperReportType
     */
    public function setMidocoJasperParameter(?\Pggns\MidocoApi\Mis\StructType\JasperParameterDTO $midocoJasperParameter = null): self
    {
        $this->MidocoJasperParameter = $midocoJasperParameter;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Mis\StructType\JasperReportType
     */
    public function setMidocoJasperReportParam(?\Pggns\MidocoApi\Mis\StructType\MidocoJasperReportParam $midocoJasperReportParam = null): self
    {
        $this->MidocoJasperReportParam = $midocoJasperReportParam;
        
        return $this;
    }
}
