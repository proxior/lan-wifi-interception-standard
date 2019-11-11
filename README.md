# proxior
program for poisoning and spoofing dns. <br/>

 Download the programm and paste folder proxior in to /var/www/ <br/>

This program have  <br/>

i) Any website clone for manual method <br/>

  a) insert the ip of attacker <br/>
  b) insert a name of a web site and press enter <br/>
  c) The web site it must have http or https protocol <br/>
     Right: http://www.example.com or http://example.com <br/>
     Wrong: www.example.com or example.com <br/>
     
![1](css/screenshots/1.png) <br/><br/> 

 ii) Ready web sites (social media and email) <br/>
 
 a) socail media (facebook,instagram,twitter) <br/>
 b) email (gmail,hotmail,yahoo) <br/>

![2](css/screenshots/2.png) <br/><br/> 


Three attack methods </br>

![3](css/screenshots/3.png) <br/><br/> 


a) Fake dns generator for create batch file for computer of victim <br/>
   To find the batch file go to /export/l_win.bat  <br/> <br/>

![5](css/screenshots/5.png) <br/><br/> 


b) Email phishing with ngrok link <br/>
 After install the ngrok in same folder <br/>
 Install ngrok from here https://ngrok.com/ <br/>
 Run th script and clone any website <br/> <br/>
 
 !Notice.. For using email phishing method open the file settings.txt <br/>
 Insert the details your account email (need a email account for send fake emails) <br/>
 e.x <br/>
 email@gmail.com <br/>
 password123456 <br/> 
 Default seetings working for gmail accounts. If you want using another mail change the mail settings from file settings.txt <br/>
 #settings for email server informations <br/>
 debug: 0 </br>
 authentication: true </br>
 tls or ssl: tls </br>
 host: smtp.gmail.com </br>
 port: 465 or 587 </br> 
 
![6.1](css/screenshots/6.1.png) <br/><br/> 

 
c) Dns Spoof (Spoofing and poisoning DNS with hardware device) <br/>
   For this method insert in to device the the dns for spoof <br/>
   For your ip view in to the connection informations or enter ifconfig on terminal
   For first operation and second operation your use the ip from eth0 
   For third operation roque wifi use the ip from wlan0 
   e.x <br/>
   dns: www.gmail.com <br/>
   ip: 192.168.2.2 <br/>
   
   This device username and password details. <br/>
   username: proxior <br/>
   password: proxior <br/>
   
   For create new fake dns follow this steps </br/>
   Insert into device: getaway: 192.168.2.1 username: proxion pass: proxion  <br/>
   Go to Application -> DNS Service -> Host <br/>
   Insert into Host Name field the dns for spoof e.x www.instagram.gr <br/>
   Insert into IP Address field the ip from your server e.x 192.168.2.2 <br>
   Press add. Dns spoof registered <br/> <br/>
   
   ![9](css/screenshots/9.jpg) <br/>
   ![8](css/screenshots/8.jpg) <br/> 
   ![7](css/screenshots/7.png) <br/> 
   ![4](css/screenshots/4.png) <br/><br/> 

   
   You can use this device for three operations <br/>
   
   First operation is router. Connect to dsl cable in to dsl port in device <br/>
   
   Second operqtion is acces point with cable. Connect lan port from device with lan port yo router <br/>
   After disable dchp server form device and give ip = 192.168.2.253 and subnet mask = 255.255.255.0 <br/>
   
   Third operation is created a roque wifi with no internet connection <br/>
   !Attention! The wifi must be open... NO KEYS NO ENCRYPTION..... FREE WIFI <br/> <br/>
   
   For create new attack method or create new atack for begin with different site <br/> 
   Enter clear.php in browser address bar after ip or url. your_ip/clear.php or fake_url/clear.php <br/>
   e.x 192.168.2.2/clear.php or www.facebook.gr/clear.php <br/> <br/>
   
   For view steal accounts there are two methods </br>
   First method open the file data.txt where is it in export folder (export/data.txt) <br/>
   Second method enter the browser address bar your_ip/export/data.txt or fake_url/export/data.txt <br/>
   e.x 192.168.2.2/export/data.txt or www.facebook.gr/export/data.txt <br/> <br/>
   
   ![10](css/screenshots/10.png)  
   ![11](css/screenshots/11.png) <br/><br/> 

  

   How it works

![clonene_diagram](css/clone_diagram.jpg) 
