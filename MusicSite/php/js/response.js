/*eslint-env es6*/
/*eslint-env browser*/

const toggleMenu = document.querySelector(
 '.menu-btn');
var flyoutMenu = document.querySelector(
 '.flyout-menu');
let isOpen = false;

toggleMenu.addEventListener('click', () => {
 if (!isOpen) {
  toggleMenu.classList.add('open');
  flyoutMenu.classList.add('show');
  isOpen = true;
 } else {
  toggleMenu.classList.remove('open');
  flyoutMenu.classList.remove('show');
  isOpen = false;
 }
});

/*function storeEmail() {
 var emailEntry = document.getElementById(
  "new-email");
 var message = document.getElementById("message");
 if (emailEntry.value === "") {
  //Set message with red text
  message.innerHTML =
   "Please enter a valid email.";
  message.style.color = "red";
 } else {
  //Set success message with green text
  message.innerHTML =
   "Success! Your email has been added!";
  message.style.color = "green";
 }
 
 
}*/
