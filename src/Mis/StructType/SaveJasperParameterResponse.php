<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveJasperParameterResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveJasperParameter --- saves a parameter (standard or not)
 * @subpackage Structs
 */
class SaveJasperParameterResponse extends AbstractStructBase
{
    /**
     * The MidocoJasperParameterForDisplay
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: system:MidocoJasperParameterForDisplay
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterForDisplay|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterForDisplay $MidocoJasperParameterForDisplay = null;
    /**
     * Constructor method for SaveJasperParameterResponse
     * @uses SaveJasperParameterResponse::setMidocoJasperParameterForDisplay()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterForDisplay $midocoJasperParameterForDisplay
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterForDisplay $midocoJasperParameterForDisplay = null)
    {
        $this
            ->setMidocoJasperParameterForDisplay($midocoJasperParameterForDisplay);
    }
    /**
     * Get MidocoJasperParameterForDisplay value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterForDisplay|null
     */
    public function getMidocoJasperParameterForDisplay(): ?\Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterForDisplay
    {
        return $this->MidocoJasperParameterForDisplay;
    }
    /**
     * Set MidocoJasperParameterForDisplay value
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterForDisplay $midocoJasperParameterForDisplay
     * @return \Pggns\MidocoApi\Mis\StructType\SaveJasperParameterResponse
     */
    public function setMidocoJasperParameterForDisplay(?\Pggns\MidocoApi\Mis\StructType\MidocoJasperParameterForDisplay $midocoJasperParameterForDisplay = null): self
    {
        $this->MidocoJasperParameterForDisplay = $midocoJasperParameterForDisplay;
        
        return $this;
    }
}
