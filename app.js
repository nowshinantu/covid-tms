const form = document.getElementById('covid-form');
const result = document.getElementById('result');

form.addEventListener('submit', (event) => {
  event.preventDefault(); // prevent default form submission
  
  // retrieve user's answers
  const fever = document.querySelector('input[name="fever"]:checked').value;
  const cough = document.querySelector('input[name="cough"]:checked').value;
  const breathing = document.querySelector('input[name="breathing"]:checked').value;
  const contact = document.querySelector('input[name="contact"]:checked').value;
  
  // process user's answers
  let score = 0;
  
  if (fever === 'yes') {
    score += 1;
  }
  
  if (cough === 'yes') {
    score += 1;
  }
  
  if (breathing === 'yes') {
    score += 1;
  }
  
  if (contact === 'yes') {
    score += 1;
  }
  
  // display result
  if (score >= 2) {
    result.innerText = 'Based on your answers, you may have symptoms of COVID-19. Please contact a healthcare provider for further guidance.';
  } else {
    result.innerText = 'Based on your answers, you may not have symptoms of COVID-19. However, please continue to monitor your health and follow recommended precautions.';
  }
});
