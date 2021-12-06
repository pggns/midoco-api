<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDebitorInfoResponse StructType
 * @subpackage Structs
 */
class GetDebitorInfoResponse extends AbstractStructBase
{
    /**
     * The MidocoCustomerInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerInfo
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerInfo|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerInfo $MidocoCustomerInfo = null;
    /**
     * Constructor method for GetDebitorInfoResponse
     * @uses GetDebitorInfoResponse::setMidocoCustomerInfo()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerInfo $midocoCustomerInfo
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerInfo $midocoCustomerInfo = null)
    {
        $this
            ->setMidocoCustomerInfo($midocoCustomerInfo);
    }
    /**
     * Get MidocoCustomerInfo value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerInfo|null
     */
    public function getMidocoCustomerInfo(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerInfo
    {
        return $this->MidocoCustomerInfo;
    }
    /**
     * Set MidocoCustomerInfo value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerInfo $midocoCustomerInfo
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetDebitorInfoResponse
     */
    public function setMidocoCustomerInfo(?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerInfo $midocoCustomerInfo = null): self
    {
        $this->MidocoCustomerInfo = $midocoCustomerInfo;
        
        return $this;
    }
}
