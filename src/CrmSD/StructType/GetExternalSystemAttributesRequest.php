<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExternalSystemAttributesRequest StructType
 * @subpackage Structs
 */
class GetExternalSystemAttributesRequest extends AbstractStructBase
{
    /**
     * The systemName
     * @var string|null
     */
    protected ?string $systemName = null;
    /**
     * Constructor method for GetExternalSystemAttributesRequest
     * @uses GetExternalSystemAttributesRequest::setSystemName()
     * @param string $systemName
     */
    public function __construct(?string $systemName = null)
    {
        $this
            ->setSystemName($systemName);
    }
    /**
     * Get systemName value
     * @return string|null
     */
    public function getSystemName(): ?string
    {
        return $this->systemName;
    }
    /**
     * Set systemName value
     * @param string $systemName
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetExternalSystemAttributesRequest
     */
    public function setSystemName(?string $systemName = null): self
    {
        // validation for constraint: string
        if (!is_null($systemName) && !is_string($systemName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($systemName, true), gettype($systemName)), __LINE__);
        }
        $this->systemName = $systemName;
        
        return $this;
    }
}
