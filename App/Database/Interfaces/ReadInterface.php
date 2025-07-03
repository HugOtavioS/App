<?php

namespace Database\Interfaces;

interface ReadInterface {
    public function read($table, ...$where);
}