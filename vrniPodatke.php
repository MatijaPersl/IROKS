<?php

/*$con = mysqli_connect("localhost","marko", "bepis", "iroks");
if(!$con) {
    exit("Error: ".mysqli_connect_error());
}*/


class vrniPodatke
{
    public $servername;
    public $dbname;
    public $tablename;
    public $password;
    public $username;
    public $con;

    public function __construct(
        $dbname = "iroks",
        $tablename = "izdelek",
        $servername = "localhost",
        $username = "marko",
        $password = "bepis"
    )
    {
        $this->servername = $servername;
        $this->dbname=$dbname;
        $this->tablename = $tablename;
        $this->username= $username;
        $this->password = $password;

        $this->con = mysqli_connect($servername,$username,$password,$dbname);
        if (!$this->con){
            die("Connection failed :".mysqli_connect_error());
        }
    }
    public function getInfo(){
        $sql ="SELECT * FROM izdelek";
        $result = mysqli_query($this->con,$sql);

        if(mysqli_num_rows($result)>0){
            return $result;
        }
    }
}
