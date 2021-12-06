<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintCustomerLetterRequest StructType
 * @subpackage Structs
 */
class PrintCustomerLetterRequest extends AbstractStructBase
{
    /**
     * The CreateCustomerLetterRequest
     * Meta information extracted from the WSDL
     * - ref: CreateCustomerLetterRequest
     * @var \Pggns\MidocoApi\Crm\StructType\CreateCustomerLetterRequest|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CreateCustomerLetterRequest $CreateCustomerLetterRequest = null;
    /**
     * The preview
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $preview = null;
    /**
     * Constructor method for PrintCustomerLetterRequest
     * @uses PrintCustomerLetterRequest::setCreateCustomerLetterRequest()
     * @uses PrintCustomerLetterRequest::setPreview()
     * @param \Pggns\MidocoApi\Crm\StructType\CreateCustomerLetterRequest $createCustomerLetterRequest
     * @param bool $preview
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CreateCustomerLetterRequest $createCustomerLetterRequest = null, ?bool $preview = false)
    {
        $this
            ->setCreateCustomerLetterRequest($createCustomerLetterRequest)
            ->setPreview($preview);
    }
    /**
     * Get CreateCustomerLetterRequest value
     * @return \Pggns\MidocoApi\Crm\StructType\CreateCustomerLetterRequest|null
     */
    public function getCreateCustomerLetterRequest(): ?\Pggns\MidocoApi\Crm\StructType\CreateCustomerLetterRequest
    {
        return $this->CreateCustomerLetterRequest;
    }
    /**
     * Set CreateCustomerLetterRequest value
     * @param \Pggns\MidocoApi\Crm\StructType\CreateCustomerLetterRequest $createCustomerLetterRequest
     * @return \Pggns\MidocoApi\Crm\StructType\PrintCustomerLetterRequest
     */
    public function setCreateCustomerLetterRequest(?\Pggns\MidocoApi\Crm\StructType\CreateCustomerLetterRequest $createCustomerLetterRequest = null): self
    {
        $this->CreateCustomerLetterRequest = $createCustomerLetterRequest;
        
        return $this;
    }
    /**
     * Get preview value
     * @return bool|null
     */
    public function getPreview(): ?bool
    {
        return $this->preview;
    }
    /**
     * Set preview value
     * @param bool $preview
     * @return \Pggns\MidocoApi\Crm\StructType\PrintCustomerLetterRequest
     */
    public function setPreview(?bool $preview = false): self
    {
        // validation for constraint: boolean
        if (!is_null($preview) && !is_bool($preview)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preview, true), gettype($preview)), __LINE__);
        }
        $this->preview = $preview;
        
        return $this;
    }
}
