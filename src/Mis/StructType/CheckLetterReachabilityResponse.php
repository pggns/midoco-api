<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckLetterReachabilityResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: checkLetterReachability --- test if there are any entries in the campaign which do not define a leter contact entry which is allowed for use in a mailing. If there is any customer in the campaign which does not have a communication
 * record, a false is returned
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CheckLetterReachabilityResponse extends AbstractStructBase
{
    /**
     * The isByLetterReachable
     * @var bool|null
     */
    protected ?bool $isByLetterReachable = null;
    /**
     * Constructor method for CheckLetterReachabilityResponse
     * @uses CheckLetterReachabilityResponse::setIsByLetterReachable()
     * @param bool $isByLetterReachable
     */
    public function __construct(?bool $isByLetterReachable = null)
    {
        $this
            ->setIsByLetterReachable($isByLetterReachable);
    }
    /**
     * Get isByLetterReachable value
     * @return bool|null
     */
    public function getIsByLetterReachable(): ?bool
    {
        return $this->isByLetterReachable;
    }
    /**
     * Set isByLetterReachable value
     * @param bool $isByLetterReachable
     * @return \Pggns\MidocoApi\Mis\StructType\CheckLetterReachabilityResponse
     */
    public function setIsByLetterReachable(?bool $isByLetterReachable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isByLetterReachable) && !is_bool($isByLetterReachable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isByLetterReachable, true), gettype($isByLetterReachable)), __LINE__);
        }
        $this->isByLetterReachable = $isByLetterReachable;
        
        return $this;
    }
}
