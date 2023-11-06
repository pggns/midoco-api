<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgunitNameForBookingIdRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrgunitNameForBookingIdRequest extends AbstractStructBase
{
    /**
     * The externalSystem
     * @var string|null
     */
    protected ?string $externalSystem = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * Constructor method for GetOrgunitNameForBookingIdRequest
     * @uses GetOrgunitNameForBookingIdRequest::setExternalSystem()
     * @uses GetOrgunitNameForBookingIdRequest::setBookingId()
     * @param string $externalSystem
     * @param string $bookingId
     */
    public function __construct(?string $externalSystem = null, ?string $bookingId = null)
    {
        $this
            ->setExternalSystem($externalSystem)
            ->setBookingId($bookingId);
    }
    /**
     * Get externalSystem value
     * @return string|null
     */
    public function getExternalSystem(): ?string
    {
        return $this->externalSystem;
    }
    /**
     * Set externalSystem value
     * @param string $externalSystem
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgunitNameForBookingIdRequest
     */
    public function setExternalSystem(?string $externalSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($externalSystem) && !is_string($externalSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalSystem, true), gettype($externalSystem)), __LINE__);
        }
        $this->externalSystem = $externalSystem;
        
        return $this;
    }
    /**
     * Get bookingId value
     * @return string|null
     */
    public function getBookingId(): ?string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgunitNameForBookingIdRequest
     */
    public function setBookingId(?string $bookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
}
