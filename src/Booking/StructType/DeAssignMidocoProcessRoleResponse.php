<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Booking\StructType;

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
     * @var \Pggns\MidocoApi\Booking\StructType\MidocoProcessRoleAssign|null
     */
    protected ?\Pggns\MidocoApi\Booking\StructType\MidocoProcessRoleAssign $MidocoProcessRoleAssign = null;
    /**
     * Constructor method for DeAssignMidocoProcessRoleResponse
     * @uses DeAssignMidocoProcessRoleResponse::setMidocoProcessRoleAssign()
     * @param \Pggns\MidocoApi\Booking\StructType\MidocoProcessRoleAssign $midocoProcessRoleAssign
     */
    public function __construct(?\Pggns\MidocoApi\Booking\StructType\MidocoProcessRoleAssign $midocoProcessRoleAssign = null)
    {
        $this
            ->setMidocoProcessRoleAssign($midocoProcessRoleAssign);
    }
    /**
     * Get MidocoProcessRoleAssign value
     * @return \Pggns\MidocoApi\Booking\StructType\MidocoProcessRoleAssign|null
     */
    public function getMidocoProcessRoleAssign(): ?\Pggns\MidocoApi\Booking\StructType\MidocoProcessRoleAssign
    {
        return $this->MidocoProcessRoleAssign;
    }
    /**
     * Set MidocoProcessRoleAssign value
     * @param \Pggns\MidocoApi\Booking\StructType\MidocoProcessRoleAssign $midocoProcessRoleAssign
     * @return \Pggns\MidocoApi\Booking\StructType\DeAssignMidocoProcessRoleResponse
     */
    public function setMidocoProcessRoleAssign(?\Pggns\MidocoApi\Booking\StructType\MidocoProcessRoleAssign $midocoProcessRoleAssign = null): self
    {
        $this->MidocoProcessRoleAssign = $midocoProcessRoleAssign;
        
        return $this;
    }
}
