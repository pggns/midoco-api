<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvoiceDataListRequest StructType
 * @subpackage Structs
 */
class InvoiceDataListRequest extends AbstractStructBase
{
    /**
     * The MidocoInvoiceDataListCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoInvoiceDataListCriteria
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListCriteriaType $MidocoInvoiceDataListCriteria = null;
    /**
     * Constructor method for InvoiceDataListRequest
     * @uses InvoiceDataListRequest::setMidocoInvoiceDataListCriteria()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListCriteriaType $midocoInvoiceDataListCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListCriteriaType $midocoInvoiceDataListCriteria = null)
    {
        $this
            ->setMidocoInvoiceDataListCriteria($midocoInvoiceDataListCriteria);
    }
    /**
     * Get MidocoInvoiceDataListCriteria value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListCriteriaType|null
     */
    public function getMidocoInvoiceDataListCriteria(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListCriteriaType
    {
        return $this->MidocoInvoiceDataListCriteria;
    }
    /**
     * Set MidocoInvoiceDataListCriteria value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListCriteriaType $midocoInvoiceDataListCriteria
     * @return \Pggns\MidocoApi\Orderlists\StructType\InvoiceDataListRequest
     */
    public function setMidocoInvoiceDataListCriteria(?\Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListCriteriaType $midocoInvoiceDataListCriteria = null): self
    {
        $this->MidocoInvoiceDataListCriteria = $midocoInvoiceDataListCriteria;
        
        return $this;
    }
}
