<?php
    session_start();
    $sockspath = "./socks/";
    $sessionid = session_id();
    function check_session_sock($sessionid){
        
        return file_exists($sockspath.$sessionid);

    }

    function create_session_sock($sessionid){
        
        return check_session_sock($sessionid) ? file_put_contents($sockspath.$sessionid,"") : null;
    
    }

    function addto_session_sock($sessionid,$data){
        
        return check_session_sock($sessionid) ? file_put_contents($sockspath.$sessionid,$data,FILE_APPEND) : null;
    
    }

    function read_session_sock($sessionid,$data){
        
        return check_session_sock($sessionid) ? file_get_contents($sockspath.$sessionid,$data,FILE_APPEND) : null;
    
    }

    if(check_session_sock($sessionid)){
        
    }


?>