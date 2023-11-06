<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrgunitBookingIdRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveOrgunitBookingIdRequest extends AbstractStructBase
{
    /**
     * The MidocoOrgunitBookingId
     * Meta information extracted from the WSDL
     * - ref: MidocoOrgunitBookingId
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\OrgunitBookingIdDTO|null
     */
    protected ?\Pggns\MidocoApi\MidocoSystem\StructType\OrgunitBookingIdDTO $MidocoOrgunitBookingId = null;
    /**
     * Constructor method for SaveOrgunitBookingIdRequest
     * @uses SaveOrgunitBookingIdRequest::setMidocoOrgunitBookingId()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\OrgunitBookingIdDTO $midocoOrgunitBookingId
     */
    public function __construct(?\Pggns\MidocoApi\MidocoSystem\StructType\OrgunitBookingIdDTO $midocoOrgunitBookingId = null)
    {
        $this
            ->setMidocoOrgunitBookingId($midocoOrgunitBookingId);
    }
    /**
     * Get MidocoOrgunitBookingId value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\OrgunitBookingIdDTO|null
     */
    public function getMidocoOrgunitBookingId(): ?\Pggns\MidocoApi\MidocoSystem\StructType\OrgunitBookingIdDTO
    {
        return $this->MidocoOrgunitBookingId;
    }
    /**
     * Set MidocoOrgunitBookingId value
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\OrgunitBookingIdDTO $midocoOrgunitBookingId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SaveOrgunitBookingIdRequest
     */
    public function setMidocoOrgunitBookingId(?\Pggns\MidocoApi\MidocoSystem\StructType\OrgunitBookingIdDTO $midocoOrgunitBookingId = null): self
    {
        $this->MidocoOrgunitBookingId = $midocoOrgunitBookingId;
        
        return $this;
    }
}
