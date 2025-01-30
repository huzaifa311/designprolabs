document.addEventListener("DOMContentLoaded", () => {
  // Helper function to get query parameters from the URL
  function getQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
  }

  const id = getQueryParam("id");
  const businessname = getQueryParam("businessname");

  const nextBtn = document.getElementById("nextBtn");
  const newRevampForm = document.getElementById("new-revamp-form");

  // Get all checkboxes in the form
  const checkboxes = Array.from(newRevampForm.querySelectorAll("input[type='checkbox']"));

  // Ensure only one checkbox can be selected at a time
  checkboxes.forEach((checkbox) => {
    checkbox.addEventListener("change", () => {
      if (checkbox.checked) {
        checkboxes.forEach((cb) => {
          if (cb !== checkbox) {
            cb.checked = false; // Uncheck all other checkboxes
          }
        });
      }
      toggleButtonState();
    });
  });

  // Toggle the state of the "Next" button based on validity
  function toggleButtonState() {
    const isAnyChecked = checkboxes.some((checkbox) => checkbox.checked);
    nextBtn.disabled = !isAnyChecked; // Disable the button if no option is selected
  }

  // Validate the form
  function validateForm() {
    const isAnyChecked = checkboxes.some((checkbox) => checkbox.checked);
    if (!isAnyChecked) {
      alert("Please select an urgency option.");
      return false;
    }
    return true;
  }

  // Handle form submission
  nextBtn.addEventListener("click", (event) => {
    event.preventDefault(); // Prevent default button behavior
    if (validateForm()) {
      nextBtn.disabled = true; // Disable the button to prevent multiple clicks
      redirectToNextPage().finally(() => {
        nextBtn.disabled = false; // Re-enable the button after completion
      });
    }
  });

  // Redirect to the next page
  async function redirectToNextPage() {
    const selectedOption = checkboxes.find((checkbox) => checkbox.checked).id;

    const nextUrl = `../brief/purpose.php?id=${id}&businessname=${encodeURIComponent(businessname)}&new-revamp=${selectedOption}`;

    try {
      console.log("Redirecting to:", nextUrl);
      // Simulate async behavior for testing (e.g., API call)
      await new Promise((resolve) => setTimeout(resolve, 500));
      const res = await fetch("https://form-submission-google-sheet.vercel.app/web-offer/new-revamp", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ newRevamp: selectedOption, id })
      });
      if (res.ok) {
        window.location.href = nextUrl;
      }
    } catch (error) {
      console.error("Error during redirection:", error);
    }
  }

  // Initial button state
  toggleButtonState();
});
