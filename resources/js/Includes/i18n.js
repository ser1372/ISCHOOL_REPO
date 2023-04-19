import {createI18n} from 'vue-i18n'

const i18n = createI18n({
    locale: 'ua', // язык по умолчанию
    fallbackLocale: 'en', // язык, который будет использоваться, если перевод не найден
    messages: {
        ua: {
           test:'Привіт',
        },
        en: {
            test:'Hello'
        }
    }
});
