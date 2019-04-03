var strength = {
  0: "Worst",
  1: "Bad",
  2: "Weak",
  3: "Good",
  4: "Strong"
};
var meter = document.getElementById('password-strength-meter');
var password1 = document.getElementById('newmdp');
var text1 = document.getElementById('password-strength-text');

password1.addEventListener('input', function() {
  var val = password1.value;
  var result = zxcvbn(val);

  // Update the password strength meter
  meter.value = result.score;
  console.log(meter.value);
  // Update the text indicator
  if (val !== "") {
    text1.innerHTML = "Strength: " + strength[result.score]; 
  } 
  else {
    text1.innerHTML = "";
  }
});