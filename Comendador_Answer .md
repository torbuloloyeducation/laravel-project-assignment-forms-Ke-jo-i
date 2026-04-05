1. What is the difference between GET and POST?
GET is used to request data from the server, and the information is visible in the website's URL. POST is used to send data (like form inputs) to the server; the data is hidden inside the request body, making it more secure and private.

2. Why do we use @csrf in forms?
We use @csrf as a security "handshake." It generates a unique token that proves the form submission is coming from your actual website and not from a hacker or a malicious third-party site trying to fake a request.

3. What is session used for in this activity?
The session acts as a temporary memory for the website. Since we are not using a permanent database yet, the session allows the app to "remember" the list of emails you typed even when you refresh the page or move to a different section.

4. What happens if session is cleared?
If the session is cleared, the website "forgets" everything. All the emails you added will disappear, and the list will return to being empty because the data was only stored in temporary memory, not in a permanent database.