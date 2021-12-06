<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveInsurerAddressRequest StructType
 * @subpackage Structs
 */
class SaveInsurerAddressRequest extends AbstractStructBase
{
    /**
     * The MidocoInsurerAddress
     * Meta information extracted from the WSDL
     * - ref: MidocoInsurerAddress
     * @var \Pggns\MidocoApi\System\StructType\MidocoInsurerAddress|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\MidocoInsurerAddress $MidocoInsurerAddress = null;
    /**
     * Constructor method for SaveInsurerAddressRequest
     * @uses SaveInsurerAddressRequest::setMidocoInsurerAddress()
     * @param \Pggns\MidocoApi\System\StructType\MidocoInsurerAddress $midocoInsurerAddress
     */
    public function __construct(?\Pggns\MidocoApi\System\StructType\MidocoInsurerAddress $midocoInsurerAddress = null)
    {
        $this
            ->setMidocoInsurerAddress($midocoInsurerAddress);
    }
    /**
     * Get MidocoInsurerAddress value
     * @return \Pggns\MidocoApi\System\StructType\MidocoInsurerAddress|null
     */
    public function getMidocoInsurerAddress(): ?\Pggns\MidocoApi\System\StructType\MidocoInsurerAddress
    {
        return $this->MidocoInsurerAddress;
    }
    /**
     * Set MidocoInsurerAddress value
     * @param \Pggns\MidocoApi\System\StructType\MidocoInsurerAddress $midocoInsurerAddress
     * @return \Pggns\MidocoApi\System\StructType\SaveInsurerAddressRequest
     */
    public function setMidocoInsurerAddress(?\Pggns\MidocoApi\System\StructType\MidocoInsurerAddress $midocoInsurerAddress = null): self
    {
        $this->MidocoInsurerAddress = $midocoInsurerAddress;
        
        return $this;
    }
}
