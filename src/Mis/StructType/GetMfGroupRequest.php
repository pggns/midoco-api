<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

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
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MidocoMfGroup|null
     */
    protected ?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMfGroup $MidocoMfGroup = null;
    /**
     * Constructor method for GetMfGroupRequest
     * @uses GetMfGroupRequest::setMidocoMfGroup()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoMfGroup $midocoMfGroup
     */
    public function __construct(?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMfGroup $midocoMfGroup = null)
    {
        $this
            ->setMidocoMfGroup($midocoMfGroup);
    }
    /**
     * Get MidocoMfGroup value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MidocoMfGroup|null
     */
    public function getMidocoMfGroup(): ?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMfGroup
    {
        return $this->MidocoMfGroup;
    }
    /**
     * Set MidocoMfGroup value
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoMfGroup $midocoMfGroup
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetMfGroupRequest
     */
    public function setMidocoMfGroup(?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMfGroup $midocoMfGroup = null): self
    {
        $this->MidocoMfGroup = $midocoMfGroup;
        
        return $this;
    }
}
