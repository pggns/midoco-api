<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPackageMarginDetailsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPackageMarginDetailsRequest extends AbstractStructBase
{
    /**
     * The MidocoMargin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: order:MidocoMargin
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoMargin|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoMargin $MidocoMargin = null;
    /**
     * Constructor method for GetPackageMarginDetailsRequest
     * @uses GetPackageMarginDetailsRequest::setMidocoMargin()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMargin $midocoMargin
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoMargin $midocoMargin = null)
    {
        $this
            ->setMidocoMargin($midocoMargin);
    }
    /**
     * Get MidocoMargin value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoMargin|null
     */
    public function getMidocoMargin(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoMargin
    {
        return $this->MidocoMargin;
    }
    /**
     * Set MidocoMargin value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMargin $midocoMargin
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetPackageMarginDetailsRequest
     */
    public function setMidocoMargin(?\Pggns\MidocoApi\Orderlists\StructType\MidocoMargin $midocoMargin = null): self
    {
        $this->MidocoMargin = $midocoMargin;
        
        return $this;
    }
}
