const listElement = document.getElementById("opcoes");
const inputElement = document.getElementById("selectedOptions");
const selectedOptions = [];

listElement.addEventListener("click", function(event) {
  const target = event.target;
  if (target.nodeName === "LI") {
    const selectedValue = target.getAttribute("data-value");
    if (selectedOptions.includes(selectedValue)) {
      selectedOptions.splice(selectedOptions.indexOf(selectedValue), 1);
    } else {
      selectedOptions.push(selectedValue);
    }
    inputElement.value = selectedOptions.join("/");
  }
});