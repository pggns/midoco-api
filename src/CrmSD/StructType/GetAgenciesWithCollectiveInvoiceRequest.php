<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAgenciesWithCollectiveInvoiceRequest StructType
 * @subpackage Structs
 */
class GetAgenciesWithCollectiveInvoiceRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomerPayment
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomerPayment
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmCustomerPayment|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmCustomerPayment $MidocoCrmCustomerPayment = null;
    /**
     * Constructor method for GetAgenciesWithCollectiveInvoiceRequest
     * @uses GetAgenciesWithCollectiveInvoiceRequest::setMidocoCrmCustomerPayment()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment = null)
    {
        $this
            ->setMidocoCrmCustomerPayment($midocoCrmCustomerPayment);
    }
    /**
     * Get MidocoCrmCustomerPayment value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmCustomerPayment|null
     */
    public function getMidocoCrmCustomerPayment(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmCustomerPayment
    {
        return $this->MidocoCrmCustomerPayment;
    }
    /**
     * Set MidocoCrmCustomerPayment value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetAgenciesWithCollectiveInvoiceRequest
     */
    public function setMidocoCrmCustomerPayment(?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment = null): self
    {
        $this->MidocoCrmCustomerPayment = $midocoCrmCustomerPayment;
        
        return $this;
    }
}
