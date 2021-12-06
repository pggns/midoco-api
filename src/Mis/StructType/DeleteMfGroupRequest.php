<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMfGroupRequest StructType
 * @subpackage Structs
 */
class DeleteMfGroupRequest extends AbstractStructBase
{
    /**
     * The MidocoMfGroup
     * Meta information extracted from the WSDL
     * - ref: MidocoMfGroup
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoMfGroup|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MidocoMfGroup $MidocoMfGroup = null;
    /**
     * Constructor method for DeleteMfGroupRequest
     * @uses DeleteMfGroupRequest::setMidocoMfGroup()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoMfGroup $midocoMfGroup
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\MidocoMfGroup $midocoMfGroup = null)
    {
        $this
            ->setMidocoMfGroup($midocoMfGroup);
    }
    /**
     * Get MidocoMfGroup value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoMfGroup|null
     */
    public function getMidocoMfGroup(): ?\Pggns\MidocoApi\Mis\StructType\MidocoMfGroup
    {
        return $this->MidocoMfGroup;
    }
    /**
     * Set MidocoMfGroup value
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoMfGroup $midocoMfGroup
     * @return \Pggns\MidocoApi\Mis\StructType\DeleteMfGroupRequest
     */
    public function setMidocoMfGroup(?\Pggns\MidocoApi\Mis\StructType\MidocoMfGroup $midocoMfGroup = null): self
    {
        $this->MidocoMfGroup = $midocoMfGroup;
        
        return $this;
    }
}
