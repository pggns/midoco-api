<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClientPerformanceLogListRequest StructType
 * @subpackage Structs
 */
class ClientPerformanceLogListRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The actionName
     * @var string|null
     */
    protected ?string $actionName = null;
    /**
     * The includingChildren
     * @var bool|null
     */
    protected ?bool $includingChildren = null;
    /**
     * The startTimeFrom1
     * @var string|null
     */
    protected ?string $startTimeFrom1 = null;
    /**
     * The startTimeTo1
     * @var string|null
     */
    protected ?string $startTimeTo1 = null;
    /**
     * The startTimeFrom2
     * @var string|null
     */
    protected ?string $startTimeFrom2 = null;
    /**
     * The startTimeTo2
     * @var string|null
     */
    protected ?string $startTimeTo2 = null;
    /**
     * Constructor method for ClientPerformanceLogListRequest
     * @uses ClientPerformanceLogListRequest::setUnitName()
     * @uses ClientPerformanceLogListRequest::setActionName()
     * @uses ClientPerformanceLogListRequest::setIncludingChildren()
     * @uses ClientPerformanceLogListRequest::setStartTimeFrom1()
     * @uses ClientPerformanceLogListRequest::setStartTimeTo1()
     * @uses ClientPerformanceLogListRequest::setStartTimeFrom2()
     * @uses ClientPerformanceLogListRequest::setStartTimeTo2()
     * @param string $unitName
     * @param string $actionName
     * @param bool $includingChildren
     * @param string $startTimeFrom1
     * @param string $startTimeTo1
     * @param string $startTimeFrom2
     * @param string $startTimeTo2
     */
    public function __construct(?string $unitName = null, ?string $actionName = null, ?bool $includingChildren = null, ?string $startTimeFrom1 = null, ?string $startTimeTo1 = null, ?string $startTimeFrom2 = null, ?string $startTimeTo2 = null)
    {
        $this
            ->setUnitName($unitName)
            ->setActionName($actionName)
            ->setIncludingChildren($includingChildren)
            ->setStartTimeFrom1($startTimeFrom1)
            ->setStartTimeTo1($startTimeTo1)
            ->setStartTimeFrom2($startTimeFrom2)
            ->setStartTimeTo2($startTimeTo2);
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogListRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get actionName value
     * @return string|null
     */
    public function getActionName(): ?string
    {
        return $this->actionName;
    }
    /**
     * Set actionName value
     * @param string $actionName
     * @return \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogListRequest
     */
    public function setActionName(?string $actionName = null): self
    {
        // validation for constraint: string
        if (!is_null($actionName) && !is_string($actionName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actionName, true), gettype($actionName)), __LINE__);
        }
        $this->actionName = $actionName;
        
        return $this;
    }
    /**
     * Get includingChildren value
     * @return bool|null
     */
    public function getIncludingChildren(): ?bool
    {
        return $this->includingChildren;
    }
    /**
     * Set includingChildren value
     * @param bool $includingChildren
     * @return \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogListRequest
     */
    public function setIncludingChildren(?bool $includingChildren = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includingChildren) && !is_bool($includingChildren)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includingChildren, true), gettype($includingChildren)), __LINE__);
        }
        $this->includingChildren = $includingChildren;
        
        return $this;
    }
    /**
     * Get startTimeFrom1 value
     * @return string|null
     */
    public function getStartTimeFrom1(): ?string
    {
        return $this->startTimeFrom1;
    }
    /**
     * Set startTimeFrom1 value
     * @param string $startTimeFrom1
     * @return \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogListRequest
     */
    public function setStartTimeFrom1(?string $startTimeFrom1 = null): self
    {
        // validation for constraint: string
        if (!is_null($startTimeFrom1) && !is_string($startTimeFrom1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTimeFrom1, true), gettype($startTimeFrom1)), __LINE__);
        }
        $this->startTimeFrom1 = $startTimeFrom1;
        
        return $this;
    }
    /**
     * Get startTimeTo1 value
     * @return string|null
     */
    public function getStartTimeTo1(): ?string
    {
        return $this->startTimeTo1;
    }
    /**
     * Set startTimeTo1 value
     * @param string $startTimeTo1
     * @return \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogListRequest
     */
    public function setStartTimeTo1(?string $startTimeTo1 = null): self
    {
        // validation for constraint: string
        if (!is_null($startTimeTo1) && !is_string($startTimeTo1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTimeTo1, true), gettype($startTimeTo1)), __LINE__);
        }
        $this->startTimeTo1 = $startTimeTo1;
        
        return $this;
    }
    /**
     * Get startTimeFrom2 value
     * @return string|null
     */
    public function getStartTimeFrom2(): ?string
    {
        return $this->startTimeFrom2;
    }
    /**
     * Set startTimeFrom2 value
     * @param string $startTimeFrom2
     * @return \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogListRequest
     */
    public function setStartTimeFrom2(?string $startTimeFrom2 = null): self
    {
        // validation for constraint: string
        if (!is_null($startTimeFrom2) && !is_string($startTimeFrom2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTimeFrom2, true), gettype($startTimeFrom2)), __LINE__);
        }
        $this->startTimeFrom2 = $startTimeFrom2;
        
        return $this;
    }
    /**
     * Get startTimeTo2 value
     * @return string|null
     */
    public function getStartTimeTo2(): ?string
    {
        return $this->startTimeTo2;
    }
    /**
     * Set startTimeTo2 value
     * @param string $startTimeTo2
     * @return \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogListRequest
     */
    public function setStartTimeTo2(?string $startTimeTo2 = null): self
    {
        // validation for constraint: string
        if (!is_null($startTimeTo2) && !is_string($startTimeTo2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTimeTo2, true), gettype($startTimeTo2)), __LINE__);
        }
        $this->startTimeTo2 = $startTimeTo2;
        
        return $this;
    }
}
