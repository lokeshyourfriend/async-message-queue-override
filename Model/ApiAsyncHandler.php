<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Lokeshyourfriend\AsyncMsgQueueOverride\Model;

/**
 * Class for testing asynchronous queue handlers.
 *
 * @SuppressWarnings(PHPMD)
 */
class ApiAsyncHandler
{
    private \Psr\Log\LoggerInterface $_logger;
 
    public function __construct(
        \Psr\Log\LoggerInterface $logger
    )
    {        
        $this->_logger = $logger;
    }
    /**
     * @param string
     * @return void
     */
    public function methodWithStringParam($param)
    {
        $this->_logger->debug('Lokeshyourfriend_AsyncMsgQueueOverride: This is called from the handle defined in the webapi.xml file.');
        return;
    }

    /**
     * @param bool
     * @return void
     */
    public function methodWithBoolParam($param)
    {
        return;
    }

    /**
     * @param mixed
     * @return void
     */
    public function methodWithMixedParam($param)
    {
        return;
    }
}
