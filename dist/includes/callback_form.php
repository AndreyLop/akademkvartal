<div class="callback-form">
    <div class="contacts__form callback-form__form">
        <div class="callback-form__form-close-btn js-callback-form__form-close-btn">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                width="100%" height="100%" viewBox="0 0 357 357" style="enable-background:new 0 0 357 357;" xml:space="preserve">
                <g id="close">
                    <polygon points="357,35.7 321.3,0 178.5,142.8 35.7,0 0,35.7 142.8,178.5 0,321.3 35.7,357 178.5,214.2 321.3,357 357,321.3 
                        214.2,178.5 		"/>
                </g>
            </svg>
        </div>
        <form class="js-callback-include-form">
            <h5 class="contacts__form-heading callback-form__form-heading">Замовити дзвінок</h5>
            <div>
                <input type="text" name="name" class="input main-contacts__input js-input-name" placeholder="Ім'я:">
                <div style="display: none;" class="input-error js-input__error_name">Вкажіть ім'я</div>
            </div>
            <div>
                <input type="text" name="phone" class="input main-contacts__input js-input-phone js-masked-phone" placeholder="Телефон:">
                <div style="display: none;" class="input-error js-input__error_phone">Вкажіть телефон</div>
                <div style="display: none;" class="input-error js-input__error_phone-format">Невірний формат телефону</div>
            </div>
            <div>
                <input type="text" name="email" class="input main-contacts__input js-input-email" placeholder="Emai:">
                <div style="display: none;" class="input-error js-input__error_email">Вкажіть Email</div>
                <div style="display: none;" class="input-error js-input__error_email-format">Невірний формат email</div>
            </div>
            <button stype="submit" class="btn callback-form__form-btn">Надіслати</button>
        </form>
    </div>
</div>