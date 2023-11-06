<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCcCardRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteCcCardRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmCcCard
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCcCard
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmCcCard|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCcCard $MidocoCrmCcCard = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * The invokeWorkflow
     * Meta information extracted from the WSDL
     * - documentation: Optional workflow execution to show a task in workflow after deleting a CC card in CRM. It is optional because a workflow execution during batch processing will result in longer execution time.
     * - default: false
     * @var bool|null
     */
    protected ?bool $invokeWorkflow = null;
    /**
     * Constructor method for DeleteCcCardRequest
     * @uses DeleteCcCardRequest::setMidocoCrmCcCard()
     * @uses DeleteCcCardRequest::setInternalVersion()
     * @uses DeleteCcCardRequest::setInvokeWorkflow()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCcCard $midocoCrmCcCard
     * @param int $internalVersion
     * @param bool $invokeWorkflow
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCcCard $midocoCrmCcCard = null, ?int $internalVersion = null, ?bool $invokeWorkflow = false)
    {
        $this
            ->setMidocoCrmCcCard($midocoCrmCcCard)
            ->setInternalVersion($internalVersion)
            ->setInvokeWorkflow($invokeWorkflow);
    }
    /**
     * Get MidocoCrmCcCard value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmCcCard|null
     */
    public function getMidocoCrmCcCard(): ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCcCard
    {
        return $this->MidocoCrmCcCard;
    }
    /**
     * Set MidocoCrmCcCard value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCcCard $midocoCrmCcCard
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteCcCardRequest
     */
    public function setMidocoCrmCcCard(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCcCard $midocoCrmCcCard = null): self
    {
        $this->MidocoCrmCcCard = $midocoCrmCcCard;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteCcCardRequest
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
    /**
     * Get invokeWorkflow value
     * @return bool|null
     */
    public function getInvokeWorkflow(): ?bool
    {
        return $this->invokeWorkflow;
    }
    /**
     * Set invokeWorkflow value
     * @param bool $invokeWorkflow
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteCcCardRequest
     */
    public function setInvokeWorkflow(?bool $invokeWorkflow = false): self
    {
        // validation for constraint: boolean
        if (!is_null($invokeWorkflow) && !is_bool($invokeWorkflow)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($invokeWorkflow, true), gettype($invokeWorkflow)), __LINE__);
        }
        $this->invokeWorkflow = $invokeWorkflow;
        
        return $this;
    }
}
