<?php
session_start();
date_default_timezone_set("Asia/Taipei");

class Db{
    protected $table;
    protected $pdo;
    protected $dsn="mysql:host=localhost;charset=utf8;dbname=bweb04";

    function __construct($table)
    {
        $this->table=$table;
        $this->pdo=new PDO($this->dsn,"root","");
    }

    function to_str($array){
        $tmp=[];
        foreach ($array as $key => $value) {
            $tmp[]="`$key`='$value'";
        }
        return $tmp;
    }
    function find($id){
        $sql="SELECT * FROM $this->table WHERE ";
        if (is_array($id)) {
            $tmp=$this->to_str($id);
            $sql.=join(" && ",$tmp);
        }else{
            $sql.="`id`={$id}";
        }
        //echo $sql;
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
    function all(...$arg){
        $sql="SELECT * FROM $this->table ";
        if (isset($arg[0])) {
            if (is_array($arg[0])) {
                $tmp=$this->to_str($arg[0]);
                $sql.="WHERE ".join(" && ",$tmp);
            }else{
                $sql.=$arg[0];
            }
        }
        if (isset($arg[1])) {
            $sql.=$arg[1];
        }
        //echo $sql;
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    function del($id){
        $sql="DELETE FROM $this->table WHERE ";
        if (is_array($id)) {
            $tmp=$this->to_str($id);
            $sql.=join(" && ",$tmp);
        }else{
            $sql.="`id`={$id}";
        }
        //echo $sql;
        return $this->pdo->exec($sql);
    }
    function save($array){
        if (isset($array['id'])) {
            $tmp=$this->to_str($array);
            $sql="UPDATE $this->table SET ".join(",",$tmp)." WHERE `id`={$array['id']}";
        }else{
            $sql="INSERT INTO $this->table (`".join("`, `",array_keys($array))."`) VALUES ('".join("','",$array)."')";
        }
        //echo $sql;
        return $this->pdo->exec($sql);
    }
    function math($math,$col,...$arg){
        $sql="SELECT $math($col) FROM $this->table ";
        if (isset($arg[0])) {
            if (is_array($arg[0])) {
                $tmp=$this->to_str($arg[0]);
                $sql.="WHERE ".join(" && ",$tmp);
            }else{
                $sql.=$arg[0];
            }
        }
        if (isset($arg[1])) {
            $sql.=$arg[1];
        }
        //echo $sql;
        return $this->pdo->query($sql)->fetchColumn();
    }
}

function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
function to($url){
    header("location:{$url}");
}

$bot=new Db('bot');
$admin=new Db('admin');
$mem=new Db('mem');
$prds=new Db('prds');
$orders=new Db('orders');
$type=new Db('type');

$today=date("Y-m-d");
$start_day=date("Y-m-d",strtotime("-2 days"));
$sh=['sh'=>1];
$a_pr=['1'=>'prds','2'=>'orders','3'=>'mem','4'=>'bot','5'=>'news'];
$a_text=['1'=>'商品分類與管理','2'=>'訂單管理','3'=>'會員管理','4'=>'頁尾版權管理','5'=>'最新消息管理'];
?>