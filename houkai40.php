<?php
require_once './houkai70.php'; 
session_start();


?>



<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sample</title>
<link href="reset.css" rel="stylesheet" type="text/css">
<link href="css.css" rel="stylesheet" type="text/css">
</head>
<div class= "header">
    <h1>手続きサポートサイト40</h1>
  
</header>
<body>

<div class="wrapper">
    <h2>**項目の入力をしてください**</h2>


<form action="houkai50.php" method="post">
  <div>
<?php
  print('現在の法階を入力してください。');       //現在法階の入力
  print('<br><br>');
  for ($i =0;$i < count($houkai);$i++){  
    print('<input type="radio" name="houkai_bef" value="'.$houkai[$i][0].'"');
    if ($houkai[$i][0] === $_SESSION['houkai_bef']) { print(' checked');}
    print(' />');
    print($houkai[$i][0].'</label>');

  }
?>　　　　　　　　　　　　　　　　　　　

 <?php   
  print('<dt><br>昇進後の法階を入力してください。</dt><br>');//昇進後法階の入力
  
  for ($i =0;$i < count($houkai);$i++){
    print('<input type="radio" name="houkai_aft" value="'.$houkai[$i][0].'"');
    if ($houkai[$i][0] === $_SESSION['houkai_aft']) { print(' checked');}
    print(' />');
    print($houkai[$i][0].'</label>');
  }
  print('<br><br>');
?>
<?php   
  print('<dt><br>年齢を入力してください。</dt><br>');//年齢の入力
  
  for ($i =0;$i < count($age);$i++){
    print('<input type="radio" name="age" value="'.$age[$i][0].'"');
    if ($age[$i][0] === $_SESSION['age']) { print(' checked');}
    print(' />');
    print($age[$i][0].'</label><br>');
  }
  print('<br><br>');
?>



<?php   
    print('<dt><br>必要書類にチェックを入力してください。</dt>');//必要書類の入力
  
  foreach ($shorui as $shor ){
    print('<dd><input type="checkbox" name="shorui[]" value="'.$shor.'"');
    if (isset($_SESSION['shorui[]']) === False){print('<br>');}
    else{
      foreach ($_SESSION['shorui[]'] as $sho){             //前の必要書類の表示
        if($shor === $sho){ print(' checked');}
      
     }
    }
    print(' />');
    print($shor.'</label><br>');
  }
  print('<br><br>');
?>
</div>
  <input type="submit" value="次へ"/>
</form>




 
 <div id="branding">
    <p>手続きサポートサイト</p>
</div>
</div>

<div class="footer">宗務本院</div>
</body>
</html>