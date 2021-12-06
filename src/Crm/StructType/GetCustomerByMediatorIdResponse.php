<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerByMediatorIdResponse StructType
 * @subpackage Structs
 */
class GetCustomerByMediatorIdResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO $MidocoCrmCustomer = null;
    /**
     * Constructor method for GetCustomerByMediatorIdResponse
     * @uses GetCustomerByMediatorIdResponse::setMidocoCrmCustomer()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO $midocoCrmCustomer
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO $midocoCrmCustomer = null)
    {
        $this
            ->setMidocoCrmCustomer($midocoCrmCustomer);
    }
    /**
     * Get MidocoCrmCustomer value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO|null
     */
    public function getMidocoCrmCustomer(): ?\Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO
    {
        return $this->MidocoCrmCustomer;
    }
    /**
     * Set MidocoCrmCustomer value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetCustomerByMediatorIdResponse
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
}
