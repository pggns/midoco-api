<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCheckDtdAnswerRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteCheckDtdAnswerRequest extends AbstractStructBase
{
    /**
     * The MidocoCheckDtdAnswer
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - ref: MidocoCheckDtdAnswer
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoCheckDtdAnswer
     */
    protected \Pggns\MidocoApi\Documents\StructType\MidocoCheckDtdAnswer $MidocoCheckDtdAnswer;
    /**
     * Constructor method for DeleteCheckDtdAnswerRequest
     * @uses DeleteCheckDtdAnswerRequest::setMidocoCheckDtdAnswer()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCheckDtdAnswer $midocoCheckDtdAnswer
     */
    public function __construct(\Pggns\MidocoApi\Documents\StructType\MidocoCheckDtdAnswer $midocoCheckDtdAnswer)
    {
        $this
            ->setMidocoCheckDtdAnswer($midocoCheckDtdAnswer);
    }
    /**
     * Get MidocoCheckDtdAnswer value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCheckDtdAnswer
     */
    public function getMidocoCheckDtdAnswer(): \Pggns\MidocoApi\Documents\StructType\MidocoCheckDtdAnswer
    {
        return $this->MidocoCheckDtdAnswer;
    }
    /**
     * Set MidocoCheckDtdAnswer value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCheckDtdAnswer $midocoCheckDtdAnswer
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteCheckDtdAnswerRequest
     */
    public function setMidocoCheckDtdAnswer(\Pggns\MidocoApi\Documents\StructType\MidocoCheckDtdAnswer $midocoCheckDtdAnswer): self
    {
        $this->MidocoCheckDtdAnswer = $midocoCheckDtdAnswer;
        
        return $this;
    }
}
