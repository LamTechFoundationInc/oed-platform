<?php

$databases = array();

$config_directories = array(
  CONFIG_SYNC_DIRECTORY => '../config',
 );
 
$settings['hash_salt'] = 'VLjnL3BXd75h9oqhEh0A2SHps8RL5C_Kip_xHGXqaaeG5WNKU7DbMZi38zNubEeMR3iXBc4MTA';

$settings['update_free_access'] = FALSE;

$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';

$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];

$settings['file_public_path'] = 'sites/default/files';

$settings['file_private_path'] = '../files-private';

$settings['entity_update_batch_size'] = 50;

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
$settings['install_profile'] = 'lightning';
$config_directories['sync'] = 'sites/default/files/config_J6h5obNXKogjCCdTWcLqA-kOOKDjJNGeY095o9gA1mJHeVM1EQLcDQMj-aYVfcf7U9eh4KIypQ/sync';

# $config['system.site']['name'] = 'My Drupal site';
# $config['system.theme']['default'] = 'stark';
# $config['user.settings']['anonymous'] = 'Visitor';

# $config['system.performance']['fast_404']['exclude_paths'] = '/\/(?:styles)|(?:system\/files)\//';
# $config['system.performance']['fast_404']['paths'] = '/\.(?:txt|png|gif|jpe?g|css|js|ico|swf|flv|cgi|bat|pl|dll|exe|asp)$/i';
# $config['system.performance']['fast_404']['html'] = '<!DOCTYPE html><html><head><title>404 Not Found</title></head><body><h1>Not$

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

  $conf['cache_backends'][] = 'modules/contrib/memcache/memcache.inc';
  $conf['cache_default_class'] = 'MemCacheDrupal';
  $conf['cache_class_cache_form'] = 'DrupalDatabaseCache';
  $conf['page_cache_without_database'] = TRUE;
  $conf['page_cache_invoke_hooks'] = FALSE;
