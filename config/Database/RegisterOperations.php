<?php
use Config\database;
use App\Utils;
use Config\env;
use Config\Database\Operations\Select;
use Config\Database\Operations\Insert;
new database(new env());
database::registerOperation("select", new Select(new Utils));
database::registerOperation("insert", new Insert(new Utils));