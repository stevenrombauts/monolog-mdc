<?php
namespace Stevenrombauts\MonologMDC\Laravel;

use Stevenrombauts\MonologMDC\MDCProcessor;

class ProcessorTap
{
    /**
     * Customize the given logger instance.
     *
     * @param \Illuminate\Log\Logger $logger
     * @return void
     */
    public function __invoke($logger)
    {
        $logger->pushProcessor(new MDCProcessor());
    }
}