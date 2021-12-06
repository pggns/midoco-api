<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteJasperReportParamValueRequest StructType
 * @subpackage Structs
 */
class DeleteJasperReportParamValueRequest extends AbstractStructBase
{
    /**
     * The valueId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $valueId;
    /**
     * Constructor method for DeleteJasperReportParamValueRequest
     * @uses DeleteJasperReportParamValueRequest::setValueId()
     * @param int $valueId
     */
    public function __construct(int $valueId)
    {
        $this
            ->setValueId($valueId);
    }
    /**
     * Get valueId value
     * @return int
     */
    public function getValueId(): int
    {
        return $this->valueId;
    }
    /**
     * Set valueId value
     * @param int $valueId
     * @return \Pggns\MidocoApi\Mis\StructType\DeleteJasperReportParamValueRequest
     */
    public function setValueId(int $valueId): self
    {
        // validation for constraint: int
        if (!is_null($valueId) && !(is_int($valueId) || ctype_digit($valueId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($valueId, true), gettype($valueId)), __LINE__);
        }
        $this->valueId = $valueId;
        
        return $this;
    }
}
