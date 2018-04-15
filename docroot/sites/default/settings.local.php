<?php

assert_options(ASSERT_ACTIVE, TRUE);
\Drupal\Component\Assertion\Handle::register();

$settings['hash_salt'] = 'VLjnL3BXd75h9oqhEh0A2SHps8RL5C_Kip_xHGXqaaeG5WNKU7DbMZi38zNubEeMR3iXBc4MTA';

$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';

$config['system.logging']['error_level'] = 'verbose';

$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

# $settings['cache']['bins']['render'] = 'cache.backend.null';

# $settings['cache']['bins']['discovery_migration'] = 'cache.backend.memory';

# $settings['cache']['bins']['page'] = 'cache.backend.null';

# $settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';

# $settings['extension_discovery_scan_tests'] = TRUE;

$settings['rebuild_access'] = TRUE;

$settings['skip_permissions_hardening'] = TRUE;

$settings['trusted_host_patterns'] = array(
    '^elections\.sl$',
    '^dev.electiondata\.io$',
    '^test.elections\.sl$',
    '^prod.elections\.sl$',
    '^electiondata\.io$',
    '^electiondata\.io\.dd$',
    '^dev.electiondata\.io$',
    '^test.electiondata\.io$',
    '^prod.electiondata\.io$',
    '^.+\.elections\.sl$',
    '^.+\.electiondata\.io$',
    '^.+\.electiondata\.io\.dd$',
    '^lamtech\.sl$',
    '^.+\.lamtech\.sl$',
  );

if (isset($_SERVER['REQUEST_URI']) && strpos($_SERVER['REQUEST_URI'], '/api/') === 0 ) {
  ini_set('memory_limit', '2G');
}

if (PHP_SAPI === 'cli') {
  ini_set('memory_limit', '2G');
}

$databases['default']['default'] = array (
  'database' => 'electiondataprod',
  'username' => 'root',
  'password' => 'root',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);

$config_directories = array(
  CONFIG_SYNC_DIRECTORY => '../config',
 );
$config_directories['sync'] = '../config';


#$settings['memcache']['servers'] = ['127.0.0.1:11211' => 'default'];
#$settings['memcache']['bins'] = ['default' => 'default'];
#$settings['memcache']['key_prefix'] = '';
#$settings['cache']['default'] = 'cache.backend.memcache';
#$settings['cache']['bins']['render'] = 'cache.backend.memcache';
#$conf['cache_backends'][] = 'modules/contrib/memcache/memcache.inc';
#$conf['cache_default_class'] = 'MemCacheDrupal';
#$conf['cache_class_cache_form'] = 'DrupalDatabaseCache';
#$conf['page_cache_without_database'] = TRUE;
#$conf['page_cache_invoke_hooks'] = FALSE;
