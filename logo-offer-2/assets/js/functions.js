document.getElementById('companyForm').addEventListener('submit', async function (e) {
  e.preventDefault();
  
  const submitButton = document.querySelector('#companyForm button[type="submit"]');
  submitButton.disabled = true;

  const companyName = document.getElementById('companyName').value
  const encodedName = encodeURIComponent(companyName);
  const id = window.btoa(companyName + Math.floor(100000 + Math.random() * 900000));

  try {
    const res = await fetch("https://form-submission-google-sheet.vercel.app/logo-offer/company-name", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ company_name: companyName, id })
    });

    if (res.ok) {
      window.location.href = `brief/slogan.php?id=${encodeURIComponent(id)}&cname=${encodedName}`;
    } else {
      throw new Error('Failed to submit form');
    }
  } catch (error) {
    console.log(error);
    submitButton.disabled = false;
  }
});
