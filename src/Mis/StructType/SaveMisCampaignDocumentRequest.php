<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMisCampaignDocumentRequest StructType
 * @subpackage Structs
 */
class SaveMisCampaignDocumentRequest extends AbstractStructBase
{
    /**
     * The MidocoMisCampaignDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoMisCampaignDocument
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignDocumentDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Mis\StructType\MisCampaignDocumentDTO $MidocoMisCampaignDocument = null;
    /**
     * Constructor method for SaveMisCampaignDocumentRequest
     * @uses SaveMisCampaignDocumentRequest::setMidocoMisCampaignDocument()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignDocumentDTO $midocoMisCampaignDocument
     */
    public function __construct(?\Pggns\MidocoApi\Api\Mis\StructType\MisCampaignDocumentDTO $midocoMisCampaignDocument = null)
    {
        $this
            ->setMidocoMisCampaignDocument($midocoMisCampaignDocument);
    }
    /**
     * Get MidocoMisCampaignDocument value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignDocumentDTO|null
     */
    public function getMidocoMisCampaignDocument(): ?\Pggns\MidocoApi\Api\Mis\StructType\MisCampaignDocumentDTO
    {
        return $this->MidocoMisCampaignDocument;
    }
    /**
     * Set MidocoMisCampaignDocument value
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignDocumentDTO $midocoMisCampaignDocument
     * @return \Pggns\MidocoApi\Api\Mis\StructType\SaveMisCampaignDocumentRequest
     */
    public function setMidocoMisCampaignDocument(?\Pggns\MidocoApi\Api\Mis\StructType\MisCampaignDocumentDTO $midocoMisCampaignDocument = null): self
    {
        $this->MidocoMisCampaignDocument = $midocoMisCampaignDocument;
        
        return $this;
    }
}
