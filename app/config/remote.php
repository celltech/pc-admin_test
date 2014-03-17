<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Default Remote Connection Name
	|--------------------------------------------------------------------------
	|
	| Here you may specify the default connection that will be used for SSH
	| operations. This name should correspond to a connection name below
	| in the server list. Each connection will be manually accessible.
	|
	*/

	'default' => 'production',

	/*
	|--------------------------------------------------------------------------
	| Remote Server Connections
	|--------------------------------------------------------------------------
	|
	| These are the servers that will be accessible via the SSH task runner
	| facilities of Laravel. This feature radically simplifies executing
	| tasks on your servers, such as deploying out these applications.
	|
	*/

	'connections' => array(

		'production' => array(
			'host'      => 'attpcc.com',
			'username'  => 'attpccco',
			'password'  => 'W1reless2!',
			'key'       => '-----BEGIN DSA PRIVATE KEY-----
Proc-Type: 4,ENCRYPTED
DEK-Info: DES-EDE3-CBC,B7E1516D1FE7C569

zygiwgHl/Jqyuz8bfufg9PvuA+ffflSF5G5BNceqjE+OR6iK4sup6ZcUYfsWnxkV
vPDjOth+tYNYBrol/KQ435cYCktHKxrLBfBvfjr+lcI99/IMHMBd+8rqZ6nDeicU
9m1/UZU+nyTLpWQadkdIvBwde/AF6dh3+b1mfZ8xCK3F54CS1811w1sD6JF66lSJ
nleAidfy0epVQR7ciJGA5FuoEnfuh6VnKkv9ABJr/huQQk3a7q2TdrK5Wdyomvmv
NudLnf8ECJqBDOL/vB4AbYs2KyCmQzsz96Nh85tG0fshvor5BIRkhlILsjnN+3jO
5rnRA4CzZNiF+LiXmesUJDRVUag40gbhtXDXQ/ux2ajFaOdYu3nQ/JIj3v0Avat3
iIXN6JMjggDjs2QlOFMVn/xfE4OJGopy01WSBeJ30GpAWt2CnoSaLbcSX1rbQPQb
k9sQo1tdLI7zkTZtVkXHVwDhiZUIsXjKWKgibKqe2J3B9ByWsJG8i3GGKvVWyc6G
NyoWuO1qHNoCRLr5/QdmBX5PpYgGeyvTXr8dCi18iOW850kZQcdIban9zsE/Os6H
/U6UNtW5kQhpQRxbFKdFdg==
-----END DSA PRIVATE KEY-----',
			'keyphrase' => '',
			'root'      => '/var/www',
		),

	),

	/*
	|--------------------------------------------------------------------------
	| Remote Server Groups
	|--------------------------------------------------------------------------
	|
	| Here you may list connections under a single group name, which allows
	| you to easily access all of the servers at once using a short name
	| that is extremely easy to remember, such as "web" or "database".
	|
	*/

	'groups' => array(

		'web' => array('production')

	),

);