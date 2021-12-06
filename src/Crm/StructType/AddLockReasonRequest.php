<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddLockReasonRequest StructType
 * @subpackage Structs
 */
class AddLockReasonRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmLockReason
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmLockReason
     * @var \Pggns\MidocoApi\Api\Crm\StructType\CrmLockReasonDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\CrmLockReasonDTO $MidocoCrmLockReason = null;
    /**
     * Constructor method for AddLockReasonRequest
     * @uses AddLockReasonRequest::setMidocoCrmLockReason()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CrmLockReasonDTO $midocoCrmLockReason
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\CrmLockReasonDTO $midocoCrmLockReason = null)
    {
        $this
            ->setMidocoCrmLockReason($midocoCrmLockReason);
    }
    /**
     * Get MidocoCrmLockReason value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CrmLockReasonDTO|null
     */
    public function getMidocoCrmLockReason(): ?\Pggns\MidocoApi\Api\Crm\StructType\CrmLockReasonDTO
    {
        return $this->MidocoCrmLockReason;
    }
    /**
     * Set MidocoCrmLockReason value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CrmLockReasonDTO $midocoCrmLockReason
     * @return \Pggns\MidocoApi\Api\Crm\StructType\AddLockReasonRequest
     */
    public function setMidocoCrmLockReason(?\Pggns\MidocoApi\Api\Crm\StructType\CrmLockReasonDTO $midocoCrmLockReason = null): self
    {
        $this->MidocoCrmLockReason = $midocoCrmLockReason;
        
        return $this;
    }
}
