<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrgunitSupplierAgencyRequest StructType
 * @subpackage Structs
 */
class SaveOrgunitSupplierAgencyRequest extends AbstractStructBase
{
    /**
     * The MidocoOrgunitSupplierAgency
     * Meta information extracted from the WSDL
     * - ref: MidocoOrgunitSupplierAgency
     * @var \Pggns\MidocoApi\Documents\StructType\OrgunitSupplierAgencyDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\OrgunitSupplierAgencyDTO $MidocoOrgunitSupplierAgency = null;
    /**
     * Constructor method for SaveOrgunitSupplierAgencyRequest
     * @uses SaveOrgunitSupplierAgencyRequest::setMidocoOrgunitSupplierAgency()
     * @param \Pggns\MidocoApi\Documents\StructType\OrgunitSupplierAgencyDTO $midocoOrgunitSupplierAgency
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\OrgunitSupplierAgencyDTO $midocoOrgunitSupplierAgency = null)
    {
        $this
            ->setMidocoOrgunitSupplierAgency($midocoOrgunitSupplierAgency);
    }
    /**
     * Get MidocoOrgunitSupplierAgency value
     * @return \Pggns\MidocoApi\Documents\StructType\OrgunitSupplierAgencyDTO|null
     */
    public function getMidocoOrgunitSupplierAgency(): ?\Pggns\MidocoApi\Documents\StructType\OrgunitSupplierAgencyDTO
    {
        return $this->MidocoOrgunitSupplierAgency;
    }
    /**
     * Set MidocoOrgunitSupplierAgency value
     * @param \Pggns\MidocoApi\Documents\StructType\OrgunitSupplierAgencyDTO $midocoOrgunitSupplierAgency
     * @return \Pggns\MidocoApi\Documents\StructType\SaveOrgunitSupplierAgencyRequest
     */
    public function setMidocoOrgunitSupplierAgency(?\Pggns\MidocoApi\Documents\StructType\OrgunitSupplierAgencyDTO $midocoOrgunitSupplierAgency = null): self
    {
        $this->MidocoOrgunitSupplierAgency = $midocoOrgunitSupplierAgency;
        
        return $this;
    }
}
