# Convert Key ID & Key in Hex to Base64 for ClearKeys DRM in JSON form

## Notice
Heroku version has deprecated because Heroku decided to cancel their free plan. 
Hence , a Vercel version of this project was created and thanks to [Vercel Community](https://github.com/vercel-community/php) which has successfully runned PHP on Vercel.


## Before you use this
1. This tool is written in PHP
2. You can run it locally by copying all files in to your web server's root directory. </br> Ensure PHP is installed and configured properly with your web server before deploying them on your web server.
3. You can deploy this tool to Vercel. </br> Refer to the steps below for deploying this tool to Vercel.
4. You can also visit [https://vercel-php-clearkey-hex-base64-json.vercel.app/](https://vercel-php-clearkey-hex-base64-json.vercel.app/) directly if you wanted to use this tool on the spot. </br> Deployed by me on Vercel.
5. I shall not be liable for any problem that will produce losses or inconveniences incurred as a result of such changes or differences.
6. Please star this repo if you feel that this repo is helping you. Thanks!

## How to deploy to Vercel?
[![Deploy to Vercel](https://vercel.com/button)](https://vercel.com/new/import?s=https%3A%2F%2Fgithub.com%2Fsamleong123%2Fvercel-php-clearkey-hex-base64-json&hasTrialAvailable=1&showOptionalTeamCreation=false&project-name=vercel-php-clearkey-hex-base64-json&framework=other&totalProjects=1)

**Reminder** :
You are likely to get failed attempt for the 1st time when deploying it , do not panic and follow steps below :
1. Go to the project settings on Vercel
2. Scroll down to the ```Root Directory```
3. Untick ```Include source files outside of the Root Directory in the Build Step.```
4. Save
5. Edit anything in the readme.md and save it to trigger Vercel redeploy again.

## How to use? 
Visit deployed website : [https://vercel-php-clearkey-hex-base64-json.vercel.app/](https://vercel-php-clearkey-hex-base64-json.vercel.app/) 
1. Key in the Keys and Key ID in HEX without space and click generate
![image](https://user-images.githubusercontent.com/58818070/136691265-8fe727a3-c533-4ad5-98e7-d775454f8a04.png)
2. Click "Generate Now" and copy the URL after you saw some JSON output containing : ```{ "keys":[ { "kty":"oct", "k":"", "kid":"" } ], "type":"temporary" }```
3. The URL you copied is your Clearkey License URL. You can use it on your IPTV Player that supports Clearkey. 

## Issue?
Create an issue if you encountered a problem that was never stated in this README.md


