<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="IUKHAN - Full Stack Web Developer">
  <meta property="og:description" content="Specializing in Laravel, TALL Stack, PWA, and SAAS applications.">
  <meta property="og:image" content="{{ asset('/img/logo.png') }}">
  <meta property="og:url" content="https://iukhan.codes">
  <meta name="twitter:card" content="summary_large_image">
  <meta property="og:site_name" content="IUKHAN">

  <title>IUKHAN - Full Stack Web Developer | Laravel | TALL Stack | PWA | SAAS</title>

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="IUKHAN is a Full Stack Web Developer specializing in Laravel, TALL Stack, PWA, and SAAS applications.">
  <link rel="canonical" href="https://iukhan.codes" />

  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  <link rel="icon" href="{{ asset('/img/logo.png') }}" type="image/png">
  <script src="https://apis.google.com/js/platform.js"></script>
</head>
<body class="text-gray-800 dark:text-gray-200 ">
<div class="min-h-screen bg-gray-100 dark:bg-gray-900 pt-24">
  <x-layout.navbar></x-layout.navbar>
  {{ $slot }}
  <x-layout.footer></x-layout.footer>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
