<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDiversDocument StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoDiversDocument extends AbstractStructBase
{
    /**
     * The documentNumber
     * @var string|null
     */
    protected ?string $documentNumber = null;
    /**
     * The documentDate
     * @var string|null
     */
    protected ?string $documentDate = null;
    /**
     * Constructor method for MidocoDiversDocument
     * @uses MidocoDiversDocument::setDocumentNumber()
     * @uses MidocoDiversDocument::setDocumentDate()
     * @param string $documentNumber
     * @param string $documentDate
     */
    public function __construct(?string $documentNumber = null, ?string $documentDate = null)
    {
        $this
            ->setDocumentNumber($documentNumber)
            ->setDocumentDate($documentDate);
    }
    /**
     * Get documentNumber value
     * @return string|null
     */
    public function getDocumentNumber(): ?string
    {
        return $this->documentNumber;
    }
    /**
     * Set documentNumber value
     * @param string $documentNumber
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDiversDocument
     */
    public function setDocumentNumber(?string $documentNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($documentNumber) && !is_string($documentNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentNumber, true), gettype($documentNumber)), __LINE__);
        }
        $this->documentNumber = $documentNumber;
        
        return $this;
    }
    /**
     * Get documentDate value
     * @return string|null
     */
    public function getDocumentDate(): ?string
    {
        return $this->documentDate;
    }
    /**
     * Set documentDate value
     * @param string $documentDate
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDiversDocument
     */
    public function setDocumentDate(?string $documentDate = null): self
    {
        // validation for constraint: string
        if (!is_null($documentDate) && !is_string($documentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentDate, true), gettype($documentDate)), __LINE__);
        }
        $this->documentDate = $documentDate;
        
        return $this;
    }
}
