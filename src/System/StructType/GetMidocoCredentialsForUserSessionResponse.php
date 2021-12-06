<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\System\StructType;

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
     * @var \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType
     */
    protected \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType $MidocoCredentials;
    /**
     * Constructor method for GetMidocoCredentialsForUserSessionResponse
     * @uses GetMidocoCredentialsForUserSessionResponse::setMidocoCredentials()
     * @param \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType $midocoCredentials
     */
    public function __construct(\Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType $midocoCredentials)
    {
        $this
            ->setMidocoCredentials($midocoCredentials);
    }
    /**
     * Get MidocoCredentials value
     * @return \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType
     */
    public function getMidocoCredentials(): \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType
    {
        return $this->MidocoCredentials;
    }
    /**
     * Set MidocoCredentials value
     * @param \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType $midocoCredentials
     * @return \Pggns\MidocoApi\Api\System\StructType\GetMidocoCredentialsForUserSessionResponse
     */
    public function setMidocoCredentials(\Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType $midocoCredentials): self
    {
        $this->MidocoCredentials = $midocoCredentials;
        
        return $this;
    }
}
