<?php

namespace SprykerFeature\Zed\Oms\Business;

use SprykerFeature\Shared\Sales\Transfer\Order as OrderTransfer;
use SprykerFeature\Zed\Oms\Communication\Plugin\Oms\Command\CommandInterface;
use SprykerFeature\Zed\Oms\Communication\Plugin\Oms\Condition\ConditionInterface;

class OmsSettings
{

    const INITIAL_STATUS = 'new';
    const DEFAULT_PROCESS_LOCATION = '/config/Zed/oms';

    /**
     * @return string
     */
    public function getProcessDefinitionLocation()
    {
        return APPLICATION_ROOT_DIR . self::DEFAULT_PROCESS_LOCATION;
    }

    /**
     * @return array
     */
    public function getActiveProcesses()
    {
        return [];
    }

    /**
     * @param OrderTransfer $orderTransfer
     *
     * @return mixed
     */
    public function selectProcess(OrderTransfer $orderTransfer)
    {
        return null;
    }

    /**
     * @return CommandInterface[]
     */
    public function getCommands()
    {
        return [];
    }

    /**
     * @return ConditionInterface[]
     */
    public function getConditions()
    {
        return [];
    }
}
