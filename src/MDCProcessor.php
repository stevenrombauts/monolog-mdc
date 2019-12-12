<?php

namespace Stevenrombauts\MonologMDC;

class MDCProcessor
{
    public function __invoke(array $record)
    {
        if (MDC::enabled() || MDC::isEmpty()) {
            return $record;
        }

        $record['extra'] = array_merge($record['extra'], MDC::all());

        return $record;
    }
}