<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCustomer --- a complete DTO is returned, an error is thrown, if customer is not found, assigned entries should be queried in a way that assigned customers are found and entries where this customer is assigned to
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCustomerResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Crm\StructType\CrmCustomerDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CrmCustomerDTO $MidocoCrmCustomer = null;
    /**
     * Constructor method for GetCustomerResponse
     * @uses GetCustomerResponse::setMidocoCrmCustomer()
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetCustomerResponse
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Crm\StructType\CrmCustomerDTO $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
}
