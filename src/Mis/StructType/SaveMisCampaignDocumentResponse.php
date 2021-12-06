<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMisCampaignDocumentResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveDocument --- saves a document given as parameter
 * @subpackage Structs
 */
class SaveMisCampaignDocumentResponse extends AbstractStructBase
{
    /**
     * The misDocumentId
     * @var int|null
     */
    protected ?int $misDocumentId = null;
    /**
     * Constructor method for SaveMisCampaignDocumentResponse
     * @uses SaveMisCampaignDocumentResponse::setMisDocumentId()
     * @param int $misDocumentId
     */
    public function __construct(?int $misDocumentId = null)
    {
        $this
            ->setMisDocumentId($misDocumentId);
    }
    /**
     * Get misDocumentId value
     * @return int|null
     */
    public function getMisDocumentId(): ?int
    {
        return $this->misDocumentId;
    }
    /**
     * Set misDocumentId value
     * @param int $misDocumentId
     * @return \Pggns\MidocoApi\Mis\StructType\SaveMisCampaignDocumentResponse
     */
    public function setMisDocumentId(?int $misDocumentId = null): self
    {
        // validation for constraint: int
        if (!is_null($misDocumentId) && !(is_int($misDocumentId) || ctype_digit($misDocumentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($misDocumentId, true), gettype($misDocumentId)), __LINE__);
        }
        $this->misDocumentId = $misDocumentId;
        
        return $this;
    }
}
