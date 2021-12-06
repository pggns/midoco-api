<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

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
     * @var \Pggns\MidocoApi\Crm\StructType\SftpCredentialDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\SftpCredentialDTO $MidocoSftpCredential = null;
    /**
     * Constructor method for SaveSftpCredentialRequest
     * @uses SaveSftpCredentialRequest::setMidocoSftpCredential()
     * @param \Pggns\MidocoApi\Crm\StructType\SftpCredentialDTO $midocoSftpCredential
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\SftpCredentialDTO $midocoSftpCredential = null)
    {
        $this
            ->setMidocoSftpCredential($midocoSftpCredential);
    }
    /**
     * Get MidocoSftpCredential value
     * @return \Pggns\MidocoApi\Crm\StructType\SftpCredentialDTO|null
     */
    public function getMidocoSftpCredential(): ?\Pggns\MidocoApi\Crm\StructType\SftpCredentialDTO
    {
        return $this->MidocoSftpCredential;
    }
    /**
     * Set MidocoSftpCredential value
     * @param \Pggns\MidocoApi\Crm\StructType\SftpCredentialDTO $midocoSftpCredential
     * @return \Pggns\MidocoApi\Crm\StructType\SaveSftpCredentialRequest
     */
    public function setMidocoSftpCredential(?\Pggns\MidocoApi\Crm\StructType\SftpCredentialDTO $midocoSftpCredential = null): self
    {
        $this->MidocoSftpCredential = $midocoSftpCredential;
        
        return $this;
    }
}
