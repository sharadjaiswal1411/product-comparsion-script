<h2>original package</h2>

https://github.com/jsartisan/shopkart-laravel/ <br/>
Upgarding package for laravel 5.4
<br/>
Upgrading dependencies phpunit and guzzle http
<br/>
Creating support for snapdeal

<h2>Please Don't use, Still in development</h2>
Shopkart-Laravel is a very simple package for laravel for making call to Flipkart and Amazon Search APIs.

<h2>Installing Shopkart-Laravel</h2>

<p>Install through Composer.</p>

composer require phpscots/product-comparison dev-master




<p>Next, add the service provider to app/config/app.php. :</p>

```php
# app.php

'providers' => [
    // ..
    Phpscots\ProductSearch\ProductSearchServiceProvider::class,
    
]
```

<p>Also add the facade. :</p>

```php
# app.php

'aliases' => [
    // ..
    'ProductSearch'  => Phpscots\ProductSearch\Facades\ProductSearch::class,
    
]
```

<p>Now add your flipkart and amazon affilate id credentials in services.php</p>

```php
# services.php

	// ..
	'amazon' => [
		'client_id'     	=>  'your_amazon_client_id',
		'client_secret' 	=>  'your_amazon_client_secret/',
		'tag'           	=>  'your_amazon_id_tag',
		'country'       	=>  'your_country_code'
	],
	
	'flipkart' => [
		'client_id'     	=>  'your_flipkart_client_id',
		'client_secret' 	=>  'your_flipkart_client_secret',
		'country'       	=>  '',
		'tag'           	=>  ''
	],
	'snapdeal' => [
		'client_id'     	=>  'your_snapdeal_client_id',
		'client_secret' 	=>  'your_snapdeal_client_secret',
		'country'       	=>  '',
		'tag'           	=>  ''
	],
```

<h2>Usage</h2>

<h3>Amazon API</h3>

<p>To search for product in amazon api , write : </p>

```php
	ProductSearch::with('amazon')->search('PS3','Electronics');
```

<p>This will return list of products based on Keyword 'PS3'.The important thing is you have to pass the Search Index for Amazon Search API Request which is 'Electronics' in our case. Check more about it here - <a href="http://docs.aws.amazon.com/AWSECommerceService/latest/DG/SearchIndices.html">Search Indices</a>.</p>

<p>First parameter of amazon search method is the keyword and second parameter is the Search Index.</p>

<h3>Flipkart API</h3>

<p>To search for products in flipkart api, write : </p>

```php
	ProductSearch::with('flipkart')->search('PS3',5);
```

<p>This will return list of flipkart products from their api based on keyword specified.('PS3' in our case).</p>

<p>First parameter of flipkart search method is the keyword and second parameter is the result count i.e. number or product you want from api. ( max 10 ).</p>
<h2>Please Don't use, Still in development</h2>
<a href="https://www.onlineinterviewquestions.com/">Online Interview Questions</a>
