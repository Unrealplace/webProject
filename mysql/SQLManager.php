
<?php
class mysqli_con {
    //私有的属性
    private $host='';
    private $user='';
    private $pass='';
    private $db='';
    private $link;
    //构造方法
    public function __construct(){
        $this->host = $this->host ? $this->host : 'localhost';
        $this->user = $this->user ? $this->user : 'root';
        $this->pass = $this->pass ? $this->pass : 'root';
        $this->db   = $this->db   ? $this->db   : 'small2';
        $this->connect();
    }
    //数据库连接
    public function connect() {
        $this->link=mysqli_connect($this->host,$this->user,$this->pass,$this->db);
        if (mysqli_connect_errno($this->link))
        {
            echo "连接 MySQL 失败: " . mysqli_connect_error();
        }
    }
    //执行sql语句的方法
    public function query($sql){
        mysqli_query($this->link,'set names utf8');
        $res=mysqli_query($this->link,$sql);
        if(!$res){
            echo "sql语句执行失败<br>";
            echo "错误编码是".mysqli_errno($this->link)."<br>";
            echo "错误信息是".mysqli_error($this->link)."<br>";
        }
        return $res;
    }
    //查询一行记录
    public function find($sql){
        $result=$this->query($sql);
        $data = $result->fetch_all(MYSQLI_ASSOC);
        if(!$data) $data[0]='';
        return $data[0];
        $this->link->close();
    }
    //查询多行记录
    public function select($sql){
        $result=$this->query($sql);
        $data['num']=$result->num_rows;
        $data['info'] = $result->fetch_all(MYSQLI_ASSOC);
        return $data;
        $this->link->close();
    }
    //删除记录
    public function del($sql){
        $result=$this->query($sql);
        return $result;
        $this->link->close();
    }
    //新增记录
    public function add($table,$data){
        foreach($data as $key=>$vo){
            $map['key'][]=$key;
            $map['val'][]="'".$vo."'";
        }
        $key=implode(',',$map['key']);
        $val=implode(',',$map['val']);
        $sql="INSERT INTO ".$table." (".$key.") VALUES (".$val.")";
        $result=$this->query($sql);
        return $result;
        $this->link->close();
    }

    //修改单条记录
    public function oneUpdate($table,$data,array $where){
        $count=count($where);
        foreach($where as $k=>$v)
        {
            switch(strtolower($v[0])) {
                case 'eq':
                    if ($count == 1) $str = $k . '=' . "'{$v[1]}'";
                    if ($count > 1)
                    {
                        if(!isset($v[2])){
                            if(!isset($str)) $str=$k.'='."'{$v[1]}' AND ";
                            else $str.=$k.'='."'{$v[1]}' AND ";
                        }
                        else{
                            $v[2]=strtoupper($v[2]);
                            if(!isset($str)) $str=$k.'='."'{$v[1]}' {$v[2]} ";
                            else $str.=$k.'='."'{$v[1]}' {$v[2]} ";
                        }
                    }
                    break;
                default:
                    $str='';
                    break;
            }
        }
        if(empty($str)) return $result=array();//'status'=>400,'msg'=>'where is empty'
        $del=substr($str,-5);
        if(strpos($del,'AND') || strpos($del,'OR') )
        {
            $str=substr($str,0,strlen($str)-4);
        }
        foreach($data as $key=>$vo){
            $sql="UPDATE ".$table." SET ".$key."="."'{$vo}'"." WHERE $str";
            $result=$this->query($sql);
        }
        return $result;
        $this->link->close();
    }
}
?>
