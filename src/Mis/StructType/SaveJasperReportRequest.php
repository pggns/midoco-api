<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveJasperReportRequest StructType
 * @subpackage Structs
 */
class SaveJasperReportRequest extends AbstractStructBase
{
    /**
     * The MidocoJasperReportExt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: system:MidocoJasperReportExt
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoJasperReportExt|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MidocoJasperReportExt $MidocoJasperReportExt = null;
    /**
     * Constructor method for SaveJasperReportRequest
     * @uses SaveJasperReportRequest::setMidocoJasperReportExt()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoJasperReportExt $midocoJasperReportExt
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\MidocoJasperReportExt $midocoJasperReportExt = null)
    {
        $this
            ->setMidocoJasperReportExt($midocoJasperReportExt);
    }
    /**
     * Get MidocoJasperReportExt value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoJasperReportExt|null
     */
    public function getMidocoJasperReportExt(): ?\Pggns\MidocoApi\Mis\StructType\MidocoJasperReportExt
    {
        return $this->MidocoJasperReportExt;
    }
    /**
     * Set MidocoJasperReportExt value
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoJasperReportExt $midocoJasperReportExt
     * @return \Pggns\MidocoApi\Mis\StructType\SaveJasperReportRequest
     */
    public function setMidocoJasperReportExt(?\Pggns\MidocoApi\Mis\StructType\MidocoJasperReportExt $midocoJasperReportExt = null): self
    {
        $this->MidocoJasperReportExt = $midocoJasperReportExt;
        
        return $this;
    }
}
