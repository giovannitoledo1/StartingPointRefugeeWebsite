console.log("Hello world");

var child_info = document.getElementById("child_info");
var add_more_fields = document.getElementById("add_more_fields");
var remove_fields = document.getElementById("remove_fields");

add_more_fields.onclick = function () {
  var nameField = document.createElement("input");
  nameField.setAttribute("type", "text");
  nameField.setAttribute("class", "child_info");
  nameField.setAttribute("size", 15);
  nameField.setAttribute("placeholder", "Name of Child");
  child_info.appendChild(nameField);
  var ageField = document.createElement("input");
  ageField.setAttribute("type", "number");
  ageField.setAttribute("class", "child_info");
  ageField.setAttribute("size", 15);
  ageField.setAttribute("placeholder", "Age of Child");
  child_info.appendChild(ageField);
  var genderField = document.createElement("input");
  genderField.setAttribute("type", "text");
  genderField.setAttribute("class", "child_info");
  genderField.setAttribute("size", 15);
  genderField.setAttribute("placeholder", "Gender of Child");
  child_info.appendChild(genderField);
};

remove_fields.onclick = function () {
  var input_tags = survey_options.getElementsByTagName("input");
  if (input_tags.length > 2) {
    survey_options.removeChild(input_tags[input_tags.length - 1]);
  }
};
