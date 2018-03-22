# chenchen
this is a project


include "vendor/autoload.php";

use phpcurltest\Api;
 
$api=new Api('https://www.phpcomposer.com/');
var_dump($api->getData(''));

