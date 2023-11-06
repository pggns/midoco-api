<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoGetCompanyCustomerType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoGetCompanyCustomerType extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Crm\StructType\CrmCustomerDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CrmCustomerDTO $MidocoCrmCustomer = null;
    /**
     * The MidocoCrmCompany
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCompany
     * @var \Pggns\MidocoApi\Crm\StructType\CrmCompanyDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CrmCompanyDTO $MidocoCrmCompany = null;
    /**
     * Constructor method for MidocoGetCompanyCustomerType
     * @uses MidocoGetCompanyCustomerType::setMidocoCrmCustomer()
     * @uses MidocoGetCompanyCustomerType::setMidocoCrmCompany()
     * @param \Pggns\MidocoApi\Crm\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @param \Pggns\MidocoApi\Crm\StructType\CrmCompanyDTO $midocoCrmCompany
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CrmCustomerDTO $midocoCrmCustomer = null, ?\Pggns\MidocoApi\Crm\StructType\CrmCompanyDTO $midocoCrmCompany = null)
    {
        $this
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setMidocoCrmCompany($midocoCrmCompany);
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoGetCompanyCustomerType
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Crm\StructType\CrmCustomerDTO $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
    /**
     * Get MidocoCrmCompany value
     * @return \Pggns\MidocoApi\Crm\StructType\CrmCompanyDTO|null
     */
    public function getMidocoCrmCompany(): ?\Pggns\MidocoApi\Crm\StructType\CrmCompanyDTO
    {
        return $this->MidocoCrmCompany;
    }
    /**
     * Set MidocoCrmCompany value
     * @param \Pggns\MidocoApi\Crm\StructType\CrmCompanyDTO $midocoCrmCompany
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoGetCompanyCustomerType
     */
    public function setMidocoCrmCompany(?\Pggns\MidocoApi\Crm\StructType\CrmCompanyDTO $midocoCrmCompany = null): self
    {
        $this->MidocoCrmCompany = $midocoCrmCompany;
        
        return $this;
    }
}
