<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDocumentConsistencyResponse StructType
 * @subpackage Structs
 */
class GetDocumentConsistencyResponse extends AbstractStructBase
{
    /**
     * The documentConsistency
     * @var string|null
     */
    protected ?string $documentConsistency = null;
    /**
     * Constructor method for GetDocumentConsistencyResponse
     * @uses GetDocumentConsistencyResponse::setDocumentConsistency()
     * @param string $documentConsistency
     */
    public function __construct(?string $documentConsistency = null)
    {
        $this
            ->setDocumentConsistency($documentConsistency);
    }
    /**
     * Get documentConsistency value
     * @return string|null
     */
    public function getDocumentConsistency(): ?string
    {
        return $this->documentConsistency;
    }
    /**
     * Set documentConsistency value
     * @uses \Pggns\MidocoApi\Documents\EnumType\DocumentConsistency::valueIsValid()
     * @uses \Pggns\MidocoApi\Documents\EnumType\DocumentConsistency::getValidValues()
     * @throws InvalidArgumentException
     * @param string $documentConsistency
     * @return \Pggns\MidocoApi\Documents\StructType\GetDocumentConsistencyResponse
     */
    public function setDocumentConsistency(?string $documentConsistency = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Documents\EnumType\DocumentConsistency::valueIsValid($documentConsistency)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Documents\EnumType\DocumentConsistency', is_array($documentConsistency) ? implode(', ', $documentConsistency) : var_export($documentConsistency, true), implode(', ', \Pggns\MidocoApi\Documents\EnumType\DocumentConsistency::getValidValues())), __LINE__);
        }
        $this->documentConsistency = $documentConsistency;
        
        return $this;
    }
}
