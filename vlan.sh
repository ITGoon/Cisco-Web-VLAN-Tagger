

set password "YOUR CISCO ENABLE PASSWORD"
spawn telnet $ip
expect "Password:" {send "$password\r"}
expect "*>" {send "en\r"}
expect "Password:" {send "$password\r"}
expect "*#" {send "conf t\r"}
expect "*(config)#" {send "int fa0/$port\r"}
expect "*(config-if)#" {send "shutdown\r"}
expect "*(config-if)#" {send "no switchport mode trunk\r"}
expect "*(config-if)#" {send "description $descrip\r"}
expect "*(config-if)#" {send "switchport mode access\r"}
expect "*(config-if)#" {send "switchport access vlan $vlan\r"}
expect "*(config-if)#" {send "no shutdown\r"}
expect "*(config-if)#" {send "exit\r"}
expect "*(config)#" {send "exit\r"}
expect "*#" {send "exit\r"}
expect "*>" {send "exit\r"}
