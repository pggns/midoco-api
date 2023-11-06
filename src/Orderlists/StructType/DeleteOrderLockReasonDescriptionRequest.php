<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteOrderLockReasonDescriptionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteOrderLockReasonDescriptionRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderLockReasonDescription
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderLockReasonDescription
     * @var \Pggns\MidocoApi\Orderlists\StructType\OrderLockReasonDescriptionDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\OrderLockReasonDescriptionDTO $MidocoOrderLockReasonDescription = null;
    /**
     * Constructor method for DeleteOrderLockReasonDescriptionRequest
     * @uses DeleteOrderLockReasonDescriptionRequest::setMidocoOrderLockReasonDescription()
     * @param \Pggns\MidocoApi\Orderlists\StructType\OrderLockReasonDescriptionDTO $midocoOrderLockReasonDescription
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\OrderLockReasonDescriptionDTO $midocoOrderLockReasonDescription = null)
    {
        $this
            ->setMidocoOrderLockReasonDescription($midocoOrderLockReasonDescription);
    }
    /**
     * Get MidocoOrderLockReasonDescription value
     * @return \Pggns\MidocoApi\Orderlists\StructType\OrderLockReasonDescriptionDTO|null
     */
    public function getMidocoOrderLockReasonDescription(): ?\Pggns\MidocoApi\Orderlists\StructType\OrderLockReasonDescriptionDTO
    {
        return $this->MidocoOrderLockReasonDescription;
    }
    /**
     * Set MidocoOrderLockReasonDescription value
     * @param \Pggns\MidocoApi\Orderlists\StructType\OrderLockReasonDescriptionDTO $midocoOrderLockReasonDescription
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeleteOrderLockReasonDescriptionRequest
     */
    public function setMidocoOrderLockReasonDescription(?\Pggns\MidocoApi\Orderlists\StructType\OrderLockReasonDescriptionDTO $midocoOrderLockReasonDescription = null): self
    {
        $this->MidocoOrderLockReasonDescription = $midocoOrderLockReasonDescription;
        
        return $this;
    }
}
