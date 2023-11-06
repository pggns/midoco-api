<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoCredentialsForUserSessionResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoCredentialsForUserSessionResponse extends AbstractStructBase
{
    /**
     * The MidocoCredentials
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoCredentials
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     */
    protected \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType $MidocoCredentials;
    /**
     * Constructor method for GetMidocoCredentialsForUserSessionResponse
     * @uses GetMidocoCredentialsForUserSessionResponse::setMidocoCredentials()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType $midocoCredentials
     */
    public function __construct(\Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType $midocoCredentials)
    {
        $this
            ->setMidocoCredentials($midocoCredentials);
    }
    /**
     * Get MidocoCredentials value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     */
    public function getMidocoCredentials(): \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
    {
        return $this->MidocoCredentials;
    }
    /**
     * Set MidocoCredentials value
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType $midocoCredentials
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetMidocoCredentialsForUserSessionResponse
     */
    public function setMidocoCredentials(\Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType $midocoCredentials): self
    {
        $this->MidocoCredentials = $midocoCredentials;
        
        return $this;
    }
}
