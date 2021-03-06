<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8d0a4ae9275a506fadedb05478951cd0
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sanatorium\\Bill\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sanatorium\\Bill\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'CreateBillAttributesTable' => __DIR__ . '/../..' . '/database/migrations/2016_08_26_150135_create_bill_attributes_table.php',
        'CreateBillsTable' => __DIR__ . '/../..' . '/database/migrations/2016_04_13_090033_create_bills_table.php',
        'CreateJobsTable' => __DIR__ . '/../..' . '/database/migrations/2016_04_13_090142_create_jobs_table.php',
        'Sanatorium\\Bill\\Controllers\\Admin\\BillsController' => __DIR__ . '/../..' . '/src/Controllers/Admin/BillsController.php',
        'Sanatorium\\Bill\\Controllers\\Admin\\JobsController' => __DIR__ . '/../..' . '/src/Controllers/Admin/JobsController.php',
        'Sanatorium\\Bill\\Controllers\\Frontend\\BillsController' => __DIR__ . '/../..' . '/src/Controllers/Frontend/BillsController.php',
        'Sanatorium\\Bill\\Controllers\\Frontend\\JobsController' => __DIR__ . '/../..' . '/src/Controllers/Frontend/JobsController.php',
        'Sanatorium\\Bill\\Database\\Seeds\\OriginalbillTableSeeder' => __DIR__ . '/../..' . '/database/seeds/OriginalbillTableSeeder.php',
        'Sanatorium\\Bill\\Handlers\\Bill\\BillDataHandler' => __DIR__ . '/../..' . '/src/Handlers/Bill/BillDataHandler.php',
        'Sanatorium\\Bill\\Handlers\\Bill\\BillDataHandlerInterface' => __DIR__ . '/../..' . '/src/Handlers/Bill/BillDataHandlerInterface.php',
        'Sanatorium\\Bill\\Handlers\\Bill\\BillEventHandler' => __DIR__ . '/../..' . '/src/Handlers/Bill/BillEventHandler.php',
        'Sanatorium\\Bill\\Handlers\\Bill\\BillEventHandlerInterface' => __DIR__ . '/../..' . '/src/Handlers/Bill/BillEventHandlerInterface.php',
        'Sanatorium\\Bill\\Handlers\\Job\\JobDataHandler' => __DIR__ . '/../..' . '/src/Handlers/Job/JobDataHandler.php',
        'Sanatorium\\Bill\\Handlers\\Job\\JobDataHandlerInterface' => __DIR__ . '/../..' . '/src/Handlers/Job/JobDataHandlerInterface.php',
        'Sanatorium\\Bill\\Handlers\\Job\\JobEventHandler' => __DIR__ . '/../..' . '/src/Handlers/Job/JobEventHandler.php',
        'Sanatorium\\Bill\\Handlers\\Job\\JobEventHandlerInterface' => __DIR__ . '/../..' . '/src/Handlers/Job/JobEventHandlerInterface.php',
        'Sanatorium\\Bill\\Models\\Bill' => __DIR__ . '/../..' . '/src/Models/Bill.php',
        'Sanatorium\\Bill\\Models\\Job' => __DIR__ . '/../..' . '/src/Models/Job.php',
        'Sanatorium\\Bill\\Providers\\BillServiceProvider' => __DIR__ . '/../..' . '/src/Providers/BillServiceProvider.php',
        'Sanatorium\\Bill\\Providers\\JobServiceProvider' => __DIR__ . '/../..' . '/src/Providers/JobServiceProvider.php',
        'Sanatorium\\Bill\\Repositories\\Bill\\BillRepository' => __DIR__ . '/../..' . '/src/Repositories/Bill/BillRepository.php',
        'Sanatorium\\Bill\\Repositories\\Bill\\BillRepositoryInterface' => __DIR__ . '/../..' . '/src/Repositories/Bill/BillRepositoryInterface.php',
        'Sanatorium\\Bill\\Repositories\\Job\\JobRepository' => __DIR__ . '/../..' . '/src/Repositories/Job/JobRepository.php',
        'Sanatorium\\Bill\\Repositories\\Job\\JobRepositoryInterface' => __DIR__ . '/../..' . '/src/Repositories/Job/JobRepositoryInterface.php',
        'Sanatorium\\Bill\\Validator\\Bill\\BillValidator' => __DIR__ . '/../..' . '/src/Validator/Bill/BillValidator.php',
        'Sanatorium\\Bill\\Validator\\Bill\\BillValidatorInterface' => __DIR__ . '/../..' . '/src/Validator/Bill/BillValidatorInterface.php',
        'Sanatorium\\Bill\\Validator\\Job\\JobValidator' => __DIR__ . '/../..' . '/src/Validator/Job/JobValidator.php',
        'Sanatorium\\Bill\\Validator\\Job\\JobValidatorInterface' => __DIR__ . '/../..' . '/src/Validator/Job/JobValidatorInterface.php',
        'Sanatorium\\Bill\\Widgets\\Bill' => __DIR__ . '/../..' . '/src/Widgets/Bill.php',
        'Sanatorium\\Bill\\Widgets\\Frontendbill' => __DIR__ . '/../..' . '/src/Widgets/Frontendbill.php',
        'Sanatorium\\Bill\\Widgets\\Job' => __DIR__ . '/../..' . '/src/Widgets/Job.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8d0a4ae9275a506fadedb05478951cd0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8d0a4ae9275a506fadedb05478951cd0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8d0a4ae9275a506fadedb05478951cd0::$classMap;

        }, null, ClassLoader::class);
    }
}
