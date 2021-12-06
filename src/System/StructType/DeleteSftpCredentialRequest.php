<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

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
     * @var \Pggns\MidocoApi\System\StructType\SftpCredentialDTO|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\SftpCredentialDTO $MidocoSftpCredential = null;
    /**
     * Constructor method for DeleteSftpCredentialRequest
     * @uses DeleteSftpCredentialRequest::setMidocoSftpCredential()
     * @param \Pggns\MidocoApi\System\StructType\SftpCredentialDTO $midocoSftpCredential
     */
    public function __construct(?\Pggns\MidocoApi\System\StructType\SftpCredentialDTO $midocoSftpCredential = null)
    {
        $this
            ->setMidocoSftpCredential($midocoSftpCredential);
    }
    /**
     * Get MidocoSftpCredential value
     * @return \Pggns\MidocoApi\System\StructType\SftpCredentialDTO|null
     */
    public function getMidocoSftpCredential(): ?\Pggns\MidocoApi\System\StructType\SftpCredentialDTO
    {
        return $this->MidocoSftpCredential;
    }
    /**
     * Set MidocoSftpCredential value
     * @param \Pggns\MidocoApi\System\StructType\SftpCredentialDTO $midocoSftpCredential
     * @return \Pggns\MidocoApi\System\StructType\DeleteSftpCredentialRequest
     */
    public function setMidocoSftpCredential(?\Pggns\MidocoApi\System\StructType\SftpCredentialDTO $midocoSftpCredential = null): self
    {
        $this->MidocoSftpCredential = $midocoSftpCredential;
        
        return $this;
    }
}
