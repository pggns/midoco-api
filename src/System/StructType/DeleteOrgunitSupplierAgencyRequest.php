<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

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
     * @var \Pggns\MidocoApi\System\StructType\OrgunitSupplierAgencyDTO|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\OrgunitSupplierAgencyDTO $MidocoOrgunitSupplierAgency = null;
    /**
     * Constructor method for DeleteOrgunitSupplierAgencyRequest
     * @uses DeleteOrgunitSupplierAgencyRequest::setMidocoOrgunitSupplierAgency()
     * @param \Pggns\MidocoApi\System\StructType\OrgunitSupplierAgencyDTO $midocoOrgunitSupplierAgency
     */
    public function __construct(?\Pggns\MidocoApi\System\StructType\OrgunitSupplierAgencyDTO $midocoOrgunitSupplierAgency = null)
    {
        $this
            ->setMidocoOrgunitSupplierAgency($midocoOrgunitSupplierAgency);
    }
    /**
     * Get MidocoOrgunitSupplierAgency value
     * @return \Pggns\MidocoApi\System\StructType\OrgunitSupplierAgencyDTO|null
     */
    public function getMidocoOrgunitSupplierAgency(): ?\Pggns\MidocoApi\System\StructType\OrgunitSupplierAgencyDTO
    {
        return $this->MidocoOrgunitSupplierAgency;
    }
    /**
     * Set MidocoOrgunitSupplierAgency value
     * @param \Pggns\MidocoApi\System\StructType\OrgunitSupplierAgencyDTO $midocoOrgunitSupplierAgency
     * @return \Pggns\MidocoApi\System\StructType\DeleteOrgunitSupplierAgencyRequest
     */
    public function setMidocoOrgunitSupplierAgency(?\Pggns\MidocoApi\System\StructType\OrgunitSupplierAgencyDTO $midocoOrgunitSupplierAgency = null): self
    {
        $this->MidocoOrgunitSupplierAgency = $midocoOrgunitSupplierAgency;
        
        return $this;
    }
}
