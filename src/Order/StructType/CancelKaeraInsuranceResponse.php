<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelKaeraInsuranceResponse StructType
 * @subpackage Structs
 */
class CancelKaeraInsuranceResponse extends AbstractStructBase
{
    /**
     * The MidocoKaeraPackageExt
     * Meta information extracted from the WSDL
     * - ref: MidocoKaeraPackageExt
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoKaeraPackageExt|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoKaeraPackageExt $MidocoKaeraPackageExt = null;
    /**
     * Constructor method for CancelKaeraInsuranceResponse
     * @uses CancelKaeraInsuranceResponse::setMidocoKaeraPackageExt()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoKaeraPackageExt $midocoKaeraPackageExt
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoKaeraPackageExt $midocoKaeraPackageExt = null)
    {
        $this
            ->setMidocoKaeraPackageExt($midocoKaeraPackageExt);
    }
    /**
     * Get MidocoKaeraPackageExt value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoKaeraPackageExt|null
     */
    public function getMidocoKaeraPackageExt(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoKaeraPackageExt
    {
        return $this->MidocoKaeraPackageExt;
    }
    /**
     * Set MidocoKaeraPackageExt value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoKaeraPackageExt $midocoKaeraPackageExt
     * @return \Pggns\MidocoApi\Api\Order\StructType\CancelKaeraInsuranceResponse
     */
    public function setMidocoKaeraPackageExt(?\Pggns\MidocoApi\Api\Order\StructType\MidocoKaeraPackageExt $midocoKaeraPackageExt = null): self
    {
        $this->MidocoKaeraPackageExt = $midocoKaeraPackageExt;
        
        return $this;
    }
}
