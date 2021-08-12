<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'ec2-34-234-12-149.compute-1.amazonaws.com';
$CFG->dbname    = 'd753j6dmbk4m6k';
$CFG->dbuser    = 'dynaqjkduhpqdi';
$CFG->dbpass    = '0f126afd430e7289200f5f7fed258bfbdbedb33e2d61e54b0a179898457c5fa6';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 5432,
  'dbsocket' => '',
);

$CFG->wwwroot   = 'http://localhost/moodle';
$CFG->dataroot  = 'F:\\XServer\\moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
