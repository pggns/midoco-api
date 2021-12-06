<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Booking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMfGroupRequest StructType
 * @subpackage Structs
 */
class GetMfGroupRequest extends AbstractStructBase
{
    /**
     * The MidocoMfGroup
     * Meta information extracted from the WSDL
     * - ref: MidocoMfGroup
     * @var \Pggns\MidocoApi\Booking\StructType\MidocoMfGroup|null
     */
    protected ?\Pggns\MidocoApi\Booking\StructType\MidocoMfGroup $MidocoMfGroup = null;
    /**
     * Constructor method for GetMfGroupRequest
     * @uses GetMfGroupRequest::setMidocoMfGroup()
     * @param \Pggns\MidocoApi\Booking\StructType\MidocoMfGroup $midocoMfGroup
     */
    public function __construct(?\Pggns\MidocoApi\Booking\StructType\MidocoMfGroup $midocoMfGroup = null)
    {
        $this
            ->setMidocoMfGroup($midocoMfGroup);
    }
    /**
     * Get MidocoMfGroup value
     * @return \Pggns\MidocoApi\Booking\StructType\MidocoMfGroup|null
     */
    public function getMidocoMfGroup(): ?\Pggns\MidocoApi\Booking\StructType\MidocoMfGroup
    {
        return $this->MidocoMfGroup;
    }
    /**
     * Set MidocoMfGroup value
     * @param \Pggns\MidocoApi\Booking\StructType\MidocoMfGroup $midocoMfGroup
     * @return \Pggns\MidocoApi\Booking\StructType\GetMfGroupRequest
     */
    public function setMidocoMfGroup(?\Pggns\MidocoApi\Booking\StructType\MidocoMfGroup $midocoMfGroup = null): self
    {
        $this->MidocoMfGroup = $midocoMfGroup;
        
        return $this;
    }
}
