<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

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
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoMfGroup|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoMfGroup $MidocoMfGroup = null;
    /**
     * Constructor method for DeleteMfGroupRequest
     * @uses DeleteMfGroupRequest::setMidocoMfGroup()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMfGroup $midocoMfGroup
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoMfGroup $midocoMfGroup = null)
    {
        $this
            ->setMidocoMfGroup($midocoMfGroup);
    }
    /**
     * Get MidocoMfGroup value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoMfGroup|null
     */
    public function getMidocoMfGroup(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoMfGroup
    {
        return $this->MidocoMfGroup;
    }
    /**
     * Set MidocoMfGroup value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMfGroup $midocoMfGroup
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeleteMfGroupRequest
     */
    public function setMidocoMfGroup(?\Pggns\MidocoApi\Orderlists\StructType\MidocoMfGroup $midocoMfGroup = null): self
    {
        $this->MidocoMfGroup = $midocoMfGroup;
        
        return $this;
    }
}
