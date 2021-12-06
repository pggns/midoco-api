<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCampaignFieldValuesRequest StructType
 * @subpackage Structs
 */
class GetCampaignFieldValuesRequest extends AbstractStructBase
{
    /**
     * The MidocoCriteriaField
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCriteriaField
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldType|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldType $MidocoCriteriaField = null;
    /**
     * The language
     * @var string|null
     */
    protected ?string $language = null;
    /**
     * Constructor method for GetCampaignFieldValuesRequest
     * @uses GetCampaignFieldValuesRequest::setMidocoCriteriaField()
     * @uses GetCampaignFieldValuesRequest::setLanguage()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldType $midocoCriteriaField
     * @param string $language
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldType $midocoCriteriaField = null, ?string $language = null)
    {
        $this
            ->setMidocoCriteriaField($midocoCriteriaField)
            ->setLanguage($language);
    }
    /**
     * Get MidocoCriteriaField value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldType|null
     */
    public function getMidocoCriteriaField(): ?\Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldType
    {
        return $this->MidocoCriteriaField;
    }
    /**
     * Set MidocoCriteriaField value
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldType $midocoCriteriaField
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignFieldValuesRequest
     */
    public function setMidocoCriteriaField(?\Pggns\MidocoApi\Mis\StructType\MidocoCriteriaFieldType $midocoCriteriaField = null): self
    {
        $this->MidocoCriteriaField = $midocoCriteriaField;
        
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignFieldValuesRequest
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        
        return $this;
    }
}
