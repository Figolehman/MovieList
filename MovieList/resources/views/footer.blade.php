<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <title>@yield('title')</title>
</head>
<footer>
    <div class="footer">
      <h3><b>Movie</b>List</a></h3>
      <p><b>Movie</b>List</a> is a Website that contains list of movie</p>
      <div class="socialMediaIMG">
          <a href="https://www.twitter.com/"><img src="{{ url('img/twitter.png') }}" alt=""></a>
          <a href="https://www.instagram.com/"><img src="{{ url('img/instagram.png') }}" alt=""></a>
          <a href="https://www.facebook.com/"><img src="{{ url('img/facebook.png') }}" alt=""></a>
          <a href="https://www.redditinc.com/"><img src="{{ url('img/reddit.png') }}" alt=""></a>
          <a href="https://www.youtube.com/"><img src="{{ url('img/youtube.png') }}" alt=""></a>
      </div>
      <div class="movieList">
          <a href="https://help.netflix.com/legal/privacy">Privacy Policy</a>
          <b> | </b>
          <a href="https://help.netflix.com/legal/termsofuse">Terms of Service</a>
          <b> | </b>
          <a href="https://help.netflix.com/en/contactus">Contact Us</a>
          <b> | </b>
          <a href="https://about.netflix.com/en">About Us</a>
      </div>
      <p>Copyright © 2021 <b>Movie</b>List</a> All Rights Reserved</p>
    </div>
</footer>
</html>
