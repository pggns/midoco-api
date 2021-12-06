<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCcTokenRequest StructType
 * @subpackage Structs
 */
class DeleteCcTokenRequest extends AbstractStructBase
{
    /**
     * The MidocoCcToken
     * Meta information extracted from the WSDL
     * - ref: MidocoCcToken
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoCcToken|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoCcToken $MidocoCcToken = null;
    /**
     * Constructor method for DeleteCcTokenRequest
     * @uses DeleteCcTokenRequest::setMidocoCcToken()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCcToken $midocoCcToken
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoCcToken $midocoCcToken = null)
    {
        $this
            ->setMidocoCcToken($midocoCcToken);
    }
    /**
     * Get MidocoCcToken value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoCcToken|null
     */
    public function getMidocoCcToken(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoCcToken
    {
        return $this->MidocoCcToken;
    }
    /**
     * Set MidocoCcToken value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCcToken $midocoCcToken
     * @return \Pggns\MidocoApi\CrmSD\StructType\DeleteCcTokenRequest
     */
    public function setMidocoCcToken(?\Pggns\MidocoApi\CrmSD\StructType\MidocoCcToken $midocoCcToken = null): self
    {
        $this->MidocoCcToken = $midocoCcToken;
        
        return $this;
    }
}
