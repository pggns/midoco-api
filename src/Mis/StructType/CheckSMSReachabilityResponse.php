<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckSMSReachabilityResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: checkSMSReachability --- test if there are any entries in the campaign which do not define a email/mobile contact entry which is allowed for use in a mailing. If there is any customer in the campaign which does not have a
 * communication record, a false is returned
 * @subpackage Structs
 */
class CheckSMSReachabilityResponse extends AbstractStructBase
{
    /**
     * The isBySMSReachable
     * @var bool|null
     */
    protected ?bool $isBySMSReachable = null;
    /**
     * Constructor method for CheckSMSReachabilityResponse
     * @uses CheckSMSReachabilityResponse::setIsBySMSReachable()
     * @param bool $isBySMSReachable
     */
    public function __construct(?bool $isBySMSReachable = null)
    {
        $this
            ->setIsBySMSReachable($isBySMSReachable);
    }
    /**
     * Get isBySMSReachable value
     * @return bool|null
     */
    public function getIsBySMSReachable(): ?bool
    {
        return $this->isBySMSReachable;
    }
    /**
     * Set isBySMSReachable value
     * @param bool $isBySMSReachable
     * @return \Pggns\MidocoApi\Mis\StructType\CheckSMSReachabilityResponse
     */
    public function setIsBySMSReachable(?bool $isBySMSReachable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isBySMSReachable) && !is_bool($isBySMSReachable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isBySMSReachable, true), gettype($isBySMSReachable)), __LINE__);
        }
        $this->isBySMSReachable = $isBySMSReachable;
        
        return $this;
    }
}
