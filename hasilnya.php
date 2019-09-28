?><?php
date_default_timezone_set('Asia/Jakarta');
system("clear");
system("termux-open-url https://www.youtube.com/channel/UCbBcMgIU9q0CE26CWBm7-wQ");
$t="\n";$r="\t";
$ht="[1;30m";
$red="[1;31m";
$ijo="[92m";
$kn="[1;33m";
$br="[1;34m";
$pk="[1;35m";
$tr="[1;36m";
$pth="[1;37m";
$info="bigtoken";
#projek new
function defaul ($path,$post) {
$url="https://api.bigtoken.com/$path";
$h[]="Host: api.bigtoken.com";
$h[]="accept: application/json";
$h[]="content-type: application/x-www-form-urlencoded";
$h[]="user-agent: okhttp/3.14.0";
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => $url,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $post,
    CURLOPT_HTTPHEADER => $h,
    CURLOPT_PROXY => $proxy,
    CURLOPT_VERBOSE => false,
    CURLOPT_SSL_VERIFYPEER => true,
      ));
$result = curl_exec($curl);                                   
curl_close($curl);
return $result;
}
function token ($url) {
$h[]="upgrade-insecure-requests: 1";
$h[]="user-agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0";
$h[]="accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8";
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => $url,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HEADER => true,
    CURLOPT_HTTPHEADER => $h,
    CURLOPT_PROXY => $proxy,
    CURLOPT_PROXYUSERPWD => $proxyauth,
    CURLOPT_SSL_VERIFYPEER => true,
      ));
$result = curl_exec($curl);                                   
curl_close($curl);
return $result;
}
function gets ($path,$token) {
$url="https://api.bigtoken.com/$path";
$h[]="Host: api.bigtoken.com";
$h[]="x-srax-big-api-version: 2";
$h[]="accept: application/json";
$h[]="authorization: Bearer $token";
$h[]="user-agent: okhttp/3.14.0";
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => $url,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTPHEADER => $h,
    CURLOPT_PROXY => $proxy,
    CURLOPT_PROXYUSERPWD => $proxyauth,
    CURLOPT_SSL_VERIFYPEER => true,
      ));
$result = curl_exec($curl);                                   
curl_close($curl);
return $result;
}
function post ($path,$post,$token) {
$url="https://api.bigtoken.com/$path";
$h[]="Host: api.bigtoken.com";
$h[]="x-srax-big-api-version: 2";
$h[]="accept: application/json";
$h[]="authorization: Bearer $token";
$h[]="content-type: application/json; charset=utf-8";
$h[]="user-agent: okhttp/3.14.0";
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => $url,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $post,
    CURLOPT_HTTPHEADER => $h,
    CURLOPT_PROXY => $proxy,
    CURLOPT_PROXYUSERPWD => $proxyauth,
    CURLOPT_SSL_VERIFYPEER => true,
      ));
$result = curl_exec($curl);                                   
curl_close($curl);
return $result;
}
function poto ($path,$post,$token) {
$url="https://api.bigtoken.com/$path";
$h[]="Host: api.bigtoken.com";
$h[]="x-srax-big-api-version: 2";
$h[]="accept: application/json";
$h[]="authorization: Bearer $token";
$h[]="user-agent: okhttp/3.14.0";
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => $url,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $post,
    CURLOPT_HTTPHEADER => $h,
    CURLOPT_PROXY => $proxy,
    CURLOPT_PROXYUSERPWD => $proxyauth,
    CURLOPT_SSL_VERIFYPEER => true,
      ));
$result = curl_exec($curl);                                   
curl_close($curl);
return $result;
}
function verif ($path,$post,$refer) {
$url="https://api.bigtoken.com/$path";
$h[]="Host: api.bigtoken.com";
$h[]="accept: application/json";
$h[]="content-type: application/x-www-form-urlencoded";
$h[]="user-agent: okhttp/3.14.0";
#$h[]="referer: $refer";
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => $url,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $post,
    CURLOPT_HTTPHEADER => $h,
    CURLOPT_PROXY => $proxy,
    CURLOPT_VERBOSE => true,
    CURLOPT_SSL_VERIFYPEER => true,
      ));
$result = curl_exec($curl);                                   
curl_close($curl);
return $result;
}
function path ($path,$token,$post) {
$url="https://api.bigtoken.com/$path";
$h[]="Host: api.bigtoken.com";
$h[]="accept: application/json";
$h[]="authorization: Bearer $token";
$h[]="content-type: application/x-www-form-urlencoded";
$h[]="user-agent: okhttp/3.14.0";
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => $url,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_CUSTOMREQUEST => "PATCH",
    CURLOPT_POSTFIELDS => $post,
    CURLOPT_HTTPHEADER => $h,
    CURLOPT_PROXY => $proxy,
    CURLOPT_PROXYUSERPWD => $proxyauth,
    CURLOPT_SSL_VERIFYPEER => 0,
      ));
$result = curl_exec($curl);                                   
curl_close($curl);
return $result;
}
function typer($w,$t){
  foreach(str_split($w) as $i){
echo $i;
usleep($t);
 }
}
function clr($clr){
system("clear");
echo $clr;sleep(3);
}
function cr(){
@system("rm -rf user");
}
$cfg="config.json";
/* parameter*/
$facc=false;
$verif=false;
@system("rm -rf user");
@system("git clone https://github.com/Hamzbsk/user");
@system('clear');
error_reporting(0);
require __DIR__ ."/user/setting.php";
$clr=$big.$warn.$t;
clr($clr);
while(true):
$login=false;$input=false;
  if(file_exists($cfg)){
echo $pth."[{$ijo}✓{$pth}]$tr CONFIG DETECTED ".$t;
$js=json_decode(file_get_contents($cfg),true);
$email=$js["email"];
$pass=$js["password"];
echo $pth."[{$tr}1{$pth}]{$pth} Edit Config".$pth." | Click ENTER to LOGIN".$t.$pth;
$n=readline("[$red?$pth] Input : ");
  if($n==1){
$input=true;
clr($clr);
}
 else{
$login=true;
 }
}
 else{
$input=true;
}
  if($login){
clr($clr);
typer($pth."[$red?$pth] Login ",30000);sleep(1);
$path="login";
$post="email=$email&password=$pass";
$aksi=defaul($path,$post);
$js=json_decode($aksi,true);
$token=$js["token"]["access_token"];
$rtoken=$js["token"]["refresh_token"];
$err=$js["error"]["message"];
  if($token!=null){
echo $ijo."Success".$pth.$t;
//userme
$path="users/me";
$aksi=gets($path,$token);
$js=json_decode($aksi,true);
$user=$js["data"]["user"];
  if($user!=null){
$id=$user["id"];
$email=$user["email"];
$first=$user["first_name"];
$bigid=$user["big_id"];
$last=$user["last_name"];
$nik=$last;
$poin=$js["data"]["available_big_points"];
$b=explode(".",($poin/100));
$bal=$b[0];
#$bal=substr(($poin/100),0,4);
  if($first!=null){
$usr=$nik;
}
 else{
$usr=$email;
}
echo $pth."[".$ijo."•".$pth."] ".$tr.$usr.$pth." | Poin : ".$ijo.$poin.$pth.$t.$t;
break;
}
 else{
$login=true;
echo "{$kn}[{$red}x{$kn}] ".$js["error"]["message"].$t;
 }
}
else{
echo $red."Faileds\n{$kn}[{$red}x{$kn}] ".$err.$t;
cr();
exit;
 }
}
 elseif($input){
echo $pth."[===> {$tr}SETTING CONFIG{$pth} <===]".$pth.$t;
$email=readline("[*] You Email : ");
echo$pth."[*] Passwords : ";
system('stty -echo');
$pass = trim(fgets(STDIN));
system('stty echo');
$wrt=json_encode(["email"=>$email,"password"=>$pass]);
file_put_contents($cfg,$wrt);clr($clr);
}
endwhile;
sleep(3);
//validasi
$file="user/bigtoken.txt";
$mem=file($file);
$memb=str_replace($t,"",$mem);
$path="users/profile";
$aksi=gets($path,$token);
$js=json_decode($aksi,true);
$big_ref=$js["data"]["referral_id"];
$big_id=$js["data"]["big_id"];
typer($ijo."[".$kn."#".$ijo."] ".$kn."VALIDASI".$pth." [ ".$tr.$big_id.$pth." ]",20000);sleep(3);
  if($big_ref=="COCENTZ404"){
$unlock=true;
}
 else{
  foreach($memb as $membr){
   if($big_id==$membr){
$unlock=true;
break;
}
 else{
$unlock=false;
  }
 }
}
  if($unlock){
echo $ijo." This user is unlocked{$pth} ".$t;
cr();
}
 else{
echo $red." Permission denied{$pth}".$t.$t;
$error=true;
cr();
}
  if($error){
sleep(1);
echo $pth."[*]$tr SELECT A LANGUAGE".$t;
echo $pth."[{$tr}1{$pth}] INDONESIA ❤️\n[{$tr}2{$pth}] ENGLISH".$t;
$p=readline($pth."[$red?$pth] input : ");
  if($p==2){
echo$t;
echo $pth."[$red!$pth] This Script Requires You To Use The ".$ijo."COCENTZ404".$pth." Referral Code".$t;
cr();
system("termux-open-url https://www.youtube.com/channel/UCbBcMgIU9q0CE26CWBm7-wQ");
echo$t;
exit;
}
 elseif($p==1){
echo$t;
echo $pth."[$red!$pth] Skrip Ini Diwajibkan Untuk Memasukkan Kode Referensi".$ijo." COCENTZ404{$pth}".$t;
cr();
system("termux-open-url https://www.youtube.com/channel/UCbBcMgIU9q0CE26CWBm7-wQ");
echo$t;
exit;
}
 else{
cr();
system("termux-open-url https://www.youtube.com/channel/UCbBcMgIU9q0CE26CWBm7-wQ");
echo$t;
exit;
 }
}
  if($stat_big){
$x=0;
//action
while(true){
$x++;
sleep(1);
echo $t.$pth."[#] ".$tr."STARTED BOT SESSION ".$pth.$x.$t;
sleep(1);
$survey=0;
$ques=0;
$path="actions/dashboard";
$aksi=gets($path,$token);
$js=json_decode($aksi,true);
$tp=$js["data"]["typical"];
$dm=$js["data"]["dynamic"];
$dmact=$js["data"]["dynamic_actions"];
 foreach($tp as $key => $val ){
$me[]=$val["mechanic"];
}
  if($me>0){
$num=count($me);
   for($n=0;$n<$num;$n++){
    if($me[$n]=="survey"){
$survey++;
}
  if($me[$n]=="question"){
$ques++;
  }
 }
}
echo $pth."[{$br}#{$pth}] Survey: ".$br.$survey.$pth." | Question: ".$br.$ques.$pth." | Dynamic: ".$br.$dmact.$t;
echo $t;
sleep(1);
  if($tp!=null){
$co=count($tp);
for($i=0;$i<$co;$i++){
$mc=$tp[$i]["mechanic"];
$uuid=$tp[$i]["option_uuid"];
$rwd=$tp[$i]["reward"];
echo $pth."[{$br}$i{$pth}] Type : ".$tr.$mc.$pth." | ".$pth."Reward : ".$ijo.$rwd.$t;
  if($mc=="question"){
$keys=$tp[$i]["content"]["data_point_key"];
$ans=$tp[$i]["content"]["answers"];
foreach($ans as $key => $val){
$vals[]=$val["data_point_value"];}
$rnd=array_rand($vals);
$value=$vals[$rnd];
$data=["data_point_values"=> [[
      "values"=> [$value],
      "data_point_key"=> $keys]],
      "option_uuid"=> $uuid];
      
$path="actions/submit";
$post=json_encode($data);
$aksi=post($path,$post,$token);
$js=json_decode($aksi,true);
$data=$js["reward_data"];
$stt=$data["reward"];
$msg=$data["msg"];
  if($stt==1){
$rwd=$data["reward_given"];
echo $pth."[{$ijo}✓{$pth}]{$ijo} Success{$pth} | Claim : ".$ijo.$rwd.$pth." | ".$ijo.$msg.$t;
}
 else{
echo $kn."[{$red}x{$kn}] ".$msg.$pth.$t;
 }
}
 elseif($mc=="survey"){
$path="actions?option_uuid=".$uuid;
$aksi=gets($path,$token);
$js=json_decode($aksi,true);
#print_r($js);exit;
$conten=$js["data"]["content"]["questions"];
$con=count($conten);
$merge=[];
  for($i=0;$i<$con;$i++){
$keys=$conten[$i]["data_point_key"];
$ans[]=$conten[$i]["answers"];
  foreach($ans as $key => $val){
$vals[]=$val["data_point_value"];
}
$rnd=array_rand($vals);
$value=$vals[$rnd];
$put=[[
      "values"=> [$value],
      "data_point_key"=> $keys
      ]];
$merge=array_merge($merge,$put);
}
$data=["data_point_values"=> $merge,
      "option_uuid"=> $uuid];
           
$path="actions/submit";
$post=json_encode($data);
$aksi=post($path,$post,$token);
$js=json_decode($aksi,true);
$data=$js["reward_data"];
$stt=$data["reward"];
$msg=$data["msg"];
  if($stt==1){
$rwd=$data["reward_given"];
echo $pth."[{$ijo}✓{$pth}]{$ijo} Success{$pth} | Claim : ".$ijo.$rwd.$pth." | ".$ijo.$msg.$t;
 }
}
 elseif($mc=="photo"){
$path="actions?option_uuid=$uuid";
$aksi=gets($path,$token);
$js=json_decode($aksi,true);
$uuid=$js["data"]["option_uuid"];
$path="actions/submit";
$post="path=https://s3.amazonaws.com/media.bigtoken.com/action/400x400_a27cubbZcZP2iq5wHJxFPhbYfaen3Ok7O6opmblM.jpeg&option_uuid=$uuid";
$aksi=poto($path,$post,$token);
$js=json_decode($aksi,true);
$data=$js["reward_data"];
$stt=$data["reward"];
$msg=$data["msg"];
  if($stt==1){
$rwd=$data["reward_given"];
echo $pth."[{$ijo}✓{$pth}]{$ijo} Success{$pth} | Claim : ".$ijo.$rwd.$pth." | ".$ijo.$msg.$t;
}
 else{
echo $kn."[$red!$kn] ".print_r($js);
exit;
   }
  }
sleep(5);
 }
//dinamik
}
 elseif($dmact>0){
  for($i=0;$i<$dmact;$i++){
$path="actions/dashboard";
$aksi=gets($path,$token);
$js=json_decode($aksi,true);
$dm=$js["data"]["dynamic"];
$mc=$dm["mechanic"];
$uuid=$dm["option_uuid"];
$rwd=$dm["reward"];
echo $pth."[{$br}#{$pth}] Dynamic : ".$tr.$mc.$pth." |{$pth} Reward : ".$ijo.$rwd.$t;
  if($mc=="question"){
#echo "[tipe]=[ ".$mc." ]=[reward: ".$rwd." ]".$t;
$path="actions?option_uuid=$uuid";
$aksi=gets($path,$token);
$js=json_decode($aksi,true);
$keys=$js["data"]["content"]["data_point_key"];
$ans[]=$js["data"]["content"]["answers"];
  foreach($ans as $key => $val){
$vals[]=$val["data_point_value"];
}
$rnd=array_rand($vals);
$value=$vals[$rnd];
$data=["data_point_values"=> [[
      "values"=> [$value],
      "data_point_key"=> $keys]],
      "option_uuid"=> $uuid];
          
$path="actions/submit";
$post=json_encode($data);
$aksi=post($path,$post,$token);
$js=json_decode($aksi,true);
$data=$js["reward_data"];
$stt=$data["reward"];
$msg=$data["msg"];
if($stt==1){
$rwd=$data["reward_given"];
echo $pth."[{$ijo}✓{$pth}]{$ijo} Success{$pth} | Claim : ".$ijo.$rwd.$pth." | ".$ijo.$msg.$t;
}
else{
echo $kn."[{$red}x{$kn}] ".$msg.$pth.$t;
 }
}
 elseif($mc=="survey"){
#echo "[tipe]=[ ".$mc." ]=[reward: ".$rwd." ]".$t;
$path="actions?option_uuid=".$uuid;
$aksi=gets($path,$token);
$js=json_decode($aksi,true);
#print_r($js);exit;
$conten=$js["data"]["content"]["questions"];
$con=count($conten);$merge=[];
  for($i=0;$i<$con;$i++){
$keys=$conten[$i]["data_point_key"];
$ans[]=$conten[$i]["answers"];
  foreach($ans as $key => $val){
$vals[]=$val["data_point_value"];
}
$rnd=array_rand($vals);
$value=$vals[$rnd];
$put=[[
      "values"=> [$value],
      "data_point_key"=> $keys
      ]];
$merge=array_merge($merge,$put);
}
$data=["data_point_values"=> $merge,
      "option_uuid"=> $uuid];
            
$path="actions/submit";
$post=json_encode($data);
$aksi=post($path,$post,$token);
$js=json_decode($aksi,true);
$data=$js["reward_data"];$stt=$data["reward"];
$msg=$data["msg"];
   if($stt==1){
$rwd=$data["reward_given"];
echo $pth."[{$ijo}✓{$pth}]{$ijo} Success{$pth} | Claim : ".$ijo.$rwd.$pth." | ".$ijo.$msg.$t;
}
 elseif($mc=="photo"){
$path="actions?option_uuid=$uuid";
$aksi=gets($path,$token);
$js=json_decode($aksi,true);
$uuid=$js["data"]["option_uuid"];
$path="actions/submit";
$post="path=https://s3.amazonaws.com/media.bigtoken.com/action/400x400_a27cubbZcZP2iq5wHJxFPhbYfaen3Ok7O6opmblM.jpeg&option_uuid=$uuid";
$aksi=poto($path,$post,$token);
$js=json_decode($aksi,true);
$data=$js["reward_data"];$stt=$data["reward"];
$msg=$data["msg"];
if($stt==1){
$rwd=$data["reward_given"];
echo $pth."[{$ijo}✓{$pth}]{$ijo} Success{$pth} | Claim : ".$ijo.$rwd.$pth." | ".$ijo.$msg.$t;
}
 else{
echo "[error] ".print_r($js);
exit;
   }
  }
sleep(5);
}
 else{
echo $kn."[$red!$kn] Tidak Ada Tugas | No Assignment !!".$t;
break;
}
sleep(15);
   }
  }
 }
}
