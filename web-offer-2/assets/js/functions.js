document.getElementById('businessForm').addEventListener('submit', async function (e) {
  e.preventDefault();
  
  const submitButton = document.querySelector('#businessForm button[type="submit"]');
  submitButton.disabled = true;

  const businessName = document.getElementById('businessName').value
  const encodedName = encodeURIComponent(businessName);
  const id = window.btoa(businessName + Math.floor(100000 + Math.random() * 900000));

  try {
    const res = await fetch("https://form-submission-google-sheet.vercel.app/web-offer/business-name", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ business_name: businessName, id })
    });

    if (res.ok) {
      window.location.href = `brief/new-revamp.php?id=${encodeURIComponent(id)}&businessname=${encodedName}`;
    } else {
      throw new Error('Failed to submit form');
    }
  } catch (error) {
    console.log(error);
    submitButton.disabled = false;
  }
});
