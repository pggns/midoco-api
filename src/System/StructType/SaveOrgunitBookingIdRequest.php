<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrgunitBookingIdRequest StructType
 * @subpackage Structs
 */
class SaveOrgunitBookingIdRequest extends AbstractStructBase
{
    /**
     * The MidocoOrgunitBookingId
     * Meta information extracted from the WSDL
     * - ref: MidocoOrgunitBookingId
     * @var \Pggns\MidocoApi\Api\System\StructType\OrgunitBookingIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\System\StructType\OrgunitBookingIdDTO $MidocoOrgunitBookingId = null;
    /**
     * Constructor method for SaveOrgunitBookingIdRequest
     * @uses SaveOrgunitBookingIdRequest::setMidocoOrgunitBookingId()
     * @param \Pggns\MidocoApi\Api\System\StructType\OrgunitBookingIdDTO $midocoOrgunitBookingId
     */
    public function __construct(?\Pggns\MidocoApi\Api\System\StructType\OrgunitBookingIdDTO $midocoOrgunitBookingId = null)
    {
        $this
            ->setMidocoOrgunitBookingId($midocoOrgunitBookingId);
    }
    /**
     * Get MidocoOrgunitBookingId value
     * @return \Pggns\MidocoApi\Api\System\StructType\OrgunitBookingIdDTO|null
     */
    public function getMidocoOrgunitBookingId(): ?\Pggns\MidocoApi\Api\System\StructType\OrgunitBookingIdDTO
    {
        return $this->MidocoOrgunitBookingId;
    }
    /**
     * Set MidocoOrgunitBookingId value
     * @param \Pggns\MidocoApi\Api\System\StructType\OrgunitBookingIdDTO $midocoOrgunitBookingId
     * @return \Pggns\MidocoApi\Api\System\StructType\SaveOrgunitBookingIdRequest
     */
    public function setMidocoOrgunitBookingId(?\Pggns\MidocoApi\Api\System\StructType\OrgunitBookingIdDTO $midocoOrgunitBookingId = null): self
    {
        $this->MidocoOrgunitBookingId = $midocoOrgunitBookingId;
        
        return $this;
    }
}
