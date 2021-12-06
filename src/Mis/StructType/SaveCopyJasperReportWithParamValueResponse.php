<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCopyJasperReportWithParamValueResponse StructType
 * @subpackage Structs
 */
class SaveCopyJasperReportWithParamValueResponse extends AbstractStructBase
{
    /**
     * The versionId
     * @var int|null
     */
    protected ?int $versionId = null;
    /**
     * Constructor method for SaveCopyJasperReportWithParamValueResponse
     * @uses SaveCopyJasperReportWithParamValueResponse::setVersionId()
     * @param int $versionId
     */
    public function __construct(?int $versionId = null)
    {
        $this
            ->setVersionId($versionId);
    }
    /**
     * Get versionId value
     * @return int|null
     */
    public function getVersionId(): ?int
    {
        return $this->versionId;
    }
    /**
     * Set versionId value
     * @param int $versionId
     * @return \Pggns\MidocoApi\Mis\StructType\SaveCopyJasperReportWithParamValueResponse
     */
    public function setVersionId(?int $versionId = null): self
    {
        // validation for constraint: int
        if (!is_null($versionId) && !(is_int($versionId) || ctype_digit($versionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($versionId, true), gettype($versionId)), __LINE__);
        }
        $this->versionId = $versionId;
        
        return $this;
    }
}
