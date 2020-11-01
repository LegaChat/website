// create new link element
var link = document.createElement('link');

// set properties of link
link.href = 'assets/css/style.css';
link.rel = 'stylesheet';

// append link element to html
document.body.appendChild(link);

	// now CSS stylesheet with id "#common-css" will be loaded and styles applied
	document.querySelector("#common-css").removeAttribute('disabled');

	// alternate
	document.querySelector("#common-css").setAttribute('disabled', false);