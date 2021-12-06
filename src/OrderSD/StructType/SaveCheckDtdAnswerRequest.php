<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCheckDtdAnswerRequest StructType
 * @subpackage Structs
 */
class SaveCheckDtdAnswerRequest extends AbstractStructBase
{
    /**
     * The MidocoCheckDtdAnswer
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - ref: MidocoCheckDtdAnswer
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoCheckDtdAnswer
     */
    protected \Pggns\MidocoApi\OrderSD\StructType\MidocoCheckDtdAnswer $MidocoCheckDtdAnswer;
    /**
     * Constructor method for SaveCheckDtdAnswerRequest
     * @uses SaveCheckDtdAnswerRequest::setMidocoCheckDtdAnswer()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoCheckDtdAnswer $midocoCheckDtdAnswer
     */
    public function __construct(\Pggns\MidocoApi\OrderSD\StructType\MidocoCheckDtdAnswer $midocoCheckDtdAnswer)
    {
        $this
            ->setMidocoCheckDtdAnswer($midocoCheckDtdAnswer);
    }
    /**
     * Get MidocoCheckDtdAnswer value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoCheckDtdAnswer
     */
    public function getMidocoCheckDtdAnswer(): \Pggns\MidocoApi\OrderSD\StructType\MidocoCheckDtdAnswer
    {
        return $this->MidocoCheckDtdAnswer;
    }
    /**
     * Set MidocoCheckDtdAnswer value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoCheckDtdAnswer $midocoCheckDtdAnswer
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveCheckDtdAnswerRequest
     */
    public function setMidocoCheckDtdAnswer(\Pggns\MidocoApi\OrderSD\StructType\MidocoCheckDtdAnswer $midocoCheckDtdAnswer): self
    {
        $this->MidocoCheckDtdAnswer = $midocoCheckDtdAnswer;
        
        return $this;
    }
}
