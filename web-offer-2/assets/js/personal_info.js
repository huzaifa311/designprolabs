function getQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
}

const id = getQueryParam("id");
const businessname = getQueryParam("businessname");
const newRevamp = getQueryParam('new-revamp');
const purpose = getQueryParam("purpose");
const requirepages = getQueryParam("requirepages");
const urgency = getQueryParam("urgency");

function buildPayloadObject() {
    const id = getQueryParam("id");
    const name = document.getElementById("name").value || "Sent when user filled up email";
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value || "Not Provided";
    return {
        id,
        name,
        email,
        phone,
    };
}

async function sendFormData(obj) {
    try {
        const res = await fetch("https://form-submission-google-sheet.vercel.app/web-offer/personal_info", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(obj)
        });

        console.log(obj);
        return res

    } catch (error) {
        alert("An error occurred. Please try again.");
        console.log(error);

    }
}

const submitBtn = document.getElementById("submitBtn");
submitBtn.addEventListener("click", async () => {
    submitBtn.disabled = true;
    try {

        const obj = buildPayloadObject();
        if (!obj.name) {
            alert("Name is required");
            return;
        }
        if (!obj.email) {
            alert("Email is required");
            return;
        }
        const res = await sendFormData(obj);
        if (res.ok) {
            window.location.href = `../brief/budget.php?id=${id}&businessname=${encodeURIComponent(businessname)}&new-revamp=${newRevamp}&purpose=${encodeURIComponent(purpose)}&requirepages=${encodeURIComponent(requirepages)}&urgency=${encodeURIComponent(urgency)}&name=${obj.name}&email=${obj.email}&phone=${obj.phone}`;
        }
        submitBtn.disabled = false;
    } catch (error) {
        alert(error)
        submitBtn.disabled = false;
    }
});

const emailInput = document.getElementById("email");
emailInput.addEventListener("input", async () => {
    const value = emailInput.value.trim();
    if (value.endsWith(".com")) {
        console.log("start");
        const obj = buildPayloadObject();
        await sendFormData(obj);
    }
});