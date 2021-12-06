<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAssignedReportForRoleResponse StructType
 * @subpackage Structs
 */
class GetAssignedReportForRoleResponse extends AbstractStructBase
{
    /**
     * The MidocoJasperForRoles
     * Meta information extracted from the WSDL
     * - ref: system:MidocoJasperForRoles
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperForRoles|null
     */
    protected ?\Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperForRoles $MidocoJasperForRoles = null;
    /**
     * Constructor method for GetAssignedReportForRoleResponse
     * @uses GetAssignedReportForRoleResponse::setMidocoJasperForRoles()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperForRoles $midocoJasperForRoles
     */
    public function __construct(?\Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperForRoles $midocoJasperForRoles = null)
    {
        $this
            ->setMidocoJasperForRoles($midocoJasperForRoles);
    }
    /**
     * Get MidocoJasperForRoles value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperForRoles|null
     */
    public function getMidocoJasperForRoles(): ?\Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperForRoles
    {
        return $this->MidocoJasperForRoles;
    }
    /**
     * Set MidocoJasperForRoles value
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperForRoles $midocoJasperForRoles
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetAssignedReportForRoleResponse
     */
    public function setMidocoJasperForRoles(?\Pggns\MidocoApi\Api\Mis\StructType\MidocoJasperForRoles $midocoJasperForRoles = null): self
    {
        $this->MidocoJasperForRoles = $midocoJasperForRoles;
        
        return $this;
    }
}
