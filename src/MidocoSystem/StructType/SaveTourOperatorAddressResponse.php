<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTourOperatorAddressResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveTourOperatorAddressResponse extends AbstractStructBase
{
    /**
     * The MidocoTourOperatorAddress
     * Meta information extracted from the WSDL
     * - ref: MidocoTourOperatorAddress
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorAddress|null
     */
    protected ?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorAddress $MidocoTourOperatorAddress = null;
    /**
     * Constructor method for SaveTourOperatorAddressResponse
     * @uses SaveTourOperatorAddressResponse::setMidocoTourOperatorAddress()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress
     */
    public function __construct(?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress = null)
    {
        $this
            ->setMidocoTourOperatorAddress($midocoTourOperatorAddress);
    }
    /**
     * Get MidocoTourOperatorAddress value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorAddress|null
     */
    public function getMidocoTourOperatorAddress(): ?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorAddress
    {
        return $this->MidocoTourOperatorAddress;
    }
    /**
     * Set MidocoTourOperatorAddress value
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SaveTourOperatorAddressResponse
     */
    public function setMidocoTourOperatorAddress(?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress = null): self
    {
        $this->MidocoTourOperatorAddress = $midocoTourOperatorAddress;
        
        return $this;
    }
}
