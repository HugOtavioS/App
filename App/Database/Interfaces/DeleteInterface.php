<?php

namespace Database\Interfaces;

interface DeleteInterface {
    public function delete($table, $id);
}