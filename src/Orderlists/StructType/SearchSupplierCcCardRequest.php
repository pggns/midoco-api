<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchSupplierCcCardRequest StructType
 * @subpackage Structs
 */
class SearchSupplierCcCardRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierCcCard
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierCcCard
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierCcCard|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierCcCard $MidocoSupplierCcCard = null;
    /**
     * Constructor method for SearchSupplierCcCardRequest
     * @uses SearchSupplierCcCardRequest::setMidocoSupplierCcCard()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierCcCard $midocoSupplierCcCard
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierCcCard $midocoSupplierCcCard = null)
    {
        $this
            ->setMidocoSupplierCcCard($midocoSupplierCcCard);
    }
    /**
     * Get MidocoSupplierCcCard value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierCcCard|null
     */
    public function getMidocoSupplierCcCard(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierCcCard
    {
        return $this->MidocoSupplierCcCard;
    }
    /**
     * Set MidocoSupplierCcCard value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierCcCard $midocoSupplierCcCard
     * @return \Pggns\MidocoApi\Orderlists\StructType\SearchSupplierCcCardRequest
     */
    public function setMidocoSupplierCcCard(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierCcCard $midocoSupplierCcCard = null): self
    {
        $this->MidocoSupplierCcCard = $midocoSupplierCcCard;
        
        return $this;
    }
}
