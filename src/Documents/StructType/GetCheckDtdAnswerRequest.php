<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCheckDtdAnswerRequest StructType
 * @subpackage Structs
 */
class GetCheckDtdAnswerRequest extends AbstractStructBase
{
    /**
     * The MidocoCheckDtdAnswer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCheckDtdAnswer
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoCheckDtdAnswer|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoCheckDtdAnswer $MidocoCheckDtdAnswer = null;
    /**
     * Constructor method for GetCheckDtdAnswerRequest
     * @uses GetCheckDtdAnswerRequest::setMidocoCheckDtdAnswer()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCheckDtdAnswer $midocoCheckDtdAnswer
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoCheckDtdAnswer $midocoCheckDtdAnswer = null)
    {
        $this
            ->setMidocoCheckDtdAnswer($midocoCheckDtdAnswer);
    }
    /**
     * Get MidocoCheckDtdAnswer value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCheckDtdAnswer|null
     */
    public function getMidocoCheckDtdAnswer(): ?\Pggns\MidocoApi\Documents\StructType\MidocoCheckDtdAnswer
    {
        return $this->MidocoCheckDtdAnswer;
    }
    /**
     * Set MidocoCheckDtdAnswer value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCheckDtdAnswer $midocoCheckDtdAnswer
     * @return \Pggns\MidocoApi\Documents\StructType\GetCheckDtdAnswerRequest
     */
    public function setMidocoCheckDtdAnswer(?\Pggns\MidocoApi\Documents\StructType\MidocoCheckDtdAnswer $midocoCheckDtdAnswer = null): self
    {
        $this->MidocoCheckDtdAnswer = $midocoCheckDtdAnswer;
        
        return $this;
    }
}
