<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnounceStadisMessageRequest StructType
 * @subpackage Structs
 */
class AnnounceStadisMessageRequest extends AbstractStructBase
{
    /**
     * The StadisMessage
     * @var string|null
     */
    protected ?string $StadisMessage = null;
    /**
     * The crs_type
     * Meta information extracted from the WSDL
     * - default: MERLIN
     * @var string|null
     */
    protected ?string $crs_type = null;
    /**
     * The reference_booking_id
     * @var string|null
     */
    protected ?string $reference_booking_id = null;
    /**
     * The reference_type
     * @var string|null
     */
    protected ?string $reference_type = null;
    /**
     * Constructor method for AnnounceStadisMessageRequest
     * @uses AnnounceStadisMessageRequest::setStadisMessage()
     * @uses AnnounceStadisMessageRequest::setCrs_type()
     * @uses AnnounceStadisMessageRequest::setReference_booking_id()
     * @uses AnnounceStadisMessageRequest::setReference_type()
     * @param string $stadisMessage
     * @param string $crs_type
     * @param string $reference_booking_id
     * @param string $reference_type
     */
    public function __construct(?string $stadisMessage = null, ?string $crs_type = 'MERLIN', ?string $reference_booking_id = null, ?string $reference_type = null)
    {
        $this
            ->setStadisMessage($stadisMessage)
            ->setCrs_type($crs_type)
            ->setReference_booking_id($reference_booking_id)
            ->setReference_type($reference_type);
    }
    /**
     * Get StadisMessage value
     * @return string|null
     */
    public function getStadisMessage(): ?string
    {
        return $this->StadisMessage;
    }
    /**
     * Set StadisMessage value
     * @param string $stadisMessage
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceStadisMessageRequest
     */
    public function setStadisMessage(?string $stadisMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($stadisMessage) && !is_string($stadisMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stadisMessage, true), gettype($stadisMessage)), __LINE__);
        }
        $this->StadisMessage = $stadisMessage;
        
        return $this;
    }
    /**
     * Get crs_type value
     * @return string|null
     */
    public function getCrs_type(): ?string
    {
        return $this->crs_type;
    }
    /**
     * Set crs_type value
     * @param string $crs_type
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceStadisMessageRequest
     */
    public function setCrs_type(?string $crs_type = 'MERLIN'): self
    {
        // validation for constraint: string
        if (!is_null($crs_type) && !is_string($crs_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crs_type, true), gettype($crs_type)), __LINE__);
        }
        $this->crs_type = $crs_type;
        
        return $this;
    }
    /**
     * Get reference_booking_id value
     * @return string|null
     */
    public function getReference_booking_id(): ?string
    {
        return $this->{'reference-booking-id'};
    }
    /**
     * Set reference_booking_id value
     * @param string $reference_booking_id
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceStadisMessageRequest
     */
    public function setReference_booking_id(?string $reference_booking_id = null): self
    {
        // validation for constraint: string
        if (!is_null($reference_booking_id) && !is_string($reference_booking_id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference_booking_id, true), gettype($reference_booking_id)), __LINE__);
        }
        $this->reference_booking_id = $this->{'reference-booking-id'} = $reference_booking_id;
        
        return $this;
    }
    /**
     * Get reference_type value
     * @return string|null
     */
    public function getReference_type(): ?string
    {
        return $this->{'reference-type'};
    }
    /**
     * Set reference_type value
     * @param string $reference_type
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceStadisMessageRequest
     */
    public function setReference_type(?string $reference_type = null): self
    {
        // validation for constraint: string
        if (!is_null($reference_type) && !is_string($reference_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference_type, true), gettype($reference_type)), __LINE__);
        }
        $this->reference_type = $this->{'reference-type'} = $reference_type;
        
        return $this;
    }
}
