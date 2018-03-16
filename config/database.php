<?php

/*if (empty($GLOBALS['DB_DEFAULT_GLOBAL'])){
    if (!empty($_SERVER['RDS_HOSTNAME'])) {

        define('RDS_HOSTNAME', $_SERVER['RDS_HOSTNAME']);
        define('RDS_USERNAME', $_SERVER['RDS_USERNAME']);
        define('RDS_PASSWORD', $_SERVER['RDS_PASSWORD']);
        define('RDS_DB_NAME', $_SERVER['RDS_DB_NAME']);
        define('DB_DEFAULT', $_SERVER['DB_DEFAULT']);
    
    }else{
        define('RDS_HOSTNAME', 'jorgequevedoc.cqsb1q6mqggq.us-east-1.rds.amazonaws.com');
        define('RDS_USERNAME', 'jorge');
        define('RDS_PASSWORD', 'password');
        define('RDS_DB_NAME', 'admin2294');
        define('DB_DEFAULT', 'mysql');
    }
}else{
    define('DB_DEFAULT', $GLOBALS['DB_DEFAULT_GLOBAL']);
}*/


return [

    /*
    |--------------------------------------------------------------------------
    | PDO Fetch Style
    |--------------------------------------------------------------------------
    |
    | By default, database results will be returned as instances of the PHP
    | stdClass object; however, you may desire to retrieve records in an
    | array format for simplicity. Here you can tweak the fetch style.
    |
    */

    'fetch' => PDO::FETCH_OBJ,

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION','mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'sqlite_testing' => [
            'driver' => 'sqlite',
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
        ],
        /*'mysql' => [
            'driver' => 'mysql',
            'host'      => RDS_HOSTNAME,
            'database'  => RDS_DB_NAME,
            'username'  => RDS_USERNAME,
            'password'  => RDS_PASSWORD,
            'port'      => '3306',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],*/
        'mysql' => [
            'driver' => 'mysql',
            'host'      => 'jorgequevedoc.cqsb1q6mqggq.us-east-1.rds.amazonaws.com',
            'database'  => 'admin2294',
            'username'  => 'jorge',
            'password'  => 'password',
            'port'      => '3306',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer set of commands than a typical key-value systems
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'cluster' => false,

        'default' => [
            'host' => env('REDIS_HOST', 'localhost'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => 0,
        ],

    ],

];