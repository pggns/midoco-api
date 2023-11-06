<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveInsurerAddressRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveInsurerAddressRequest extends AbstractStructBase
{
    /**
     * The MidocoInsurerAddress
     * Meta information extracted from the WSDL
     * - ref: MidocoInsurerAddress
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\MidocoInsurerAddress|null
     */
    protected ?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoInsurerAddress $MidocoInsurerAddress = null;
    /**
     * Constructor method for SaveInsurerAddressRequest
     * @uses SaveInsurerAddressRequest::setMidocoInsurerAddress()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoInsurerAddress $midocoInsurerAddress
     */
    public function __construct(?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoInsurerAddress $midocoInsurerAddress = null)
    {
        $this
            ->setMidocoInsurerAddress($midocoInsurerAddress);
    }
    /**
     * Get MidocoInsurerAddress value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\MidocoInsurerAddress|null
     */
    public function getMidocoInsurerAddress(): ?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoInsurerAddress
    {
        return $this->MidocoInsurerAddress;
    }
    /**
     * Set MidocoInsurerAddress value
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoInsurerAddress $midocoInsurerAddress
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SaveInsurerAddressRequest
     */
    public function setMidocoInsurerAddress(?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoInsurerAddress $midocoInsurerAddress = null): self
    {
        $this->MidocoInsurerAddress = $midocoInsurerAddress;
        
        return $this;
    }
}
