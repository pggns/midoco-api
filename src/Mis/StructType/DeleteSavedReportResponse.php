<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSavedReportResponse StructType
 * @subpackage Structs
 */
class DeleteSavedReportResponse extends AbstractStructBase
{
    /**
     * The deleted
     * @var bool|null
     */
    protected ?bool $deleted = null;
    /**
     * Constructor method for DeleteSavedReportResponse
     * @uses DeleteSavedReportResponse::setDeleted()
     * @param bool $deleted
     */
    public function __construct(?bool $deleted = null)
    {
        $this
            ->setDeleted($deleted);
    }
    /**
     * Get deleted value
     * @return bool|null
     */
    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }
    /**
     * Set deleted value
     * @param bool $deleted
     * @return \Pggns\MidocoApi\Mis\StructType\DeleteSavedReportResponse
     */
    public function setDeleted(?bool $deleted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($deleted) && !is_bool($deleted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($deleted, true), gettype($deleted)), __LINE__);
        }
        $this->deleted = $deleted;
        
        return $this;
    }
}
