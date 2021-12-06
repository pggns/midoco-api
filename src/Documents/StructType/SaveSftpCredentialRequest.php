<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSftpCredentialRequest StructType
 * @subpackage Structs
 */
class SaveSftpCredentialRequest extends AbstractStructBase
{
    /**
     * The MidocoSftpCredential
     * Meta information extracted from the WSDL
     * - ref: MidocoSftpCredential
     * @var \Pggns\MidocoApi\Documents\StructType\SftpCredentialDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\SftpCredentialDTO $MidocoSftpCredential = null;
    /**
     * Constructor method for SaveSftpCredentialRequest
     * @uses SaveSftpCredentialRequest::setMidocoSftpCredential()
     * @param \Pggns\MidocoApi\Documents\StructType\SftpCredentialDTO $midocoSftpCredential
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\SftpCredentialDTO $midocoSftpCredential = null)
    {
        $this
            ->setMidocoSftpCredential($midocoSftpCredential);
    }
    /**
     * Get MidocoSftpCredential value
     * @return \Pggns\MidocoApi\Documents\StructType\SftpCredentialDTO|null
     */
    public function getMidocoSftpCredential(): ?\Pggns\MidocoApi\Documents\StructType\SftpCredentialDTO
    {
        return $this->MidocoSftpCredential;
    }
    /**
     * Set MidocoSftpCredential value
     * @param \Pggns\MidocoApi\Documents\StructType\SftpCredentialDTO $midocoSftpCredential
     * @return \Pggns\MidocoApi\Documents\StructType\SaveSftpCredentialRequest
     */
    public function setMidocoSftpCredential(?\Pggns\MidocoApi\Documents\StructType\SftpCredentialDTO $midocoSftpCredential = null): self
    {
        $this->MidocoSftpCredential = $midocoSftpCredential;
        
        return $this;
    }
}
