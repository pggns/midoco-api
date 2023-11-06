<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintTemplateTextForCustomerResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: PrintTemplateTextForCustomer --- returns the fotext of the campaign that will be sent to the given customer
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrintTemplateTextForCustomerResponse extends AbstractStructBase
{
    /**
     * The foText
     * @var string|null
     */
    protected ?string $foText = null;
    /**
     * Constructor method for PrintTemplateTextForCustomerResponse
     * @uses PrintTemplateTextForCustomerResponse::setFoText()
     * @param string $foText
     */
    public function __construct(?string $foText = null)
    {
        $this
            ->setFoText($foText);
    }
    /**
     * Get foText value
     * @return string|null
     */
    public function getFoText(): ?string
    {
        return $this->foText;
    }
    /**
     * Set foText value
     * @param string $foText
     * @return \Pggns\MidocoApi\Mis\StructType\PrintTemplateTextForCustomerResponse
     */
    public function setFoText(?string $foText = null): self
    {
        // validation for constraint: string
        if (!is_null($foText) && !is_string($foText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($foText, true), gettype($foText)), __LINE__);
        }
        $this->foText = $foText;
        
        return $this;
    }
}
