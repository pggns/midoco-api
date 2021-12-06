<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteTaskViewRequest StructType
 * @subpackage Structs
 */
class DeleteTaskViewRequest extends AbstractStructBase
{
    /**
     * The MidocoTaskView
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoTaskView
     * @var \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskView
     */
    protected \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskView $MidocoTaskView;
    /**
     * Constructor method for DeleteTaskViewRequest
     * @uses DeleteTaskViewRequest::setMidocoTaskView()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskView $midocoTaskView
     */
    public function __construct(\Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskView $midocoTaskView)
    {
        $this
            ->setMidocoTaskView($midocoTaskView);
    }
    /**
     * Get MidocoTaskView value
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskView
     */
    public function getMidocoTaskView(): \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskView
    {
        return $this->MidocoTaskView;
    }
    /**
     * Set MidocoTaskView value
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskView $midocoTaskView
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\DeleteTaskViewRequest
     */
    public function setMidocoTaskView(\Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskView $midocoTaskView): self
    {
        $this->MidocoTaskView = $midocoTaskView;
        
        return $this;
    }
}
