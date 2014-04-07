<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//TODO https://stackoverflow.com/questions/14952853/how-to-secure-database-configuration-file-in-project

require_once (dirname(__FILE__) ."\..\db_config.php");



function db_connect()
{
    //todo: stop using root account here, create a new read-only acct for getting articles
    $link = mysql_connect(DB_HOST,DB_USER, DB_PASSWORD);
    if (!$link) {
        die('Could not connect: ' . mysql_error());
    }
    echo 'Connected successfully';
    mysql_close($link);
}