# Using Multiple Key & Key ID
Multiple Key & Key ID is now supported! To generate multiple key & key ID, please follow steps below.

## Requirement
1. A valid JSON string <br>
The JSON string format : 
`[
{
"key":"key_1",
"key_id":"key_id_1"
}, {
"key":"key_2",
"key_id":"key_id_2"
}
]
`
2. A valid Base64 string <br>
Simply encode the JSON string to Base64 string. You can encode it [here](https://www.base64encode.org/)

## How to use
1. Make a request to `api/multiple_key.php`
   - If you are using `GET` method
       - Pass the request with query string `data` as key and the Base64 string as the value
       - For example : `https://vercel-php-clearkey-hex-base64-json.vercel.app/api/multiple_key.php?data=Wwp7CiJrZXkiOiIyOGNjNTM2N2RmNjY2YzQ0YmU0MzgyZTY0YWY2NGQ1NyIsCiJrZXlfaWQiOiI2MDdiN2QyMjU2NWM0YmMzYjk1ZmY2YzMzY2U2NTQyNSIKfSwgewoia2V5IjoiM2UxOWQ1NGI3YmNkOGJiMzM2Nzc2ZmUxMzZkNDhmNTciLAoia2V5X2lkIjoiOTk3MDAzOGVmNmM1NDhlMzk3NjhmM2ExZmY2ZjUwODEiCn0KXQ==`
    
  - If you are using `POST` method
       - Pass the request with form-data `data` as key and the Base64 string as the value
       - For example : ![image](https://github.com/samleong123/vercel-php-clearkey-hex-base64-json/assets/58818070/96168a06-6b8d-49df-833f-59adf396ca0a)
   
  
