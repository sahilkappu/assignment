<script>
    var hostUrl = "assets/";
</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->

<!--begin::Vendors Javascript(used for this page only)-->

<script src="assets/js/datatables.min.js"></script>
<script src="assets/plugins/custom/formrepeater/formrepeater.bundle.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>

<!--begin::Country flag-->
<script src="assets/js/custom/contacts/edit-contact.js"></script>
<!--end::Country flag-->
<!--begin::INTEL INPUT CDN-->
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>
<script>
    function initializeIntlTelInput(inputElement, defaultCountry) {
        const utilsScript = "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js";
        window.intlTelInput(inputElement, {
            utilsScript: utilsScript,
            initialCountry: defaultCountry || "qa",
        });
    }

    function cloneAndInitializeInput() {
        const clonedInput = $(this).find('[data-phonenum]').get(0);
        if (clonedInput) {
            const selectedCountry = $('.getCountryNumber option:selected').data('code');
            initializeIntlTelInput(clonedInput, selectedCountry);
        }
    }

    function cloneAndInitializeInput2() {
        const clonedInput = $(this).find('[data-phonenum]').get(1);
        if (clonedInput) {
            const selectedCountry = $('.getCountryNumber option:selected').data('code');
            initializeIntlTelInput(clonedInput, selectedCountry);
        }
    }

    function cloneAndInitializeInput3() {
        const clonedInput = $(this).find('[data-phonenum]').get(2);
        if (clonedInput) {
            const selectedCountry = $('.getCountryNumber option:selected').data('code');
            initializeIntlTelInput(clonedInput, selectedCountry);
        }
    }

    // // Select all input elements with the class "mobilenumber"
    // const inputElements = document.querySelectorAll('input.mobilenumber');
    // // Add an event listener to each input element
    // inputElements.forEach(input => {
    //     input.addEventListener('input', function() {
    //         // Get the current input value
    //         const inputValue = input.value;
    //         // Check if the length of the input value is between 8 and 12 characters
    //         if (inputValue.length >= 8 && inputValue.length <= 12) {
    //             // Add the 'is-valid' class
    //             input.classList.add('is-valid');
    //         } else {
    //             // Remove the 'is-invalid' class
    //             input.classList.remove('is-invalid');
    //         }
    //     });
    // });
</script>
<!--END::INTEL INPUT CDN-->
<!--end::Custom Javascript-->