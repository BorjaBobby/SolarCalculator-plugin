<?php 
/**
* @package SolarCalculator
*/
/*
Plugin Name: Solar Calculator
Plugin URI: https://github.com/BorjaBobby/SolarCalculator-plugin
Description: This is a Wordpress plugin that calculates a user's required solar power output
Version: 1.0.0
Author: Borislav Borisov
Author URI: https://github.com/BorjaBobby/
License: GPL v2 or later
Text domain: solarcalculator-plugin
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2020 Borislav Pl. Borisov
*/


// Securing that nobody without the necessary permissions can access our plugin data
if ( ! function_exists ( 'add_action' )) {
  echo 'You silly human! You can\t access this file';
  exit;
}