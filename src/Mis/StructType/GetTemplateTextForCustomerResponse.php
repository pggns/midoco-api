<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTemplateTextForCustomerResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getTemplateTextForCustomer --- returns the text of the campaign that will be sent to the given customer
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTemplateTextForCustomerResponse extends AbstractStructBase
{
    /**
     * The translation
     * @var string|null
     */
    protected ?string $translation = null;
    /**
     * Constructor method for GetTemplateTextForCustomerResponse
     * @uses GetTemplateTextForCustomerResponse::setTranslation()
     * @param string $translation
     */
    public function __construct(?string $translation = null)
    {
        $this
            ->setTranslation($translation);
    }
    /**
     * Get translation value
     * @return string|null
     */
    public function getTranslation(): ?string
    {
        return $this->translation;
    }
    /**
     * Set translation value
     * @param string $translation
     * @return \Pggns\MidocoApi\Mis\StructType\GetTemplateTextForCustomerResponse
     */
    public function setTranslation(?string $translation = null): self
    {
        // validation for constraint: string
        if (!is_null($translation) && !is_string($translation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($translation, true), gettype($translation)), __LINE__);
        }
        $this->translation = $translation;
        
        return $this;
    }
}
