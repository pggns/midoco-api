<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGroupAdvisorInfoRequest StructType
 * @subpackage Structs
 */
class GetGroupAdvisorInfoRequest extends AbstractStructBase
{
    /**
     * The mediatorId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $mediatorId = null;
    /**
     * The travelStart
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travelStart = null;
    /**
     * The travelEnd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travelEnd = null;
    /**
     * The createdStart
     * @var string|null
     */
    protected ?string $createdStart = null;
    /**
     * The createdEnd
     * @var string|null
     */
    protected ?string $createdEnd = null;
    /**
     * Constructor method for GetGroupAdvisorInfoRequest
     * @uses GetGroupAdvisorInfoRequest::setMediatorId()
     * @uses GetGroupAdvisorInfoRequest::setTravelStart()
     * @uses GetGroupAdvisorInfoRequest::setTravelEnd()
     * @uses GetGroupAdvisorInfoRequest::setCreatedStart()
     * @uses GetGroupAdvisorInfoRequest::setCreatedEnd()
     * @param int $mediatorId
     * @param string $travelStart
     * @param string $travelEnd
     * @param string $createdStart
     * @param string $createdEnd
     */
    public function __construct(?int $mediatorId = null, ?string $travelStart = null, ?string $travelEnd = null, ?string $createdStart = null, ?string $createdEnd = null)
    {
        $this
            ->setMediatorId($mediatorId)
            ->setTravelStart($travelStart)
            ->setTravelEnd($travelEnd)
            ->setCreatedStart($createdStart)
            ->setCreatedEnd($createdEnd);
    }
    /**
     * Get mediatorId value
     * @return int|null
     */
    public function getMediatorId(): ?int
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param int $mediatorId
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetGroupAdvisorInfoRequest
     */
    public function setMediatorId(?int $mediatorId = null): self
    {
        // validation for constraint: int
        if (!is_null($mediatorId) && !(is_int($mediatorId) || ctype_digit($mediatorId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get travelStart value
     * @return string|null
     */
    public function getTravelStart(): ?string
    {
        return $this->travelStart;
    }
    /**
     * Set travelStart value
     * @param string $travelStart
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetGroupAdvisorInfoRequest
     */
    public function setTravelStart(?string $travelStart = null): self
    {
        // validation for constraint: string
        if (!is_null($travelStart) && !is_string($travelStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelStart, true), gettype($travelStart)), __LINE__);
        }
        $this->travelStart = $travelStart;
        
        return $this;
    }
    /**
     * Get travelEnd value
     * @return string|null
     */
    public function getTravelEnd(): ?string
    {
        return $this->travelEnd;
    }
    /**
     * Set travelEnd value
     * @param string $travelEnd
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetGroupAdvisorInfoRequest
     */
    public function setTravelEnd(?string $travelEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($travelEnd) && !is_string($travelEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelEnd, true), gettype($travelEnd)), __LINE__);
        }
        $this->travelEnd = $travelEnd;
        
        return $this;
    }
    /**
     * Get createdStart value
     * @return string|null
     */
    public function getCreatedStart(): ?string
    {
        return $this->createdStart;
    }
    /**
     * Set createdStart value
     * @param string $createdStart
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetGroupAdvisorInfoRequest
     */
    public function setCreatedStart(?string $createdStart = null): self
    {
        // validation for constraint: string
        if (!is_null($createdStart) && !is_string($createdStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdStart, true), gettype($createdStart)), __LINE__);
        }
        $this->createdStart = $createdStart;
        
        return $this;
    }
    /**
     * Get createdEnd value
     * @return string|null
     */
    public function getCreatedEnd(): ?string
    {
        return $this->createdEnd;
    }
    /**
     * Set createdEnd value
     * @param string $createdEnd
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetGroupAdvisorInfoRequest
     */
    public function setCreatedEnd(?string $createdEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($createdEnd) && !is_string($createdEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdEnd, true), gettype($createdEnd)), __LINE__);
        }
        $this->createdEnd = $createdEnd;
        
        return $this;
    }
}
