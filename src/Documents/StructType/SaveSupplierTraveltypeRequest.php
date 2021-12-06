<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

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
     * @var \Pggns\MidocoApi\Documents\StructType\SupplierTraveltypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\SupplierTraveltypeDTO $MidocoSupplierTraveltype = null;
    /**
     * Constructor method for SaveSupplierTraveltypeRequest
     * @uses SaveSupplierTraveltypeRequest::setMidocoSupplierTraveltype()
     * @param \Pggns\MidocoApi\Documents\StructType\SupplierTraveltypeDTO $midocoSupplierTraveltype
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\SupplierTraveltypeDTO $midocoSupplierTraveltype = null)
    {
        $this
            ->setMidocoSupplierTraveltype($midocoSupplierTraveltype);
    }
    /**
     * Get MidocoSupplierTraveltype value
     * @return \Pggns\MidocoApi\Documents\StructType\SupplierTraveltypeDTO|null
     */
    public function getMidocoSupplierTraveltype(): ?\Pggns\MidocoApi\Documents\StructType\SupplierTraveltypeDTO
    {
        return $this->MidocoSupplierTraveltype;
    }
    /**
     * Set MidocoSupplierTraveltype value
     * @param \Pggns\MidocoApi\Documents\StructType\SupplierTraveltypeDTO $midocoSupplierTraveltype
     * @return \Pggns\MidocoApi\Documents\StructType\SaveSupplierTraveltypeRequest
     */
    public function setMidocoSupplierTraveltype(?\Pggns\MidocoApi\Documents\StructType\SupplierTraveltypeDTO $midocoSupplierTraveltype = null): self
    {
        $this->MidocoSupplierTraveltype = $midocoSupplierTraveltype;
        
        return $this;
    }
}
