<?php
class Model{
    
    /*
     * used for retrieve mysql connection object
     */
    protected $_conn;
    
    public function __construct($conn)
    {
        $this->_conn = $conn;
    }
}