<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\CrmSD\StructType\JasperReportParamValueDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\JasperReportParamValueDTO $MidocoJasperReportParamValue = null;
    /**
     * The MidocoJasperParameter
     * Meta information extracted from the WSDL
     * - ref: MidocoJasperParameter
     * @var \Pggns\MidocoApi\CrmSD\StructType\JasperParameterDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\JasperParameterDTO $MidocoJasperParameter = null;
    /**
     * The MidocoJasperReportParam
     * Meta information extracted from the WSDL
     * - ref: MidocoJasperReportParam
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoJasperReportParam|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoJasperReportParam $MidocoJasperReportParam = null;
    /**
     * Constructor method for JasperReportType
     * @uses JasperReportType::setMidocoJasperReportParamValue()
     * @uses JasperReportType::setMidocoJasperParameter()
     * @uses JasperReportType::setMidocoJasperReportParam()
     * @param \Pggns\MidocoApi\CrmSD\StructType\JasperReportParamValueDTO $midocoJasperReportParamValue
     * @param \Pggns\MidocoApi\CrmSD\StructType\JasperParameterDTO $midocoJasperParameter
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoJasperReportParam $midocoJasperReportParam
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\JasperReportParamValueDTO $midocoJasperReportParamValue = null, ?\Pggns\MidocoApi\CrmSD\StructType\JasperParameterDTO $midocoJasperParameter = null, ?\Pggns\MidocoApi\CrmSD\StructType\MidocoJasperReportParam $midocoJasperReportParam = null)
    {
        $this
            ->setMidocoJasperReportParamValue($midocoJasperReportParamValue)
            ->setMidocoJasperParameter($midocoJasperParameter)
            ->setMidocoJasperReportParam($midocoJasperReportParam);
    }
    /**
     * Get MidocoJasperReportParamValue value
     * @return \Pggns\MidocoApi\CrmSD\StructType\JasperReportParamValueDTO|null
     */
    public function getMidocoJasperReportParamValue(): ?\Pggns\MidocoApi\CrmSD\StructType\JasperReportParamValueDTO
    {
        return $this->MidocoJasperReportParamValue;
    }
    /**
     * Set MidocoJasperReportParamValue value
     * @param \Pggns\MidocoApi\CrmSD\StructType\JasperReportParamValueDTO $midocoJasperReportParamValue
     * @return \Pggns\MidocoApi\CrmSD\StructType\JasperReportType
     */
    public function setMidocoJasperReportParamValue(?\Pggns\MidocoApi\CrmSD\StructType\JasperReportParamValueDTO $midocoJasperReportParamValue = null): self
    {
        $this->MidocoJasperReportParamValue = $midocoJasperReportParamValue;
        
        return $this;
    }
    /**
     * Get MidocoJasperParameter value
     * @return \Pggns\MidocoApi\CrmSD\StructType\JasperParameterDTO|null
     */
    public function getMidocoJasperParameter(): ?\Pggns\MidocoApi\CrmSD\StructType\JasperParameterDTO
    {
        return $this->MidocoJasperParameter;
    }
    /**
     * Set MidocoJasperParameter value
     * @param \Pggns\MidocoApi\CrmSD\StructType\JasperParameterDTO $midocoJasperParameter
     * @return \Pggns\MidocoApi\CrmSD\StructType\JasperReportType
     */
    public function setMidocoJasperParameter(?\Pggns\MidocoApi\CrmSD\StructType\JasperParameterDTO $midocoJasperParameter = null): self
    {
        $this->MidocoJasperParameter = $midocoJasperParameter;
        
        return $this;
    }
    /**
     * Get MidocoJasperReportParam value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoJasperReportParam|null
     */
    public function getMidocoJasperReportParam(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoJasperReportParam
    {
        return $this->MidocoJasperReportParam;
    }
    /**
     * Set MidocoJasperReportParam value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoJasperReportParam $midocoJasperReportParam
     * @return \Pggns\MidocoApi\CrmSD\StructType\JasperReportType
     */
    public function setMidocoJasperReportParam(?\Pggns\MidocoApi\CrmSD\StructType\MidocoJasperReportParam $midocoJasperReportParam = null): self
    {
        $this->MidocoJasperReportParam = $midocoJasperReportParam;
        
        return $this;
    }
}
