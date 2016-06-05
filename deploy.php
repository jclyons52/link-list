<?php

require 'recipe/laravel.php';

require 'deploy_variables.php';

$vars = getVars();
  
set('repository', 'https://github.com/jclyons52/link-list.git');

// server('production', '104.131.92.225', 22)
//   ->user('root')
//   ->password($vars['password'])
//   ->stage('production')
//   ->env('deploy_path', '/home/forge/page-preview.jclyons-blog.com');
  
server('staging', '104.131.92.225', 22)
  ->user('root')
  ->password($vars['password'])
  ->stage('production')
  ->env('deploy_path', '/home/forge/newProject');
  
server('development', '104.131.92.225', 22)
  ->user('root')
  ->password($vars['password'])
  ->stage('production')
  ->env('deploy_path', '/home/forge/devProject');
  
  
