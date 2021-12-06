<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableLockReasonDescriptionsRequest StructType
 * @subpackage Structs
 */
class GetAvailableLockReasonDescriptionsRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmLockReason
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmLockReason
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\CrmLockReasonDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmLockReasonDTO $MidocoCrmLockReason = null;
    /**
     * Constructor method for GetAvailableLockReasonDescriptionsRequest
     * @uses GetAvailableLockReasonDescriptionsRequest::setMidocoCrmLockReason()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CrmLockReasonDTO $midocoCrmLockReason
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmLockReasonDTO $midocoCrmLockReason = null)
    {
        $this
            ->setMidocoCrmLockReason($midocoCrmLockReason);
    }
    /**
     * Get MidocoCrmLockReason value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CrmLockReasonDTO|null
     */
    public function getMidocoCrmLockReason(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmLockReasonDTO
    {
        return $this->MidocoCrmLockReason;
    }
    /**
     * Set MidocoCrmLockReason value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CrmLockReasonDTO $midocoCrmLockReason
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetAvailableLockReasonDescriptionsRequest
     */
    public function setMidocoCrmLockReason(?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmLockReasonDTO $midocoCrmLockReason = null): self
    {
        $this->MidocoCrmLockReason = $midocoCrmLockReason;
        
        return $this;
    }
}
