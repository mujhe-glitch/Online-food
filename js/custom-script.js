/*================================================================================
	Item Name: Somaiya Vidyavihar - Captive Portal
	Version: 3.1
	Author: Arctech Ventures
	Author URL: http://www.arctechventures.com
================================================================================ */

// Shared top-right action for all signed-in customer and admin pages.
document.addEventListener('DOMContentLoaded', function () {
  var header = document.querySelector('#header .nav-wrapper');

  if (!header || document.querySelector('.top-logout')) {
    return;
  }

  var logout = document.createElement('a');
  logout.className = 'top-logout';
  logout.href = 'routers/logout.php';
  logout.innerHTML = '<span>Logout</span><span aria-hidden="true">→</span>';
  header.appendChild(logout);
});
