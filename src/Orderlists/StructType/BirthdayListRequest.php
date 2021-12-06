<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BirthdayListRequest StructType
 * @subpackage Structs
 */
class BirthdayListRequest extends AbstractStructBase
{
    /**
     * The MidocoBirthdayListCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoBirthdayListCriteria
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBirthdayListCriteria|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBirthdayListCriteria $MidocoBirthdayListCriteria = null;
    /**
     * The maxReturned
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $maxReturned = null;
    /**
     * Constructor method for BirthdayListRequest
     * @uses BirthdayListRequest::setMidocoBirthdayListCriteria()
     * @uses BirthdayListRequest::setMaxReturned()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBirthdayListCriteria $midocoBirthdayListCriteria
     * @param int $maxReturned
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBirthdayListCriteria $midocoBirthdayListCriteria = null, ?int $maxReturned = null)
    {
        $this
            ->setMidocoBirthdayListCriteria($midocoBirthdayListCriteria)
            ->setMaxReturned($maxReturned);
    }
    /**
     * Get MidocoBirthdayListCriteria value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBirthdayListCriteria|null
     */
    public function getMidocoBirthdayListCriteria(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBirthdayListCriteria
    {
        return $this->MidocoBirthdayListCriteria;
    }
    /**
     * Set MidocoBirthdayListCriteria value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBirthdayListCriteria $midocoBirthdayListCriteria
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\BirthdayListRequest
     */
    public function setMidocoBirthdayListCriteria(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBirthdayListCriteria $midocoBirthdayListCriteria = null): self
    {
        $this->MidocoBirthdayListCriteria = $midocoBirthdayListCriteria;
        
        return $this;
    }
    /**
     * Get maxReturned value
     * @return int|null
     */
    public function getMaxReturned(): ?int
    {
        return $this->maxReturned;
    }
    /**
     * Set maxReturned value
     * @param int $maxReturned
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\BirthdayListRequest
     */
    public function setMaxReturned(?int $maxReturned = null): self
    {
        // validation for constraint: int
        if (!is_null($maxReturned) && !(is_int($maxReturned) || ctype_digit($maxReturned))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxReturned, true), gettype($maxReturned)), __LINE__);
        }
        $this->maxReturned = $maxReturned;
        
        return $this;
    }
}
