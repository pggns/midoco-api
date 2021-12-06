<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetHistoryDocumentResponse StructType
 * @subpackage Structs
 */
class GetHistoryDocumentResponse extends AbstractStructBase
{
    /**
     * The xml
     * @var string|null
     */
    protected ?string $xml = null;
    /**
     * Constructor method for GetHistoryDocumentResponse
     * @uses GetHistoryDocumentResponse::setXml()
     * @param string $xml
     */
    public function __construct(?string $xml = null)
    {
        $this
            ->setXml($xml);
    }
    /**
     * Get xml value
     * @return string|null
     */
    public function getXml(): ?string
    {
        return $this->xml;
    }
    /**
     * Set xml value
     * @param string $xml
     * @return \Pggns\MidocoApi\Documents\StructType\GetHistoryDocumentResponse
     */
    public function setXml(?string $xml = null): self
    {
        // validation for constraint: string
        if (!is_null($xml) && !is_string($xml)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($xml, true), gettype($xml)), __LINE__);
        }
        $this->xml = $xml;
        
        return $this;
    }
}
