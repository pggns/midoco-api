<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveLetterTemplateRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveLetterTemplateRequest extends AbstractStructBase
{
    /**
     * The MidocoLetterTemplate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoLetterTemplate
     * @var \Pggns\MidocoApi\Crm\StructType\LetterTemplateDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\LetterTemplateDTO $MidocoLetterTemplate = null;
    /**
     * Constructor method for SaveLetterTemplateRequest
     * @uses SaveLetterTemplateRequest::setMidocoLetterTemplate()
     * @param \Pggns\MidocoApi\Crm\StructType\LetterTemplateDTO $midocoLetterTemplate
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\LetterTemplateDTO $midocoLetterTemplate = null)
    {
        $this
            ->setMidocoLetterTemplate($midocoLetterTemplate);
    }
    /**
     * Get MidocoLetterTemplate value
     * @return \Pggns\MidocoApi\Crm\StructType\LetterTemplateDTO|null
     */
    public function getMidocoLetterTemplate(): ?\Pggns\MidocoApi\Crm\StructType\LetterTemplateDTO
    {
        return $this->MidocoLetterTemplate;
    }
    /**
     * Set MidocoLetterTemplate value
     * @param \Pggns\MidocoApi\Crm\StructType\LetterTemplateDTO $midocoLetterTemplate
     * @return \Pggns\MidocoApi\Crm\StructType\SaveLetterTemplateRequest
     */
    public function setMidocoLetterTemplate(?\Pggns\MidocoApi\Crm\StructType\LetterTemplateDTO $midocoLetterTemplate = null): self
    {
        $this->MidocoLetterTemplate = $midocoLetterTemplate;
        
        return $this;
    }
}
