<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GroupAdvisorInfo StructType
 * @subpackage Structs
 */
class GroupAdvisorInfo extends AbstractStructBase
{
    /**
     * The groupAdvisorName
     * @var string|null
     */
    protected ?string $groupAdvisorName = null;
    /**
     * The groupAdvisorMediatorId
     * @var string|null
     */
    protected ?string $groupAdvisorMediatorId = null;
    /**
     * The mediatorName
     * @var string|null
     */
    protected ?string $mediatorName = null;
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The revenue
     * @var float|null
     */
    protected ?float $revenue = null;
    /**
     * The creationMonth
     * @var string|null
     */
    protected ?string $creationMonth = null;
    /**
     * Constructor method for GroupAdvisorInfo
     * @uses GroupAdvisorInfo::setGroupAdvisorName()
     * @uses GroupAdvisorInfo::setGroupAdvisorMediatorId()
     * @uses GroupAdvisorInfo::setMediatorName()
     * @uses GroupAdvisorInfo::setMediatorId()
     * @uses GroupAdvisorInfo::setRevenue()
     * @uses GroupAdvisorInfo::setCreationMonth()
     * @param string $groupAdvisorName
     * @param string $groupAdvisorMediatorId
     * @param string $mediatorName
     * @param string $mediatorId
     * @param float $revenue
     * @param string $creationMonth
     */
    public function __construct(?string $groupAdvisorName = null, ?string $groupAdvisorMediatorId = null, ?string $mediatorName = null, ?string $mediatorId = null, ?float $revenue = null, ?string $creationMonth = null)
    {
        $this
            ->setGroupAdvisorName($groupAdvisorName)
            ->setGroupAdvisorMediatorId($groupAdvisorMediatorId)
            ->setMediatorName($mediatorName)
            ->setMediatorId($mediatorId)
            ->setRevenue($revenue)
            ->setCreationMonth($creationMonth);
    }
    /**
     * Get groupAdvisorName value
     * @return string|null
     */
    public function getGroupAdvisorName(): ?string
    {
        return $this->groupAdvisorName;
    }
    /**
     * Set groupAdvisorName value
     * @param string $groupAdvisorName
     * @return \Pggns\MidocoApi\Orderlists\StructType\GroupAdvisorInfo
     */
    public function setGroupAdvisorName(?string $groupAdvisorName = null): self
    {
        // validation for constraint: string
        if (!is_null($groupAdvisorName) && !is_string($groupAdvisorName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupAdvisorName, true), gettype($groupAdvisorName)), __LINE__);
        }
        $this->groupAdvisorName = $groupAdvisorName;
        
        return $this;
    }
    /**
     * Get groupAdvisorMediatorId value
     * @return string|null
     */
    public function getGroupAdvisorMediatorId(): ?string
    {
        return $this->groupAdvisorMediatorId;
    }
    /**
     * Set groupAdvisorMediatorId value
     * @param string $groupAdvisorMediatorId
     * @return \Pggns\MidocoApi\Orderlists\StructType\GroupAdvisorInfo
     */
    public function setGroupAdvisorMediatorId(?string $groupAdvisorMediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($groupAdvisorMediatorId) && !is_string($groupAdvisorMediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupAdvisorMediatorId, true), gettype($groupAdvisorMediatorId)), __LINE__);
        }
        $this->groupAdvisorMediatorId = $groupAdvisorMediatorId;
        
        return $this;
    }
    /**
     * Get mediatorName value
     * @return string|null
     */
    public function getMediatorName(): ?string
    {
        return $this->mediatorName;
    }
    /**
     * Set mediatorName value
     * @param string $mediatorName
     * @return \Pggns\MidocoApi\Orderlists\StructType\GroupAdvisorInfo
     */
    public function setMediatorName(?string $mediatorName = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorName) && !is_string($mediatorName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorName, true), gettype($mediatorName)), __LINE__);
        }
        $this->mediatorName = $mediatorName;
        
        return $this;
    }
    /**
     * Get mediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Orderlists\StructType\GroupAdvisorInfo
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get revenue value
     * @return float|null
     */
    public function getRevenue(): ?float
    {
        return $this->revenue;
    }
    /**
     * Set revenue value
     * @param float $revenue
     * @return \Pggns\MidocoApi\Orderlists\StructType\GroupAdvisorInfo
     */
    public function setRevenue(?float $revenue = null): self
    {
        // validation for constraint: float
        if (!is_null($revenue) && !(is_float($revenue) || is_numeric($revenue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenue, true), gettype($revenue)), __LINE__);
        }
        $this->revenue = $revenue;
        
        return $this;
    }
    /**
     * Get creationMonth value
     * @return string|null
     */
    public function getCreationMonth(): ?string
    {
        return $this->creationMonth;
    }
    /**
     * Set creationMonth value
     * @param string $creationMonth
     * @return \Pggns\MidocoApi\Orderlists\StructType\GroupAdvisorInfo
     */
    public function setCreationMonth(?string $creationMonth = null): self
    {
        // validation for constraint: string
        if (!is_null($creationMonth) && !is_string($creationMonth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationMonth, true), gettype($creationMonth)), __LINE__);
        }
        $this->creationMonth = $creationMonth;
        
        return $this;
    }
}
