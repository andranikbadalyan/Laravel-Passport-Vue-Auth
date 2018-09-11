<p align="center"><img src="http://andranikbadalyan.com/laravelpassportvueauth/img/logo.svg"></p>

<h3>Getting Started:</h3>
<ol>
  <li>Composer Install: <strong>composer install</strong></li>
  <li>NPM Install: <strong>npm install</strong></li>
  <li>
    Database: <strong>php artisan migrate --seed</strong>
    <ul>
        <li>username: andranikvbadalyan@gmail.com</li>
        <li>password: secret</li>
    </ul>
  </li>
  <li>
    Install passport clients: <strong>php artisan passport:install</strong>
    <ul>
        <li>
        Copy the Client Secret from <strong>Client ID: 2</strong> to your EVN variable VUE_CLIENT_ID<br>
        <img src="http://andranikbadalyan.com/laravelpassportvueauth/img/screenshot3.jpg">
        </li>
    </ul>
  </li>
  <li>run <strong>php artisan config:clear</strong></li>
  <li>
  Use Auth middleware for protected routes <strong>auth:api</strong>
    <ul>
        <li>test with GET: <strong>/api/user</strong> (already exists in routes/api.php)</li>
    </ul>
  </li>
</ol>

<h2>Screenshots:</h2>
<p align="center"><img src="http://andranikbadalyan.com/laravelpassportvueauth/img/screenshot1.jpg"></p>
<p align="center"><img src="http://andranikbadalyan.com/laravelpassportvueauth/img/screenshot2.jpg"></p>
<p align="center"><img src="http://andranikbadalyan.com/laravelpassportvueauth/img/screenshot4.jpg"></p>