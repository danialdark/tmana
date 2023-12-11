var phoneNumber = document.getElementById("phoneNumber")
var alertP = document.getElementById("alertP")
var alertO = document.getElementById("alertO")
var phoneNumberBox = document.getElementById("phoneNumberBox")
let numCheckRegex = /^09[0-9]{9}$/
let otpCodeRegex = /^\d{4}$/

let sendingButton = document.getElementById("sendingButton")
let otpPhoneNumber = document.getElementById("otpPhoneNumber")
let numberFrom = document.getElementById("numberFrom")
let otpForm = document.getElementById("otpForm")
let otpPassword = document.getElementById("otpPassword")


function checkPhoneNumber() {
    var value = phoneNumber.value

    if (value == "") {
        alertP.classList.add("d-none")
        alertP.classList.remove("text-success")
        alertP.classList.remove("text-danger")
        phoneNumberBox.classList.remove("border-danger")
        phoneNumberBox.classList.remove("border-success")
        phoneNumberBox.classList.remove("mb-0")
        sendingButton.setAttribute("disabled", "")

        return true;
    }

    if (numCheckRegex.test(value)) {
        phoneNumberBox.classList.remove("border-danger")
        phoneNumberBox.classList.add("border-success")
        phoneNumber.classList.remove("text-danger")
        phoneNumber.classList.add("text-success")
        alertP.classList.add("d-none")
        phoneNumberBox.classList.remove("mb-0")
        sendingButton.removeAttribute("disabled")

    } else {
        phoneNumberBox.classList.add("mb-0")
        phoneNumberBox.classList.remove("border-success")
        phoneNumberBox.classList.add("border-danger")
        phoneNumber.classList.remove("text-success")
        phoneNumber.classList.add("text-danger")
        alertP.classList.remove("d-none")
        sendingButton.setAttribute("disabled", "")

    }


}

let checkOtp = () => {


    if (otpPassword.value == "") {
        otpSubmitter.setAttribute("disabled", '');
        alertO.classList.add("d-none")
        return true;
    }

    if (otpCodeRegex.test(otpPassword.value)) {
        otpSubmitter.removeAttribute("disabled");
        alertO.classList.add("d-none")

        otpPassword.classList.add("text-success")
        otpPassword.classList.add("border-success")

        otpPassword.classList.remove("text-danger")
        otpPassword.classList.remove("border-danger")
    } else {
        otpSubmitter.setAttribute("disabled", '');
        alertO.classList.remove("d-none")

        otpPassword.classList.remove("text-success")
        otpPassword.classList.remove("border-success")

        otpPassword.classList.add("text-danger")
        otpPassword.classList.add("border-danger")

    }
}


let changeFrom = (phoneNumber) => {

    numberFrom.classList.add("d-none")
    otpForm.classList.remove("d-none")
    otpPhoneNumber.setAttribute("value", phoneNumber)
    otpPhoneNumber.innerHTML = phoneNumber

}

let otpSender = () => {
    var _token = $("input[name='_token']").val();
    sendingButton.setAttribute("disabled", "")
    sendingButton.innerHTML = "در حال ورود"
    $.ajax({
        url: 'auth/sendotp',
        type: 'POST',
        data: {
            _token: _token,
            phoneNumber: phoneNumber.value,
        },
        success: function (response) {

            if (response.data == "done") {
                sendingButton.innerHTML = "با موفقیت ارسال شد!"
                changeFrom(phoneNumber.value);
            } else {
                sendingButton.innerHTML = response.data
                setTimeout(() => {
                    sendingButton.innerHTML = "تلاش مجدد!"
                    sendingButton.removeAttribute("disabled")
                }, 5000);
            }
        },
        error: function (xhr, status, error) {

            if (xhr.status == 429) {
                sendingButton.innerHTML = "بیش از حد مجاز"
            }
        }
    });
}

function changeButton() {
    otpSubmitter.innerHTML = "در حال ورود به پنل";
    setTimeout(() => {
        otpSubmitter.innerHTML = "ورود به پنل";
    }, 6000);
}

phoneNumber.addEventListener("input", checkPhoneNumber);
otpPassword.addEventListener("input", checkOtp);
phoneNumber.addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
        e.preventDefault();
        setTimeout(() => {
            sendingButton.click()
        }, 200);
    }
});
otpSubmitter.addEventListener("click", changeButton)

sendingButton.addEventListener("click", otpSender);
