<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//TODO https://stackoverflow.com/questions/14952853/how-to-secure-database-configuration-file-in-project

    
require_once (dirname(__FILE__) ."\..\db_config.php");//todo: stop using root account here, create a new read-only acct for getting articles



class Database 
{
    
    private $connection;
    
    private function connect()
    { 
        //TODO: write to log file if no database constants defined. and possibly display message as echo

        $this->connection = mysql_connect(DB_HOST,DB_USER, DB_PASSWORD);

        if (!$this->connection) {
            die('Could not connect: ' . mysql_error());
            //TODO: write to logfile here
        } 
    }
    
    function close()
    { 
        mysql_close($this->connection); 
    }

    //http://ca1.php.net/mysql_query
    //http://webcheatsheet.com/php/connect_mysql_database.php
    function get_articles()
    {
        $sql = "SELECT * from public.article ORDER BY published_on";

      //mysql_real_escape_string($firstname),
       // mysql_real_escape_string($lastname));
 
        
        return $this->query_array($sql);
    }
 
    
    //execute this query against the database, creating and closing the connection on its own
    //converts result from a mysql object to a flat array of records
    function query_array($query)
    {
        $this->connect();
        $result = mysql_query($query);
        
        $return = array();
        
        while ($row = mysql_fetch_array($result)) 
        {
            array_push($return,$row);
        }

        $this->close();
        
        return $return;
    }
 
}
 
 