<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavePrivateCustomerRequest StructType
 * @subpackage Structs
 */
class SavePrivateCustomerRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\CrmSD\StructType\CrmCustomerDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\CrmCustomerDTO $MidocoCrmCustomer = null;
    /**
     * Constructor method for SavePrivateCustomerRequest
     * @uses SavePrivateCustomerRequest::setMidocoCrmCustomer()
     * @param \Pggns\MidocoApi\CrmSD\StructType\CrmCustomerDTO $midocoCrmCustomer
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\CrmCustomerDTO $midocoCrmCustomer = null)
    {
        $this
            ->setMidocoCrmCustomer($midocoCrmCustomer);
    }
    /**
     * Get MidocoCrmCustomer value
     * @return \Pggns\MidocoApi\CrmSD\StructType\CrmCustomerDTO|null
     */
    public function getMidocoCrmCustomer(): ?\Pggns\MidocoApi\CrmSD\StructType\CrmCustomerDTO
    {
        return $this->MidocoCrmCustomer;
    }
    /**
     * Set MidocoCrmCustomer value
     * @param \Pggns\MidocoApi\CrmSD\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @return \Pggns\MidocoApi\CrmSD\StructType\SavePrivateCustomerRequest
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\CrmSD\StructType\CrmCustomerDTO $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
}
