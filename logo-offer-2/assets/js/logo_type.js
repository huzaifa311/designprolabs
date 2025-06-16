document.addEventListener("DOMContentLoaded", () => {
    const stepBoxes = document.querySelectorAll(".step-box");
    const skipBtn = document.getElementById("skipBtn");
    const skipText = document.getElementById("skipText");

    const selectedCategories = new Set();

    // Handle step box selection
    stepBoxes.forEach((box) => {
        box.addEventListener("click", () => {
            const category = box.querySelector("p").textContent.trim();
            const stepInner = box.querySelector(".step-inner");

            // Toggle selection
            if (selectedCategories.has(category)) {
                selectedCategories.delete(category);
                stepInner.classList.remove("selected");
            } else {
                selectedCategories.add(category);
                stepInner.classList.add("selected");
            }

            // Change button text dynamically
            skipText.textContent = selectedCategories.size > 0 ? "Next" : "Skip";
        });
    });

    // Handle button click
    skipBtn.addEventListener("click", async () => {
        skipBtn.disabled = true;
        const selectedArray = Array.from(selectedCategories);
        const logoTypeValue = selectedArray.length > 0 ? selectedArray.join(",") : "Other";

        // Get query parameters
        const cname = getQueryParam("cname") || "defaultCName";
        const slogan = getQueryParam("slogan") || "defaultSlogan";
        const industry = getQueryParam("industry") || "defaultIndustry";
        const colorPicker = getQueryParam("color_picker") || "defaultColorPicker";
        const id = getQueryParam("id")

        const nextUrl = 
        `personal_info.php?id=${id}&cname=${encodeURIComponent(cname)}&slogan=${encodeURIComponent(slogan)}&industry=${encodeURIComponent(industry)}&color_picker=${encodeURIComponent(colorPicker)}&logo_type=${encodeURIComponent(logoTypeValue)}`;
        
        try {
            const res = await fetch("https://form-submission-google-sheet.vercel.app/logo-offer/logo-type", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ logo_type: logoTypeValue, id })
            });

            if (res.ok) {
                window.location.href = nextUrl;
            } else {
                console.error("Failed to save logo type.");
                skipBtn.disabled = false;
            }
        } catch (error) {
            console.log("Error:", error);
            skipBtn.disabled = false;
        }
    });
});

// Helper function to get query parameters
function getQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
}
