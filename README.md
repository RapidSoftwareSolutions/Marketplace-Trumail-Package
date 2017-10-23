[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Trumail/functions?utm_source=RapidAPIGitHub_TrumailCustomFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Trumail Package
Prevent bounced emails and low-quality users with FREE professional grade email verification.Trumail is a fast and accurate email address verification API written entirely in Go. It was built with the intention of providing software engineers and businesses with a simple and easy to use solution to bounced emails.
* Domain: [trumail.io](https://trumail.io/)

 ## Custom datatypes:
  |Datatype|Description|Example
  |--------|-----------|----------
  |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
  |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
  |List|Simple array|```["123", "sample"]```
  |Select|String with predefined values|```sample```
  |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```

## Trumail.verifyEmail
The speed of each verification is dependent on the speed of the mail server.Slow servers will always result in slow verifications.

| Field| Type  | Description
|------|-------|----------
| email| String| Email for verification.

