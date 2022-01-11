<footer class="site-footer clearfix">
    <div class="footer-social">
      <ul class="footer-social-links">
        @foreach ($user->socials as $social)
          <li>
            	<a href="{{$social->link}}" target="_blank">{{$social->name}}</a>
          </li>
        @endforeach
      </ul>
    </div>
        
    <div class="footer-copyrights">
      <p>© {{date('Y')}} All rights reserved.</p>
    </div>
</footer>