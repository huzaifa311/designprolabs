function getQueryParam(param) {
  const urlParams = new URLSearchParams(window.location.search);
  return urlParams.get(param);
}

const businessname = getQueryParam('businessname');
const newRevamp = getQueryParam('new-revamp');
const id = getQueryParam('id');
const skipBtn = document.getElementById('skipBtn'); // Skip button
const skipText = document.getElementById('skipText'); // Text inside the button
const purposeForm = document.getElementById('purposeForm'); // Form element
const otherCheckbox = document.getElementById('other'); // "Other" checkbox
const otherTextInput = document.getElementById('otherText'); // "Other" text input

otherTextInput.disabled = true;

// Monitor checkboxes to update button text and handle "Other" input focus
purposeForm.addEventListener('change', function () {
  const checkboxes = purposeForm.querySelectorAll('input[type="checkbox"]');
  const isAnyChecked = Array.from(checkboxes).some((checkbox) => checkbox.checked);
  skipText.textContent = isAnyChecked ? 'Next' : 'Skip';

  // Handle "Other" checkbox behavior
  if (otherCheckbox.checked) {
    otherTextInput.disabled = false; // Enable the "Other" input field
    otherTextInput.required = true; // Make it required
    setTimeout(() => otherTextInput.focus(), 100); // Add slight delay for smoother focus
  } else {
    otherTextInput.disabled = true; // Disable the "Other" input field
    otherTextInput.required = false; // Remove the required attribute
    otherTextInput.value = ''; // Clear the input value if unchecked
  }
});

// Handle form submission (Enter key or button click)
purposeForm.addEventListener('submit', function (event) {
  event.preventDefault();
  submitForm();
});

skipBtn.addEventListener('click', function () {
  skipBtn.disabled = true;
  submitForm().finally(() => {
    skipBtn.disabled = false;
  });
});

async function submitForm() {
  const checkboxes = purposeForm.querySelectorAll('input[type="checkbox"]');
  const purposes = [];

  // Collect selected purposes
  checkboxes.forEach((checkbox) => {
    if (checkbox.checked) {
      if (checkbox.id === 'other' && otherTextInput.value.trim()) {
        purposes.push(otherTextInput.value.trim());
      } else if (checkbox.id !== 'other') {
        purposes.push(checkbox.nextElementSibling.textContent.trim().toLowerCase()); // Convert to lowercase for URL
      }
    }
  });

  // If no purposes are selected, use "N/A"
  const purpose = purposes.length > 0 ? purposes.join('+') : 'N/A';

  const nextUrl = `../brief/requirepages.php?id=${id}&businessname=${encodeURIComponent(businessname)}&new-revamp=${newRevamp}&purpose=${encodeURIComponent(purpose)}`;

  try {
    console.log('Purpose saved successfully:', purpose);
    const res = await fetch("https://form-submission-google-sheet.vercel.app/web-offer/purpose", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ purpose, id })
    });
    if (res.ok) {
      window.location.href = nextUrl;
    }
  } catch (error) {
    console.error('Error saving Purpose:', error);
  }
}