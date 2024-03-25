<?php

namespace Worker\Jobs;

interface JobInterface
{
    public function job(): string;

    public function action(): string;
}
