function get_root_url() {
	const root_folder = "urbanrg"
	let root_href = window.location.href;
    console.log("root_href", root_href);
	let root_url = root_href.split(root_folder)[0] // http://localhost:8080/ with backslash
	root_url = root_url.concat(root_folder, "/")
    console.log("root_url", root_url); // http://localhost:8080/urbanrg with backslash
	return root_url

/* 	let root_url = window.location.href;
    console.log("root_href", root_url); */
	// let root_origin = window.location.origin;
    // console.log("root_url", root_origin);
	// let root_pathname = window.location.pathname;
    // console.log("root_pathname", root_pathname);
	// let root_hostname = document.location.hostname
    // console.log("root_hostname", root_hostname);

}

function change_navbar_paths() {
	
	let e = document.getElementById('introduction');
	console.log("e", e);
	
	e = document.getElementById('navbar-menu-index');
	console.log("e", e);
/* 	console.log("e.class", e.class);
	console.log("e.src", e.src);
	console.log("e.onmouseover", e.onmouseover);
	console.log("e.onmouseout", e.onmouseout); */



	// let d = document.createElement('div');
	// d.innerHTML = e.innerHTML;
	// e.parentNode.replaceChild(d, e);

  // var z, i, elmnt, file, xhttp;
  // z = document.getElementsByTagName("*");
  // for (i = 0; i < z.length; i++) {
	// elmnt = z[i];
	// file = elmnt.getAttribute("w3-include-html");
	// if (file) {
	  // xhttp = new XMLHttpRequest();
	  // xhttp.onreadystatechange = function() {
		// if (this.readyState == 4) {
		  // if (this.status == 200) {elmnt.innerHTML = this.responseText;}
		  // if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
		  // elmnt.removeAttribute("w3-include-html");
		  // includeHTML();
		// }
	  // }      
	  // xhttp.open("GET", file, true);
	  // xhttp.send();
	  // return;
	// }
  // }
}
;
