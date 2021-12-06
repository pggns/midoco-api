<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTourOperatorAddressRequest StructType
 * @subpackage Structs
 */
class SaveTourOperatorAddressRequest extends AbstractStructBase
{
    /**
     * The MidocoTourOperatorAddress
     * Meta information extracted from the WSDL
     * - ref: MidocoTourOperatorAddress
     * @var \Pggns\MidocoApi\System\StructType\MidocoTourOperatorAddress|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\MidocoTourOperatorAddress $MidocoTourOperatorAddress = null;
    /**
     * Constructor method for SaveTourOperatorAddressRequest
     * @uses SaveTourOperatorAddressRequest::setMidocoTourOperatorAddress()
     * @param \Pggns\MidocoApi\System\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress
     */
    public function __construct(?\Pggns\MidocoApi\System\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress = null)
    {
        $this
            ->setMidocoTourOperatorAddress($midocoTourOperatorAddress);
    }
    /**
     * Get MidocoTourOperatorAddress value
     * @return \Pggns\MidocoApi\System\StructType\MidocoTourOperatorAddress|null
     */
    public function getMidocoTourOperatorAddress(): ?\Pggns\MidocoApi\System\StructType\MidocoTourOperatorAddress
    {
        return $this->MidocoTourOperatorAddress;
    }
    /**
     * Set MidocoTourOperatorAddress value
     * @param \Pggns\MidocoApi\System\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress
     * @return \Pggns\MidocoApi\System\StructType\SaveTourOperatorAddressRequest
     */
    public function setMidocoTourOperatorAddress(?\Pggns\MidocoApi\System\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress = null): self
    {
        $this->MidocoTourOperatorAddress = $midocoTourOperatorAddress;
        
        return $this;
    }
}
