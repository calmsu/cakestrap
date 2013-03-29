<?php 
/**
* Cakestrap default flash element
*
* Style's flash messages with Bootstrap
* 
* PHP 5/CakePHP 2.0
*
* Cakestrap: https://github.com/calmsu/cakestrap
* Copyright 2012-2013, Michigan State University Board of Trustees
*
* Licensed under The MIT License
* Redistributions of files must retain the above copyright notice.
*
* @copyright     Copyright 2012-2013, Michigan State University Board of Trustees
* @link          http://github.com/calmsu/cakestrap
* @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
*/
?>

<div class="alert alert-info">
  <button class="close" data-dismiss="alert" href="#">&times;</button>
  <strong><?php echo __('Heads up!')?></strong> <?php echo $message ?>
</div>