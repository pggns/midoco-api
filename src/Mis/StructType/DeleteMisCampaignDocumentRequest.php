<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMisCampaignDocumentRequest StructType
 * @subpackage Structs
 */
class DeleteMisCampaignDocumentRequest extends AbstractStructBase
{
    /**
     * The MidocoMisCampaignDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoMisCampaignDocument
     * @var \Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO $MidocoMisCampaignDocument = null;
    /**
     * Constructor method for DeleteMisCampaignDocumentRequest
     * @uses DeleteMisCampaignDocumentRequest::setMidocoMisCampaignDocument()
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO $midocoMisCampaignDocument
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO $midocoMisCampaignDocument = null)
    {
        $this
            ->setMidocoMisCampaignDocument($midocoMisCampaignDocument);
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
     * @return \Pggns\MidocoApi\Mis\StructType\DeleteMisCampaignDocumentRequest
     */
    public function setMidocoMisCampaignDocument(?\Pggns\MidocoApi\Mis\StructType\MisCampaignDocumentDTO $midocoMisCampaignDocument = null): self
    {
        $this->MidocoMisCampaignDocument = $midocoMisCampaignDocument;
        
        return $this;
    }
}
