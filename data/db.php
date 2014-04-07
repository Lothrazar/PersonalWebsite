<?php

require_once (dirname(__FILE__) ."\..\db_config.php");//todo: stop using root account here, create a new read-only acct for getting articles

class Database 
{
    private $con;
    
    private function connect()
    { 
        //TODO: write to log file if no database constants defined. and possibly display message as echo

        $this->con = new mysqli(DB_HOST,DB_USER, DB_PASSWORD);

        if (mysqli_connect_errno())
        {
            die(mysqli_connect_error());
        }
    }
    
    function close()
    { 
        $this->con->close();
    }

    //http://ca1.php.net/mysql_query
    //http://webcheatsheet.com/php/connect_mysql_database.php
    function get_articles()
    {
        $sql = "SELECT * from public.article ORDER BY published_on";
 
        return $this->query_array($sql);
    }
    
    function insert_article($title,$content,$date)
    {
        $sql = $this->con->prepare("INSERT INTO public.article (published_on,title,content) VALUES(?,?,?)");
         
        $sql->bind_param("sss",$title,$content,$date);
         
        $sql->execute(); 
    }
     
    //execute this query against the database, creat-ng and closing the connection on its own
    //converts result from a mysql object to a flat array of records
    function query_array($query)
    {
        $this->connect();
        
        $raw = $this->con->query($query);
        $return = array();
        while($row = $raw->fetch_assoc())
        {
           $return[] = $row;
        }

        $this->close();
        
        return $return;
    }
 
}
 
 