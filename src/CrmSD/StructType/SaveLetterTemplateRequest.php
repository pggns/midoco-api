<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveLetterTemplateRequest StructType
 * @subpackage Structs
 */
class SaveLetterTemplateRequest extends AbstractStructBase
{
    /**
     * The MidocoLetterTemplate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoLetterTemplate
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\LetterTemplateDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\LetterTemplateDTO $MidocoLetterTemplate = null;
    /**
     * Constructor method for SaveLetterTemplateRequest
     * @uses SaveLetterTemplateRequest::setMidocoLetterTemplate()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\LetterTemplateDTO $midocoLetterTemplate
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\LetterTemplateDTO $midocoLetterTemplate = null)
    {
        $this
            ->setMidocoLetterTemplate($midocoLetterTemplate);
    }
    /**
     * Get MidocoLetterTemplate value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\LetterTemplateDTO|null
     */
    public function getMidocoLetterTemplate(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\LetterTemplateDTO
    {
        return $this->MidocoLetterTemplate;
    }
    /**
     * Set MidocoLetterTemplate value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\LetterTemplateDTO $midocoLetterTemplate
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveLetterTemplateRequest
     */
    public function setMidocoLetterTemplate(?\Pggns\MidocoApi\Api\CrmSD\StructType\LetterTemplateDTO $midocoLetterTemplate = null): self
    {
        $this->MidocoLetterTemplate = $midocoLetterTemplate;
        
        return $this;
    }
}
