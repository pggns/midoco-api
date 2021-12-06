<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveContactSourceRequest StructType
 * @subpackage Structs
 */
class SaveContactSourceRequest extends AbstractStructBase
{
    /**
     * The MidocoContactSource
     * Meta information extracted from the WSDL
     * - ref: MidocoContactSource
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoContactSource|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoContactSource $MidocoContactSource = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for SaveContactSourceRequest
     * @uses SaveContactSourceRequest::setMidocoContactSource()
     * @uses SaveContactSourceRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoContactSource $midocoContactSource
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoContactSource $midocoContactSource = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoContactSource($midocoContactSource)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoContactSource value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoContactSource|null
     */
    public function getMidocoContactSource(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoContactSource
    {
        return $this->MidocoContactSource;
    }
    /**
     * Set MidocoContactSource value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoContactSource $midocoContactSource
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveContactSourceRequest
     */
    public function setMidocoContactSource(?\Pggns\MidocoApi\CrmSD\StructType\MidocoContactSource $midocoContactSource = null): self
    {
        $this->MidocoContactSource = $midocoContactSource;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveContactSourceRequest
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
}
