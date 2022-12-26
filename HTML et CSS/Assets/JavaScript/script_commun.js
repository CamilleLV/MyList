NodeList.prototype.forEach = Array.prototype.forEach;

var linkItems = document.querySelectorAll('#listeDeroulant .list-opener').forEach(function(el) {
	el.addEventListener('click', function(event) {
  	this.classList.toggle('active');
    event.preventDefault();
  });
});