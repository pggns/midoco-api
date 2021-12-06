<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderLockReasonDescriptionRequest StructType
 * @subpackage Structs
 */
class SaveOrderLockReasonDescriptionRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderLockReasonDescription
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderLockReasonDescription
     * @var \Pggns\MidocoApi\OrderSD\StructType\OrderLockReasonDescriptionDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\OrderLockReasonDescriptionDTO $MidocoOrderLockReasonDescription = null;
    /**
     * Constructor method for SaveOrderLockReasonDescriptionRequest
     * @uses SaveOrderLockReasonDescriptionRequest::setMidocoOrderLockReasonDescription()
     * @param \Pggns\MidocoApi\OrderSD\StructType\OrderLockReasonDescriptionDTO $midocoOrderLockReasonDescription
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\OrderLockReasonDescriptionDTO $midocoOrderLockReasonDescription = null)
    {
        $this
            ->setMidocoOrderLockReasonDescription($midocoOrderLockReasonDescription);
    }
    /**
     * Get MidocoOrderLockReasonDescription value
     * @return \Pggns\MidocoApi\OrderSD\StructType\OrderLockReasonDescriptionDTO|null
     */
    public function getMidocoOrderLockReasonDescription(): ?\Pggns\MidocoApi\OrderSD\StructType\OrderLockReasonDescriptionDTO
    {
        return $this->MidocoOrderLockReasonDescription;
    }
    /**
     * Set MidocoOrderLockReasonDescription value
     * @param \Pggns\MidocoApi\OrderSD\StructType\OrderLockReasonDescriptionDTO $midocoOrderLockReasonDescription
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveOrderLockReasonDescriptionRequest
     */
    public function setMidocoOrderLockReasonDescription(?\Pggns\MidocoApi\OrderSD\StructType\OrderLockReasonDescriptionDTO $midocoOrderLockReasonDescription = null): self
    {
        $this->MidocoOrderLockReasonDescription = $midocoOrderLockReasonDescription;
        
        return $this;
    }
}
