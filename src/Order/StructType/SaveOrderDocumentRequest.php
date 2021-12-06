<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderDocumentRequest StructType
 * @subpackage Structs
 */
class SaveOrderDocumentRequest extends AbstractStructBase
{
    /**
     * The executeOrderWorkflow
     * @var bool|null
     */
    protected ?bool $executeOrderWorkflow = null;
    /**
     * The MidocoOrderDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderDocument
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderDocument|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrderDocument $MidocoOrderDocument = null;
    /**
     * Constructor method for SaveOrderDocumentRequest
     * @uses SaveOrderDocumentRequest::setExecuteOrderWorkflow()
     * @uses SaveOrderDocumentRequest::setMidocoOrderDocument()
     * @param bool $executeOrderWorkflow
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderDocument $midocoOrderDocument
     */
    public function __construct(?bool $executeOrderWorkflow = null, ?\Pggns\MidocoApi\Order\StructType\MidocoOrderDocument $midocoOrderDocument = null)
    {
        $this
            ->setExecuteOrderWorkflow($executeOrderWorkflow)
            ->setMidocoOrderDocument($midocoOrderDocument);
    }
    /**
     * Get executeOrderWorkflow value
     * @return bool|null
     */
    public function getExecuteOrderWorkflow(): ?bool
    {
        return $this->executeOrderWorkflow;
    }
    /**
     * Set executeOrderWorkflow value
     * @param bool $executeOrderWorkflow
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderDocumentRequest
     */
    public function setExecuteOrderWorkflow(?bool $executeOrderWorkflow = null): self
    {
        // validation for constraint: boolean
        if (!is_null($executeOrderWorkflow) && !is_bool($executeOrderWorkflow)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($executeOrderWorkflow, true), gettype($executeOrderWorkflow)), __LINE__);
        }
        $this->executeOrderWorkflow = $executeOrderWorkflow;
        
        return $this;
    }
    /**
     * Get MidocoOrderDocument value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderDocument|null
     */
    public function getMidocoOrderDocument(): ?\Pggns\MidocoApi\Order\StructType\MidocoOrderDocument
    {
        return $this->MidocoOrderDocument;
    }
    /**
     * Set MidocoOrderDocument value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderDocument $midocoOrderDocument
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderDocumentRequest
     */
    public function setMidocoOrderDocument(?\Pggns\MidocoApi\Order\StructType\MidocoOrderDocument $midocoOrderDocument = null): self
    {
        $this->MidocoOrderDocument = $midocoOrderDocument;
        
        return $this;
    }
}
