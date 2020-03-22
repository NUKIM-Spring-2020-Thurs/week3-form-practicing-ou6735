<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body { 
        font-size: 16pt;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;

        background-color: Cornsilk; 

        border: 10px solid Orange;
        border-radius: 15px;
        border-style: groove;

        padding-right: 30px;
        padding-left: 80px;
        padding-top: 16px;

        margin: 10px;

        line-height: 40px;
   }
</style>
    <title>2020高大資管營報名表</title>
</head>
<body>
<form action="nukim-submit.php" method="POST">

<h2><center>2020高大資管營報名表</center></h2>
<ol>
<li>中文姓名 : <input type="text" name="username"></br></li>
<li>性別:
生理男<input type="radio" name="gender" value="Male">
生理女<input type="radio" name="gender" value="Female"></br></li>

<li>出生日期 : <input type="date" name="date"></br>
<li>身分證字號 :（若無則填護照號碼）<input type="password" name="userid" placeholder="僅用於投保保險，不作他用" ></br></li>
<li>聯絡手機 :（例：0912345678）<input type="text" name="userphone" ></br></li>
<li>緊急聯絡人姓名 :（例：王大明）<input type="text" name="family" ></br></li>
<li>緊急聯絡人關係 :（例：父子）<input type="text" name="familyname" ></br></li>
<li>緊急聯絡人電話或手機 :（例：07-7654321 / 0987654321）<input type="text" name="familyphone" ></br></li>

<li>居住地:
<select name="city[]" multiple>
<option value="north">北部</option>
<option value="middle">中部</option>
<option value="south" selected>南部</option>
<option value="east">東部</option>
</select></br></li>

<li>通訊地址 :<input type="text" name="address" ></br></li>
<li>E-mail :<input type="email" name="mail" placeholder="請填入常使用的信箱" ></br></li>
<li>就讀學校 :<input type="text" name="school" ></br></li>
<li>班級 :<input type="text" name="class" placeholder="例:1年5班 / 觀光科2年智班"></br></li>

<li>衣服尺寸：
	<input type="radio" name="cloth" value="XS" >XS
	<input type="radio" name="cloth" value="S">S
	<input type="radio" name="cloth" value="M" >M
	<input type="radio" name="cloth" value="L" >L
    <input type="radio" name="cloth" value="XL" >XL</br></li>
    
<li>葷食/素食:
葷食<input type="radio" name="food" value="M">
素食<input type="radio" name="food" value="V"></br></li>

<li>特殊飲食習慣 :<input type="text" name="specialfood" placeholder="例:不吃牛肉、對海鮮過敏" ></br></li>
<li>特殊疾病 :<input type="text" name="specialdi" placeholder="例:心臟病、氣喘" ></br></li>

<li>如何前來營隊:
<input type="radio" name="trans" value="T">搭乘火車/高鐵/捷運至新左營高鐵站
<input type="radio" name="trans" value="S">自行前往高雄大學</br></li>

<li>營隊結束後回家方式:
<input type="radio" name="home" value="T">至新左營高鐵站坐車
<input type="radio" name="home" value="S">自行從高雄大學回家</br></li>

<li>您最初是如何得知本營隊之訊息 :</br>
<input type="checkbox" name="interest[]" value="campnet" >樂學camp營隊網</br>
<input type="checkbox" name="interest[]" value="PickCamp">PickCamp大學營隊資訊平台</br>
<input type="checkbox" name="interest[]" value="Facebookpage">第8屆高大資管營Facebook粉絲專頁</br>
<input type="checkbox" name="interest[]" value="nukimcampnet">第8屆高大資管營網站</br>
<input type="checkbox" name="interest[]" value="MinistryofEducation">大學營隊一覽表-教育部國民及學前教育署</br>
<input type="checkbox" name="interest[]" value="campschool">大學生營隊資訊-輔導室</br>
<input type="checkbox" name="interest[]" value="campus" >校園宣傳</br>
<input type="checkbox" name="interest[]" value="poster" >宣傳海報</br>
<input type="checkbox" name="interest[]" value="friends" >親友介紹</br></li>

<li>是否全程參與營隊 :
<input type="radio" name="will" value="Y">是
<input type="radio" name="will" value="N">否</br></li>

</br>自我介紹及營隊期許（字數不限）:</br>
<textarea rows="20" cols="100" name="commenttext">
</textarea></br>

</br>備註 :</br>
<textarea rows="8" cols="40" name="comment" placeholder="若有其他個人狀況請在以下說明">
</textarea></br>

<input type="reset"><input type="submit"></br>
</form>   
</body>
</html>