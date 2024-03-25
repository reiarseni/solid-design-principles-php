<?php

namespace Worker;

use Worker\Jobs\JobInterface;

class Employee
{
    public function action(JobInterface $job): string
    {
        return $job->action();
    }
}
