<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAssignedReportForRoleResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAssignedReportForRoleResponse extends AbstractStructBase
{
    /**
     * The MidocoJasperForRoles
     * Meta information extracted from the WSDL
     * - ref: system:MidocoJasperForRoles
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoJasperForRoles|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MidocoJasperForRoles $MidocoJasperForRoles = null;
    /**
     * Constructor method for GetAssignedReportForRoleResponse
     * @uses GetAssignedReportForRoleResponse::setMidocoJasperForRoles()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoJasperForRoles $midocoJasperForRoles
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\MidocoJasperForRoles $midocoJasperForRoles = null)
    {
        $this
            ->setMidocoJasperForRoles($midocoJasperForRoles);
    }
    /**
     * Get MidocoJasperForRoles value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoJasperForRoles|null
     */
    public function getMidocoJasperForRoles(): ?\Pggns\MidocoApi\Mis\StructType\MidocoJasperForRoles
    {
        return $this->MidocoJasperForRoles;
    }
    /**
     * Set MidocoJasperForRoles value
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoJasperForRoles $midocoJasperForRoles
     * @return \Pggns\MidocoApi\Mis\StructType\GetAssignedReportForRoleResponse
     */
    public function setMidocoJasperForRoles(?\Pggns\MidocoApi\Mis\StructType\MidocoJasperForRoles $midocoJasperForRoles = null): self
    {
        $this->MidocoJasperForRoles = $midocoJasperForRoles;
        
        return $this;
    }
}
