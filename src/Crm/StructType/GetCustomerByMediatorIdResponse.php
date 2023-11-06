<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerByMediatorIdResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCustomerByMediatorIdResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Crm\StructType\CrmCustomerDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CrmCustomerDTO $MidocoCrmCustomer = null;
    /**
     * Constructor method for GetCustomerByMediatorIdResponse
     * @uses GetCustomerByMediatorIdResponse::setMidocoCrmCustomer()
     * @param \Pggns\MidocoApi\Crm\StructType\CrmCustomerDTO $midocoCrmCustomer
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CrmCustomerDTO $midocoCrmCustomer = null)
    {
        $this
            ->setMidocoCrmCustomer($midocoCrmCustomer);
    }
    /**
     * Get MidocoCrmCustomer value
     * @return \Pggns\MidocoApi\Crm\StructType\CrmCustomerDTO|null
     */
    public function getMidocoCrmCustomer(): ?\Pggns\MidocoApi\Crm\StructType\CrmCustomerDTO
    {
        return $this->MidocoCrmCustomer;
    }
    /**
     * Set MidocoCrmCustomer value
     * @param \Pggns\MidocoApi\Crm\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @return \Pggns\MidocoApi\Crm\StructType\GetCustomerByMediatorIdResponse
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Crm\StructType\CrmCustomerDTO $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
}
