<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Salesforce api service for {{ ORGANIZATION }}</title>
    <link rel="stylesheet" href="{{ url('assets/stylesheets/normalize.css') }}">
    <link rel="stylesheet" href="{{ url('assets/stylesheets/skeleton.css') }}">
    <link rel="stylesheet" href="{{ url('assets/stylesheets/main.css') }}">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
      <section class="header">
        <h2 class="title">Salesforce api service for {{ ORGANIZATION }}</h2>
      </section>
      <div class="docs-section">
        @yield('content')
      </div>
    </div>
    </body>
</html>
