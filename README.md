
[![Latest Version on Packagist](https://img.shields.io/packagist/v/jamesforsyth/laravel-uk-kyb-edge.svg?style=flat-square)](https://packagist.org/packages/jamesforsyth/laravel-uk-kyb-edge)
[![Total Downloads](https://img.shields.io/packagist/dt/jamesforsyth/laravel-uk-kyb-edge.svg?style=flat-square)](https://packagist.org/packages/jamesforsyth/laravel-uk-kyb-edge)
[![License](https://img.shields.io/packagist/l/jamesforsyth/laravel-uk-kyb-edge.svg?style=flat-square)](LICENSE.md)

# Laravel UK KYB & Address Sanitizer Edge Package

Sub-20ms wrapper for UK Companies House data, address sanitization, GPS geocoding, director KYB, and automated financial vision extraction.

## Installation

Install via Composer:

```bash
composer require jamesforsyth/laravel-uk-kyb-edge

```

## Usage

### 1. Lookup & Sanitize Company Data

```php
use JamesForsyth\UKBusiness\Facades\UKBusiness;

// Basic Lookup
$company = UKBusiness::lookup('00000000');

// Access address and GPS
$address =$company['data']['registered_address'];
$latitude =$address['latitude'];
$longitude =$address['longitude'];

```

### 2. Search & Sanitize

```php
$result = UKBusiness::sanitize('Monzo Bank');

```

### 3. Fetch Director KYB Data

```php
$officers = UKBusiness::officers('00000000');

```

### 4. Automated Financial Extraction

```php
// Pass filing document ID to extract unstructured balance sheets into JSON
$financials = UKBusiness::financials('mixpA6C5NJo7r0SZ2ypIiLCLM4XtZMnHZKMcHestIKI');

```

### 5. Stream Filing Document PDF

```php
// High-speed stream of registry filing PDFs with CORS enabled
$pdfStream = UKBusiness::document('mixpA6C5NJo7r0SZ2ypIiLCLM4XtZMnHZKMcHestIKI');

```

```

```
