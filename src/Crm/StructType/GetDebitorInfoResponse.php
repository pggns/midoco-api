<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

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
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCustomerInfo|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCustomerInfo $MidocoCustomerInfo = null;
    /**
     * Constructor method for GetDebitorInfoResponse
     * @uses GetDebitorInfoResponse::setMidocoCustomerInfo()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerInfo $midocoCustomerInfo
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoCustomerInfo $midocoCustomerInfo = null)
    {
        $this
            ->setMidocoCustomerInfo($midocoCustomerInfo);
    }
    /**
     * Get MidocoCustomerInfo value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerInfo|null
     */
    public function getMidocoCustomerInfo(): ?\Pggns\MidocoApi\Crm\StructType\MidocoCustomerInfo
    {
        return $this->MidocoCustomerInfo;
    }
    /**
     * Set MidocoCustomerInfo value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerInfo $midocoCustomerInfo
     * @return \Pggns\MidocoApi\Crm\StructType\GetDebitorInfoResponse
     */
    public function setMidocoCustomerInfo(?\Pggns\MidocoApi\Crm\StructType\MidocoCustomerInfo $midocoCustomerInfo = null): self
    {
        $this->MidocoCustomerInfo = $midocoCustomerInfo;
        
        return $this;
    }
}
