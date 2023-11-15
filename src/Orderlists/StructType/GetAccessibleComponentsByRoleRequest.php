<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

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
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoAccessibleComponentByRoleType
     */
    protected \Pggns\MidocoApi\Orderlists\StructType\MidocoAccessibleComponentByRoleType $MidocoAccessibleComponentByRole;
    /**
     * Constructor method for GetAccessibleComponentsByRoleRequest
     * @uses GetAccessibleComponentsByRoleRequest::setMidocoAccessibleComponentByRole()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole
     */
    public function __construct(\Pggns\MidocoApi\Orderlists\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole)
    {
        $this
            ->setMidocoAccessibleComponentByRole($midocoAccessibleComponentByRole);
    }
    /**
     * Get MidocoAccessibleComponentByRole value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoAccessibleComponentByRoleType
     */
    public function getMidocoAccessibleComponentByRole(): \Pggns\MidocoApi\Orderlists\StructType\MidocoAccessibleComponentByRoleType
    {
        return $this->MidocoAccessibleComponentByRole;
    }
    /**
     * Set MidocoAccessibleComponentByRole value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetAccessibleComponentsByRoleRequest
     */
    public function setMidocoAccessibleComponentByRole(\Pggns\MidocoApi\Orderlists\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole): self
    {
        $this->MidocoAccessibleComponentByRole = $midocoAccessibleComponentByRole;
        
        return $this;
    }
}
