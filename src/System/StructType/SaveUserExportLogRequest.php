<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveUserExportLogRequest StructType
 * @subpackage Structs
 */
class SaveUserExportLogRequest extends AbstractStructBase
{
    /**
     * The MidocoUserExportLog
     * Meta information extracted from the WSDL
     * - ref: MidocoUserExportLog
     * @var \Pggns\MidocoApi\System\StructType\UserExportLogDTO|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\UserExportLogDTO $MidocoUserExportLog = null;
    /**
     * Constructor method for SaveUserExportLogRequest
     * @uses SaveUserExportLogRequest::setMidocoUserExportLog()
     * @param \Pggns\MidocoApi\System\StructType\UserExportLogDTO $midocoUserExportLog
     */
    public function __construct(?\Pggns\MidocoApi\System\StructType\UserExportLogDTO $midocoUserExportLog = null)
    {
        $this
            ->setMidocoUserExportLog($midocoUserExportLog);
    }
    /**
     * Get MidocoUserExportLog value
     * @return \Pggns\MidocoApi\System\StructType\UserExportLogDTO|null
     */
    public function getMidocoUserExportLog(): ?\Pggns\MidocoApi\System\StructType\UserExportLogDTO
    {
        return $this->MidocoUserExportLog;
    }
    /**
     * Set MidocoUserExportLog value
     * @param \Pggns\MidocoApi\System\StructType\UserExportLogDTO $midocoUserExportLog
     * @return \Pggns\MidocoApi\System\StructType\SaveUserExportLogRequest
     */
    public function setMidocoUserExportLog(?\Pggns\MidocoApi\System\StructType\UserExportLogDTO $midocoUserExportLog = null): self
    {
        $this->MidocoUserExportLog = $midocoUserExportLog;
        
        return $this;
    }
}
