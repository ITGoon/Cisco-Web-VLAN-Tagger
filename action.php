<?php

if(isset($_POST['showrun']) &&
   $_POST['showrun'] == 'yes')
{
        $path = "temp_SHOW.sh";
        $fh = fopen($path,"a+");
        $port = $_POST['port'];
        $ip = $_POST['ip'];
        $topline = "#!/usr/bin/expect -f" . "\r\n";
        $string = "set port $port" . "\r\n";
        $string3 = "set ip $ip" . "\r\n";
        fwrite($fh,$topline);
        fwrite($fh,$string);
        fwrite($fh,$string3);
        fclose($fh);

	$final1 = fopen($path,"a+");
        $showportscript = "show.sh";
        $final2 = file_get_contents($showportscript);
        fwrite($final1, $final2);
        exec("chmod +x temp_SHOW.sh");
        exec("dos2unix temp_SHOW.sh");
        $showport = shell_exec("temp_SHOW.sh");
	$pshow1 = substr($showport, strpos($showport, "interface"));
	$pshow2 = "";
	echo "<pre>";
	echo "$pshow1";
	echo "</pre>";
        exec("rm temp_SHOW.sh");

}
else
{
	$path = "temp.sh";
	$fh = fopen($path,"a+");
	$port = $_POST['port'];
	$vlan = $_POST['vlan'];
	$ip = $_POST['ip'];
	$descrip = $_POST['descrip'];
	$topline = "#!/usr/bin/expect -f" . "\r\n";
	$string = "set port $port" . "\r\n";
	$string2 = "set vlan $vlan" . "\r\n";
	$string3 = "set ip $ip" . "\r\n";
	$string4 = "set descrip $descrip" . "\r\n";
	fwrite($fh,$topline);
	fwrite($fh,$string);
	fwrite($fh,$string2);
	fwrite($fh,$string3);
	fwrite($fh,$string4);
	fclose($fh);


	$final1 = fopen($path,"a+");
	$vlanscript = "vlan.sh";
	$final2 = file_get_contents($vlanscript);
	fwrite($final1, $final2);
	exec("chmod +x temp.sh");
	exec("dos2unix temp.sh");
	shell_exec("temp.sh");
	exec("rm temp.sh");
}

?>
