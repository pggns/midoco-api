<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ABTAListRequest StructType
 * @subpackage Structs
 */
class ABTAListRequest extends AbstractStructBase
{
    /**
     * The fromDate
     * @var string|null
     */
    protected ?string $fromDate = null;
    /**
     * The toDate
     * @var string|null
     */
    protected ?string $toDate = null;
    /**
     * The section
     * @var string|null
     */
    protected ?string $section = null;
    /**
     * The field
     * @var string|null
     */
    protected ?string $field = null;
    /**
     * Constructor method for ABTAListRequest
     * @uses ABTAListRequest::setFromDate()
     * @uses ABTAListRequest::setToDate()
     * @uses ABTAListRequest::setSection()
     * @uses ABTAListRequest::setField()
     * @param string $fromDate
     * @param string $toDate
     * @param string $section
     * @param string $field
     */
    public function __construct(?string $fromDate = null, ?string $toDate = null, ?string $section = null, ?string $field = null)
    {
        $this
            ->setFromDate($fromDate)
            ->setToDate($toDate)
            ->setSection($section)
            ->setField($field);
    }
    /**
     * Get fromDate value
     * @return string|null
     */
    public function getFromDate(): ?string
    {
        return $this->fromDate;
    }
    /**
     * Set fromDate value
     * @param string $fromDate
     * @return \Pggns\MidocoApi\Orderlists\StructType\ABTAListRequest
     */
    public function setFromDate(?string $fromDate = null): self
    {
        // validation for constraint: string
        if (!is_null($fromDate) && !is_string($fromDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromDate, true), gettype($fromDate)), __LINE__);
        }
        $this->fromDate = $fromDate;
        
        return $this;
    }
    /**
     * Get toDate value
     * @return string|null
     */
    public function getToDate(): ?string
    {
        return $this->toDate;
    }
    /**
     * Set toDate value
     * @param string $toDate
     * @return \Pggns\MidocoApi\Orderlists\StructType\ABTAListRequest
     */
    public function setToDate(?string $toDate = null): self
    {
        // validation for constraint: string
        if (!is_null($toDate) && !is_string($toDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toDate, true), gettype($toDate)), __LINE__);
        }
        $this->toDate = $toDate;
        
        return $this;
    }
    /**
     * Get section value
     * @return string|null
     */
    public function getSection(): ?string
    {
        return $this->section;
    }
    /**
     * Set section value
     * @param string $section
     * @return \Pggns\MidocoApi\Orderlists\StructType\ABTAListRequest
     */
    public function setSection(?string $section = null): self
    {
        // validation for constraint: string
        if (!is_null($section) && !is_string($section)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($section, true), gettype($section)), __LINE__);
        }
        $this->section = $section;
        
        return $this;
    }
    /**
     * Get field value
     * @return string|null
     */
    public function getField(): ?string
    {
        return $this->field;
    }
    /**
     * Set field value
     * @param string $field
     * @return \Pggns\MidocoApi\Orderlists\StructType\ABTAListRequest
     */
    public function setField(?string $field = null): self
    {
        // validation for constraint: string
        if (!is_null($field) && !is_string($field)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($field, true), gettype($field)), __LINE__);
        }
        $this->field = $field;
        
        return $this;
    }
}
