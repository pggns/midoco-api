<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindCustomerForEmailRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Find Customer for an Email address, returns one or more customers for an email address, Exception if not found
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FindCustomerForEmailRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerInfo
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCustomerInfo|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCustomerInfo $MidocoCustomerInfo = null;
    /**
     * Constructor method for FindCustomerForEmailRequest
     * @uses FindCustomerForEmailRequest::setMidocoCustomerInfo()
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
     * @return \Pggns\MidocoApi\Crm\StructType\FindCustomerForEmailRequest
     */
    public function setMidocoCustomerInfo(?\Pggns\MidocoApi\Crm\StructType\MidocoCustomerInfo $midocoCustomerInfo = null): self
    {
        $this->MidocoCustomerInfo = $midocoCustomerInfo;
        
        return $this;
    }
}
