Laravel UK KYB \& Address Sanitizer Edge Package



Sub-20ms edge proxy wrapper for UK Companies House data, address sanitization, GPS geocoding, and director KYB.





INSTALLATION



Install via Composer:



composer require jamesforsyth/laravel-uk-kyb-edge





USAGE



1\. Lookup \& Sanitize Company Data



use JamesForsyth\\UKBusiness\\Facades\\UKBusiness;



// Basic Lookup

$company = UKBusiness::lookup('00000000');



// Access address and GPS

$address = $company\['data']\['registered\_address'];

$latitude = $address\['latitude'];

$longitude = $address\['longitude'];





2\. Search \& Sanitize



$result = UKBusiness::sanitize('Monzo Bank');





3\. Fetch Director KYB Data



$officers = UKBusiness::officers('00000000');

$directors = $officers\['directors\_and\_officers']\['active'];





TESTING AND SANDBOX MODE



You can test with company number '00000000' or 'SANDBOX' for instant mock responses without hitting live registry limits.





