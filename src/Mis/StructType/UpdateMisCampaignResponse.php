<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateMisCampaignResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: UpdateMisCampaign --- adds a new entry to the log. The entry consists of a message, a timestamp, a severity, an application and the source/destination database names
 * @subpackage Structs
 */
class UpdateMisCampaignResponse extends AbstractStructBase
{
    /**
     * The updated
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $updated = null;
    /**
     * Constructor method for UpdateMisCampaignResponse
     * @uses UpdateMisCampaignResponse::setUpdated()
     * @param bool $updated
     */
    public function __construct(?bool $updated = false)
    {
        $this
            ->setUpdated($updated);
    }
    /**
     * Get updated value
     * @return bool|null
     */
    public function getUpdated(): ?bool
    {
        return $this->updated;
    }
    /**
     * Set updated value
     * @param bool $updated
     * @return \Pggns\MidocoApi\Mis\StructType\UpdateMisCampaignResponse
     */
    public function setUpdated(?bool $updated = false): self
    {
        // validation for constraint: boolean
        if (!is_null($updated) && !is_bool($updated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($updated, true), gettype($updated)), __LINE__);
        }
        $this->updated = $updated;
        
        return $this;
    }
}
