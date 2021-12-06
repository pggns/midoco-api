<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoQuestionValueRequest StructType
 * @subpackage Structs
 */
class SaveMidocoQuestionValueRequest extends AbstractStructBase
{
    /**
     * The MidocoQuestionValue
     * Meta information extracted from the WSDL
     * - ref: MidocoQuestionValue
     * @var \Pggns\MidocoApi\Documents\StructType\QuestionValueDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\QuestionValueDTO $MidocoQuestionValue = null;
    /**
     * Constructor method for SaveMidocoQuestionValueRequest
     * @uses SaveMidocoQuestionValueRequest::setMidocoQuestionValue()
     * @param \Pggns\MidocoApi\Documents\StructType\QuestionValueDTO $midocoQuestionValue
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\QuestionValueDTO $midocoQuestionValue = null)
    {
        $this
            ->setMidocoQuestionValue($midocoQuestionValue);
    }
    /**
     * Get MidocoQuestionValue value
     * @return \Pggns\MidocoApi\Documents\StructType\QuestionValueDTO|null
     */
    public function getMidocoQuestionValue(): ?\Pggns\MidocoApi\Documents\StructType\QuestionValueDTO
    {
        return $this->MidocoQuestionValue;
    }
    /**
     * Set MidocoQuestionValue value
     * @param \Pggns\MidocoApi\Documents\StructType\QuestionValueDTO $midocoQuestionValue
     * @return \Pggns\MidocoApi\Documents\StructType\SaveMidocoQuestionValueRequest
     */
    public function setMidocoQuestionValue(?\Pggns\MidocoApi\Documents\StructType\QuestionValueDTO $midocoQuestionValue = null): self
    {
        $this->MidocoQuestionValue = $midocoQuestionValue;
        
        return $this;
    }
}
