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
            $sql="INSERT INTO $this->table(`".join("`, `",array_keys($array))."`) VALUES ('".join("','",$array)."')";
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

//$posters=new Db('posters');
//$movies=new Db('movies');
//$orders=new Db('orders');

$bot=new Db('bot');
$mem=new Db('mem');
$admin=new Db('admin');
$orders=new Db('orders');
$prds=new Db('prds');
$type=new Db('type');

$sh=['sh'=>1];
$today=date("Y-m-d");
$start_day=date("Y-m-d",strtotime("-2 days"));
$rank=" order by `rank`";
$level_icon=['普遍級'=>'03C01.png','輔導級'=>'03C02.png','保護級'=>'03C03.png','限制級'=>'03C04.png'];
$ss_times=['1'=>'14:00~16:00','2'=>'16:00~18:00','3'=>'18:00~20:00','4'=>'20:00~22:00','5'=>'22:00~24:00'];
$pr_href=['1'=>'prds','2'=>'orders','3'=>'mem','4'=>'bot','5'=>'news'];
$pr_text=['1'=>'商品分類與管理','2'=>'訂單管理','3'=>'會員管理','4'=>'頁尾版權管理','5'=>'最新消息管理'];
//echo serialize([0,1,2,3])."<br>";
//echo serialize(['1'=>1])."<br>";
//echo serialize([1,2,3,4,5])."<br>";

?>


