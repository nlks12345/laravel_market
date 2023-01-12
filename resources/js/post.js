function getProfile(){

    const xhttp = new XMLHttpRequest();
    const url='http://localhost/nft-marketplace/dax/api/testapi';

    var token = document.querySelector('meta[name="csrf-token"]').content;
	var email = document.getElementById('user_session_email').value;

	xhttp.open("POST", url, true);
	xhttp.setRequestHeader("Content-type", "application/json");
	xhttp.setRequestHeader("Accept", "application/json");
    xhttp.setRequestHeader("x-csrf-token", token); 

	xhttp.onreadystatechange = () => {
		if (xhttp.readyState === XMLHttpRequest.DONE && xhttp.status === 200) {
			console.log(xhttp.status);
			console.log(xhttp.responseText);
		  }
	};
	let data = {
		"email":email
	};
	xhttp.send('hello world');

}
    
