# Setup locally
_This repo relies on docker containers, please make sure you
have docker running_

### Depends on
* PHP >7.3
* composer
* nodejs

### Images being used:
* mariadb:latest
* redis:alpine

### Bring it up
1. Run: `./vendor/bin/sail up`
2. Install php dependencies: `composer install`
3. Install javascript dependencies: `npm install`
4. Compile css and js: `npm run prod`
5. Open your browser: http://localhost

_Notes: In case you don't have required dependencies installed in your local environment, like node, php, etc, you can use the containers to run those commands from step 2._

# Call APIs
The API endpoints in this repo are protected by sanctum. To request them, follow these steps:
1. Register a user account if you don't have one yet: 
[Register](/register)
2. Click on your profile icon and then click on API Tokens.
3. Here you can create your API tokens by giving it a name
and specifying permissions for it.