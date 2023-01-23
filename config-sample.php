<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'docker_moodle_minimal-db';
$CFG->dbname    = 'moodle';
$CFG->dbuser    = 'my_secret_db_user';
$CFG->dbpass    = 'my_secret_password';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = 'http://localhost:8088';
$CFG->dataroot  = '/please/adapt/it';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0755;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
