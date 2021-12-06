<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssignEmailToCustomerRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Attach an email to a customer, searches for email first, if not found for name/forename etc. On finding a unique customer, the email is attached and the customer is returned. In case of multiple rows, a list is returned. In case no
 * customer is found, an exception is thrown
 * @subpackage Structs
 */
class AssignEmailToCustomerRequest extends AbstractStructBase
{
    /**
     * The MidocoEmailInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoEmailInfo
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoEmailInfo|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoEmailInfo $MidocoEmailInfo = null;
    /**
     * The MidocoCustomerInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerInfo
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoCustomerInfo|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCustomerInfo $MidocoCustomerInfo = null;
    /**
     * The MidocoBookingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoBookingInfo|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoBookingInfo $MidocoBookingInfo = null;
    /**
     * Constructor method for AssignEmailToCustomerRequest
     * @uses AssignEmailToCustomerRequest::setMidocoEmailInfo()
     * @uses AssignEmailToCustomerRequest::setMidocoCustomerInfo()
     * @uses AssignEmailToCustomerRequest::setMidocoBookingInfo()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoEmailInfo $midocoEmailInfo
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCustomerInfo $midocoCustomerInfo
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoBookingInfo $midocoBookingInfo
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoEmailInfo $midocoEmailInfo = null, ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCustomerInfo $midocoCustomerInfo = null, ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoBookingInfo $midocoBookingInfo = null)
    {
        $this
            ->setMidocoEmailInfo($midocoEmailInfo)
            ->setMidocoCustomerInfo($midocoCustomerInfo)
            ->setMidocoBookingInfo($midocoBookingInfo);
    }
    /**
     * Get MidocoEmailInfo value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoEmailInfo|null
     */
    public function getMidocoEmailInfo(): ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoEmailInfo
    {
        return $this->MidocoEmailInfo;
    }
    /**
     * Set MidocoEmailInfo value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoEmailInfo $midocoEmailInfo
     * @return \Pggns\MidocoApi\Api\Crm\StructType\AssignEmailToCustomerRequest
     */
    public function setMidocoEmailInfo(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoEmailInfo $midocoEmailInfo = null): self
    {
        $this->MidocoEmailInfo = $midocoEmailInfo;
        
        return $this;
    }
    /**
     * Get MidocoCustomerInfo value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoCustomerInfo|null
     */
    public function getMidocoCustomerInfo(): ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCustomerInfo
    {
        return $this->MidocoCustomerInfo;
    }
    /**
     * Set MidocoCustomerInfo value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCustomerInfo $midocoCustomerInfo
     * @return \Pggns\MidocoApi\Api\Crm\StructType\AssignEmailToCustomerRequest
     */
    public function setMidocoCustomerInfo(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCustomerInfo $midocoCustomerInfo = null): self
    {
        $this->MidocoCustomerInfo = $midocoCustomerInfo;
        
        return $this;
    }
    /**
     * Get MidocoBookingInfo value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoBookingInfo|null
     */
    public function getMidocoBookingInfo(): ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoBookingInfo
    {
        return $this->MidocoBookingInfo;
    }
    /**
     * Set MidocoBookingInfo value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoBookingInfo $midocoBookingInfo
     * @return \Pggns\MidocoApi\Api\Crm\StructType\AssignEmailToCustomerRequest
     */
    public function setMidocoBookingInfo(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoBookingInfo $midocoBookingInfo = null): self
    {
        $this->MidocoBookingInfo = $midocoBookingInfo;
        
        return $this;
    }
}
