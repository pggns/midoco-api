<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccessibleComponentsByRoleRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAccessibleComponentsByRoleRequest extends AbstractStructBase
{
    /**
     * The MidocoAccessibleComponentByRole
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - ref: MidocoAccessibleComponentByRole
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoAccessibleComponentByRoleType
     */
    protected \Pggns\MidocoApi\Documents\StructType\MidocoAccessibleComponentByRoleType $MidocoAccessibleComponentByRole;
    /**
     * Constructor method for GetAccessibleComponentsByRoleRequest
     * @uses GetAccessibleComponentsByRoleRequest::setMidocoAccessibleComponentByRole()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole
     */
    public function __construct(\Pggns\MidocoApi\Documents\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole)
    {
        $this
            ->setMidocoAccessibleComponentByRole($midocoAccessibleComponentByRole);
    }
    /**
     * Get MidocoAccessibleComponentByRole value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoAccessibleComponentByRoleType
     */
    public function getMidocoAccessibleComponentByRole(): \Pggns\MidocoApi\Documents\StructType\MidocoAccessibleComponentByRoleType
    {
        return $this->MidocoAccessibleComponentByRole;
    }
    /**
     * Set MidocoAccessibleComponentByRole value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole
     * @return \Pggns\MidocoApi\Documents\StructType\GetAccessibleComponentsByRoleRequest
     */
    public function setMidocoAccessibleComponentByRole(\Pggns\MidocoApi\Documents\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole): self
    {
        $this->MidocoAccessibleComponentByRole = $midocoAccessibleComponentByRole;
        
        return $this;
    }
}
