<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdatePackageMarginRequest StructType
 * @subpackage Structs
 */
class UpdatePackageMarginRequest extends AbstractStructBase
{
    /**
     * The MidocoPackageMargin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoPackageMargin
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoPackageMargin|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoPackageMargin $MidocoPackageMargin = null;
    /**
     * Constructor method for UpdatePackageMarginRequest
     * @uses UpdatePackageMarginRequest::setMidocoPackageMargin()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoPackageMargin $midocoPackageMargin
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoPackageMargin $midocoPackageMargin = null)
    {
        $this
            ->setMidocoPackageMargin($midocoPackageMargin);
    }
    /**
     * Get MidocoPackageMargin value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoPackageMargin|null
     */
    public function getMidocoPackageMargin(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoPackageMargin
    {
        return $this->MidocoPackageMargin;
    }
    /**
     * Set MidocoPackageMargin value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoPackageMargin $midocoPackageMargin
     * @return \Pggns\MidocoApi\Api\Order\StructType\UpdatePackageMarginRequest
     */
    public function setMidocoPackageMargin(?\Pggns\MidocoApi\Api\Order\StructType\MidocoPackageMargin $midocoPackageMargin = null): self
    {
        $this->MidocoPackageMargin = $midocoPackageMargin;
        
        return $this;
    }
}
