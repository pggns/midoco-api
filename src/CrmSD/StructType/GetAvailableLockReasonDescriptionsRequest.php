<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\CrmSD\StructType\CrmLockReasonDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\CrmLockReasonDTO $MidocoCrmLockReason = null;
    /**
     * Constructor method for GetAvailableLockReasonDescriptionsRequest
     * @uses GetAvailableLockReasonDescriptionsRequest::setMidocoCrmLockReason()
     * @param \Pggns\MidocoApi\CrmSD\StructType\CrmLockReasonDTO $midocoCrmLockReason
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\CrmLockReasonDTO $midocoCrmLockReason = null)
    {
        $this
            ->setMidocoCrmLockReason($midocoCrmLockReason);
    }
    /**
     * Get MidocoCrmLockReason value
     * @return \Pggns\MidocoApi\CrmSD\StructType\CrmLockReasonDTO|null
     */
    public function getMidocoCrmLockReason(): ?\Pggns\MidocoApi\CrmSD\StructType\CrmLockReasonDTO
    {
        return $this->MidocoCrmLockReason;
    }
    /**
     * Set MidocoCrmLockReason value
     * @param \Pggns\MidocoApi\CrmSD\StructType\CrmLockReasonDTO $midocoCrmLockReason
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetAvailableLockReasonDescriptionsRequest
     */
    public function setMidocoCrmLockReason(?\Pggns\MidocoApi\CrmSD\StructType\CrmLockReasonDTO $midocoCrmLockReason = null): self
    {
        $this->MidocoCrmLockReason = $midocoCrmLockReason;
        
        return $this;
    }
}
