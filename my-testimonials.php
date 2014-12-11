<?php

/*
Plugin Name: My Testimonials
Plugin URI: http://www.peterfeatherstone.com
Description: Very simple testimonials Plugin Created By Peter Featherstone
Version: 1.0
Author: Peter Featherstone
Text Domain: my-testimonials
Author URI: http://www.peterfeatherstone.com
License: GPL2
Tags: testimonials, testimonial, my

    Copyright 2014  Peter Featherstone <hello@peterfeatherstone.com>

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

My Testimonials - A simple testimonials plugin

@package  WordPress My Testimonials
@author   Peter Featherstone <hello@peterfeatherstone.com>
 
|--------------------------------------------------------------------------
| Bootstrap The Application
|--------------------------------------------------------------------------
|
| This bootstraps the My Testimonials Plugin and gets it ready for use, then it
| will load up the My Testimonials application so that we can run it.
|
*/

require_once 'app/bootstrap.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can simply call the run method,
| which will setup everything we need to display the My Testimonials
| straight out the box with no extra customisation needed.
|
*/

$app->run();