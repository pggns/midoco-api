<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeAssignMidocoProcessRoleRequest StructType
 * @subpackage Structs
 */
class DeAssignMidocoProcessRoleRequest extends AbstractStructBase
{
    /**
     * The MidocoProcessRoleAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoProcessRoleAssign
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoProcessRoleAssign|null
     */
    protected ?\Pggns\MidocoApi\Workflow\StructType\MidocoProcessRoleAssign $MidocoProcessRoleAssign = null;
    /**
     * Constructor method for DeAssignMidocoProcessRoleRequest
     * @uses DeAssignMidocoProcessRoleRequest::setMidocoProcessRoleAssign()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoProcessRoleAssign $midocoProcessRoleAssign
     */
    public function __construct(?\Pggns\MidocoApi\Workflow\StructType\MidocoProcessRoleAssign $midocoProcessRoleAssign = null)
    {
        $this
            ->setMidocoProcessRoleAssign($midocoProcessRoleAssign);
    }
    /**
     * Get MidocoProcessRoleAssign value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoProcessRoleAssign|null
     */
    public function getMidocoProcessRoleAssign(): ?\Pggns\MidocoApi\Workflow\StructType\MidocoProcessRoleAssign
    {
        return $this->MidocoProcessRoleAssign;
    }
    /**
     * Set MidocoProcessRoleAssign value
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoProcessRoleAssign $midocoProcessRoleAssign
     * @return \Pggns\MidocoApi\Workflow\StructType\DeAssignMidocoProcessRoleRequest
     */
    public function setMidocoProcessRoleAssign(?\Pggns\MidocoApi\Workflow\StructType\MidocoProcessRoleAssign $midocoProcessRoleAssign = null): self
    {
        $this->MidocoProcessRoleAssign = $midocoProcessRoleAssign;
        
        return $this;
    }
}
