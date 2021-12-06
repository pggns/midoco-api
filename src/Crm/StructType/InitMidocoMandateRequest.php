<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InitMidocoMandateRequest StructType
 * @subpackage Structs
 */
class InitMidocoMandateRequest extends AbstractStructBase
{
    /**
     * The MidocoMandate
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - ref: MidocoMandate
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoMandate
     */
    protected \Pggns\MidocoApi\Crm\StructType\MidocoMandate $MidocoMandate;
    /**
     * The MidocoCrmDebitCard
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmDebitCard
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard $MidocoCrmDebitCard = null;
    /**
     * The generateReference
     * @var bool|null
     */
    protected ?bool $generateReference = null;
    /**
     * Constructor method for InitMidocoMandateRequest
     * @uses InitMidocoMandateRequest::setMidocoMandate()
     * @uses InitMidocoMandateRequest::setMidocoCrmDebitCard()
     * @uses InitMidocoMandateRequest::setGenerateReference()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoMandate $midocoMandate
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard $midocoCrmDebitCard
     * @param bool $generateReference
     */
    public function __construct(\Pggns\MidocoApi\Crm\StructType\MidocoMandate $midocoMandate, ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard $midocoCrmDebitCard = null, ?bool $generateReference = null)
    {
        $this
            ->setMidocoMandate($midocoMandate)
            ->setMidocoCrmDebitCard($midocoCrmDebitCard)
            ->setGenerateReference($generateReference);
    }
    /**
     * Get MidocoMandate value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMandate
     */
    public function getMidocoMandate(): \Pggns\MidocoApi\Crm\StructType\MidocoMandate
    {
        return $this->MidocoMandate;
    }
    /**
     * Set MidocoMandate value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoMandate $midocoMandate
     * @return \Pggns\MidocoApi\Crm\StructType\InitMidocoMandateRequest
     */
    public function setMidocoMandate(\Pggns\MidocoApi\Crm\StructType\MidocoMandate $midocoMandate): self
    {
        $this->MidocoMandate = $midocoMandate;
        
        return $this;
    }
    /**
     * Get MidocoCrmDebitCard value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard|null
     */
    public function getMidocoCrmDebitCard(): ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard
    {
        return $this->MidocoCrmDebitCard;
    }
    /**
     * Set MidocoCrmDebitCard value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard $midocoCrmDebitCard
     * @return \Pggns\MidocoApi\Crm\StructType\InitMidocoMandateRequest
     */
    public function setMidocoCrmDebitCard(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard $midocoCrmDebitCard = null): self
    {
        $this->MidocoCrmDebitCard = $midocoCrmDebitCard;
        
        return $this;
    }
    /**
     * Get generateReference value
     * @return bool|null
     */
    public function getGenerateReference(): ?bool
    {
        return $this->generateReference;
    }
    /**
     * Set generateReference value
     * @param bool $generateReference
     * @return \Pggns\MidocoApi\Crm\StructType\InitMidocoMandateRequest
     */
    public function setGenerateReference(?bool $generateReference = null): self
    {
        // validation for constraint: boolean
        if (!is_null($generateReference) && !is_bool($generateReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($generateReference, true), gettype($generateReference)), __LINE__);
        }
        $this->generateReference = $generateReference;
        
        return $this;
    }
}
