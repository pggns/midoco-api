<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeAssignMidocoProcessRoleResponse StructType
 * @subpackage Structs
 */
class DeAssignMidocoProcessRoleResponse extends AbstractStructBase
{
    /**
     * The MidocoProcessRoleAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoProcessRoleAssign
     * @var \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoProcessRoleAssign|null
     */
    protected ?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoProcessRoleAssign $MidocoProcessRoleAssign = null;
    /**
     * Constructor method for DeAssignMidocoProcessRoleResponse
     * @uses DeAssignMidocoProcessRoleResponse::setMidocoProcessRoleAssign()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoProcessRoleAssign $midocoProcessRoleAssign
     */
    public function __construct(?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoProcessRoleAssign $midocoProcessRoleAssign = null)
    {
        $this
            ->setMidocoProcessRoleAssign($midocoProcessRoleAssign);
    }
    /**
     * Get MidocoProcessRoleAssign value
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoProcessRoleAssign|null
     */
    public function getMidocoProcessRoleAssign(): ?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoProcessRoleAssign
    {
        return $this->MidocoProcessRoleAssign;
    }
    /**
     * Set MidocoProcessRoleAssign value
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoProcessRoleAssign $midocoProcessRoleAssign
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DeAssignMidocoProcessRoleResponse
     */
    public function setMidocoProcessRoleAssign(?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoProcessRoleAssign $midocoProcessRoleAssign = null): self
    {
        $this->MidocoProcessRoleAssign = $midocoProcessRoleAssign;
        
        return $this;
    }
}
