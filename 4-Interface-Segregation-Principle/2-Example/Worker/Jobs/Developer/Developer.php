<?php

namespace Worker\Jobs\Developer;

class Developer implements CodeInterface
{
    public function job(): string
    {
        return 'Developer';
    }

    public function coding(): string
    {
        return 'Coding';
    }

    public function action(): string
    {
        return 'The '.$this->job().' '.$this->coding();
    }
}
