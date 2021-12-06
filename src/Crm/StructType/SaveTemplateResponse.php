<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTemplateResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveTemplate --- save a given template
 * @subpackage Structs
 */
class SaveTemplateResponse extends AbstractStructBase
{
    /**
     * The templateId
     * @var int|null
     */
    protected ?int $templateId = null;
    /**
     * Constructor method for SaveTemplateResponse
     * @uses SaveTemplateResponse::setTemplateId()
     * @param int $templateId
     */
    public function __construct(?int $templateId = null)
    {
        $this
            ->setTemplateId($templateId);
    }
    /**
     * Get templateId value
     * @return int|null
     */
    public function getTemplateId(): ?int
    {
        return $this->templateId;
    }
    /**
     * Set templateId value
     * @param int $templateId
     * @return \Pggns\MidocoApi\Crm\StructType\SaveTemplateResponse
     */
    public function setTemplateId(?int $templateId = null): self
    {
        // validation for constraint: int
        if (!is_null($templateId) && !(is_int($templateId) || ctype_digit($templateId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($templateId, true), gettype($templateId)), __LINE__);
        }
        $this->templateId = $templateId;
        
        return $this;
    }
}
