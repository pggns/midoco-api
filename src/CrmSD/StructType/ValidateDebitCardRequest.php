<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateDebitCardRequest StructType
 * @subpackage Structs
 */
class ValidateDebitCardRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmDebitCard
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmDebitCard
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmDebitCard|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmDebitCard $MidocoCrmDebitCard = null;
    /**
     * Constructor method for ValidateDebitCardRequest
     * @uses ValidateDebitCardRequest::setMidocoCrmDebitCard()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmDebitCard $midocoCrmDebitCard
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmDebitCard $midocoCrmDebitCard = null)
    {
        $this
            ->setMidocoCrmDebitCard($midocoCrmDebitCard);
    }
    /**
     * Get MidocoCrmDebitCard value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmDebitCard|null
     */
    public function getMidocoCrmDebitCard(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmDebitCard
    {
        return $this->MidocoCrmDebitCard;
    }
    /**
     * Set MidocoCrmDebitCard value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmDebitCard $midocoCrmDebitCard
     * @return \Pggns\MidocoApi\CrmSD\StructType\ValidateDebitCardRequest
     */
    public function setMidocoCrmDebitCard(?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmDebitCard $midocoCrmDebitCard = null): self
    {
        $this->MidocoCrmDebitCard = $midocoCrmDebitCard;
        
        return $this;
    }
}
