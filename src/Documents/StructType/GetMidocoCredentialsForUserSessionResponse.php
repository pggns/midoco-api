<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoCredentialsForUserSessionResponse StructType
 * @subpackage Structs
 */
class GetMidocoCredentialsForUserSessionResponse extends AbstractStructBase
{
    /**
     * The MidocoCredentials
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoCredentials
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType
     */
    protected \Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType $MidocoCredentials;
    /**
     * Constructor method for GetMidocoCredentialsForUserSessionResponse
     * @uses GetMidocoCredentialsForUserSessionResponse::setMidocoCredentials()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType $midocoCredentials
     */
    public function __construct(\Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType $midocoCredentials)
    {
        $this
            ->setMidocoCredentials($midocoCredentials);
    }
    /**
     * Get MidocoCredentials value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType
     */
    public function getMidocoCredentials(): \Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType
    {
        return $this->MidocoCredentials;
    }
    /**
     * Set MidocoCredentials value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType $midocoCredentials
     * @return \Pggns\MidocoApi\Documents\StructType\GetMidocoCredentialsForUserSessionResponse
     */
    public function setMidocoCredentials(\Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType $midocoCredentials): self
    {
        $this->MidocoCredentials = $midocoCredentials;
        
        return $this;
    }
}
