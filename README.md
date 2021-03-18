# How to setup locally
_This repo relies on docker containers, please make sure you
have docker running_

#### Images being used:
* mariadb:latest
* redis:alpine

### Bring it up
1. Run: `./vendor/bin/sail up`
2. Install php dependencies: `composer install`
3. Install javascript dependencies: `npm install`
4. Compile css and js: `npm run prod`
5. Open your browser: http://localhost

_Notes: In case you don't required dependencies installed in your 
local environment, like node, php, etc, you can use the containers to run our commands._

# Call APIs
The API endpoints in this repo are protected by sanctum. To request them, follow these steps:
1. Register a user account if you haven't yet: 
[Register](/register)
2. Click on your profile icon and then click API Tokens.
3. Here you can create your API tokens by giving it a name
and specify permissions for it.