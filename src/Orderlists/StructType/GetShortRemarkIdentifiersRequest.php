<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShortRemarkIdentifiersRequest StructType
 * @subpackage Structs
 */
class GetShortRemarkIdentifiersRequest extends AbstractStructBase
{
    /**
     * The RemarkIdentifiersSearchCriteria
     * Meta information extracted from the WSDL
     * - ref: RemarkIdentifiersSearchCriteria
     * @var \Pggns\MidocoApi\Orderlists\StructType\RemarkIdentifiersSearchCriteria|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\RemarkIdentifiersSearchCriteria $RemarkIdentifiersSearchCriteria = null;
    /**
     * Constructor method for GetShortRemarkIdentifiersRequest
     * @uses GetShortRemarkIdentifiersRequest::setRemarkIdentifiersSearchCriteria()
     * @param \Pggns\MidocoApi\Orderlists\StructType\RemarkIdentifiersSearchCriteria $remarkIdentifiersSearchCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\RemarkIdentifiersSearchCriteria $remarkIdentifiersSearchCriteria = null)
    {
        $this
            ->setRemarkIdentifiersSearchCriteria($remarkIdentifiersSearchCriteria);
    }
    /**
     * Get RemarkIdentifiersSearchCriteria value
     * @return \Pggns\MidocoApi\Orderlists\StructType\RemarkIdentifiersSearchCriteria|null
     */
    public function getRemarkIdentifiersSearchCriteria(): ?\Pggns\MidocoApi\Orderlists\StructType\RemarkIdentifiersSearchCriteria
    {
        return $this->RemarkIdentifiersSearchCriteria;
    }
    /**
     * Set RemarkIdentifiersSearchCriteria value
     * @param \Pggns\MidocoApi\Orderlists\StructType\RemarkIdentifiersSearchCriteria $remarkIdentifiersSearchCriteria
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetShortRemarkIdentifiersRequest
     */
    public function setRemarkIdentifiersSearchCriteria(?\Pggns\MidocoApi\Orderlists\StructType\RemarkIdentifiersSearchCriteria $remarkIdentifiersSearchCriteria = null): self
    {
        $this->RemarkIdentifiersSearchCriteria = $remarkIdentifiersSearchCriteria;
        
        return $this;
    }
}
