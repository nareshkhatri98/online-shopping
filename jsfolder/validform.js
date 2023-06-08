
 const Regform=document.getElementById('Regform')
 const fullname=document.getElementById('name')
 const address=document.getElementById('address')
 
 const email=document.getElementById('email')
 const password=document.getElementById('password')
 const cpassword=document.getElementById('cpassword')
  
 Regform.addEventListener('submit' ,e=>{
  e.preventDefault();

  validateInputs();
 });

  const setError= (element, message) =>{
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('erroe');

    errorDisplay.innerText = message;
    inputControl.classList.add('error')
    inputControl.classList.remove('sucess');
  }
  const setSuccess = element =>{
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('erroe');

    errorDisplay.innerText = message;
    inputControl.classList.add('sucess')
    inputControl.classList.remove('error');

  }

 const validateInputs = () =>{
  const fullnameValue = fullname.value.trim();
  const addressValue = address.value.trim();
  const emailValue = email.value.trim();
  const passwordValue = password.value.trim();
  const cpasswordValue = cpassword.value.trim();

  if(fullnameValue === ''){
    setError(fullname, 'fullname is required')
  }  
  else{
    setSuccess(fullname);
  }

  if(addressValue === ''){
    setError(address, 'address is required')
  } else{
  setSuccess(address);
 }

  if(emailValue === ''){
    setError(email, 'email is required');

  }
  else{
    setSuccess(email)
  }
  if(passwordValue === '')
  {
    setError(password, 'password is required')
  }
  else{
    setSuccess(password);
  }
  if(cpasswordValue === '')
  {
    setError(cpassword, 'cpassword is required');
  }
}

