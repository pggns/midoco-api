<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSimilarAddressRequest StructType
 * @subpackage Structs
 */
class GetSimilarAddressRequest extends AbstractStructBase
{
    /**
     * The MidocoSimilarAddress
     * Meta information extracted from the WSDL
     * - ref: MidocoSimilarAddress
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\SimilarAddressDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\SimilarAddressDTO $MidocoSimilarAddress = null;
    /**
     * Constructor method for GetSimilarAddressRequest
     * @uses GetSimilarAddressRequest::setMidocoSimilarAddress()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\SimilarAddressDTO $midocoSimilarAddress
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\SimilarAddressDTO $midocoSimilarAddress = null)
    {
        $this
            ->setMidocoSimilarAddress($midocoSimilarAddress);
    }
    /**
     * Get MidocoSimilarAddress value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SimilarAddressDTO|null
     */
    public function getMidocoSimilarAddress(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\SimilarAddressDTO
    {
        return $this->MidocoSimilarAddress;
    }
    /**
     * Set MidocoSimilarAddress value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\SimilarAddressDTO $midocoSimilarAddress
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetSimilarAddressRequest
     */
    public function setMidocoSimilarAddress(?\Pggns\MidocoApi\Api\CrmSD\StructType\SimilarAddressDTO $midocoSimilarAddress = null): self
    {
        $this->MidocoSimilarAddress = $midocoSimilarAddress;
        
        return $this;
    }
}
