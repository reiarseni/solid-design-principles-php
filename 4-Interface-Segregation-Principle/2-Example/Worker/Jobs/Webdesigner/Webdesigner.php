<?php

namespace Worker\Jobs\Webdesigner;

class Webdesigner implements DesignInterface
{
    public function job(): string
    {
        return 'Webdesigner';
    }

    public function designate(): string
    {
        return 'Designate';
    }

    public function action(): string
    {
        return 'The '.$this->job().' '.$this->designate();
    }
}
