<?php  // Moodle configuration file
unset($CFG);
global $CFG;
$CFG = new stdClass();
$dbopts = parse_url(getenv('DATABASE_URL'));

//$CFG->dbhost    = getenv('DATABASE_HOST');
//$CFG->dbname    = getenv('DATABASE_NAME');
//$CFG->dbuser    = getenv('DATABASE_USER');
//$CFG->dbpass    = getenv('DATABASE_PASSWORD');
//$CFG->prefix    = 'mdl_';
$dbopts = parse_url(getenv('DATABASE_URL'));
$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = $dbopts["host"];
$CFG->dbuser    = $dbopts["user"];
$CFG->dbpass    = $dbopts["pass"];
$CFG->prefix    = 'mdl_';

$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv('DATABASE_PORT'),
  'dbsocket' => '',
);

$CFG->wwwroot   = getenv('WWWROOT');
$CFG->dataroot  = getenv('DATAROOT');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
