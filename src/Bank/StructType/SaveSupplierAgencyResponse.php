<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierAgencyResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSupplierAgencyResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierAgency
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAgency
     * @var \Pggns\MidocoApi\Bank\StructType\SupplierAgencyDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\SupplierAgencyDTO $MidocoSupplierAgency = null;
    /**
     * Constructor method for SaveSupplierAgencyResponse
     * @uses SaveSupplierAgencyResponse::setMidocoSupplierAgency()
     * @param \Pggns\MidocoApi\Bank\StructType\SupplierAgencyDTO $midocoSupplierAgency
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\SupplierAgencyDTO $midocoSupplierAgency = null)
    {
        $this
            ->setMidocoSupplierAgency($midocoSupplierAgency);
    }
    /**
     * Get MidocoSupplierAgency value
     * @return \Pggns\MidocoApi\Bank\StructType\SupplierAgencyDTO|null
     */
    public function getMidocoSupplierAgency(): ?\Pggns\MidocoApi\Bank\StructType\SupplierAgencyDTO
    {
        return $this->MidocoSupplierAgency;
    }
    /**
     * Set MidocoSupplierAgency value
     * @param \Pggns\MidocoApi\Bank\StructType\SupplierAgencyDTO $midocoSupplierAgency
     * @return \Pggns\MidocoApi\Bank\StructType\SaveSupplierAgencyResponse
     */
    public function setMidocoSupplierAgency(?\Pggns\MidocoApi\Bank\StructType\SupplierAgencyDTO $midocoSupplierAgency = null): self
    {
        $this->MidocoSupplierAgency = $midocoSupplierAgency;
        
        return $this;
    }
}
