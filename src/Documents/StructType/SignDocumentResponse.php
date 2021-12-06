<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignDocumentResponse StructType
 * @subpackage Structs
 */
class SignDocumentResponse extends AbstractStructBase
{
    /**
     * The signedDocument
     * @var string|null
     */
    protected ?string $signedDocument = null;
    /**
     * Constructor method for SignDocumentResponse
     * @uses SignDocumentResponse::setSignedDocument()
     * @param string $signedDocument
     */
    public function __construct(?string $signedDocument = null)
    {
        $this
            ->setSignedDocument($signedDocument);
    }
    /**
     * Get signedDocument value
     * @return string|null
     */
    public function getSignedDocument(): ?string
    {
        return $this->signedDocument;
    }
    /**
     * Set signedDocument value
     * @param string $signedDocument
     * @return \Pggns\MidocoApi\Documents\StructType\SignDocumentResponse
     */
    public function setSignedDocument(?string $signedDocument = null): self
    {
        // validation for constraint: string
        if (!is_null($signedDocument) && !is_string($signedDocument)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signedDocument, true), gettype($signedDocument)), __LINE__);
        }
        $this->signedDocument = $signedDocument;
        
        return $this;
    }
}
