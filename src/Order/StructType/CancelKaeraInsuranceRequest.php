<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelKaeraInsuranceRequest StructType
 * @subpackage Structs
 */
class CancelKaeraInsuranceRequest extends AbstractStructBase
{
    /**
     * The MidocoPackageInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoPackageInfo
     * @var \Pggns\MidocoApi\Api\Order\StructType\PackageitemDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\PackageitemDTO $MidocoPackageInfo = null;
    /**
     * Constructor method for CancelKaeraInsuranceRequest
     * @uses CancelKaeraInsuranceRequest::setMidocoPackageInfo()
     * @param \Pggns\MidocoApi\Api\Order\StructType\PackageitemDTO $midocoPackageInfo
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\PackageitemDTO $midocoPackageInfo = null)
    {
        $this
            ->setMidocoPackageInfo($midocoPackageInfo);
    }
    /**
     * Get MidocoPackageInfo value
     * @return \Pggns\MidocoApi\Api\Order\StructType\PackageitemDTO|null
     */
    public function getMidocoPackageInfo(): ?\Pggns\MidocoApi\Api\Order\StructType\PackageitemDTO
    {
        return $this->MidocoPackageInfo;
    }
    /**
     * Set MidocoPackageInfo value
     * @param \Pggns\MidocoApi\Api\Order\StructType\PackageitemDTO $midocoPackageInfo
     * @return \Pggns\MidocoApi\Api\Order\StructType\CancelKaeraInsuranceRequest
     */
    public function setMidocoPackageInfo(?\Pggns\MidocoApi\Api\Order\StructType\PackageitemDTO $midocoPackageInfo = null): self
    {
        $this->MidocoPackageInfo = $midocoPackageInfo;
        
        return $this;
    }
}
