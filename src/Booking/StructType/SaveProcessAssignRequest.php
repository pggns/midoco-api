<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Booking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveProcessAssignRequest StructType
 * @subpackage Structs
 */
class SaveProcessAssignRequest extends AbstractStructBase
{
    /**
     * The MidocoProcessAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoProcessAssign
     * @var \Pggns\MidocoApi\Booking\StructType\ProcessAssignDTO|null
     */
    protected ?\Pggns\MidocoApi\Booking\StructType\ProcessAssignDTO $MidocoProcessAssign = null;
    /**
     * Constructor method for SaveProcessAssignRequest
     * @uses SaveProcessAssignRequest::setMidocoProcessAssign()
     * @param \Pggns\MidocoApi\Booking\StructType\ProcessAssignDTO $midocoProcessAssign
     */
    public function __construct(?\Pggns\MidocoApi\Booking\StructType\ProcessAssignDTO $midocoProcessAssign = null)
    {
        $this
            ->setMidocoProcessAssign($midocoProcessAssign);
    }
    /**
     * Get MidocoProcessAssign value
     * @return \Pggns\MidocoApi\Booking\StructType\ProcessAssignDTO|null
     */
    public function getMidocoProcessAssign(): ?\Pggns\MidocoApi\Booking\StructType\ProcessAssignDTO
    {
        return $this->MidocoProcessAssign;
    }
    /**
     * Set MidocoProcessAssign value
     * @param \Pggns\MidocoApi\Booking\StructType\ProcessAssignDTO $midocoProcessAssign
     * @return \Pggns\MidocoApi\Booking\StructType\SaveProcessAssignRequest
     */
    public function setMidocoProcessAssign(?\Pggns\MidocoApi\Booking\StructType\ProcessAssignDTO $midocoProcessAssign = null): self
    {
        $this->MidocoProcessAssign = $midocoProcessAssign;
        
        return $this;
    }
}
