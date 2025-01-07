<?php
use Config\database;
use Config\Database\Operations\Select;
use Config\Database\Operations\Insert;

database::registerOperation("select", new Select());
database::registerOperation("insert", new Insert());