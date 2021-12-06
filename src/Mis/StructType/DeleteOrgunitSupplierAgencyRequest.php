<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteOrgunitSupplierAgencyRequest StructType
 * @subpackage Structs
 */
class DeleteOrgunitSupplierAgencyRequest extends AbstractStructBase
{
    /**
     * The MidocoOrgunitSupplierAgency
     * Meta information extracted from the WSDL
     * - ref: MidocoOrgunitSupplierAgency
     * @var \Pggns\MidocoApi\Mis\StructType\OrgunitSupplierAgencyDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\OrgunitSupplierAgencyDTO $MidocoOrgunitSupplierAgency = null;
    /**
     * Constructor method for DeleteOrgunitSupplierAgencyRequest
     * @uses DeleteOrgunitSupplierAgencyRequest::setMidocoOrgunitSupplierAgency()
     * @param \Pggns\MidocoApi\Mis\StructType\OrgunitSupplierAgencyDTO $midocoOrgunitSupplierAgency
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\OrgunitSupplierAgencyDTO $midocoOrgunitSupplierAgency = null)
    {
        $this
            ->setMidocoOrgunitSupplierAgency($midocoOrgunitSupplierAgency);
    }
    /**
     * Get MidocoOrgunitSupplierAgency value
     * @return \Pggns\MidocoApi\Mis\StructType\OrgunitSupplierAgencyDTO|null
     */
    public function getMidocoOrgunitSupplierAgency(): ?\Pggns\MidocoApi\Mis\StructType\OrgunitSupplierAgencyDTO
    {
        return $this->MidocoOrgunitSupplierAgency;
    }
    /**
     * Set MidocoOrgunitSupplierAgency value
     * @param \Pggns\MidocoApi\Mis\StructType\OrgunitSupplierAgencyDTO $midocoOrgunitSupplierAgency
     * @return \Pggns\MidocoApi\Mis\StructType\DeleteOrgunitSupplierAgencyRequest
     */
    public function setMidocoOrgunitSupplierAgency(?\Pggns\MidocoApi\Mis\StructType\OrgunitSupplierAgencyDTO $midocoOrgunitSupplierAgency = null): self
    {
        $this->MidocoOrgunitSupplierAgency = $midocoOrgunitSupplierAgency;
        
        return $this;
    }
}
