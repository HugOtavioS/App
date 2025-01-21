<?php
use Config\database;
use Config\Database\DatabaseError;
use Config\env;
use Config\Database\Operations\Select;
use Config\Database\Operations\Insert;

new database(new env(), new DatabaseError());

database::registerOperation("select", new Select());
database::registerOperation("insert", new Insert());