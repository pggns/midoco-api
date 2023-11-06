<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCrmPersonTravellerMaritalStatusDescriptionsRequest
 * StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCrmPersonTravellerMaritalStatusDescriptionsRequest extends AbstractStructBase
{
    /**
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * Constructor method for GetCrmPersonTravellerMaritalStatusDescriptionsRequest
     * @uses GetCrmPersonTravellerMaritalStatusDescriptionsRequest::setCultureId()
     * @param string $cultureId
     */
    public function __construct(?string $cultureId = null)
    {
        $this
            ->setCultureId($cultureId);
    }
    /**
     * Get cultureId value
     * @return string|null
     */
    public function getCultureId(): ?string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\Crm\StructType\GetCrmPersonTravellerMaritalStatusDescriptionsRequest
     */
    public function setCultureId(?string $cultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
        return $this;
    }
}
