	var num1 = '';
	var num2 = '';
	var Inputoperator = '';
	var result = '';
	
	function input(number){
		var input = number;
		
		if (Inputoperator === '') {
			num1 += number;
			document.getElementById('display').innerHTML = num1;
		}else {
			num2 += number;
			document.getElementById('display').innerHTML = num2;
		}
		if(input == '11'){
			num1 = '';
			num2 = '';
			operator = '';
			result = '';
			document.getElementById('display').innerHTML = '';
		}
	}
	
	function operators(operator){
		Inputoperator = operator;
		document.getElementById('display').innerHTML = Inputoperator;
	}
	
	function calculate(){
		if(num1 !== '' && num2 !== '' && Inputoperator !== '') {
			if(Inputoperator == '+'){
				result = parseFloat(num1) + parseFloat(num2);
			}
			else if(Inputoperator == '-'){
				result = parseFloat(num1) - parseFloat(num2);
			}
			else if(Inputoperator == '*'){
				result = parseFloat(num1) * parseFloat(num2);
			}
			else if(Inputoperator == '/'){
				result = parseFloat(num1) / parseFloat(num2);
			}
			document.getElementById('display').innerHTML = result;
		}
		else{
			document.getElementById('display').innerHTML = 'somthing went wrong';
		}
	}