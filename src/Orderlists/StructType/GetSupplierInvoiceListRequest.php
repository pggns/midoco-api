<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierInvoiceListRequest StructType
 * @subpackage Structs
 */
class GetSupplierInvoiceListRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierInvoiceListCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierInvoiceListCriteria
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierInvoiceListCriteria|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierInvoiceListCriteria $MidocoSupplierInvoiceListCriteria = null;
    /**
     * The maxReturned
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $maxReturned = null;
    /**
     * Constructor method for GetSupplierInvoiceListRequest
     * @uses GetSupplierInvoiceListRequest::setMidocoSupplierInvoiceListCriteria()
     * @uses GetSupplierInvoiceListRequest::setMaxReturned()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierInvoiceListCriteria $midocoSupplierInvoiceListCriteria
     * @param int $maxReturned
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierInvoiceListCriteria $midocoSupplierInvoiceListCriteria = null, ?int $maxReturned = null)
    {
        $this
            ->setMidocoSupplierInvoiceListCriteria($midocoSupplierInvoiceListCriteria)
            ->setMaxReturned($maxReturned);
    }
    /**
     * Get MidocoSupplierInvoiceListCriteria value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierInvoiceListCriteria|null
     */
    public function getMidocoSupplierInvoiceListCriteria(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierInvoiceListCriteria
    {
        return $this->MidocoSupplierInvoiceListCriteria;
    }
    /**
     * Set MidocoSupplierInvoiceListCriteria value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierInvoiceListCriteria $midocoSupplierInvoiceListCriteria
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetSupplierInvoiceListRequest
     */
    public function setMidocoSupplierInvoiceListCriteria(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSupplierInvoiceListCriteria $midocoSupplierInvoiceListCriteria = null): self
    {
        $this->MidocoSupplierInvoiceListCriteria = $midocoSupplierInvoiceListCriteria;
        
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetSupplierInvoiceListRequest
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
