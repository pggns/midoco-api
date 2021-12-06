<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConnectedCustomerListRequest StructType
 * @subpackage Structs
 */
class ConnectedCustomerListRequest extends AbstractStructBase
{
    /**
     * The MidocoConnectedCustomerListCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoConnectedCustomerListCriteria
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListCriteria|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListCriteria $MidocoConnectedCustomerListCriteria = null;
    /**
     * The maxReturned
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $maxReturned = null;
    /**
     * Constructor method for ConnectedCustomerListRequest
     * @uses ConnectedCustomerListRequest::setMidocoConnectedCustomerListCriteria()
     * @uses ConnectedCustomerListRequest::setMaxReturned()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListCriteria $midocoConnectedCustomerListCriteria
     * @param int $maxReturned
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListCriteria $midocoConnectedCustomerListCriteria = null, ?int $maxReturned = null)
    {
        $this
            ->setMidocoConnectedCustomerListCriteria($midocoConnectedCustomerListCriteria)
            ->setMaxReturned($maxReturned);
    }
    /**
     * Get MidocoConnectedCustomerListCriteria value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListCriteria|null
     */
    public function getMidocoConnectedCustomerListCriteria(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListCriteria
    {
        return $this->MidocoConnectedCustomerListCriteria;
    }
    /**
     * Set MidocoConnectedCustomerListCriteria value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListCriteria $midocoConnectedCustomerListCriteria
     * @return \Pggns\MidocoApi\Orderlists\StructType\ConnectedCustomerListRequest
     */
    public function setMidocoConnectedCustomerListCriteria(?\Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListCriteria $midocoConnectedCustomerListCriteria = null): self
    {
        $this->MidocoConnectedCustomerListCriteria = $midocoConnectedCustomerListCriteria;
        
        return $this;
    }
    /**
     * Get maxReturned value
     * @return int|null
     */
    public function getMaxReturned(): ?int
    {
        return $this->maxReturned;
    }
    /**
     * Set maxReturned value
     * @param int $maxReturned
     * @return \Pggns\MidocoApi\Orderlists\StructType\ConnectedCustomerListRequest
     */
    public function setMaxReturned(?int $maxReturned = null): self
    {
        // validation for constraint: int
        if (!is_null($maxReturned) && !(is_int($maxReturned) || ctype_digit($maxReturned))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxReturned, true), gettype($maxReturned)), __LINE__);
        }
        $this->maxReturned = $maxReturned;
        
        return $this;
    }
}
