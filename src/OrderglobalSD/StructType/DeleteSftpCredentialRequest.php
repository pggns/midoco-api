<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSftpCredentialRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteSftpCredentialRequest extends AbstractStructBase
{
    /**
     * The MidocoSftpCredential
     * Meta information extracted from the WSDL
     * - ref: MidocoSftpCredential
     * @var \Pggns\MidocoApi\OrderglobalSD\StructType\SftpCredentialDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderglobalSD\StructType\SftpCredentialDTO $MidocoSftpCredential = null;
    /**
     * Constructor method for DeleteSftpCredentialRequest
     * @uses DeleteSftpCredentialRequest::setMidocoSftpCredential()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\SftpCredentialDTO $midocoSftpCredential
     */
    public function __construct(?\Pggns\MidocoApi\OrderglobalSD\StructType\SftpCredentialDTO $midocoSftpCredential = null)
    {
        $this
            ->setMidocoSftpCredential($midocoSftpCredential);
    }
    /**
     * Get MidocoSftpCredential value
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\SftpCredentialDTO|null
     */
    public function getMidocoSftpCredential(): ?\Pggns\MidocoApi\OrderglobalSD\StructType\SftpCredentialDTO
    {
        return $this->MidocoSftpCredential;
    }
    /**
     * Set MidocoSftpCredential value
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\SftpCredentialDTO $midocoSftpCredential
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DeleteSftpCredentialRequest
     */
    public function setMidocoSftpCredential(?\Pggns\MidocoApi\OrderglobalSD\StructType\SftpCredentialDTO $midocoSftpCredential = null): self
    {
        $this->MidocoSftpCredential = $midocoSftpCredential;
        
        return $this;
    }
}
