# Convert Clearkey in Hex to Base64 and output JSON automatically

## Before you use this
1. This tool is written in PHP
2. You can run it locally by copying all files in ```/web``` to your web server's root directory. </br> Ensure PHP is installed and configured properly with your web server before deploying them on your web server.
3. You can deploy this tool to Heroku. </br> Refer to the steps below for deploying this tool to Heroku.
4. You can also visit [https://clearkey-base64-2-hex-json.herokuapp.com/](https://clearkey-base64-2-hex-json.herokuapp.com/) directly if you wanted to use this tool on the spot. </br> Deployed by me on Heroku.
5. I shall not be liable for any problem that will produce losses or inconveniences incurred as a result of such changes or differences.
6. Please star this repo if you feel that this repo is helping you. Thanks!

## How to deploy to Heroku?
[![Deploy to Heroku](https://www.herokucdn.com/deploy/button.png)](https://dashboard.heroku.com/new?template=https://github.com/samleong123/heroku-clearkey-hex-base64-json/)

## How to use? 
Visit deployed website : [https://clearkey-base64-2-hex-json.herokuapp.com/](https://clearkey-base64-2-hex-json.herokuapp.com/) 
1. Key in the Keys and Key ID in HEX without space and click generate
![image](https://user-images.githubusercontent.com/58818070/136691265-8fe727a3-c533-4ad5-98e7-d775454f8a04.png)
2. Click "Generate Now" and copy the URL after you saw some JSON output containing : ```{ "keys":[ { "kty":"oct", "k":"", "kid":"" } ], "type":"temporary" }```
3. The URL you copied is your Clearkey License URL. You can use it on your IPTV Player that supports Clearkey. 

## Issue?
Create an issue if you encountered a problem that was never stated in this README.md


