<?php
use Config\database;
use App\Utils;
use Config\env;
use Config\Database\Operations\Select;
use Config\Database\Operations\Insert;

database::registerOperation("select", new Select(new database(new env), new Utils));
database::registerOperation("insert", new Insert(new database(new env), new Utils));