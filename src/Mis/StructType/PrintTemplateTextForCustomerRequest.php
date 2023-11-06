<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintTemplateTextForCustomerRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrintTemplateTextForCustomerRequest extends AbstractStructBase
{
    /**
     * The GetTemplateTextForCustomerRequest
     * Meta information extracted from the WSDL
     * - ref: GetTemplateTextForCustomerRequest
     * @var \Pggns\MidocoApi\Mis\StructType\GetTemplateTextForCustomerRequest|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\GetTemplateTextForCustomerRequest $GetTemplateTextForCustomerRequest = null;
    /**
     * The ignoreIfExecuted
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $ignoreIfExecuted = null;
    /**
     * The output
     * Meta information extracted from the WSDL
     * - default: PREVIEW_PRINT
     * @var string|null
     */
    protected ?string $output = null;
    /**
     * Constructor method for PrintTemplateTextForCustomerRequest
     * @uses PrintTemplateTextForCustomerRequest::setGetTemplateTextForCustomerRequest()
     * @uses PrintTemplateTextForCustomerRequest::setIgnoreIfExecuted()
     * @uses PrintTemplateTextForCustomerRequest::setOutput()
     * @param \Pggns\MidocoApi\Mis\StructType\GetTemplateTextForCustomerRequest $getTemplateTextForCustomerRequest
     * @param bool $ignoreIfExecuted
     * @param string $output
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\GetTemplateTextForCustomerRequest $getTemplateTextForCustomerRequest = null, ?bool $ignoreIfExecuted = true, ?string $output = 'PREVIEW_PRINT')
    {
        $this
            ->setGetTemplateTextForCustomerRequest($getTemplateTextForCustomerRequest)
            ->setIgnoreIfExecuted($ignoreIfExecuted)
            ->setOutput($output);
    }
    /**
     * Get GetTemplateTextForCustomerRequest value
     * @return \Pggns\MidocoApi\Mis\StructType\GetTemplateTextForCustomerRequest|null
     */
    public function getGetTemplateTextForCustomerRequest(): ?\Pggns\MidocoApi\Mis\StructType\GetTemplateTextForCustomerRequest
    {
        return $this->GetTemplateTextForCustomerRequest;
    }
    /**
     * Set GetTemplateTextForCustomerRequest value
     * @param \Pggns\MidocoApi\Mis\StructType\GetTemplateTextForCustomerRequest $getTemplateTextForCustomerRequest
     * @return \Pggns\MidocoApi\Mis\StructType\PrintTemplateTextForCustomerRequest
     */
    public function setGetTemplateTextForCustomerRequest(?\Pggns\MidocoApi\Mis\StructType\GetTemplateTextForCustomerRequest $getTemplateTextForCustomerRequest = null): self
    {
        $this->GetTemplateTextForCustomerRequest = $getTemplateTextForCustomerRequest;
        
        return $this;
    }
    /**
     * Get ignoreIfExecuted value
     * @return bool|null
     */
    public function getIgnoreIfExecuted(): ?bool
    {
        return $this->ignoreIfExecuted;
    }
    /**
     * Set ignoreIfExecuted value
     * @param bool $ignoreIfExecuted
     * @return \Pggns\MidocoApi\Mis\StructType\PrintTemplateTextForCustomerRequest
     */
    public function setIgnoreIfExecuted(?bool $ignoreIfExecuted = true): self
    {
        // validation for constraint: boolean
        if (!is_null($ignoreIfExecuted) && !is_bool($ignoreIfExecuted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ignoreIfExecuted, true), gettype($ignoreIfExecuted)), __LINE__);
        }
        $this->ignoreIfExecuted = $ignoreIfExecuted;
        
        return $this;
    }
    /**
     * Get output value
     * @return string|null
     */
    public function getOutput(): ?string
    {
        return $this->output;
    }
    /**
     * Set output value
     * @param string $output
     * @return \Pggns\MidocoApi\Mis\StructType\PrintTemplateTextForCustomerRequest
     */
    public function setOutput(?string $output = 'PREVIEW_PRINT'): self
    {
        // validation for constraint: string
        if (!is_null($output) && !is_string($output)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($output, true), gettype($output)), __LINE__);
        }
        $this->output = $output;
        
        return $this;
    }
}
