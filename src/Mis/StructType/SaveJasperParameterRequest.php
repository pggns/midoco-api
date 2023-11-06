<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveJasperParameterRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveJasperParameterRequest extends AbstractStructBase
{
    /**
     * The MidocoJasperParameter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: system:MidocoJasperParameter
     * @var \Pggns\MidocoApi\Mis\StructType\JasperParameterDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\JasperParameterDTO $MidocoJasperParameter = null;
    /**
     * Constructor method for SaveJasperParameterRequest
     * @uses SaveJasperParameterRequest::setMidocoJasperParameter()
     * @param \Pggns\MidocoApi\Mis\StructType\JasperParameterDTO $midocoJasperParameter
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\JasperParameterDTO $midocoJasperParameter = null)
    {
        $this
            ->setMidocoJasperParameter($midocoJasperParameter);
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
     * @return \Pggns\MidocoApi\Mis\StructType\SaveJasperParameterRequest
     */
    public function setMidocoJasperParameter(?\Pggns\MidocoApi\Mis\StructType\JasperParameterDTO $midocoJasperParameter = null): self
    {
        $this->MidocoJasperParameter = $midocoJasperParameter;
        
        return $this;
    }
}
