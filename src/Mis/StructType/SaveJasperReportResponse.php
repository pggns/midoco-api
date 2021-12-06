<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveJasperReportResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveJasperReport --- save a jasper report (together with its parameters)
 * @subpackage Structs
 */
class SaveJasperReportResponse extends AbstractStructBase
{
    /**
     * The MidocoJasperReportExt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: system:MidocoJasperReportExt
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportExt|null
     */
    protected ?\Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportExt $MidocoJasperReportExt = null;
    /**
     * Constructor method for SaveJasperReportResponse
     * @uses SaveJasperReportResponse::setMidocoJasperReportExt()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportExt $midocoJasperReportExt
     */
    public function __construct(?\Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportExt $midocoJasperReportExt = null)
    {
        $this
            ->setMidocoJasperReportExt($midocoJasperReportExt);
    }
    /**
     * Get MidocoJasperReportExt value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportExt|null
     */
    public function getMidocoJasperReportExt(): ?\Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportExt
    {
        return $this->MidocoJasperReportExt;
    }
    /**
     * Set MidocoJasperReportExt value
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportExt $midocoJasperReportExt
     * @return \Pggns\MidocoApi\Api\Mis\StructType\SaveJasperReportResponse
     */
    public function setMidocoJasperReportExt(?\Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperReportExt $midocoJasperReportExt = null): self
    {
        $this->MidocoJasperReportExt = $midocoJasperReportExt;
        
        return $this;
    }
}
