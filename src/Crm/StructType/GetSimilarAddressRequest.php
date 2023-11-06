<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSimilarAddressRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSimilarAddressRequest extends AbstractStructBase
{
    /**
     * The MidocoSimilarAddress
     * Meta information extracted from the WSDL
     * - ref: MidocoSimilarAddress
     * @var \Pggns\MidocoApi\Crm\StructType\SimilarAddressDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\SimilarAddressDTO $MidocoSimilarAddress = null;
    /**
     * Constructor method for GetSimilarAddressRequest
     * @uses GetSimilarAddressRequest::setMidocoSimilarAddress()
     * @param \Pggns\MidocoApi\Crm\StructType\SimilarAddressDTO $midocoSimilarAddress
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\SimilarAddressDTO $midocoSimilarAddress = null)
    {
        $this
            ->setMidocoSimilarAddress($midocoSimilarAddress);
    }
    /**
     * Get MidocoSimilarAddress value
     * @return \Pggns\MidocoApi\Crm\StructType\SimilarAddressDTO|null
     */
    public function getMidocoSimilarAddress(): ?\Pggns\MidocoApi\Crm\StructType\SimilarAddressDTO
    {
        return $this->MidocoSimilarAddress;
    }
    /**
     * Set MidocoSimilarAddress value
     * @param \Pggns\MidocoApi\Crm\StructType\SimilarAddressDTO $midocoSimilarAddress
     * @return \Pggns\MidocoApi\Crm\StructType\GetSimilarAddressRequest
     */
    public function setMidocoSimilarAddress(?\Pggns\MidocoApi\Crm\StructType\SimilarAddressDTO $midocoSimilarAddress = null): self
    {
        $this->MidocoSimilarAddress = $midocoSimilarAddress;
        
        return $this;
    }
}
