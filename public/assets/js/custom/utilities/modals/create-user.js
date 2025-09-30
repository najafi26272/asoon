"use strict";
var KTModalNewUser = (function () {
    var t, e, n, a, o, i;
    return {
        init: function () {
            (i = document.querySelector("#kt_modal_new_user")) &&
            ((o = new bootstrap.Modal(i)),
                (a = document.querySelector("#kt_modal_new_user_form")),
                (t = document.getElementById("kt_modal_new_user_submit")),
                (e = document.getElementById("kt_modal_new_user_cancel")),


                (n = FormValidation.formValidation(a, {
                    fields: {
                        first_name: { validators: { notEmpty: { message: "نام اجباری" } } },
                        last_name: { validators: { notEmpty: { message: "نام خانوادگی اجباری" } } },
                        user_name: { validators: { notEmpty: { message: "نام کاربری اجباری" } } },
                        phone_number: { validators: { notEmpty: { message: "شماره تماس اجباری" } } },
                        national_code: { validators: { notEmpty: { message: "کدملی اجباری" } } },
                    },
                    plugins: { trigger: new FormValidation.plugins.Trigger(), bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) },
                })),

                e.addEventListener("click", function (t) {
                    t.preventDefault(),
                        Swal.fire({
                            text: "آیا مطمئن هستید که می خواهید لغو کنید",
                            icon: "warning",
                            showCancelButton: !0,
                            buttonsStyling: !1,
                            confirmButtonText: "بله ، آن را لغو کنید!",
                            cancelButtonText: "خیر",
                            customClass: { confirmButton: "btn btn-primary", cancelButton: "btn btn-active-light" },
                        }).then(function (t) {
                            t.value
                                ? (a.reset(), o.hide())
                                : "cancel" === t.dismiss && Swal.fire({ text: "فرم شما لغو نشده است !.", icon: "error", buttonsStyling: !1, confirmButtonText: "باشه فهمیدم!", customClass: { confirmButton: "btn btn-primary" } });
                        });
                }));
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTModalNewUser.init();
});
