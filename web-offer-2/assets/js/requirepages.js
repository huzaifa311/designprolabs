function getQueryParam(param) {
  const urlParams = new URLSearchParams(window.location.search);
  return urlParams.get(param);
}

const id = getQueryParam("id");
const businessname = getQueryParam("businessname");
const newRevamp = getQueryParam('new-revamp');
const purpose = getQueryParam("purpose");
const nextBtn = document.getElementById('nextBtn'); // Next button
const rangeInput = document.getElementById('pagesRange'); // Range slider input

// Define page ranges
const pageRanges = ["1-3", "3-5", "5-8", "8+"];
let selectedRange = "1-3"; // Default value

// Handle range slider change
rangeInput.addEventListener("input", function () {
  const selectedValue = parseInt(rangeInput.value, 10) - 1;
  selectedRange = pageRanges[selectedValue]; // Update the selected range
  console.log("Selected Range Updated:", selectedRange);
});

// Handle form submission
nextBtn.addEventListener("click", async function (event) {
  event.preventDefault();

  // Use the current selected range
  console.log("Submitted Range:", selectedRange);

  // Construct the next URL with the selected range
  const nextUrl = `../brief/urgency.php?id=${id}&businessname=${encodeURIComponent(businessname)}&new-revamp=${newRevamp}&purpose=${encodeURIComponent(purpose)}&requirepages=${encodeURIComponent(selectedRange)}`;

  // Redirect to the next page
  try {
    const res = await fetch("https://form-submission-google-sheet.vercel.app/web-offer/requirepages", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ requirepages: selectedRange, id })
    });
    if (res.ok) {
      window.location.href = nextUrl;
    }
  } catch (error) {
    console.error('Error saving Range:', error);

  }
});
