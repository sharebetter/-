 <?php
    //栏目标题
   $sqlClass="select * from class";
   $rstClass=$pdo->prepare($sqlClass);
   $rstClass->execute();  
   $rowsClass=$rstClass->fetchAll();   
   //热门文章
   $sqlhot="select topic.*,class.name,user.img,user.username from topic,class,user where topic.class_id=class.id and topic.user_id=user.id order by views desc limit 5";
   $rsthot=$pdo->prepare($sqlhot);
   $rsthot->execute();  
   $rowshot=$rsthot->fetchAll();
   //今日推荐
   $sqltoday="select * from good_talk order by id desc limit 1";
   $rsttoday=$pdo->prepare($sqltoday);
   $rsttoday->execute();  
   $rowstoday=$rsttoday->fetch();
   //每日一句
   $sqldaily="select * from daily_talk order by id desc limit 1";
   $rstdaily=$pdo->prepare($sqldaily);
   $rstdaily->execute();  
   $rowsdaily=$rstdaily->fetch();

   $t=time()+21600;
    //网站公告
   $sqlnotice="select * from notice order by id desc limit 5";
   $rstnotice=$pdo->prepare($sqlnotice);
   $rstnotice->execute();  
   $rowsnotice=$rstnotice->fetchAll();
?>