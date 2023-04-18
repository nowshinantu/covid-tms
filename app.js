const form = document.getElementById('covid-form');
const result = document.getElementById('result');

form.addEventListener('submit', (event) => {
  event.preventDefault(); // prevent default form submission
  
  // retrieve user's answers
  const fever = document.querySelector('input[name="fever"]:checked').value;
  const cough = document.querySelector('input[name="cough"]:checked').value;
  const pain = document.querySelector('input[name="pain"]:checked').value;
  const sore = document.querySelector('input[name="sore"]:checked').value;
  const diarrhea = document.querySelector('input[name="diarrhea"]:checked').value;
  const smell = document.querySelector('input[name="smell"]:checked').value;
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

  if (pain === 'yes') {
    score += 1;
  }

  if (sore === 'yes') {
    score += 1;
  }

  if (diarrhea === 'yes') {
    score += 1;
  }

  if (smell === 'yes') {
    score += 1;
  }
  
  if (breathing === 'yes') {
    score += 1;
  }
  
  if (contact === 'yes') {
    score += 1;
  }
  // display result
  if (score >= 4) {
    result.innerText = 'Result: You have some several symptoms of COVID-19. You should get tested for corona.';
  } else {
    result.innerText = 'Result: You have no symptom of COVID-19. So, Please continue to monitor your health and follow recommended precautions.';
  }
});