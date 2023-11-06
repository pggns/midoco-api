<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMisCampaignDocumentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMisCampaignDocumentRequest extends AbstractStructBase
{
    /**
     * The MidocoMisCampaignDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoMisCampaignDocument
     * @var \Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO $MidocoMisCampaignDocument = null;
    /**
     * The documentContent
     * @var string|null
     */
    protected ?string $documentContent = null;
    /**
     * Constructor method for SaveMisCampaignDocumentRequest
     * @uses SaveMisCampaignDocumentRequest::setMidocoMisCampaignDocument()
     * @uses SaveMisCampaignDocumentRequest::setDocumentContent()
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO $midocoMisCampaignDocument
     * @param string $documentContent
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO $midocoMisCampaignDocument = null, ?string $documentContent = null)
    {
        $this
            ->setMidocoMisCampaignDocument($midocoMisCampaignDocument)
            ->setDocumentContent($documentContent);
    }
    /**
     * Get MidocoMisCampaignDocument value
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO|null
     */
    public function getMidocoMisCampaignDocument(): ?\Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO
    {
        return $this->MidocoMisCampaignDocument;
    }
    /**
     * Set MidocoMisCampaignDocument value
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO $midocoMisCampaignDocument
     * @return \Pggns\MidocoApi\Mis\StructType\SaveMisCampaignDocumentRequest
     */
    public function setMidocoMisCampaignDocument(?\Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO $midocoMisCampaignDocument = null): self
    {
        $this->MidocoMisCampaignDocument = $midocoMisCampaignDocument;
        
        return $this;
    }
    /**
     * Get documentContent value
     * @return string|null
     */
    public function getDocumentContent(): ?string
    {
        return $this->documentContent;
    }
    /**
     * Set documentContent value
     * @param string $documentContent
     * @return \Pggns\MidocoApi\Mis\StructType\SaveMisCampaignDocumentRequest
     */
    public function setDocumentContent(?string $documentContent = null): self
    {
        // validation for constraint: string
        if (!is_null($documentContent) && !is_string($documentContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentContent, true), gettype($documentContent)), __LINE__);
        }
        $this->documentContent = $documentContent;
        
        return $this;
    }
}
