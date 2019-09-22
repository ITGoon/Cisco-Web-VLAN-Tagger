# Cisco Web Based VLAN Tagger
A web app for tagging VLAN's on Cisco switchports

Created because I'm lazy as hell sometimes so I built this for changing a VLAN on a port.
It uses expect scripts and PHP to make VLAN tagging changes on a port you choose and a switch you choose.

# Requirements:<br>
-> A Linux web server (Any distro with PHP 5.6 and Apache2 installed)<br>
-> The 'expect' package <br> 
-- Use apt-get install expect for Debian/Ubuntu <br>
-- For CentOS/RHEL add the EPEL repo and run yum install expect <br>


<br><br>
# Future Plans:<br>
-> Encrypt enable password<br>
-> Create version for SSH<br>
-> Avoid making a Windows version since IIS is a pile of trash<br>
-> Spiff up the front end with Bootstrap<br>
