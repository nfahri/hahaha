<!DOCTYPE html>
<html>
<body>


<?php
function getBrowser()
{
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $browser_name = 'Unknown';

    // Next get the name of the useragent yes seperately and for good reason
    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
        $browser_name = 'Internet Explorer';

    elseif(preg_match('/Firefox/i',$u_agent))
        $browser_name = 'Mozilla Firefox';

    elseif(preg_match('/Chrome/i',$u_agent))    
        $browser_name = 'Google Chrome';

    elseif(preg_match('/Safari/i',$u_agent))
        $browser_name = 'Apple Safari';

    elseif(preg_match('/Opera/i',$u_agent))
        $browser_name = 'Opera';

    elseif(preg_match('/Netscape/i',$u_agent))
        $browser_name = 'Netscape';
       
    return $browser_name;
}

$ua=getBrowser();
?>


</body>
</html>