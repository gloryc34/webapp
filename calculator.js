function ClearIOField() {

    document.getElementById("txt_input_output").value = "";
    
    }
    
    // function to display typed input text on button (all numbers and operators) click event
    
    function ShowInput(value) {
    
    document.getElementById("txt_input_output").value += value;
    
    }
    
    // function to do math calculation on button (=) click event
    
    function calculate() {
    
    var inputString = document.getElementById("txt_input_output").value;
    
    // Check if the input string contains Sin and calculate Sin value
    
    if (inputString.includes("Sin")) {
    
    var number = inputString.substr(4, inputString.length);
    
    document.getElementById("txt_input_output").value = Math.sin(number);
    
    }
    
    // Check if the input string contains Cos and calculate Cos value
    
    else if (inputString.includes("Cos"))
    
    {
    
    var number = inputString.substr(4, inputString.length);
    
    document.getElementById("txt_input_output").value = Math.cos(number);
    
    }
    
    // Check if the input string contains Tan and calculate Tan value
    
    else if (inputString.includes("Tan")) {
    
    var number = inputString.substr(4, inputString.length);
    
    document.getElementById("txt_input_output").value = Math.tan(number);
    
    }
    
    // All other regular math calculations
    
    else {
    
    var output = eval(inputString);
    
    document.getElementById("txt_input_output").value = output;
    
    }
    
    }