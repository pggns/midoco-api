<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCustomerMfRequest StructType
 * @subpackage Structs
 */
class DeleteCustomerMfRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerMf
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerMf
     * @var \Pggns\MidocoApi\Crm\StructType\CustomerMfDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CustomerMfDTO $MidocoCustomerMf = null;
    /**
     * Constructor method for DeleteCustomerMfRequest
     * @uses DeleteCustomerMfRequest::setMidocoCustomerMf()
     * @param \Pggns\MidocoApi\Crm\StructType\CustomerMfDTO $midocoCustomerMf
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CustomerMfDTO $midocoCustomerMf = null)
    {
        $this
            ->setMidocoCustomerMf($midocoCustomerMf);
    }
    /**
     * Get MidocoCustomerMf value
     * @return \Pggns\MidocoApi\Crm\StructType\CustomerMfDTO|null
     */
    public function getMidocoCustomerMf(): ?\Pggns\MidocoApi\Crm\StructType\CustomerMfDTO
    {
        return $this->MidocoCustomerMf;
    }
    /**
     * Set MidocoCustomerMf value
     * @param \Pggns\MidocoApi\Crm\StructType\CustomerMfDTO $midocoCustomerMf
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteCustomerMfRequest
     */
    public function setMidocoCustomerMf(?\Pggns\MidocoApi\Crm\StructType\CustomerMfDTO $midocoCustomerMf = null): self
    {
        $this->MidocoCustomerMf = $midocoCustomerMf;
        
        return $this;
    }
}
