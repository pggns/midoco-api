<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

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
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoMfGroup|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoMfGroup $MidocoMfGroup = null;
    /**
     * Constructor method for GetMfGroupRequest
     * @uses GetMfGroupRequest::setMidocoMfGroup()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoMfGroup $midocoMfGroup
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoMfGroup $midocoMfGroup = null)
    {
        $this
            ->setMidocoMfGroup($midocoMfGroup);
    }
    /**
     * Get MidocoMfGroup value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMfGroup|null
     */
    public function getMidocoMfGroup(): ?\Pggns\MidocoApi\Crm\StructType\MidocoMfGroup
    {
        return $this->MidocoMfGroup;
    }
    /**
     * Set MidocoMfGroup value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoMfGroup $midocoMfGroup
     * @return \Pggns\MidocoApi\Crm\StructType\GetMfGroupRequest
     */
    public function setMidocoMfGroup(?\Pggns\MidocoApi\Crm\StructType\MidocoMfGroup $midocoMfGroup = null): self
    {
        $this->MidocoMfGroup = $midocoMfGroup;
        
        return $this;
    }
}
