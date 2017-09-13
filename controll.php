<?php
if (!empty($_POST['guanjiao']) && !empty($_POST['id'])){
	$a = $_POST['guanjiao'];
	$b = $_POST['id'];

	if (($a>=1 && $a <= 26) && ($b=1 || $b = 0))
	{
	system("./controll.sh".' '.$a.' '.$b);
	echo "<meta http-equiv=\"refresh\" content=\"1;url=index.php\"><body>执行成功</body>";
	}
	else
	{
	echo "<meta http-equiv=\"refresh\" content=\"1;url=index.php\"><body>似乎出错了</body>";	
	}
}
else
{
echo "<meta http-equiv=\"refresh\" content=\"1;url=index.php\"><body>请先填写参数</body>";
}
?>