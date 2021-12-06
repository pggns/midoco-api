<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSftpCredentialRequest StructType
 * @subpackage Structs
 */
class DeleteSftpCredentialRequest extends AbstractStructBase
{
    /**
     * The MidocoSftpCredential
     * Meta information extracted from the WSDL
     * - ref: MidocoSftpCredential
     * @var \Pggns\MidocoApi\CrmSD\StructType\SftpCredentialDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\SftpCredentialDTO $MidocoSftpCredential = null;
    /**
     * Constructor method for DeleteSftpCredentialRequest
     * @uses DeleteSftpCredentialRequest::setMidocoSftpCredential()
     * @param \Pggns\MidocoApi\CrmSD\StructType\SftpCredentialDTO $midocoSftpCredential
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\SftpCredentialDTO $midocoSftpCredential = null)
    {
        $this
            ->setMidocoSftpCredential($midocoSftpCredential);
    }
    /**
     * Get MidocoSftpCredential value
     * @return \Pggns\MidocoApi\CrmSD\StructType\SftpCredentialDTO|null
     */
    public function getMidocoSftpCredential(): ?\Pggns\MidocoApi\CrmSD\StructType\SftpCredentialDTO
    {
        return $this->MidocoSftpCredential;
    }
    /**
     * Set MidocoSftpCredential value
     * @param \Pggns\MidocoApi\CrmSD\StructType\SftpCredentialDTO $midocoSftpCredential
     * @return \Pggns\MidocoApi\CrmSD\StructType\DeleteSftpCredentialRequest
     */
    public function setMidocoSftpCredential(?\Pggns\MidocoApi\CrmSD\StructType\SftpCredentialDTO $midocoSftpCredential = null): self
    {
        $this->MidocoSftpCredential = $midocoSftpCredential;
        
        return $this;
    }
}
