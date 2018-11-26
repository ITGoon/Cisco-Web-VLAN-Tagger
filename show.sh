

set password "YOUR ENABLE PASSWORD"
set porttype "gi1/0"

spawn telnet $ip
expect "Password:" {send "$password\r"}
expect "*>" {send "en\r"}
expect "Password:" {send "$password\r"}
expect "*#" {send "show run int $porttype/$port\r"}
expect "*#" {send "exit\r"}
expect "*>" {send "exit\r"}
