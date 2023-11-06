<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

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
     * @var \Pggns\MidocoApi\Orderlists\StructType\CrmCustomerDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\CrmCustomerDTO $MidocoCrmCustomer = null;
    /**
     * The MidocoCrmCompany
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCompany
     * @var \Pggns\MidocoApi\Orderlists\StructType\CrmCompanyDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\CrmCompanyDTO $MidocoCrmCompany = null;
    /**
     * Constructor method for MidocoGetCompanyCustomerType
     * @uses MidocoGetCompanyCustomerType::setMidocoCrmCustomer()
     * @uses MidocoGetCompanyCustomerType::setMidocoCrmCompany()
     * @param \Pggns\MidocoApi\Orderlists\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @param \Pggns\MidocoApi\Orderlists\StructType\CrmCompanyDTO $midocoCrmCompany
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\CrmCustomerDTO $midocoCrmCustomer = null, ?\Pggns\MidocoApi\Orderlists\StructType\CrmCompanyDTO $midocoCrmCompany = null)
    {
        $this
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setMidocoCrmCompany($midocoCrmCompany);
    }
    /**
     * Get MidocoCrmCustomer value
     * @return \Pggns\MidocoApi\Orderlists\StructType\CrmCustomerDTO|null
     */
    public function getMidocoCrmCustomer(): ?\Pggns\MidocoApi\Orderlists\StructType\CrmCustomerDTO
    {
        return $this->MidocoCrmCustomer;
    }
    /**
     * Set MidocoCrmCustomer value
     * @param \Pggns\MidocoApi\Orderlists\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoGetCompanyCustomerType
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Orderlists\StructType\CrmCustomerDTO $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
    /**
     * Get MidocoCrmCompany value
     * @return \Pggns\MidocoApi\Orderlists\StructType\CrmCompanyDTO|null
     */
    public function getMidocoCrmCompany(): ?\Pggns\MidocoApi\Orderlists\StructType\CrmCompanyDTO
    {
        return $this->MidocoCrmCompany;
    }
    /**
     * Set MidocoCrmCompany value
     * @param \Pggns\MidocoApi\Orderlists\StructType\CrmCompanyDTO $midocoCrmCompany
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoGetCompanyCustomerType
     */
    public function setMidocoCrmCompany(?\Pggns\MidocoApi\Orderlists\StructType\CrmCompanyDTO $midocoCrmCompany = null): self
    {
        $this->MidocoCrmCompany = $midocoCrmCompany;
        
        return $this;
    }
}
