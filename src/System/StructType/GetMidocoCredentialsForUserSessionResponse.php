<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

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
     * @var \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     */
    protected \Pggns\MidocoApi\System\StructType\MidocoCredentialsType $MidocoCredentials;
    /**
     * Constructor method for GetMidocoCredentialsForUserSessionResponse
     * @uses GetMidocoCredentialsForUserSessionResponse::setMidocoCredentials()
     * @param \Pggns\MidocoApi\System\StructType\MidocoCredentialsType $midocoCredentials
     */
    public function __construct(\Pggns\MidocoApi\System\StructType\MidocoCredentialsType $midocoCredentials)
    {
        $this
            ->setMidocoCredentials($midocoCredentials);
    }
    /**
     * Get MidocoCredentials value
     * @return \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     */
    public function getMidocoCredentials(): \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
    {
        return $this->MidocoCredentials;
    }
    /**
     * Set MidocoCredentials value
     * @param \Pggns\MidocoApi\System\StructType\MidocoCredentialsType $midocoCredentials
     * @return \Pggns\MidocoApi\System\StructType\GetMidocoCredentialsForUserSessionResponse
     */
    public function setMidocoCredentials(\Pggns\MidocoApi\System\StructType\MidocoCredentialsType $midocoCredentials): self
    {
        $this->MidocoCredentials = $midocoCredentials;
        
        return $this;
    }
}
