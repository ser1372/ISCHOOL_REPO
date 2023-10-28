<script setup>
import {useI18n} from 'vue-i18n';
import {onMounted} from 'vue';

const {locale} = useI18n();

const switchLang = (lang) => {
	if (lang === 'ua') {
		window.location.href = '/';
		localStorage.setItem('selectedLanguage', lang);
		return;
	}

	const pathSegments = window.location.pathname.split('/');
	pathSegments[1] = lang;
	const newPath = pathSegments.join('/');

	localStorage.setItem('selectedLanguage', lang);
	window.location.href = newPath;
};

onMounted(() => {
	const urlLanguage = window.location.pathname.split('/')[1];
	const availableLanguages = ['en', 'ua'];

	if (availableLanguages.includes(urlLanguage)) {
		locale.value = urlLanguage;
	} else {
		const storedLanguage = localStorage.getItem('selectedLanguage');
		if (storedLanguage && availableLanguages.includes(storedLanguage)) {
			locale.value = storedLanguage;
		} else {
			locale.value = 'ua';
		}
	}
});
</script>

<template>
	<div>
		<ul class="flex gap-4 flex-wrap">
			<li :class="{ 'text-purple-500': locale === 'ua' }" class="cursor-pointer" @click="switchLang('ua')">UA</li>
			<li :class="{ 'text-purple-500': locale === 'en' }" class="cursor-pointer" @click="switchLang('en')">EN</li>
		</ul>
	</div>
</template>
