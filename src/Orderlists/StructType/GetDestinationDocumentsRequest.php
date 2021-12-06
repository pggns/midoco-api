<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDestinationDocumentsRequest StructType
 * @subpackage Structs
 */
class GetDestinationDocumentsRequest extends AbstractStructBase
{
    /**
     * The MidocoDestinationDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoDestinationDocument
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDestinationDocument|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDestinationDocument $MidocoDestinationDocument = null;
    /**
     * The ignoreCultureId
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $ignoreCultureId = null;
    /**
     * Constructor method for GetDestinationDocumentsRequest
     * @uses GetDestinationDocumentsRequest::setMidocoDestinationDocument()
     * @uses GetDestinationDocumentsRequest::setIgnoreCultureId()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDestinationDocument $midocoDestinationDocument
     * @param bool $ignoreCultureId
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDestinationDocument $midocoDestinationDocument = null, ?bool $ignoreCultureId = false)
    {
        $this
            ->setMidocoDestinationDocument($midocoDestinationDocument)
            ->setIgnoreCultureId($ignoreCultureId);
    }
    /**
     * Get MidocoDestinationDocument value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDestinationDocument|null
     */
    public function getMidocoDestinationDocument(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDestinationDocument
    {
        return $this->MidocoDestinationDocument;
    }
    /**
     * Set MidocoDestinationDocument value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDestinationDocument $midocoDestinationDocument
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetDestinationDocumentsRequest
     */
    public function setMidocoDestinationDocument(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDestinationDocument $midocoDestinationDocument = null): self
    {
        $this->MidocoDestinationDocument = $midocoDestinationDocument;
        
        return $this;
    }
    /**
     * Get ignoreCultureId value
     * @return bool|null
     */
    public function getIgnoreCultureId(): ?bool
    {
        return $this->ignoreCultureId;
    }
    /**
     * Set ignoreCultureId value
     * @param bool $ignoreCultureId
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetDestinationDocumentsRequest
     */
    public function setIgnoreCultureId(?bool $ignoreCultureId = false): self
    {
        // validation for constraint: boolean
        if (!is_null($ignoreCultureId) && !is_bool($ignoreCultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ignoreCultureId, true), gettype($ignoreCultureId)), __LINE__);
        }
        $this->ignoreCultureId = $ignoreCultureId;
        
        return $this;
    }
}