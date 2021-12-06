<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindCustomerForEmailRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Find Customer for an Email address, returns one or more customers for an email address, Exception if not found
 * @subpackage Structs
 */
class FindCustomerForEmailRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerInfo
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerInfo|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerInfo $MidocoCustomerInfo = null;
    /**
     * Constructor method for FindCustomerForEmailRequest
     * @uses FindCustomerForEmailRequest::setMidocoCustomerInfo()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerInfo $midocoCustomerInfo
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerInfo $midocoCustomerInfo = null)
    {
        $this
            ->setMidocoCustomerInfo($midocoCustomerInfo);
    }
    /**
     * Get MidocoCustomerInfo value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerInfo|null
     */
    public function getMidocoCustomerInfo(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerInfo
    {
        return $this->MidocoCustomerInfo;
    }
    /**
     * Set MidocoCustomerInfo value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerInfo $midocoCustomerInfo
     * @return \Pggns\MidocoApi\CrmSD\StructType\FindCustomerForEmailRequest
     */
    public function setMidocoCustomerInfo(?\Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerInfo $midocoCustomerInfo = null): self
    {
        $this->MidocoCustomerInfo = $midocoCustomerInfo;
        
        return $this;
    }
}
