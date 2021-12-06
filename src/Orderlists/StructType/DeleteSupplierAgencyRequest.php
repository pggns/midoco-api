<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSupplierAgencyRequest StructType
 * @subpackage Structs
 */
class DeleteSupplierAgencyRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAgency
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAgency
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAgencyDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAgencyDTO $MidocoSupplierAgency = null;
    /**
     * Constructor method for DeleteSupplierAgencyRequest
     * @uses DeleteSupplierAgencyRequest::setMidocoSupplierAgency()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAgencyDTO $midocoSupplierAgency
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAgencyDTO $midocoSupplierAgency = null)
    {
        $this
            ->setMidocoSupplierAgency($midocoSupplierAgency);
    }
    /**
     * Get MidocoSupplierAgency value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAgencyDTO|null
     */
    public function getMidocoSupplierAgency(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAgencyDTO
    {
        return $this->MidocoSupplierAgency;
    }
    /**
     * Set MidocoSupplierAgency value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAgencyDTO $midocoSupplierAgency
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\DeleteSupplierAgencyRequest
     */
    public function setMidocoSupplierAgency(?\Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAgencyDTO $midocoSupplierAgency = null): self
    {
        $this->MidocoSupplierAgency = $midocoSupplierAgency;
        
        return $this;
    }
}