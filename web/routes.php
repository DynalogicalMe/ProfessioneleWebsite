<?php
/*
 * Hier worden alle routes toegevoegd.
 * */

Router::add('', 'home', 'home');

Router::add('studenten', 'studenten', 'studenten');

Router::add('contact', 'contact', 'contact');

Router::add('contactRedirect', 'contactRedirect', 'contactRedirect');

Router::add('Opleidingen', 'Opleidingen', 'Opleidingen');

Router::add('OpleidingenInfo', 'OpleidingenInfo', 'OpleidingenInfo');

Router::getPath('OpleidingenInfo');

