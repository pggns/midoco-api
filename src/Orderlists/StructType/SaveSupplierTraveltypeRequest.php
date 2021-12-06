<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierTraveltypeRequest StructType
 * @subpackage Structs
 */
class SaveSupplierTraveltypeRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierTraveltype
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierTraveltype
     * @var \Pggns\MidocoApi\Orderlists\StructType\SupplierTraveltypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\SupplierTraveltypeDTO $MidocoSupplierTraveltype = null;
    /**
     * Constructor method for SaveSupplierTraveltypeRequest
     * @uses SaveSupplierTraveltypeRequest::setMidocoSupplierTraveltype()
     * @param \Pggns\MidocoApi\Orderlists\StructType\SupplierTraveltypeDTO $midocoSupplierTraveltype
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\SupplierTraveltypeDTO $midocoSupplierTraveltype = null)
    {
        $this
            ->setMidocoSupplierTraveltype($midocoSupplierTraveltype);
    }
    /**
     * Get MidocoSupplierTraveltype value
     * @return \Pggns\MidocoApi\Orderlists\StructType\SupplierTraveltypeDTO|null
     */
    public function getMidocoSupplierTraveltype(): ?\Pggns\MidocoApi\Orderlists\StructType\SupplierTraveltypeDTO
    {
        return $this->MidocoSupplierTraveltype;
    }
    /**
     * Set MidocoSupplierTraveltype value
     * @param \Pggns\MidocoApi\Orderlists\StructType\SupplierTraveltypeDTO $midocoSupplierTraveltype
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveSupplierTraveltypeRequest
     */
    public function setMidocoSupplierTraveltype(?\Pggns\MidocoApi\Orderlists\StructType\SupplierTraveltypeDTO $midocoSupplierTraveltype = null): self
    {
        $this->MidocoSupplierTraveltype = $midocoSupplierTraveltype;
        
        return $this;
    }
}
