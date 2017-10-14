<?php 

class Page{
	// 属性
	public $offset;
	public $length;
	public $prev;
	public $next;

	// 方法
	public function __construct($tot,$length){
		$this->length=$length;

		if(isset($_GET['page'])){
			$page=$_GET['page'];
		}else{
			$page=1;
		}
		$this->offset=($page-1)*$this->length;
		$pages=ceil($tot/$this->length);

		$this->prev=$page-1;
		if($this->prev<=1){
			$this->prev=1;
		}

		$this->next=$page+1;
		if($this->next>=$pages){
			$this->next=$pages;
		}

	}

	public function show(){
		echo "<a href='index.php?page={$this->prev}' class='btn btn-primary'>上一页</a>	
			<a href='index.php?page={$this->next}' class='btn btn-danger'>下一页</a>";
	}
}

 ?>