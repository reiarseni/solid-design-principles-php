<?php

namespace Worker\Jobs\Developer;

use Worker\Jobs\JobInterface;

interface CodeInterface extends JobInterface
{
    public function coding(): string;
}
