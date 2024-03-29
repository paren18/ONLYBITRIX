<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if ($arResult["isFormErrors"] == "Y"):?>
    <?= $arResult["FORM_ERRORS_TEXT"]; ?>
<?php endif; ?>

<?= $arResult["FORM_NOTE"] ?>

<?php if ($arResult["isFormNote"] != "Y"): ?>


    <?php
    if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

    if ($arResult["isFormErrors"] == "Y"):?>
        <?= $arResult["FORM_ERRORS_TEXT"]; ?>
    <?php endif; ?>

    <?= $arResult["FORM_NOTE"] ?>
    <?php if ($arResult["isFormNote"] != "Y"): ?>
        <div class="contact-form">
        <div class="contact-form__head">
        <div class="contact-form__head-title"><?= $arResult["FORM_TITLE"] ?></div>
        <div class="contact-form__head-text"><?= $arResult["FORM_DESCRIPTION"] ?>
        </div>
    <?php endif; ?>
    </div>
    <form class="contact-form__form" action="<?= $arResult["FORM_ACTION"] ?>" method="POST">
        <div class="contact-form__form-inputs">
            <div class="input contact-form__input">
                <label class="input__label" for="<?=$arResult["QUESTIONS"]['NAME']['CAPTION'] ?>">
                    <div class="input__label-text"><?=$arResult["QUESTIONS"]['NAME']['CAPTION']?> <?=($arResult["QUESTIONS"]['NAME']['REQUIRED'] === 'Y' ? '*' : '') ?></div>
                    <input class="input__input" type="text" id="medicine_name" name="form_text_12" value=""
                           required="">
                    <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
                </label>
            </div>
            <div class="input contact-form__input">
                <label class="input__label" for="<?= $arResult["QUESTIONS"]['COMPANY']['CAPTION'] ?>">
                    <div class="input__label-text"><?= $arResult["QUESTIONS"]['COMPANY']['CAPTION'] ?><?= ($arResult["QUESTIONS"]['COMPANY']['REQUIRED'] === 'Y' ? '*' : '') ?></div>
                    <input class="input__input" type="text" id="medicine_company" name="form_text_13" value=""
                           required="">
                    <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
                </label>
            </div>
            <div class="input contact-form__input">
                <label class="input__label" for="<?= $arResult["QUESTIONS"]['EMAIL']['CAPTION'] ?>">
                    <div class="input__label-text"><?= $arResult["QUESTIONS"]['EMAIL']['CAPTION'] ?><?= ($arResult["QUESTIONS"]['EMAIL']['REQUIRED'] === 'Y' ? '*' : '') ?></div>
                    <input class="input__input" type="email" id="medicine_email" name="form_email_14" value=""
                           required="">
                    <div class="input__notification">Неверный формат почты</div>
                </label>
            </div>
            <div class="input contact-form__input">
                <label class="input__label" for="<?= $arResult["QUESTIONS"]['PHONE']['CAPTION'] ?>">
                    <div class="input__label-text"><?= $arResult["QUESTIONS"]['PHONE']['CAPTION'] ?><?= ($arResult["QUESTIONS"]['PHONE']['REQUIRED'] === 'Y' ? '*' : '') ?></div>
                    <input class="input__input" type="tel" id="medicine_phone"
                           data-inputmask="'mask': '+79999999999', 'clearIncomplete': 'true'" maxlength="12"
                           x-autocompletetype="phone-full" name="form_text_17" value="" required="">
                </label>
            </div>
        </div>
        <div class="contact-form__form-message">
            <div class="input">
                <label class="input__label" for="<?= $arResult["QUESTIONS"]['MESSAGE']['CAPTION'] ?>">
                    <div class="input__label-text"><?= $arResult["QUESTIONS"]['MESSAGE']['CAPTION']?><?= ($arResult["QUESTIONS"]['MESSAGE']['REQUIRED'] === 'Y' ? '*' : '') ?></div>
                    <textarea class="input__input" type="text" id="medicine_message" name="form_textarea_16"
                              value=""></textarea>
                    <div class="input__notification"></div>
                </label>
            </div>
        </div>
        <div class="contact-form__bottom">
            <div class="contact-form__bottom-policy">Нажимая &laquo;Отправить&raquo;, Вы&nbsp;подтверждаете, что
                ознакомлены, полностью согласны и&nbsp;принимаете условия &laquo;Согласия на&nbsp;обработку персональных
                данных&raquo;.
            </div>
            <button class="form-button contact-form__bottom-button" type="submit" name="web_form_submit"
                    value="<?= htmlspecialcharsbx(trim($arResult["arForm"]["BUTTON"]) == '' ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]); ?>"
                    data-success="Отправлено" data-error="Ошибка отправки">
                <div class="form-button__title">Оставить заявку</div>
            </button>
        </div>
        <?= $arResult["FORM_HEADER"] ?>
        <?= $arResult["CAPTCHA_HTML_CODE"] ?>
    </form>
    <?= $arResult["FORM_FOOTER"] ?>
    </div>

<?php endif; ?>
