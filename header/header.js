function onStyleSelect() {
  const element = document.getElementById("styleSelector")
  const choice = element.options[element.options.selectedIndex];
  
  if (choice.value === "dark") {
    document.body.classList.add("dark")
    document.body.classList.remove("light")
  }

  if (choice.value === "light") {
    document.body.classList.add("light")
    document.body.classList.remove("dark")
  }
}
