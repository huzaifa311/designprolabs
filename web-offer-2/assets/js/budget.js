function getQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
}

const id = getQueryParam("id");
const businessname = getQueryParam("businessname");
const newRevamp = getQueryParam('new-revamp');
const purpose = getQueryParam("purpose");
const user_name = getQueryParam('name');
const email = getQueryParam('phone');
const phone = getQueryParam('phone');
const requirepages = getQueryParam("requirepages");
const urgency = getQueryParam("urgency");

const nextBtn = document.getElementById('nextBtn');
const rangeInput = document.getElementById('pagesRange');

const pageRanges = ["$249-$549", "$549-$999", "$999-$1549", "$1549+"];
let selectedRange = "$249-$549";

rangeInput.addEventListener("input", function () {
    const selectedValue = parseInt(rangeInput.value, 10) - 1;
    selectedRange = pageRanges[selectedValue];
    console.log("Selected Range Updated:", selectedRange);
});

nextBtn.addEventListener("click", async function (event) {
    event.preventDefault();

    // Disable the button to prevent multiple clicks
    nextBtn.disabled = true;
    nextBtn.style.opacity = 0.5; // Optional: Change the button's appearance to show it's disabled

    console.log("Submitted Range:", selectedRange);

    const nextUrl = `../formsubmitted.php`;

    try {
        const res = await fetch("https://form-submission-google-sheet.vercel.app/web-offer", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({
                budget: selectedRange,
                id,
                name: user_name,
                email,
                phone,
                businessname,
                newRevamp,
                purpose,
                requirepages,
                urgency,
                submitted_at: new Date().toLocaleString(),
            })
        });
        
        if (res.ok) {
            window.location.href = nextUrl;
        }
    } catch (error) {
        console.error('Error saving Range:', error);
    } finally {
        // Re-enable the button after the function ends (whether successful or not)
        nextBtn.disabled = false;
        nextBtn.style.opacity = 1; // Optional: Restore the button's appearance
    }
});

