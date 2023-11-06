<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChangeRecoveryQuestionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ChangeRecoveryQuestionRequest extends AbstractStructBase
{
    /**
     * The questionType
     * @var int|null
     */
    protected ?int $questionType = null;
    /**
     * The answer
     * @var string|null
     */
    protected ?string $answer = null;
    /**
     * Constructor method for ChangeRecoveryQuestionRequest
     * @uses ChangeRecoveryQuestionRequest::setQuestionType()
     * @uses ChangeRecoveryQuestionRequest::setAnswer()
     * @param int $questionType
     * @param string $answer
     */
    public function __construct(?int $questionType = null, ?string $answer = null)
    {
        $this
            ->setQuestionType($questionType)
            ->setAnswer($answer);
    }
    /**
     * Get questionType value
     * @return int|null
     */
    public function getQuestionType(): ?int
    {
        return $this->questionType;
    }
    /**
     * Set questionType value
     * @param int $questionType
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ChangeRecoveryQuestionRequest
     */
    public function setQuestionType(?int $questionType = null): self
    {
        // validation for constraint: int
        if (!is_null($questionType) && !(is_int($questionType) || ctype_digit($questionType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($questionType, true), gettype($questionType)), __LINE__);
        }
        $this->questionType = $questionType;
        
        return $this;
    }
    /**
     * Get answer value
     * @return string|null
     */
    public function getAnswer(): ?string
    {
        return $this->answer;
    }
    /**
     * Set answer value
     * @param string $answer
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ChangeRecoveryQuestionRequest
     */
    public function setAnswer(?string $answer = null): self
    {
        // validation for constraint: string
        if (!is_null($answer) && !is_string($answer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($answer, true), gettype($answer)), __LINE__);
        }
        $this->answer = $answer;
        
        return $this;
    }
}
