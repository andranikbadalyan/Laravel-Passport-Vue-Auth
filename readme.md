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
        <li>Copy the Client Secret in EVN variable VUE_CLIENT_ID</li>
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