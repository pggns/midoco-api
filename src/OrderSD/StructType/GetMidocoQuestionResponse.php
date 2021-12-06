<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoQuestionResponse StructType
 * @subpackage Structs
 */
class GetMidocoQuestionResponse extends AbstractStructBase
{
    /**
     * The MidocoQuestion
     * Meta information extracted from the WSDL
     * - ref: MidocoQuestion
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoQuestion|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoQuestion $MidocoQuestion = null;
    /**
     * Constructor method for GetMidocoQuestionResponse
     * @uses GetMidocoQuestionResponse::setMidocoQuestion()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoQuestion $midocoQuestion
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoQuestion $midocoQuestion = null)
    {
        $this
            ->setMidocoQuestion($midocoQuestion);
    }
    /**
     * Get MidocoQuestion value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoQuestion|null
     */
    public function getMidocoQuestion(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoQuestion
    {
        return $this->MidocoQuestion;
    }
    /**
     * Set MidocoQuestion value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoQuestion $midocoQuestion
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMidocoQuestionResponse
     */
    public function setMidocoQuestion(?\Pggns\MidocoApi\OrderSD\StructType\MidocoQuestion $midocoQuestion = null): self
    {
        $this->MidocoQuestion = $midocoQuestion;
        
        return $this;
    }
}
