function setSlider(slider, output){
  var slider = document.getElementById(slider);
  var output = document.getElementById(output);
  output.innerHTML = slider.value;
  slider.oninput = function() {
    output.innerHTML = this.value;
  }
}
setSlider("myRange1", "value1");
setSlider("myRange2", "value2");
setSlider("myRange3", "value3");
setSlider("myRange4", "value4");
setSlider("myRange5", "value5");
setSlider("myRange6", "value6");
setSlider("myRange7", "value7");