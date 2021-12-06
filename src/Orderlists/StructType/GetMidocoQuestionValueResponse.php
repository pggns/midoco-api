<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoQuestionValueResponse StructType
 * @subpackage Structs
 */
class GetMidocoQuestionValueResponse extends AbstractStructBase
{
    /**
     * The MidocoQuestionValue
     * Meta information extracted from the WSDL
     * - ref: MidocoQuestionValue
     * @var \Pggns\MidocoApi\Orderlists\StructType\QuestionValueDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\QuestionValueDTO $MidocoQuestionValue = null;
    /**
     * Constructor method for GetMidocoQuestionValueResponse
     * @uses GetMidocoQuestionValueResponse::setMidocoQuestionValue()
     * @param \Pggns\MidocoApi\Orderlists\StructType\QuestionValueDTO $midocoQuestionValue
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\QuestionValueDTO $midocoQuestionValue = null)
    {
        $this
            ->setMidocoQuestionValue($midocoQuestionValue);
    }
    /**
     * Get MidocoQuestionValue value
     * @return \Pggns\MidocoApi\Orderlists\StructType\QuestionValueDTO|null
     */
    public function getMidocoQuestionValue(): ?\Pggns\MidocoApi\Orderlists\StructType\QuestionValueDTO
    {
        return $this->MidocoQuestionValue;
    }
    /**
     * Set MidocoQuestionValue value
     * @param \Pggns\MidocoApi\Orderlists\StructType\QuestionValueDTO $midocoQuestionValue
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetMidocoQuestionValueResponse
     */
    public function setMidocoQuestionValue(?\Pggns\MidocoApi\Orderlists\StructType\QuestionValueDTO $midocoQuestionValue = null): self
    {
        $this->MidocoQuestionValue = $midocoQuestionValue;
        
        return $this;
    }
}
