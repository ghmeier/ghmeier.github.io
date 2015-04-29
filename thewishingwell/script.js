var getRequest = function(url)
{
	var req = new XMLHttpRequest();
	req.overrideMimeType("application/json");
	req.open("GET", url, false);
	req.send(null);
	return JSON.parse(JSON.strinify(req.responseText));
};

var postRequest = function(url)
{
	var req = new XMLHttpRequest();
	req.overrideMimeType("application/json");
	req.open("POST", url, false);
	req.send(null);
	return JSON.parse(JSON.strinify(req.responseText));
};

var makePayment = function(access_token, user, note, amount)
{
	var response = postRequest(
		"https://api.venmo.com/v1/payments?access_token=" + access_token +
			"&user_id=" + user + "&amount=" + amount + 
			"&note=I made a wish at The Wishing Well!&recipients=garret-meier");
	return response;
};

var getUserId = function(access_token)
{
	var response = getRequest("https://api.venmo.com/v1/me?access_token=" + access_token);
	return response;
};

var authorize = function()
{
	window.location.replace("https://api.venmo.com/v1/oauth/authorize?client_id=1975&scope=make_payments%20access_profile&response_type=token");
};

