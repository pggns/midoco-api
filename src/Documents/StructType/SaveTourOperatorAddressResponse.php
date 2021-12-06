<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTourOperatorAddressResponse StructType
 * @subpackage Structs
 */
class SaveTourOperatorAddressResponse extends AbstractStructBase
{
    /**
     * The MidocoTourOperatorAddress
     * Meta information extracted from the WSDL
     * - ref: MidocoTourOperatorAddress
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorAddress|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorAddress $MidocoTourOperatorAddress = null;
    /**
     * Constructor method for SaveTourOperatorAddressResponse
     * @uses SaveTourOperatorAddressResponse::setMidocoTourOperatorAddress()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress = null)
    {
        $this
            ->setMidocoTourOperatorAddress($midocoTourOperatorAddress);
    }
    /**
     * Get MidocoTourOperatorAddress value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorAddress|null
     */
    public function getMidocoTourOperatorAddress(): ?\Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorAddress
    {
        return $this->MidocoTourOperatorAddress;
    }
    /**
     * Set MidocoTourOperatorAddress value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress
     * @return \Pggns\MidocoApi\Documents\StructType\SaveTourOperatorAddressResponse
     */
    public function setMidocoTourOperatorAddress(?\Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress = null): self
    {
        $this->MidocoTourOperatorAddress = $midocoTourOperatorAddress;
        
        return $this;
    }
}
