<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckEmailReachabilityResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: checkEmailReachability --- test if there are any entries in the campaign which do not define a email/mobile contact entry which is allowed for use in a mailing. If there is any customer in the campaign which does not have a
 * communication record, a false is returned
 * @subpackage Structs
 */
class CheckEmailReachabilityResponse extends AbstractStructBase
{
    /**
     * The isByEmailReachable
     * @var bool|null
     */
    protected ?bool $isByEmailReachable = null;
    /**
     * Constructor method for CheckEmailReachabilityResponse
     * @uses CheckEmailReachabilityResponse::setIsByEmailReachable()
     * @param bool $isByEmailReachable
     */
    public function __construct(?bool $isByEmailReachable = null)
    {
        $this
            ->setIsByEmailReachable($isByEmailReachable);
    }
    /**
     * Get isByEmailReachable value
     * @return bool|null
     */
    public function getIsByEmailReachable(): ?bool
    {
        return $this->isByEmailReachable;
    }
    /**
     * Set isByEmailReachable value
     * @param bool $isByEmailReachable
     * @return \Pggns\MidocoApi\Mis\StructType\CheckEmailReachabilityResponse
     */
    public function setIsByEmailReachable(?bool $isByEmailReachable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isByEmailReachable) && !is_bool($isByEmailReachable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isByEmailReachable, true), gettype($isByEmailReachable)), __LINE__);
        }
        $this->isByEmailReachable = $isByEmailReachable;
        
        return $this;
    }
}
