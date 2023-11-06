<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoQuestionValueRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoQuestionValueRequest extends AbstractStructBase
{
    /**
     * The MidocoQuestionValue
     * Meta information extracted from the WSDL
     * - ref: MidocoQuestionValue
     * @var \Pggns\MidocoApi\OrderSD\StructType\QuestionValueDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\QuestionValueDTO $MidocoQuestionValue = null;
    /**
     * Constructor method for SaveMidocoQuestionValueRequest
     * @uses SaveMidocoQuestionValueRequest::setMidocoQuestionValue()
     * @param \Pggns\MidocoApi\OrderSD\StructType\QuestionValueDTO $midocoQuestionValue
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\QuestionValueDTO $midocoQuestionValue = null)
    {
        $this
            ->setMidocoQuestionValue($midocoQuestionValue);
    }
    /**
     * Get MidocoQuestionValue value
     * @return \Pggns\MidocoApi\OrderSD\StructType\QuestionValueDTO|null
     */
    public function getMidocoQuestionValue(): ?\Pggns\MidocoApi\OrderSD\StructType\QuestionValueDTO
    {
        return $this->MidocoQuestionValue;
    }
    /**
     * Set MidocoQuestionValue value
     * @param \Pggns\MidocoApi\OrderSD\StructType\QuestionValueDTO $midocoQuestionValue
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoQuestionValueRequest
     */
    public function setMidocoQuestionValue(?\Pggns\MidocoApi\OrderSD\StructType\QuestionValueDTO $midocoQuestionValue = null): self
    {
        $this->MidocoQuestionValue = $midocoQuestionValue;
        
        return $this;
    }
}
