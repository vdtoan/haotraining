<?php
/*
 * this class construct mysql pdo driver
 * should be used for CRUD - CREATE READ UPDATE DELETE - operator
 * and used for connection
 */
class Database{
    
    private $_host;
    /*
     * username of mysql database
     */
    private $_user;
    
    /*
     * password of a user in mysql database 
     */
    private $_pass;
    
    /*
     * a specific or selected database
     */
    private $_db;
    
    /*
     * init propety after established mysql connection
     * this property is used for creatting a mysql connection without creating a object instance
     */
    public static $connection;
    
    
    /*
     * constructor of the class
     * @param array $config: a key-value pair of mysql's configuration
     */
    function __construct($config){
        // @TODO: assign propery to the config
        $_user = $config["username"];
        $_pass = $config["password"];
        $_db = $config["database"];
        $_host = $config["host"];
        
    }
    
    /*
     * used to create a connection to mysql database
     * @return object: an mysql object
     */
    private $conn = NULL;
    public function connect(){
        // @TODO connect to mysql database and  return the connection object instance
        // should throw the exception if mysql connection cannnot be established
        $conn = new mysqli($this->_host, $this->_user, $this->_pass, $this->_db);
        if($conn->connect_error){
            echo "Connection error: " . $conn->connect_errno;
        }
        else{
            echo "Connected to database";
        }
        return ;
    }
    
    /*
     * used to close the connection
     */
    public function disconnect(){
        // @TODO destroy connection
        $conn->close();
        echo "Disconnected";
    }
}