<?php
require 'guzzle.phar';

$client = new Guzzle\Http\Client('https://loanapprovalproject-42.appspot.com/');
// $client = new Guzzle\Http\Client('http://localhost:8888/');

//Add Account
$response = $client->post('AccManager/accounts/add', 
	array(), 
	array(
		'nom'=>'Toto', 
		'prenom'=>'le prenom de toto', 
		'account'=>2000, 
		'risk'=>'high'
	)
)->send();

echo 'Ajout d\'un Account : '.$response->getStatusCode()."\r\n";

echo '----'."\r\n";

//Get Accounts
$response = $client->get('AccManager/accounts/all')->send();

echo 'Liste des Accounts : '.$response->getStatusCode()."\r\n";

echo '----'."\r\n";

// LastId
$response = $client->get('AccManager/accounts/lastId')->send();
$lastId = $response->getBody();

//Delete Account
$response = $client->get('AccManager/accounts/delete?id='.$lastId, 
	array(), 
	array()
)->send();

echo 'Suppression de l\'account d\'id = '.$lastId.' : '.$response->getStatusCode()."\r\n";

echo '----'."\r\n";

//Add Approval
$response = $client->post('AppManager/approvals/add', 
	array(),
	array(
		'nom' => 'Approval1'
	)
)->send();

echo 'Ajout d\'un approval : '.$response->getStatusCode()."\r\n";

echo '----'."\r\n";

//Get Approvals
$response = $client->get('AppManager/approvals/all')->send();

echo 'Liste des Approvals : '.$response->getStatusCode()."\r\n";

echo '----'."\r\n";

// LastId
$response = $client->get('AccManager/accounts/lastId')->send();
$lastId = $response->getBody();

//Delete Approval
$response = $client->get('AppManager/approvals/delete?id='.$lastId, 
	array(), 
	array()
)->send();

echo 'Suppression de l\'approval d\'id = '.$lastId.' : '.$response->getStatusCode()."\r\n";

echo '----'."\r\n";

//Check Account
$response = $client->get('CheckAccount/check/account?name=titi', 
	array(), 
	array()
)->send();

echo 'Check account d\'id 1 : '.$response->getBody();
echo "\r\n";
