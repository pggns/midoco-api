<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

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
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\QuestionValueDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\QuestionValueDTO $MidocoQuestionValue = null;
    /**
     * Constructor method for GetMidocoQuestionValueResponse
     * @uses GetMidocoQuestionValueResponse::setMidocoQuestionValue()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\QuestionValueDTO $midocoQuestionValue
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\QuestionValueDTO $midocoQuestionValue = null)
    {
        $this
            ->setMidocoQuestionValue($midocoQuestionValue);
    }
    /**
     * Get MidocoQuestionValue value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\QuestionValueDTO|null
     */
    public function getMidocoQuestionValue(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\QuestionValueDTO
    {
        return $this->MidocoQuestionValue;
    }
    /**
     * Set MidocoQuestionValue value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\QuestionValueDTO $midocoQuestionValue
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetMidocoQuestionValueResponse
     */
    public function setMidocoQuestionValue(?\Pggns\MidocoApi\Api\Orderlists\StructType\QuestionValueDTO $midocoQuestionValue = null): self
    {
        $this->MidocoQuestionValue = $midocoQuestionValue;
        
        return $this;
    }
}
