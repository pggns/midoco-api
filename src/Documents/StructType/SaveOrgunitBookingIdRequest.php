<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

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
     * @var \Pggns\MidocoApi\Documents\StructType\OrgunitBookingIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\OrgunitBookingIdDTO $MidocoOrgunitBookingId = null;
    /**
     * Constructor method for SaveOrgunitBookingIdRequest
     * @uses SaveOrgunitBookingIdRequest::setMidocoOrgunitBookingId()
     * @param \Pggns\MidocoApi\Documents\StructType\OrgunitBookingIdDTO $midocoOrgunitBookingId
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\OrgunitBookingIdDTO $midocoOrgunitBookingId = null)
    {
        $this
            ->setMidocoOrgunitBookingId($midocoOrgunitBookingId);
    }
    /**
     * Get MidocoOrgunitBookingId value
     * @return \Pggns\MidocoApi\Documents\StructType\OrgunitBookingIdDTO|null
     */
    public function getMidocoOrgunitBookingId(): ?\Pggns\MidocoApi\Documents\StructType\OrgunitBookingIdDTO
    {
        return $this->MidocoOrgunitBookingId;
    }
    /**
     * Set MidocoOrgunitBookingId value
     * @param \Pggns\MidocoApi\Documents\StructType\OrgunitBookingIdDTO $midocoOrgunitBookingId
     * @return \Pggns\MidocoApi\Documents\StructType\SaveOrgunitBookingIdRequest
     */
    public function setMidocoOrgunitBookingId(?\Pggns\MidocoApi\Documents\StructType\OrgunitBookingIdDTO $midocoOrgunitBookingId = null): self
    {
        $this->MidocoOrgunitBookingId = $midocoOrgunitBookingId;
        
        return $this;
    }
}
