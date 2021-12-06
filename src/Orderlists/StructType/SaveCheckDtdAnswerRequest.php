<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

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
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoCheckDtdAnswer
     */
    protected \Pggns\MidocoApi\Orderlists\StructType\MidocoCheckDtdAnswer $MidocoCheckDtdAnswer;
    /**
     * Constructor method for SaveCheckDtdAnswerRequest
     * @uses SaveCheckDtdAnswerRequest::setMidocoCheckDtdAnswer()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCheckDtdAnswer $midocoCheckDtdAnswer
     */
    public function __construct(\Pggns\MidocoApi\Orderlists\StructType\MidocoCheckDtdAnswer $midocoCheckDtdAnswer)
    {
        $this
            ->setMidocoCheckDtdAnswer($midocoCheckDtdAnswer);
    }
    /**
     * Get MidocoCheckDtdAnswer value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoCheckDtdAnswer
     */
    public function getMidocoCheckDtdAnswer(): \Pggns\MidocoApi\Orderlists\StructType\MidocoCheckDtdAnswer
    {
        return $this->MidocoCheckDtdAnswer;
    }
    /**
     * Set MidocoCheckDtdAnswer value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCheckDtdAnswer $midocoCheckDtdAnswer
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveCheckDtdAnswerRequest
     */
    public function setMidocoCheckDtdAnswer(\Pggns\MidocoApi\Orderlists\StructType\MidocoCheckDtdAnswer $midocoCheckDtdAnswer): self
    {
        $this->MidocoCheckDtdAnswer = $midocoCheckDtdAnswer;
        
        return $this;
    }
}
