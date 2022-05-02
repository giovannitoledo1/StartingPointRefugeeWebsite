var child_info = document.getElementById("children");
var add_more_fields = document.getElementById("add_more_fields");
var remove_fields = document.getElementById("remove_fields");
num_children = 1;
console.log(num_children);

add_more_fields.onclick = function () {
  num_children++;
  var nameField = document.createElement("input");
  nameField.setAttribute("type", "text");
  nameField.setAttribute("style", "padding-top: 12px;");
  nameField.setAttribute("class", "child" + num_children + "_info");
  nameField.setAttribute("name", "child" + num_children + "_info");
  nameField.setAttribute("size", 15);
  nameField.setAttribute("placeholder", "Name of " + num_children + " Child ");
  var br = document.createElement("br");
  child_info.appendChild(br);
  child_info.appendChild(nameField);
  var ageField = document.createElement("input");
  ageField.setAttribute("type", "number");
  ageField.setAttribute("class", "child" + num_children + "_info");
  ageField.setAttribute("class", "child" + num_children + "_info");
  ageField.setAttribute("size", 15);
  ageField.setAttribute("placeholder", "Age of " + num_children + " Child ");
  child_info.appendChild(ageField);
  var genderField = document.createElement("input");
  genderField.setAttribute("type", "text");
  genderField.setAttribute("class", "child" + num_children + "_info");
  genderField.setAttribute("name", "child" + num_children + "_info");
  genderField.setAttribute("size", 15);
  genderField.setAttribute(
    "placeholder",
    "Gender of " + num_children + " Child "
  );
  child_info.appendChild(genderField);

  console.log(num_children);
};

remove_fields.onclick = function () {
  var input_tags = child_info.getElementsByTagName("input");
  if (input_tags.length > 2) {
    child_info.removeChild(input_tags[input_tags.length - 1]);
  }
  num_children--;
  console.log(num_children);
};
