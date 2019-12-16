<?php

namespace Stevenrombauts\MonologMDC;

class MDCProcessor
{
    public function __invoke(array $record)
    {
        if (!MDC::enabled() || MDC::isEmpty()) {
            return $record;
        }

        $record['context'] = array_merge($record['context'], MDC::all());

        return $record;
    }
}
