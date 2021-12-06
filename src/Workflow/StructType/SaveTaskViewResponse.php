<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTaskViewResponse StructType
 * @subpackage Structs
 */
class SaveTaskViewResponse extends AbstractStructBase
{
    /**
     * The MidocoTaskView
     * Meta information extracted from the WSDL
     * - ref: MidocoTaskView
     * @var \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskView|null
     */
    protected ?\Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskView $MidocoTaskView = null;
    /**
     * Constructor method for SaveTaskViewResponse
     * @uses SaveTaskViewResponse::setMidocoTaskView()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskView $midocoTaskView
     */
    public function __construct(?\Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskView $midocoTaskView = null)
    {
        $this
            ->setMidocoTaskView($midocoTaskView);
    }
    /**
     * Get MidocoTaskView value
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskView|null
     */
    public function getMidocoTaskView(): ?\Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskView
    {
        return $this->MidocoTaskView;
    }
    /**
     * Set MidocoTaskView value
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskView $midocoTaskView
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\SaveTaskViewResponse
     */
    public function setMidocoTaskView(?\Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskView $midocoTaskView = null): self
    {
        $this->MidocoTaskView = $midocoTaskView;
        
        return $this;
    }
}
