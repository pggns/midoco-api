<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

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
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCcToken|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCcToken $MidocoCcToken = null;
    /**
     * Constructor method for DeleteCcTokenRequest
     * @uses DeleteCcTokenRequest::setMidocoCcToken()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCcToken $midocoCcToken
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoCcToken $midocoCcToken = null)
    {
        $this
            ->setMidocoCcToken($midocoCcToken);
    }
    /**
     * Get MidocoCcToken value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCcToken|null
     */
    public function getMidocoCcToken(): ?\Pggns\MidocoApi\Crm\StructType\MidocoCcToken
    {
        return $this->MidocoCcToken;
    }
    /**
     * Set MidocoCcToken value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCcToken $midocoCcToken
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteCcTokenRequest
     */
    public function setMidocoCcToken(?\Pggns\MidocoApi\Crm\StructType\MidocoCcToken $midocoCcToken = null): self
    {
        $this->MidocoCcToken = $midocoCcToken;
        
        return $this;
    }
}
